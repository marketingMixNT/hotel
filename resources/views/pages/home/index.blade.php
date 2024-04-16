<x-layouts.main>

    {{-- @section('title', __('home.title'))
    @section('description', __('home.description')) --}}
    @section('title', 'Willa pod Ściętą Lipą - Luksusowy Wypoczynek w Sercu Tatr')
    @section('description', 'Odkryj Willę Pod Ściętą Lipą w Zębie, idealne miejsce na wypoczynek w Tatrach. Komfortowe
        pokoje, spektakularne widoki i bliskość natury. Idealna baza do górskich wędrówek.')



        @include('pages.home.sections.hero')
        @include('pages.home.sections.testimonials')
        @include('pages.home.sections.villa_description')
        @include('pages.home.sections.amenities')
        @include('pages.home.sections.attractions')
        @include('pages.home.sections.cta')
        @include('pages.home.sections.localization')
        @include('pages.home.sections.gallery')



    </x-layouts.main>
