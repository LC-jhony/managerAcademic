<div x-data="{
    show: @entangle($attributes->wire('model'))
}" x-show="show" x-cloak x-on:keydown.escape.window="show = false"
    class="fixed inset-0 overflow-y-auto px-4 py-6 md:py-24 sm:px-0 z-40">
    <div x-show="show" class="fixed inset-0 transform" x-on:click="show = false">
        <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
    </div>
    <div class="bg-white rounded-lg overflow-hidden transform sm:w-full sm:mx-auto max-w-lg">
        <div class="px-6 py-4">
            {{ $slot }}
            {{-- <div class="text-lg font-medium text-gray-900 dark:text-gray-600">
                {{ $title }}
            </div>

            <div class="mt-4 text-sm text-gray-600 dark:text-gray-500">
                {{ $content }}
            </div>
        </div>

        <div class="flex flex-row justify-end px-6 py-4 bg-gray-100 dark:bg-gray-800 text-right">
            {{ $footer }}
        </div> --}}
        </div>
        <!-- Do what you can, with what you have, where you are. - Theodore Roosevelt -->
    </div>
