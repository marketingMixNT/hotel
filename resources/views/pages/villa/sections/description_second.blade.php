
<x-base.section class="max-w-screen-2xl 2xl:mx-auto flex flex-col  2xl:space-y-36">

    {{--FIRST GRID--}}
        <x-home.description_grid>
    
            {{-- swiper --}}
            <div class="swiper description w-full mx-auto  md:w-3/4 xl:w-full max-h-[700px] h-full xl:h-4/5 2xl:h-full md:opacity-0 image-animation">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
    
                        <img src="{{ asset('assets/images/mobile/willaPodScietaLipa-6.jpg') }}"
                            alt="budynek Willi pod Ściętą Lipą w Zębie" class="w-full h-full object-cover  sm:hidden"
                            loading='lazy' width="641" height="768">
                        <img src="{{ asset('assets/images/desktop/willaPodScietaLipa-6.jpg') }}"
                            alt="budynek Willi pod Ściętą Lipą w Zębie" class="w-full h-full object-cover hidden sm:block"
                            loading='lazy' width="641" height="768">
    
                    </div>
                    <div class="swiper-slide">
    
                        <img src="{{ asset('assets/images/mobile/willaPodScietaLipa-4.jpg') }}"
                            alt="widok z Willi pod Ściętą Lipą w Zębie" class="w-full h-full object-cover  sm:hidden"
                            loading='lazy' width="641" height="768">
                        <img src="{{ asset('assets/images/desktop/willaPodScietaLipa-4.jpg') }}"
                            alt="widok z Willi pod Ściętą Lipą w Zębie" class="w-full h-full object-cover hidden sm:block"
                            loading='lazy' width="641" height="768">
    
                    </div>
    
                    <div class="swiper-slide">
    
                        <img src="{{ asset('assets/images/mobile/willaPodScietaLipa-20.jpg') }}"
                            alt="budynek Willi pod Ściętą Lipą w Zębie" class="w-full h-full object-cover  sm:hidden"
                            loading='lazy' width="641" height="768">
                        <img src="{{ asset('assets/images/desktop/willaPodScietaLipa-20.jpg') }}"
                            alt="budynek Willi pod Ściętą Lipą w Zębie" class="w-full h-full object-cover hidden sm:block"
                            loading='lazy' width="641" height="768">
                    </div>
    
    
                    <div class="swiper-slide">
    
                        <img src="{{ asset('assets/images/mobile/willaPodScietaLipa-1.jpg') }}"
                            alt="widok z Willi pod Ściętą Lipą w Zębie" class="w-full h-full object-cover  sm:hidden"
                            loading='lazy' width="641" height="768">
                        <img src="{{ asset('assets/images/desktop/willaPodScietaLipa-1.jpg') }}"
                            alt="widok z Willi pod Ściętą Lipą w Zębie" class="w-full h-full object-cover hidden sm:block"
                            loading='lazy' width="641" height="768">
    
                    </div>
                    <div class="swiper-slide">
    
                        <img src="{{ asset('assets/images/mobile/willaPodScietaLipa-5.jpg') }}"
                            alt="widok z Willi pod Ściętą Lipą w Zębie" class="w-full h-full object-cover  sm:hidden"
                            loading='lazy' width="641" height="768">
                        <img src="{{ asset('assets/images/desktop/willaPodScietaLipa-5.jpg') }}"
                            alt="widok z Willi pod Ściętą Lipą w Zębie" class="w-full h-full object-cover hidden sm:block"
                            loading='lazy' width="641" height="768">
    
                    </div>
                    <div class="swiper-slide">
    
                        <img src="{{ asset('assets/images/mobile/willaPodScietaLipa-15.jpg') }}"
                            alt="widok z Willi pod Ściętą Lipą w Zębie" class="w-full h-full object-cover  sm:hidden"
                            loading='lazy' width="641" height="768">
                        <img src="{{ asset('assets/images/desktop/willaPodScietaLipa-15.jpg') }}"
                            alt="widok z Willi pod Ściętą Lipą w Zębie" class="w-full h-full object-cover hidden sm:block"
                            loading='lazy' width="641" height="768">
    
                    </div>
                    <div class="swiper-slide">
    
                        <img src="{{ asset('assets/images/mobile/willaPodScietaLipa-27.jpg') }}"
                            alt="widok z Willi pod Ściętą Lipą w Zębie" class="w-full h-full object-cover  sm:hidden"
                            loading='lazy' width="641" height="768">
                        <img src="{{ asset('assets/images/desktop/willaPodScietaLipa-27.jpg') }}"
                            alt="widok z Willi pod Ściętą Lipą w Zębie" class="w-full h-full object-cover hidden sm:block"
                            loading='lazy' width="641" height="768">
    
                    </div>
                    <div class="swiper-slide">
    
                        <img src="{{ asset('assets/images/mobile/willaPodScietaLipa-10.jpg') }}"
                            alt="widok z Willi pod Ściętą Lipą w Zębie" class="w-full h-full object-cover  sm:hidden"
                            loading='lazy' width="641" height="768">
                        <img src="{{ asset('assets/images/desktop/willaPodScietaLipa-10.jpg') }}"
                            alt="widok z Willi pod Ściętą Lipą w Zębie" class="w-full h-full object-cover hidden sm:block"
                            loading='lazy' width="641" height="768">
    
                    </div>
                    <div class="swiper-slide">
    
                        <img src="{{ asset('assets/images/mobile/willaPodScietaLipa-30.jpg') }}"
                            alt="widok z Willi pod Ściętą Lipą w Zębie" class="w-full h-full object-cover  sm:hidden"
                            loading='lazy' width="641" height="768">
                        <img src="{{ asset('assets/images/desktop/willaPodScietaLipa-30.jpg') }}"
                            alt="widok z Willi pod Ściętą Lipą w Zębie" class="w-full h-full object-cover hidden sm:block"
                            loading='lazy' width="641" height="768">
    
                    </div>
    
                </div>
            </div>
    
            {{-- text --}}
            <div class="flex flex-col items-center text-center gap-10 py-16">
    
    
                {{-- <span
                    class=" text-7xl xs:text-8xl md:text-9xl test bg-[url('/public/assets/text.jpeg')] bg-cover uppercase tracking-widest font-bold">Tatry</span> --}}
    
    
    
                <x-base.heading_big class="text-primary-400">Komfort i elegancja willi pod ściętą lipą</x-base.heading_big>
                <div class="flex flex-col justify-center items-center gap-2">
    
                    <x-home.description_text>Willa Pod Ściętą Lipą to przestrzeń zaprojektowana z myślą o wygodzie i luksusie. Nasza willa oferuje gościom przestronne, elegancko urządzone pokoje z komfortowymi łóżkami, zapewniającymi doskonały wypoczynek.</x-home.description_text>
    
                    <x-home.description_text>Każdy z pokoi posiada dostęp do nowoczesnej łazienki, wyposażonej w wysokiej klasy armaturę i delikatne wykończenia. W pełni funkcjonalna kuchnia pozwala na przygotowanie ulubionych posiłków, a wspólne posiłki można celebrować w przestronnej jadalni.</x-home.description_text>
                    <x-home.description_text>Willa dysponuje także tarasem widokowym, z którego roztacza się zachwycający widok na tatrzańskie szczyty, idealnym miejscem na poranną kawę czy wieczorny relaks.</x-home.description_text>
                </div>
            </div>
    
        </x-home.description_grid>
    
    {{--SECOND GRID--}}
        <x-home.description_grid>
            {{--text--}}
            <div class="flex flex-col items-start text-left gap-6 py-16 order-1 xl:order-none">
                <x-base.heading_big class="text-fontDark">Relaks i radość</x-base.heading_big>
                <x-base.heading_small>Zabawa i Rozrywka w Willi Pod Ściętą Lipą

                </x-base.heading_small>
                </span>
                <div>
    
                </div>
                <x-home.description_text>Willa Pod Ściętą Lipą myśli także o naszych najmłodszych gościach. Specjalnie dla nich przygotowana została sala zabaw, która zapewni godziny świetnej zabawy w bezpiecznym i stymulującym środowisku.
    
                </x-home.description_text>
    
                <x-home.description_text>Dla starszych dzieci i dorosłych dostępna jest sala gier z bilardem oraz piłkarzykami, gdzie można spędzić czas rywalizując i relaksując się w przyjaznej atmosferze. To idealne miejsce dla rodzin, które chcą aktywnie spędzać czas nawet podczas chłodniejszych dni.
                </x-home.description_text>
                <x-base.link href="{{route('gallery')}}">Zobacz galerię</x-base.link>
            </div>
    
    
            {{-- swiper --}}
            <div class="swiper description--second w-full mx-auto max-h-[700px]  md:w-3/4 xl:w-full  h-full xl:h-4/5 2xl:h-full md:opacity-0 image-animation">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
    
                        <img src="{{ asset('assets/images/mobile/willaPodScietaLipa-21.jpg') }}"
                            alt="budynek Willi pod Ściętą Lipą w Zębie" class="w-full h-full object-cover  sm:hidden"
                            loading='lazy' width="641" height="768">
                        <img src="{{ asset('assets/images/desktop/willaPodScietaLipa-21.jpg') }}"
                            alt="budynek Willi pod Ściętą Lipą w Zębie" class="w-full h-full object-cover hidden sm:block"
                            loading='lazy' width="641" height="768">
    
                    </div>
                    <div class="swiper-slide">
    
                        <img src="{{ asset('assets/images/mobile/willaPodScietaLipa-24.jpg') }}"
                            alt="widok z Willi pod Ściętą Lipą w Zębie" class="w-full h-full object-cover  sm:hidden"
                            loading='lazy' width="641" height="768">
                        <img src="{{ asset('assets/images/desktop/willaPodScietaLipa-24.jpg') }}"
                            alt="widok z Willi pod Ściętą Lipą w Zębie" class="w-full h-full object-cover hidden sm:block"
                            loading='lazy' width="641" height="768">
    
                    </div>
                    <div class="swiper-slide">
    
                        <img src="{{ asset('assets/images/mobile/willaPodScietaLipa-22.jpg') }}"
                            alt="widok z Willi pod Ściętą Lipą w Zębie" class="w-full h-full object-cover  sm:hidden"
                            loading='lazy' width="641" height="768">
                        <img src="{{ asset('assets/images/desktop/willaPodScietaLipa-22.jpg') }}"
                            alt="widok z Willi pod Ściętą Lipą w Zębie" class="w-full h-full object-cover hidden sm:block"
                            loading='lazy' width="641" height="768">
    
                    </div>
    
                    <div class="swiper-slide">
    
                        <img src="{{ asset('assets/images/mobile/willaPodScietaLipa-25.jpg') }}"
                            alt="budynek Willi pod Ściętą Lipą w Zębie" class="w-full h-full object-cover  sm:hidden"
                            loading='lazy' width="641" height="768">
                        <img src="{{ asset('assets/images/desktop/willaPodScietaLipa-25.jpg') }}"
                            alt="budynek Willi pod Ściętą Lipą w Zębie" class="w-full h-full object-cover hidden sm:block"
                            loading='lazy' width="641" height="768">
                    </div>
    
    
                    <div class="swiper-slide">
    
                        <img src="{{ asset('assets/images/mobile/willaPodScietaLipa-23.jpg') }}"
                            alt="widok z Willi pod Ściętą Lipą w Zębie" class="w-full h-full object-cover  sm:hidden"
                            loading='lazy' width="641" height="768">
                        <img src="{{ asset('assets/images/desktop/willaPodScietaLipa-23.jpg') }}"
                            alt="widok z Willi pod Ściętą Lipą w Zębie" class="w-full h-full object-cover hidden sm:block"
                            loading='lazy' width="641" height="768">
    
                    </div>
    
                    <div class="swiper-slide">
    
                        <img src="{{ asset('assets/images/mobile/willaPodScietaLipa-26.jpg') }}"
                            alt="widok z Willi pod Ściętą Lipą w Zębie" class="w-full h-full object-cover  sm:hidden"
                            loading='lazy' width="641" height="768">
                        <img src="{{ asset('assets/images/desktop/willaPodScietaLipa-26.jpg') }}"
                            alt="widok z Willi pod Ściętą Lipą w Zębie" class="w-full h-full object-cover hidden sm:block"
                            loading='lazy' width="641" height="768">
    
                    </div>
    
                    <div class="swiper-slide">
    
                        <img src="{{ asset('assets/images/mobile/willaPodScietaLipa-31.jpg') }}"
                            alt="widok z Willi pod Ściętą Lipą w Zębie" class="w-full h-full object-cover  sm:hidden"
                            loading='lazy' width="641" height="768">
                        <img src="{{ asset('assets/images/desktop/willaPodScietaLipa-31.jpg') }}"
                            alt="widok z Willi pod Ściętą Lipą w Zębie" class="w-full h-full object-cover hidden sm:block"
                            loading='lazy' width="641" height="768">
    
                    </div>
    
                </div>
            </div>
    
        </x-home.description_grid>
    
    </x-base.section>
    