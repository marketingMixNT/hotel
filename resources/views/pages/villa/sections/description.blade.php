<x-base.section class="max-w-screen-2xl 2xl:mx-auto flex flex-col  2xl:space-y-36 relative">


    <div class="grid xl:grid-cols-3   gap-16 xl:mx-24 max-w-screen-xl ">

        <div class="border hidden  sticky top-32 h-[400px] p-12 xl:flex flex-col gap-7">

            <x-base.heading_medium class="text-fontDark">Rezerwuj</x-base.heading_medium>

            <div class="flex justify-center items-center gap-4">
                <img src="{{asset('assets/icons/mountains--gold.svg')}}" alt="" class="w-8"> <span class="text-sm font-AktivGrotesk">Zachwyć się elegancją w sercu natury

                </span>
            </div>
            <div class="flex justify-center items-center gap-4">
                <img src="{{asset('assets/icons/house--gold.svg')}}" alt="" class="w-8"> <span class="text-sm font-AktivGrotesk">Luksusowy wypoczynek na jaki zasługujesz</span>
            </div>
            <div class="flex justify-center items-center gap-4 mb-5">
                <img src="{{asset('assets/icons/thumb--gold.svg')}}" alt="" class="w-8"> <span class="text-sm font-AktivGrotesk">Niezapomniane wrażenia na wyciągnięcie ręki</span>
            </div>
            
            <x-base.link href="#" >Zarezerwuj</x-base.link>
        </div>
        <div class="xl:col-span-2 flex flex-col  gap-12 px-12">
            <x-home.description_text>Willa Pod Ściętą Lipą w Zębie oferuje luksusowe zakwaterowanie z przepięknymi
                widokami na Tatry. Nasza willa zapewnia dostęp do tarasu, bezpłatny prywatny parking oraz WiFi, a także
                wyposażenie takie jak w pełni funkcjonalna kuchnia i wspólny salon. Idealne miejsce na wypoczynek w
                górach w każdej porze roku.
            </x-home.description_text>

            <div class="flex gap-12">
               
                <div class="flex flex-col gap-1 justify-center items-center">
                    <span class="font-JazminThin text-primary-400 text-4xl">10 os.</span>
                    <span class="text-sm uppercase text-gray-500">maks</span>
                </div>
                <div class="flex flex-col gap-1 justify-center items-center">
                    <span class="font-JazminThin text-primary-400 text-4xl">200 m²</span>
                    <span class="text-sm uppercase text-gray-500">powierzchnia</span>
                </div>
                
            </div>

            <div>
                <img src="{{asset('assets/images/desktop/willaPodScietaLipa-19.jpg')}}" alt="wnętrze Willi pod Ściętą Lipą" loading="lazy" width="736" height="491">
            </div>
    </div>
    </div>
   





</x-base.section>
