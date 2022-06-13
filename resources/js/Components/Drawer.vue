<template>

    <div class="drawer drawer-end">
        <input id="my-drawer-4" type="checkbox" class="drawer-toggle">
        <div class="drawer-content">
            <div class="relative flex flex-col items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
                <slot />
            </div>
        </div> 
        <div class="overflow-hidden drawer-side">
            <label for="my-drawer-4" class="drawer-overlay"></label>
            <div class="menu p-4 w-80 text-lg text-base-100 bg-neutral">
                <div>
                    <label for="my-drawer-4" class="drawer-button btn btn-square btn-secondary btn-ghost btn-lg mb-16">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M6 18L18 6M6 6l12 12" /></svg>
                    </label>
                </div>
                <ul class="overflow-y-auto max-h-96">
                    <!-- Sidebar content here -->
                    <li><a href="#home">Home</a></li>
                    <li><a href="#aboutme">About Me</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a>Portfolios</a></li>
                    <li><a>Testimonials</a></li>
                    <li><a>Journals</a></li>
                    <li><a>Contacts</a></li>
                </ul>
                <div class="divider mt-5 before:bg-primary after:bg-primary"></div>
                <li>Social Media</li>
            </div>
        </div>
    </div>

</template>