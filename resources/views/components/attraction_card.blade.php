@props(['subtitle'=>'','title'=>'','image'=>'','desc'=>''])

<a href="" class="group ">

    <img src="{{ $image }}" alt="{{ $title }}" loading="lazy" width="400" height="455"
        class="h-[450px] object-cover w-full group-hover:scale-110 duration-300">

    <div class="bg-white group-hover:-translate-y-12 duration-300 ease border border-transparent group-hover:border group-hover:border-gray-200  py-8 flex flex-col justify-center items-center gap-4">

        
        
            <span class="font-AktivGrotesk text-sm text-primary-400 tracking-widest uppercase">{{$subtitle}}</span>

        <h3 class="text-2xl text-center">{{ $title }}</h3>

        <span
            class="opacity-0 group-hover:opacity-100 duration-300 text-sm text-primary-400 font-AktivGrotesk px-4 text-center">{{$slot}}</span>
    </div>

</a>
