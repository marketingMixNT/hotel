<nav  class="relative w-full flex flex-row-reverse justify-between items-center 2xl:px-6">



    <a href={{ route('home') }} class=" absolute left-1/2 -translate-x-1/2">
        <img src="{{ asset('assets/logo/logo.png') }}" alt="logo Willi pod Ściętą Lipą" class="w-32 sm:w-40" width="160" height="87">

    </a>

    <div class="flex gap-8 2xl:gap-12 items-center">

        <x-nav.language_switcher />

        <x-base.button-link  class="btn-white hidden lg:block " aria_label="Zarezerwuj" href="https://www.booking.com/hotel/pl/willa-pod-scieta-lipa.pl.html?aid=318615&label=New_Polish_PL_PL_27026340625-8jnhBl9f%2ARWlwi1GFE5ASAS637942120544%3Apl%3Ata%3Ap1%3Ap2%3Aac%3Aap%3Aneg%3Afi%3Atidsa-140566009945%3Alp1011374%3Ali%3Adec%3Adm%3Aag27026340625%3Acmp400536505&sid=1011c8221187b6d945397365e511dc06&dest_id=-537694;dest_type=city;dist=0;group_adults=2;group_children=0;hapos=1;hpos=1;no_rooms=1;req_adults=2;req_children=0;room1=A%2CA;sb_price_type=total;sr_order=popularity;srepoch=1713169349;srpvid=a3323addbfdc0072;type=total;ucfs=1&#hotelTmpl">Zarezerwuj</x-base.button-link>

    </div>

</nav>
