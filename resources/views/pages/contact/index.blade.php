<x-layouts.main>

    {{-- @section('title', __('home.title'))
    @section('description', __('home.description')) --}}
    @section('title', 'Galeria Willi pod Ściętą Lipą: odkryj piękno naszej Willi w zdjęciach')
    @section('description',
        'Poznaj szczegóły oferty Willi pod Ściętą Lipą. Luksusowe zakwaterowanie, wyjątkowe atrakcje
        i bezpośredni kontakt z naturą. Idealne miejsce dla rodzin i miłośników gór.')


@include ('pages.contact.sections.hero')
        <main class="mt-10">

            @include ('pages.contact.sections.address')
            @include ('pages.contact.sections.form')
            @include ('pages.contact.sections.map')
            @include('pages.contact.sections.gallery')

           

        </main>


    </x-layouts.main>
