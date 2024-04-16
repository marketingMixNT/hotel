<footer class="bg-secondary-400">

    <div class="max-w-screen-lg mx-auto py-16 ">
        <div class="grid grid-cols-3">


            {{-- SOCIAL --}}
            <div class="flex flex-col justify-start gap-6">
                <h2 class="text-white text-xl font-JazminThin">Znajdź nas</h2>
                <div class="flex  items-center gap-4">
                    <a href=""><img src="{{ asset('assets/icons/facebook.svg') }}" alt="" class="w-5"></a>
                    <a href="">

                        <img src="{{ asset('assets/icons/instagram.svg') }}" alt="" class="w-5">
                    </a>
                    <a href="">

                        <img src="{{ asset('assets/icons/tripadvisor.svg') }}" alt="" class="w-5">
                    </a>
                </div>
            </div>
            {{-- CENTER --}}
            <div class="text-center">
                <h2 class="text-2xl uppercase text-fontLight font-JazminExtraLight">Tatrzański Raj</h2>
            </div>
            {{-- CONTACT --}}
            <div class="flex flex-col justify-start items-end gap-6">
                <h2 class="text-white text-xl font-JazminThin">Kontakt</h2>

                <a href="" class="text-sm text-gray-300">ul.Testowa 123, 34-400 Nowy Targ</a>
                <a href="" class="text-sm text-gray-300">+48 123 456 789</a>
                <a href="" class="text-sm text-gray-300">test@gmail.com</a>
            </div>
        </div>
         {{-- LINKS --}}
        <hr class="w-full mx-auto mt-10 mb-5 border-0 border-t border-gray-400">
        <div class="flex justify-center items-center gap-12">

            <a href="" class="text-sm text-gray-300">Polityka Prywatności</a>
            <a href="" class="text-sm text-gray-300">Regulamin</a>
        </div>
        <hr class="w-full mx-auto my-5 border-0 border-t border-gray-400">
 {{-- AUTHORS --}}
 <div class="flex justify-between items-center mt-12">
<span class="text-white">
    &copy 2024 Tatrzanski Raj

</span>
<a href=""><img src="{{asset('assets/marketingmix.svg')}}" alt="" class="w-44"></a>
 </div>
    </div>

</footer>
