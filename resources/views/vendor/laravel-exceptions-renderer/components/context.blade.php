@props([
    'context' => [],
    'title' => 'Context Information',
    'icon' => null,
    'collapsible' => true
])

@php
$contextItems = $context;
$hasItems = !empty($contextItems);
@endphp

<div class="bg-white dark:bg-neutral-800 border border-neutral-200 dark:border-neutral-700 rounded-xl shadow-xs">
    <div class="flex items-center justify-between p-4 border-b border-neutral-200 dark:border-neutral-700">
        <div class="flex items-center gap-3">
            @if($icon)
                <div class="flex items-center justify-center w-8 h-8 rounded-lg bg-neutral-100 dark:bg-neutral-700">
                    {{ $icon }}
                </div>
            @endif

            <div>
                <h3 class="text-base font-semibold text-neutral-900 dark:text-white">
                    {{ $title }}
                </h3>
                @if($hasItems)
                    <p class="text-sm text-neutral-600 dark:text-neutral-400">
                        {{ count($contextItems) }} context item{{ count($contextItems) !== 1 ? 's' : '' }}
                    </p>
                @endif
            </div>
        </div>

        @if($collapsible && $hasItems)
            <button
                x-data="{ expanded: false }"
                @click="expanded = !expanded"
                class="flex items-center justify-center w-8 h-8 rounded-md hover:bg-neutral-100 dark:hover:bg-neutral-700 transition-colors"
            >
                <x-laravel-exceptions-renderer::icons.chevrons-down-up
                    class="w-4 h-4 text-neutral-600 dark:text-neutral-400"
                    x-show="!expanded"
                />
                <x-laravel-exceptions-renderer::icons.chevrons-up-down
                    class="w-4 h-4 text-neutral-600 dark:text-neutral-400"
                    x-show="expanded"
                />
            </button>
        @endif
    </div>

    @if($hasItems)
        <div class="p-4" x-show="expanded || !{{ $collapsible ? 'true' : 'false' }}" x-collapse>
            <div class="space-y-4">
                @foreach($contextItems as $key => $value)
                    <div class="flex flex-col gap-2">
                        <div class="flex items-center gap-2">
                            <x-laravel-exceptions-renderer::badge type="default" variant="soft">
                                <x-laravel-exceptions-renderer::icons.info class="w-2.5 h-2.5" />
                                {{ $key }}
                            </x-laravel-exceptions-renderer::badge>
                        </div>

                        <div class="bg-neutral-50 dark:bg-neutral-900 border border-neutral-200 dark:border-neutral-700 rounded-lg p-3">
                            @if(is_array($value) || is_object($value))
                                <x-laravel-exceptions-renderer::syntax-highlight
                                    :code="json_encode($value, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES)"
                                    grammar="json"
                                />
                            @elseif(is_bool($value))
                                <x-laravel-exceptions-renderer::badge
                                    :type="$value ? 'success' : 'error'"
                                    variant="soft"
                                >
                                    {{ $value ? 'true' : 'false' }}
                                </x-laravel-exceptions-renderer::badge>
                            @elseif(is_string($value) && strlen($value) > 100)
                                <div class="text-sm text-neutral-700 dark:text-neutral-300 font-mono break-all">
                                    {{ $value }}
                                </div>
                            @else
                                <div class="text-sm text-neutral-700 dark:text-neutral-300">
                                    {{ $value }}
                                </div>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @else
        <div class="p-8 text-center">
            <x-laravel-exceptions-renderer::icons.info class="w-12 h-12 mx-auto mb-3 text-neutral-400" />
            <p class="text-neutral-500 dark:text-neutral-400">No context information available</p>
        </div>
    @endif
</div>
