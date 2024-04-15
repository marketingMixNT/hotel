<x-layouts.main>

    {{-- @section('title', __('home.title'))
    @section('description', __('home.description')) --}}
    @section('title', 'Tatrzański Raj: Luksusowy Hotel w Sercu Tatr - Idealne Miejsce na Odpoczynek')
    @section('description', 'Odkryj luksus Tatrzańskiego Raju – Twojego wymarzonego hotelu w górach. Doskonała
        lokalizacja, komfortowe pokoje i niezapomniane widoki. Zarezerwuj teraz!')



@include('pages.home.sections.hero')
@include('pages.home.sections.apartments')
@include('pages.home.sections.attractions')
@include('pages.home.sections.features')
@include('pages.home.sections.cta')
@include('pages.home.sections.gallery')



    </x-layouts.main>
