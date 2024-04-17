<nav id="navbar"
    class="fixed h-[100px] w-full flex  justify-between items-center z-50 opacity-0 bg-white px-4 xs:px-6 sm:px-12">


    <div>

        <x-base.button-link class="btn-gold hidden lg:block">Zarezerwuj</x-base.button-link>
    </div>


    <a href={{ route('home') }} class=" absolute left-4 xs:left-6  sm:left-12  lg:left-1/2 lg:-translate-x-1/2">
        <img src="{{ asset('assets/logo/logo.png') }}" alt="logo Willi pod Ściętą Lipą" class="w-32 sm:w-32" width="128"
            height="69">

    </a>




    <ul class="hidden sm:flex justify-center items-center gap-10">
        <li><a href="" class="hover-link text-xl">Willa</a></li>
        <li><a href="" class="hover-link text-xl">Galeria</a></li>
        <li><a href="" class="hover-link text-xl">Kontakt</a></li>
    </ul>

    <x-nav.hamburger class="sm:hidden" />




</nav>
