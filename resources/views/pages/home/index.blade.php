<x-layouts.main>

    @section('title', __('home.title'))
    @section('description', __('home.description'))

    <x-hero
        class="h-screen
             bg-[url('/public/assets/images/mobile/willaPodScietaLipa-34.jpg')]
            md:bg-[url('/public/assets/images/desktop/willaPodScietaLipa-34.jpg')]
            xl:bg-[url('/public/assets/images/willaPodScietaLipa-34.jpg')] "
        heading="{{ __('home.header.title') }}" />


    @include('pages.home.sections.testimonials')
    @include('pages.home.sections.villa_description')
    @include('pages.home.sections.features')
    @include('pages.home.sections.attractions')
    @include('pages.home.sections.cta')
    {{-- @include('pages.home.sections.gallery') --}}

    <x-gallery_small class="bg-bgLight-600" />

</x-layouts.main>
