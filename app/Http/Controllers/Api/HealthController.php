<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\JsonResponse;

class HealthController extends Controller
{
    public function health(): JsonResponse
    {
        $checks = [
            'app'    => fn() => true,
            'db'     => fn() => DB::select('select 1 as ok') !== null,
            'cache'  => fn() => Cache::put('health_check', 'ok', 5) === null || Cache::get('health_check') === 'ok',
            'queue'  => fn() => true,
            'redis'  => fn() => rescue(fn() => app('redis')->connection()->ping(), false),
            'minio' => fn() => rescue(function () {
                Storage::disk('minio')->allFiles();
                return true;
            }, false),
        ];

        $results = [];
        $ok = true;

        foreach ($checks as $name => $probe) {
            $passed = rescue($probe, false);
            $results[$name] = $passed ? 'ok' : 'fail';
            $ok = $ok && $passed;
        }

        $versionInfo = $this->loadVersionInfo();

        return response()->json([
            'status'  => $ok ? 'ok' : 'fail',
            'checks'  => $results,
            'time'    => now()->toIso8601String(),
            'version' => $versionInfo['version'],
            'commit'  => $versionInfo['commit'],
            'builtAt' => $versionInfo['build_time'],
            'env'     => app()->environment(),
        ], $ok ? 200 : 503);
    }

    public function version(): JsonResponse
    {
        $versionInfo = $this->loadVersionInfo();

        return response()->json([
            'app'     => config('app.name'),
            'version' => $versionInfo['version'],
            'commit'  => $versionInfo['commit'],
            'builtAt' => $versionInfo['build_time'],
            'env'     => app()->environment(),
        ]);
    }

    private function loadVersionInfo(): array
    {
        $default = [
            'version'    => config('build.version', config('app.version', '0.0.0')),
            'commit'     => config('build.commit', 'unknown'),
            'build_time' => config('build.time', now()->toIso8601String()),
        ];

        $path = storage_path('app/private/version.json');
        if (file_exists($path)) {
            $json = json_decode(file_get_contents($path), true);
            if (is_array($json)) {
                return array_merge($default, array_intersect_key($json, $default));
            }
        }

        return $default;
    }
}
