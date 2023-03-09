@php
    $image = $block->imageAsArray('image', 'default');
@endphp

<a href="{{ $image['src'] }}">
    <img src="{{ $image['src'] }}" class="w-full h-auto py-12" alt="{{ $image['alt'] }}" title="{{ $image['caption'] }}">
</a>