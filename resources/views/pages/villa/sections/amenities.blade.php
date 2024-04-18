<x-base.section class=" bg-bgLight-600 ">

    <div class="max-w-screen-2xl 2xl:mx-auto flex flex-col bg-bgLight-600 px-12 lg:px-64 py-10    mx-4 sm:mx-12 lg:mx-6">

   

    <x-base.heading_medium class="text-primary-400">Wyposażenie</x-base.heading_medium>
    <div class="grid sm:grid-cols-2  md:grid-cols-3 xl:grid-cols-4 gap-x-2 gap-y-12 mt-12">

        <x-amenities_box icon="{{ asset('assets/icons/amenities/house.svg') }}" title="dom na wyłączność" />
        <x-amenities_box icon="{{ asset('assets/icons/amenities/resize.svg') }}" title="200 m² powierzchni" />
        <x-amenities_box icon="{{ asset('assets/icons//amenities/mountains.svg') }}" title="widok na góry" />
        <x-amenities_box icon="{{ asset('assets/icons/amenities/garden.svg') }}" title="ogród" />

        <x-amenities_box icon="{{ asset('assets/icons/amenities/bed.svg') }}" title="4 sypialnie" />
        <x-amenities_box icon="{{ asset('assets/icons/amenities/chimney.svg') }}" title="kominek" />
        <x-amenities_box icon="{{ asset('assets/icons/amenities/terrace.svg') }}" title="taras" />
        <x-amenities_box icon="{{ asset('assets/icons/amenities/grill.svg') }}" title="grill" />
        
        <x-amenities_box icon="{{ asset('assets/icons/amenities/shower.svg') }}" title="prysznic" />
        <x-amenities_box icon="{{ asset('assets/icons/amenities/bath.svg') }}" title="wanna" />
        <x-amenities_box icon="{{ asset('assets/icons/amenities/wifi.svg') }}" title="Wi-Fi" />
        <x-amenities_box icon="{{ asset('assets/icons/amenities/tv.svg') }}" title="telewizor" />

        
        <x-amenities_box icon="{{ asset('assets/icons/amenities/kitchen.svg') }}" title="kuchnia" />
        <x-amenities_box icon="{{ asset('assets/icons/amenities/fridge.svg') }}" title="lodówka" />
        <x-amenities_box icon="{{ asset('assets/icons/amenities/coffee.svg') }}" title="ekspres do kawy" />
        <x-amenities_box icon="{{ asset('assets/icons/amenities/boiler.svg') }}" title="czajnik elektryczny" />
        
        <x-amenities_box icon="{{ asset('assets/icons/amenities/microwave.svg') }}" title="mikrofalówka" />
        <x-amenities_box icon="{{ asset('assets/icons/amenities/waschingMachine.svg') }}" title="pralka" />
        <x-amenities_box icon="{{ asset('assets/icons/amenities/dryer.svg') }}" title="suszarka do włosów" />
        <x-amenities_box icon="{{ asset('assets/icons/amenities/iron.svg') }}" title="żelazko" />
    </div>

</div>
</x-base.section>
