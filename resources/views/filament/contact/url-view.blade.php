{{-- resources/views/filament/contact/url-view.blade.php --}}
@if ($url)
    <a href="{{ $url }}" target="_blank" rel="noopener noreferrer" class="text-primary-600 dark:text-primary-400 underline font-medium">
        {{ $url }}
    </a>
@else
    <span class="text-gray-500 dark:text-gray-400">No URL</span>
@endif
