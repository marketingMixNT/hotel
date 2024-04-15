<section class="py-20  max-w-screen-xl mx-auto space-y-32">

    {{-- TESTIMONIAL change div with slider --}}
    <div class="flex flex-col justify-center items-center text-center max-w-screen-md mx-auto gap-12">
        <h2 class="uppercase font-AktivGrotesk text-sm text-primary-400 tracking-widest">Tatrzański raj</h2>
        <div class="testimonial relative">
            <img src="{{ asset('assets/icons/quote.svg') }}" alt=""
                class="absolute -top-8 -left-10 w-16 opacity-50">
            <p class="text-2xl font-JazminThin leading-relaxed"> Lorem ipsum dolor sit, amet consectetur adipisicing
                elit. Quam eius quasi omnis id unde odit
                reprehenderit sunt eum dolore ut amet temporibus mollitia itaque, quod quaerat voluptatem excepturi
                ratione vero ducimus ab fugiat numquam totam libero possimus? Sint, veniam odio.</p>

        </div>
        <span class="font-AktivGrotesk text-sm text-primary-400 tracking-widest">Marian, Polska, Booking.com</span>
    </div>


{{-- APARTMENT change div with slider --}}
    <div class="flex flex-col justify-center gap-10 items-center text-center">

        <h2 class="text-6xl font-JazminThin">Nasze Apartamenty</h2>
        <span class="font-AktivGrotesk text-sm text-primary-400 tracking-widest uppercase">Lorem ipsum dolor sit
            amet consectetur adipisicing</span>

        <div class="grid grid-cols-3 gap-12 mt-12">

            <x-apartment_slider_card href="#" image="{{ asset('assets/images/apartments/apartment--2.jpeg') }}" persons="2" surface="29" title="Apartament nr 1" desc="Lorem ipsum dolor sit
            amet consectetur"/>
            <x-apartment_slider_card href="#" image="{{ asset('assets/images/apartments/apartment--1.jpeg') }}" persons="4" surface="39" title="Apartament nr 2" desc="Lorem ipsum dolor sit
            amet consectetur"/>
            <x-apartment_slider_card href="#" image="{{ asset('assets/images/apartments/apartment--3.jpeg') }}" persons="6" surface="49" title="Apartament nr 3" desc="Lorem ipsum dolor sit
            amet consectetur"/>
            
        </div>
    </div>

    </div>

</section>
