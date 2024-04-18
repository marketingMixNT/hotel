
<x-base.section class="max-w-screen-2xl 2xl:mx-auto flex flex-col  2xl:space-y-36">

{{--FIRST GRID--}}
    <x-home.description_grid>

        {{-- swiper --}}
        <div class="swiper description w-full mx-auto  md:w-3/4 xl:w-full my-auto h-full xl:h-4/5 2xl:h-full md:opacity-0 image-animation">
            <div class="swiper-wrapper">
                <div class="swiper-slide">

                    <img src="{{ asset('assets/images/mobile/willaPodScietaLipa-35.jpg') }}"
                        alt="budynek Willi pod Ściętą Lipą w Zębie" class="w-full h-full object-cover  sm:hidden"
                        loading='lazy' width="641" height="768">
                    <img src="{{ asset('assets/images/desktop/willaPodScietaLipa-35.jpg') }}"
                        alt="budynek Willi pod Ściętą Lipą w Zębie" class="w-full h-full object-cover hidden sm:block"
                        loading='lazy' width="641" height="768">

                </div>
                <div class="swiper-slide">

                    <img src="{{ asset('assets/images/mobile/willaPodScietaLipa-36.jpg') }}"
                        alt="widok z Willi pod Ściętą Lipą w Zębie" class="w-full h-full object-cover  sm:hidden"
                        loading='lazy' width="641" height="768">
                    <img src="{{ asset('assets/images/desktop/willaPodScietaLipa-36.jpg') }}"
                        alt="widok z Willi pod Ściętą Lipą w Zębie" class="w-full h-full object-cover hidden sm:block"
                        loading='lazy' width="641" height="768">

                </div>

                <div class="swiper-slide">

                    <img src="{{ asset('assets/images/mobile/willaPodScietaLipa-46.jpg') }}"
                        alt="budynek Willi pod Ściętą Lipą w Zębie" class="w-full h-full object-cover  sm:hidden"
                        loading='lazy' width="641" height="768">
                    <img src="{{ asset('assets/images/desktop/willaPodScietaLipa-46.jpg') }}"
                        alt="budynek Willi pod Ściętą Lipą w Zębie" class="w-full h-full object-cover hidden sm:block"
                        loading='lazy' width="641" height="768">
                </div>


                <div class="swiper-slide">

                    <img src="{{ asset('assets/images/mobile/willaPodScietaLipa-49.jpg') }}"
                        alt="widok z Willi pod Ściętą Lipą w Zębie" class="w-full h-full object-cover  sm:hidden"
                        loading='lazy' width="641" height="768">
                    <img src="{{ asset('assets/images/desktop/willaPodScietaLipa-49.jpg') }}"
                        alt="widok z Willi pod Ściętą Lipą w Zębie" class="w-full h-full object-cover hidden sm:block"
                        loading='lazy' width="641" height="768">

                </div>

            </div>
        </div>

        {{-- text --}}
        <div class="flex flex-col justify-center items-center text-center gap-10 py-16">


            <span
                class="text-bg text-7xl xs:text-8xl md:text-9xl  bg-[url('/public/assets/text.jpeg')] bg-cover uppercase tracking-widest font-bold">Tatry</span>



            <x-base.heading_big class="text-primary-400">Odkryj Spokój w Willi Pod Ściętą Lipą</x-base.heading_big>
            <div class="flex flex-col justify-center items-center gap-2">

                <x-home.description_text>Willa Pod Ściętą Lipą to urokliwy zakątek
                    na górskiej mapie Polski, położony w Zębie – najwyżej położonej wsi w kraju. Ta wyjątkowa
                    lokalizacja sprawia, że willa jest idealnym miejscem dla tych, którzy pragną cieszyć się pięknem i
                    spokojem Tatr bez tłumów turystów. Każdy pokój oferuje nie tylko komfort i nowoczesne udogodnienia,
                    ale też zachwyca elementami regionalnego designu.</x-home.description_text>

                <x-home.description_text>Willa Pod Ściętą Lipą stanowi doskonałą
                    bazę wypadową do górskich eskapad oraz miejsce, gdzie każdy dzień zaczyna się od spektakularnego
                    widoku na otaczające szczyty.</x-home.description_text>
                <x-home.description_text>Zapraszamy do naszej willi, gdzie górski
                    klimat i domowa atmosfera tworzą idealne warunki do wypoczynku i relaksu.</x-home.description_text>
            </div>
        </div>

    </x-home.description_grid>

