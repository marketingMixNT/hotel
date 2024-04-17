<x-layouts.main>

    {{-- @section('title', __('home.title'))
    @section('description', __('home.description')) --}}
    @section('title', 'Odkryj Willę pod Ściętą Lipą: komfort i wyjątkowe udogodnienia w Tatrach')
    @section('description', 'Poznaj szczegóły oferty Willi pod Ściętą Lipą. Luksusowe zakwaterowanie, wyjątkowe atrakcje i bezpośredni kontakt z naturą. Idealne miejsce dla rodzin i miłośników gór.')



        @include('pages.villa.sections.hero')
        @include('pages.villa.sections.description')
        @include('pages.villa.sections.amenities')
        @include('pages.villa.sections.description_second')
        @include('pages.home.sections.gallery')

        



    </x-layouts.main>
