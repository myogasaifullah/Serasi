@props(['exception', 'showEditor' => true])

<div class="flex flex-col gap-4">
    <!-- Exception Trace Section -->
    <div class="bg-neutral-50 dark:bg-white/1 border border-neutral-200 dark:border-neutral-800 rounded-xl p-2.5 shadow-xs">
        <div class="flex items-center gap-2.5 p-2 mb-3">
            <div class="bg-white dark:bg-neutral-800 border border-neutral-200 dark:border-white/5 rounded-md w-6 h-6 flex items-center justify-center p-1">
                <x-laravel-exceptions-renderer::icons.alert class="w-2.5 h-2.5 text-blue-500 dark:text-emerald-500" />
            </div>
            <h3 class="text-base font-semibold text-neutral-900 dark:text-white">Exception Trace</h3>
        </div>

        <div class="flex flex-col gap-1.5">
            @foreach ($exception->frameGroups() as $group)
                @if ($group['is_vendor'])
                    <x-laravel-exceptions-renderer::vendor-frames :frames="$group['frames']" />
                @else
                    @foreach ($group['frames'] as $frame)
                        <x-laravel-exceptions-renderer::frame :$frame />
                    @endforeach
                @endif
            @endforeach
        </div>
    </div>

    <!-- Code Editor Section -->
    @if($showEditor && $exception->frameGroups())
        <div class="bg-white dark:bg-neutral-800 border border-neutral-200 dark:border-neutral-700 rounded-xl shadow-xs">
            <div class="flex items-center justify-between p-4 border-b border-neutral-200 dark:border-neutral-700">
                <div class="flex items-center gap-3">
                    <div class="bg-neutral-100 dark:bg-neutral-700 rounded-md w-6 h-6 flex items-center justify-center p-1">
                        <x-laravel-exceptions-renderer::icons.code class="w-3 h-3 text-neutral-600 dark:text-neutral-300" />
                    </div>
                    <div>
                        <h3 class="text-base font-semibold text-neutral-900 dark:text-white">Code Editor</h3>
                        <p class="text-sm text-neutral-600 dark:text-neutral-400">View and edit the source code</p>
                    </div>
                </div>

                <div class="flex items-center gap-2">
                    <x-laravel-exceptions-renderer::badge type="info" variant="soft">
                        <x-laravel-exceptions-renderer::icons.edit class="w-2.5 h-2.5" />
                        Interactive
                    </x-laravel-exceptions-renderer::badge>
                </div>
            </div>

            <div class="p-4">
                @php
                    $firstFrame = collect($exception->frameGroups())->first();
                    $firstUserFrame = collect($firstFrame['frames'] ?? [])->first();
                @endphp

                @if($firstUserFrame)
                    <div class="bg-neutral-900 rounded-lg overflow-hidden">
                        <div class="flex items-center justify-between p-3 bg-neutral-800 border-b border-neutral-700">
                            <div class="flex items-center gap-2 text-sm text-neutral-300">
                                <x-laravel-exceptions-renderer::icons.file class="w-4 h-4" />
                                <span class="font-mono">{{ $firstUserFrame->file() }}</span>
                                <span class="text-neutral-500">Line {{ $firstUserFrame->line() }}</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <button class="px-2 py-1 text-xs bg-neutral-700 hover:bg-neutral-600 text-neutral-300 rounded transition-colors">
                                    Copy
                                </button>
                            </div>
                        </div>

                        <div class="p-4 text-sm">
                            <div class="font-mono text-neutral-300 leading-relaxed">
                                @if($firstUserFrame->snippet())
                                    @foreach($firstUserFrame->snippet() as $lineNumber => $line)
                                        <div class="flex {{ $lineNumber == $firstUserFrame->line() ? 'bg-rose-900/30 border-l-2 border-rose-500' : '' }}">
                                            <span class="w-12 text-right pr-4 text-neutral-500 select-none">
                                                {{ $lineNumber }}
                                            </span>
                                            <span class="flex-1">{{ htmlspecialchars($line) }}</span>
                                        </div>
                                    @endforeach
                                @else
                                    <div class="text-neutral-500 italic">No code snippet available</div>
                                @endif
                            </div>
                        </div>
                    </div>
                @else
                    <div class="text-center py-8 text-neutral-500 dark:text-neutral-400">
                        <x-laravel-exceptions-renderer::icons.code class="w-12 h-12 mx-auto mb-3 opacity-50" />
                        <p>No code context available for editing</p>
                    </div>
                @endif
            </div>
        </div>
    @endif
</div>
