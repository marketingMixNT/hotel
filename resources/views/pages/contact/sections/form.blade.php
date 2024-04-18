<x-base.section class="max-w-screen-xl xl:mx-auto">




    <div class="grid lg:grid-cols-2 gap-12">


        {{-- text --}}

        <div class="lg:px-16 ">
            <h2 class="text-4xl 2xl:text-5xl font-JazminThin  mb-16 leading-10">Formularz <br>kontaktowy</h2>

            @if (isset($formSubmitted))
                <script>
                    const formSubmitted = {!! json_encode($formSubmitted) !!};
                    window.onload = function() {
                        if (formSubmitted) {
                            var element = document.getElementById('formContact');
                            var rect = element.getBoundingClientRect();
                            var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
                            window.scrollTo(0, rect.top + scrollTop - 300);
                        }
                    }
                </script>

                <div id="formContact" class="flex  h-full ">
                    <div class=" flex flex-col gap-4 text-center my-6">

                        <h3 class="text-5xl font-bold mb-2 ">Dziękujemy za wiadomość!</h3>
                        <span class="text-xl font-bold">Odpowiemy najszybciej jak to możliwe!</span>
                    </div>
                </div>
            @else
                <form method="post" action="{{ route('contact_form') }}" id="contactForm" {{-- <form method="post" action="#" id="contactForm" --}}
                    class="">
                    @csrf
                    <x-base.input type='text' name='name' id='name' for='name' required>Imię
                        i
                        nazwisko</x-base.input>
                    <x-base.input type='email' name='email' id='email' for='email'
                        required>Email</x-base.input>
                    <x-base.input type='tel' name='tel' id='tel' for='tel'>Numer
                        telefonu</x-base.input>
                    @error('tel')
                        <p class="text-red-600 text-xs">Numer telefonu nie może zawierać liter</p>
                    @enderror
                    <x-base.textarea name='content' id='content' for='content' required>Wiadomość</x-base.textarea>



                    <button type="submit"
                        class="border py-4 px-10 uppercase text-sm font-semibold  duration-300 border-primary-400 bg-primary-400 text-fontLight hover:bg-secondary-200 mt-6">Wyślij</button>

                </form>
        </div>
        @endif

        {{-- img --}}
        @if (!isset($formSubmitted))
            <div class="h-full lg:ml-10 xl:ml-20 order-1 lg:order-none"><img
                    src="{{ asset('assets/images/desktop/willaPodScietaLipa-33.jpg') }}" alt=""
                    class="w-full h-full max-h-[300px] lg:max-h-none object-cover lg:min-h-[600px]"></div>
        @endif
    </div>
    {{-- img --}}
    @if (isset($formSubmitted))
        <div class="h-full lg:ml-10 xl:ml-20 order-1 lg:order-none"><img
                src="{{ asset('assets/images/desktop/willaPodScietaLipa-33.jpg') }}" alt=""
                class="w-full h-full max-h-[300px] lg:max-h-none object-cover lg:min-h-[600px]"></div>
    @endif

</x-base.section>