{{--SECOND GRID--}}
    <x-home.description_grid>
        {{--text--}}
        <div class="flex flex-col justify-center items-start text-left gap-6 py-16 order-1 xl:order-none">
            <x-base.heading_big class="text-fontDark">Luksus i Odpoczynek</x-base.heading_big>
            <x-base.heading_small>Zrelaksuj Się w
                Ekskluzywnych Warunkach na Tle Tatr</x-base.heading_small>
            </span>
            <div>

            </div>
            <x-home.description_text>Willa Pod Ściętą Lipą w Zębie to więcej
                niż tylko miejsce noclegowe; to prawdziwa enklawa spokoju, gdzie każdy element został zaprojektowany z
                myślą o maksymalnym komforcie i integracji z naturą. Willa oferuje spektakularne widoki na majestatyczne
                Tatry, dostępne niemalże z każdego okna. Nasze pokoje, wyposażone w tradycyjne, ręcznie robione meble
                oraz nowoczesne udogodnienia, zapewniają idealną równowagę między lokalnym stylem a współczesnym
                luksusem.

            </x-home.description_text>

            <x-home.description_text>Ciesz się poranną kawą na tarasie z
                widokiem na górski krajobraz lub zrelaksuj się po dniu pełnym przygód w naszym przytulnym salonie. Willa
                Pod Ściętą Lipą jest doskonałą bazą wypadową do eksploracji tatrzańskich szlaków, zimowych stoków
                narciarskich czy lokalnych atrakcji kulturowych. Niezależnie od tego, czy szukasz adrenaliny w górach,
                czy spokojnego oddechu od codziennego zgiełku, nasza willa spełni Twoje oczekiwania.
            </x-home.description_text>
            <x-base.link href="">Dowiedz się więcej</x-base.link>
        </div>


        {{-- swiper --}}
        <div class="swiper description--second w-full mx-auto  md:w-3/4 xl:w-full my-auto h-full xl:h-4/5 2xl:h-full md:opacity-0 image-animation">
            <div class="swiper-wrapper">
                <div class="swiper-slide">

                    <img src="{{ asset('assets/images/mobile/willaPodScietaLipa-19.jpg') }}"
                        alt="budynek Willi pod Ściętą Lipą w Zębie" class="w-full h-full object-cover  sm:hidden"
                        loading='lazy' width="641" height="768">
                    <img src="{{ asset('assets/images/desktop/willaPodScietaLipa-19.jpg') }}"
                        alt="budynek Willi pod Ściętą Lipą w Zębie" class="w-full h-full object-cover hidden sm:block"
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

                    <img src="{{ asset('assets/images/mobile/willaPodScietaLipa-20.jpg') }}"
                        alt="widok z Willi pod Ściętą Lipą w Zębie" class="w-full h-full object-cover  sm:hidden"
                        loading='lazy' width="641" height="768">
                    <img src="{{ asset('assets/images/desktop/willaPodScietaLipa-20.jpg') }}"
                        alt="widok z Willi pod Ściętą Lipą w Zębie" class="w-full h-full object-cover hidden sm:block"
                        loading='lazy' width="641" height="768">

                </div>

                <div class="swiper-slide">

                    <img src="{{ asset('assets/images/mobile/willaPodScietaLipa-4.jpg') }}"
                        alt="budynek Willi pod Ściętą Lipą w Zębie" class="w-full h-full object-cover  sm:hidden"
                        loading='lazy' width="641" height="768">
                    <img src="{{ asset('assets/images/desktop/willaPodScietaLipa-4.jpg') }}"
                        alt="budynek Willi pod Ściętą Lipą w Zębie" class="w-full h-full object-cover hidden sm:block"
                        loading='lazy' width="641" height="768">
                </div>


                <div class="swiper-slide">

                    <img src="{{ asset('assets/images/mobile/willaPodScietaLipa-17.jpg') }}"
                        alt="widok z Willi pod Ściętą Lipą w Zębie" class="w-full h-full object-cover  sm:hidden"
                        loading='lazy' width="641" height="768">
                    <img src="{{ asset('assets/images/desktop/willaPodScietaLipa-17.jpg') }}"
                        alt="widok z Willi pod Ściętą Lipą w Zębie" class="w-full h-full object-cover hidden sm:block"
                        loading='lazy' width="641" height="768">

                </div>

            </div>
        </div>

    </x-home.description_grid>

</x-base.section>
