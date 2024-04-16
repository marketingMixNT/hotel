<x-layouts.main>

    {{-- @section('title', __('home.title'))
    @section('description', __('home.description')) --}}
    @section('title', 'Tatrzański Raj: Luksusowy Hotel w Sercu Tatr - Idealne Miejsce na Odpoczynek')
    @section('description', 'Odkryj luksus Tatrzańskiego Raju – Twojego wymarzonego hotelu w górach. Doskonała
        lokalizacja, komfortowe pokoje i niezapomniane widoki. Zarezerwuj teraz!')



@include('pages.home.sections.hero')
@include('pages.home.sections.testimonials')
@include('pages.home.sections.villa_description')
@include('pages.home.sections.amenities')
@include('pages.home.sections.attractions')
@include('pages.home.sections.cta')
@include('pages.home.sections.localization')
@include('pages.home.sections.gallery')



    </x-layouts.main>
