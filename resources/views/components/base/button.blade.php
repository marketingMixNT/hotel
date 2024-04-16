@props([
    'hover_color' => 'button--gold',
    'aria_label' => '',
    'href' => '',
    'class' => '',
])


{{-- <div class="button-container button-outer  {{ $hover_color }}  {{ $class }}">
    <button class="button button-inner" aria-label="{{ $aria_label }}"><a
            href="{{ $href }}">{{ $slot }}</a></button>
</div> --}}

<a href="" class="border border-secondary-400 px-6 py-3 text-secondary-400">{{$slot}}</a>