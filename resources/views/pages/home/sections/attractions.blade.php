
    <x-base.section class="max-w-screen-xl xl:mx-auto">



    <div class="flex flex-col justify-center gap-10 items-center text-center">

        <h2 class="text-6xl font-JazminThin">Atrakcje w pobliżu</h2>
        <span class="font-AktivGrotesk text-sm text-primary-400 tracking-widest uppercase">POMYSŁ NA WYCIECZKĘ W
            GÓRY</span>


    </div>
    <div class="grid lg:grid-cols-3 gap-6 2xl:gap-12 mt-12 px-6 lg:px-0">


        <x-home.attraction_card image="{{ asset('assets/images/attractions/atrakcje-4.jpg') }}" subtitle='NOCLEGI W GÓRACH'
            title="Blisko tatrzańskich szlaków">Dolina Kościeliska, Kuźnice, Palenica – te punkty startowe tatrzańskich
            szlaków znają wszyscy miłośnicy Tatr. Dotarcie do nich z Willi pod Ściętą Lipą to
            pestka.</x-home.attraction_card>
        <x-home.attraction_card image="{{ asset('assets/images/attractions/atrakcje-2.jpg') }}" subtitle='NOCLEGI Blisko Term'
            title="Terma Bania ze zniżką dla naszych Gości">Tylko pół godziny drogi od naszej Willi znajduje się
            najlepszy park wodny na Podhalu – Terma Bania, czynna przez cały rok. Zapytaj o zniżkę!</x-home.attraction_card>
        <x-home.attraction_card image="{{ asset('assets/images/attractions/atrakcje-3.jpg') }}" subtitle='NOCLEGI przy stoku'
            title="Idealna destynacja na ferie zimowe">Na stoki narciarskie w Zębie możesz się wybrać piechotą, a zupełnie niedaleko znajduje się choćby Suche Ski, Kotelnica, czy inne stacje karnetu Tatry Super Ski</x-home.attraction_card>

    </div>
    </x-base.section>