<div x-data="{
    show: @entangle($attributes->wire('model'))
}" x-show="show" x-cloak
    x-on:keydown.escape.window="show = false"class="fixed inset-0 overflow-hidden z-40">

    <div x-show="show" class="fixed inset-0 transition-opacity" x-transition:enter="ease-out duration-300"
        x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200"
        x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" x-on:click="show = false">
        <div class="absolute inset-0 bg-gray-500 dark:bg-gray-900 opacity-75"></div>
    </div>

    <div class="fixed inset-y-0 right-0 flex max-w-full pl-10 pointer-events-none">
        <div x-show="show" x-cloak class="w-screen max-w-md pointer-events-auto"
            x-transition:enter="transform transition ease-in-out duration-300"
            x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0"
            x-transition:leave="transform transition ease-in-out duration-300" x-transition:leave-start="translate-x-0"
            x-transition:leave-end="translate-x-full">
            <div class="h-full flex flex-col bg-white dark:bg-gray-800 shadow-xl overflow-y-auto rounded-l-lg">
                <div class="flex h-full flex-col  bg-white py-6 shadow-xl">
                    <div class="px-4 sm:px-6">
                        <h2 class="text-base font-semibold text-gray-900">
                            {{ $title }}
                        </h2>
                    </div>
                    <div class="relative mt-6 flex-1 px-4 sm:px-6">
                        {{ $slot }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
