<x-layouts.main>

    {{-- @section('title', __('home.title'))
    @section('description', __('home.description')) --}}
    @section('title', 'Galeria Willi pod Ściętą Lipą: odkryj piękno naszej Willi w zdjęciach')
    @section('description',
        'Poznaj szczegóły oferty Willi pod Ściętą Lipą. Luksusowe zakwaterowanie, wyjątkowe atrakcje
        i bezpośredni kontakt z naturą. Idealne miejsce dla rodzin i miłośników gór.')


        <main>

            @include ('pages.gallery.sections.hero')
            <x-base.section class="max-w-screen-2xl 2xl:mx-auto flex flex-col  2xl:space-y-36 relative">

                <div class="container">
                    <div class="grid-gallery">


                        @foreach ($images as $img)
                            <div class="grid-item" data-name='all'>
                                <a href="{{ asset($img['full']) }}" class="glightbox ">
                                    <img src="{{ asset($img['thumbnail']) }}"
                                        alt="apartament typu Standard w Villa Górskie Klimaty" width="500" height='400'
                                        loading="lazy" class="h-[300px] object-cover" />
                                </a>
                            </div>
                        @endforeach


                    </div>

            </x-base.section>
        </main>


    </x-layouts.main>
