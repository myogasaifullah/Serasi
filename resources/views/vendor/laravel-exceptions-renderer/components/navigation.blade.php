@props(['title' => 'Exception Details', 'showBackButton' => true])

<nav class="flex items-center justify-between p-4 bg-white dark:bg-neutral-800 border-b border-neutral-200 dark:border-neutral-700">
    <div class="flex items-center gap-4">
        @if($showBackButton)
            <button
                onclick="window.history.back()"
                class="flex items-center gap-2 px-3 py-2 text-sm font-medium text-neutral-600 dark:text-neutral-300 hover:text-neutral-900 dark:hover:text-white hover:bg-neutral-100 dark:hover:bg-neutral-700 rounded-md transition-colors"
            >
                <x-laravel-exceptions-renderer::icons.arrow-left class="w-4 h-4" />
                Back
            </button>
        @endif

        <div class="h-6 w-px bg-neutral-300 dark:bg-neutral-600"></div>

        <h1 class="text-lg font-semibold text-neutral-900 dark:text-white">
            {{ $title }}
        </h1>
    </div>

    <div class="flex items-center gap-2">
        <x-laravel-exceptions-renderer::badge type="primary" variant="soft">
            <x-laravel-exceptions-renderer::icons.bug class="w-2.5 h-2.5" />
            Exception
        </x-laravel-exceptions-renderer::badge>
    </div>
</nav>
