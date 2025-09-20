@props([
    'title' => null,
    'subtitle' => null,
    'icon' => null,
    'variant' => 'default',
    'padding' => 'normal'
])

@php
$baseClasses = 'bg-white dark:bg-neutral-800 border border-neutral-200 dark:border-neutral-700 rounded-xl shadow-xs';

$variants = [
    'default' => 'border-neutral-200 dark:border-neutral-700',
    'error' => 'border-rose-200 dark:border-rose-800 bg-rose-50 dark:bg-rose-950/20',
    'warning' => 'border-amber-200 dark:border-amber-800 bg-amber-50 dark:bg-amber-950/20',
    'info' => 'border-blue-200 dark:border-blue-800 bg-blue-50 dark:bg-blue-950/20',
    'success' => 'border-emerald-200 dark:border-emerald-800 bg-emerald-50 dark:bg-emerald-950/20'
];

$paddingClasses = [
    'none' => '',
    'sm' => 'p-3',
    'normal' => 'p-5',
    'lg' => 'p-8'
];

$variantClasses = $variants[$variant] ?? $variants['default'];
$paddingClass = $paddingClasses[$padding] ?? $paddingClasses['normal'];

$classes = implode(' ', [$baseClasses, $variantClasses, $paddingClass]);
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}>
    @if($title || $icon)
        <div class="flex items-center gap-3 mb-4">
            @if($icon)
                <div class="flex items-center justify-center w-8 h-8 rounded-lg bg-neutral-100 dark:bg-neutral-700">
                    {{ $icon }}
                </div>
            @endif

            <div class="flex-1">
                @if($title)
                    <h3 class="text-base font-semibold text-neutral-900 dark:text-white">
                        {{ $title }}
                    </h3>
                @endif

                @if($subtitle)
                    <p class="text-sm text-neutral-600 dark:text-neutral-400 mt-1">
                        {{ $subtitle }}
                    </p>
                @endif
            </div>
        </div>
    @endif

    <div class="text-neutral-700 dark:text-neutral-300">
        {{ $slot }}
    </div>
</div>
