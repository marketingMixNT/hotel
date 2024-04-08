@props([
    'type' => 'primary',
    'href' => '',
    'class' => '',
])



<a href="{{ $href }}"><button
        class="border px-12 py-3 text-fontLight duration-300
    {{ $type === 'primary' ? ' ' : '' }} 
    {{-- {{ $type === 'secondary' ? 'border-white bg-white text-fontDark' : '' }}  --}}
    {{ $type === 'transparent' ? ' ' : '' }} 
     
      {{ $class }}">{{ $slot }}</button></a>
