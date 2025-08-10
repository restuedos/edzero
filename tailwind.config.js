import preset from './vendor/filament/support/tailwind.config.preset';

export default {
  presets: [preset],
  darkMode: 'class',
  content: [
    './app/Filament/**/*.php',
    './resources/views/filament/**/*.blade.php',
    './resources/views/**/*.blade.php',
    './vendor/filament/**/*.blade.php',
  ],
}

