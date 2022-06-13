<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';
import Drawer from '@/Components/Drawer.vue';
import LoginDropdown from '@/Components/LoginDropdown.vue';
import RegisterDropdown from '@/Components/RegisterDropdown.vue';

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
});
</script>

<template>

    <Head title="Welcome" />
    
    <Drawer>

        <!-- Navbar -->
        <div class="navbar bg-base-0 z-50 fixed top-0 right-0 px-6 py-4 ">
            <div class="flex-1">
                <a class="btn btn-ghost normal-case text-xl text-base-100">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-36 h-auto" viewBox="0 0 243 70">
                        <g id="Layer_2" data-name="Layer 2" transform="translate(0 10.641)">
                            <g id="svg8" transform="translate(0 -10.642)">
                            <text id="EDZERO." transform="translate(0 57)" class="fill-white" font-size="62" font-family="FranklinGothic-Demi, Franklin Gothic" font-weight="800"><tspan x="0" y="0">EDZERO</tspan><tspan y="0" fill="red">.</tspan></text>
                            </g>
                        </g>
                    </svg>
                </a>
            </div>
            <div v-if="canLogin" class="hidden sm:flex flex-none">
                <Link v-if="$page.props.user" :href="route('dashboard')" class="mx-4 text-lg text-base-100">
                    Dashboard
                </Link>

                <template v-else>
                    <div class="dropdown dropdown-end">
                        <label tabindex="0" class="mx-4 text-lg text-base-100">Login</label>
                        <div tabindex="0" class="dropdown-content card card-compact w-64 max-w-sm shadow-2xl bg-base-100">
                            <LoginDropdown />
                        </div>
                    </div>

                    <Link v-if="canRegister" :href="route('register')" class="mx-4 btn btn-neutral text-lg font-normal normal-case">
                        Register
                    </Link>
                </template>
            </div>
            <div class="flex-none">
                <label for="my-drawer-4" class="drawer-button btn btn-square btn-ghost text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-10 h-10 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
                </label>
            </div>
        </div>

        <!-- Home -->
        <div id="home" class="hero justify-start min-h-screen bg-fixed" style="background-image: url(./img/background.png);">
            <div class="hero-content ml-5 sm:ml-16 mt-28 text-left text-white">
                <div class="max-w-md">
                    <h1 class="mb-5 text-8xl font-bold">Hi!</h1>
                    <p class="text-lg sm:text-5xl">
                        I'm Restu Edo Setiaji,
                    </p>
                    <p class="sm:mb-10 text-lg sm:text-5xl">
                        Web Developer
                    </p>
                    <div class="divider before:bg-primary after:bg-primary"></div>
                    <button class="hover:bg-secondary btn btn-outline  btn-secondary rounded-none text-lg normal-case tracking-widest">Discover Now</button>
                </div>
            </div>
        </div>

        <!-- About Me -->
        <div id="aboutme" class="hero min-h-screen bg-neutral text-neutral-content">
            <div class="hero-content max-w-screen-lg flex-col lg:flex-row">
                <img src="img/profile.png" class="max-w-lg" />
                <div class="text-left">
                    <h1 class="text-5xl font-bold">Hello, I'm <br><span class="text-primary">Restu Edo Setiaji</span></h1>
                    <p class="pt-5">Iam a Junior Web Developer with 2 years experience in Web Development. My current language is PHP, but I really like Javascript. I have understanding in the concept of OOP, RESTful API concept, Database Analysis, and also the use of Git for project management</p>
                    <p class="pt-3 pb-4">Fresh-graduated student from SMKN 1 Cimahi. Powerful, skillful, and always want to learn something new. Known as problem solver based on my team's opinion.</p>
                    <button class="hover:bg-secondary btn btn-outline  btn-secondary rounded-full text-lg normal-case tracking-widest" href="">Download My CV</button>
                </div>
            </div>
        </div>
        
        <!-- Services -->
        <div id="services" class="hero min-h-screen grid bg-neutral text-neutral-content">
            <div class="hero-content max-w-screen grid gap-x-8 gap-y-4 grid-cols-3">
                <div class="text-center lg:text-left basis-1/3">
                    <h1 class="text-5xl font-bold">Login now!</h1>
                    <p class="py-6">Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem quasi. In deleniti eaque aut repudiandae et a id nisi.</p>
                </div>
                <div class="text-center lg:text-left basis-1/3">
                    <h1 class="text-5xl font-bold">Login now!</h1>
                    <p class="py-6">Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem quasi. In deleniti eaque aut repudiandae et a id nisi.</p>
                </div>
                <div class="text-center lg:text-left basis-1/3">
                    <h1 class="text-5xl font-bold">Login now!</h1>
                    <p class="py-6">Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem quasi. In deleniti eaque aut repudiandae et a id nisi.</p>
                </div>
                <div class="text-center lg:text-left basis-1/3">
                    <h1 class="text-5xl font-bold">Login now!</h1>
                    <p class="py-6">Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem quasi. In deleniti eaque aut repudiandae et a id nisi.</p>
                </div>
                <div class="text-center lg:text-left basis-1/3">
                    <h1 class="text-5xl font-bold">Login now!</h1>
                    <p class="py-6">Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem quasi. In deleniti eaque aut repudiandae et a id nisi.</p>
                </div>
                <div class="text-center lg:text-left basis-1/3">
                    <h1 class="text-5xl font-bold">Login now!</h1>
                    <p class="py-6">Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem quasi. In deleniti eaque aut repudiandae et a id nisi.</p>
                </div>
            </div>
        </div>
    </Drawer>

</template>

<style scoped>
    .bg-gray-100 {
        background-color: #f7fafc;
        background-color: rgba(247, 250, 252, var(--tw-bg-opacity));
    }

    .border-gray-200 {
        border-color: #edf2f7;
        border-color: rgba(237, 242, 247, var(--tw-border-opacity));
    }

    .text-gray-400 {
        color: #cbd5e0;
        color: rgba(203, 213, 224, var(--tw-text-opacity));
    }

    .text-gray-500 {
        color: #a0aec0;
        color: rgba(160, 174, 192, var(--tw-text-opacity));
    }

    .text-gray-600 {
        color: #718096;
        color: rgba(113, 128, 150, var(--tw-text-opacity));
    }

    .text-gray-700 {
        color: #4a5568;
        color: rgba(74, 85, 104, var(--tw-text-opacity));
    }

    .text-gray-900 {
        color: #1a202c;
        color: rgba(26, 32, 44, var(--tw-text-opacity));
    }

    @media (prefers-color-scheme: dark) {
        .dark\:bg-gray-800 {
            background-color: #2d3748;
            background-color: rgba(45, 55, 72, var(--tw-bg-opacity));
        }

        .dark\:bg-gray-900 {
            background-color: #1a202c;
            background-color: rgba(26, 32, 44, var(--tw-bg-opacity));
        }

        .dark\:border-gray-700 {
            border-color: #4a5568;
            border-color: rgba(74, 85, 104, var(--tw-border-opacity));
        }

        .dark\:text-white {
            color: #fff;
            color: rgba(255, 255, 255, var(--tw-text-opacity));
        }

        .dark\:text-gray-400 {
            color: #cbd5e0;
            color: rgba(203, 213, 224, var(--tw-text-opacity));
        }
    }
</style>
