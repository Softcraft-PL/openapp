<?php /* Template Name: Anonimowość */ ?>

<?php get_header(); ?>

<header class="py-32 xl:pt-40 min-h-[56.25rem] mt-[-5.625rem] pt-[15.625rem]  bg-gradient-image bg-top lg:bg-left-top lg:bg-contain bg-no-repeat">
    <div class="container mx-auto px-4 h-full">
        <div class="grid grid-cols-12 gap-4 h-full">
            <div class="col-span-12 lg:col-span-6 flex flex-col justify-center">
                <h1 class="text-2xl lg:text-3xl font-bold">Przyzwyczailiśmy się do zostawiania swoich danych w każdym sklepie internetowym</h1>
                <p class="text-2xl lg:text-3xl font-bold text-green mt-4">OpenApp to zmienia!<br>Jak to możliwe?</p>
                <p class="text-md lg:text-lg font-light mb-12 mt-4">Kupujesz w pełni anonimowo, ponieważ sklep nie otrzymuje żadnych Twoich danych, a OpenApp umożliwia jednak zakup</p>
                <svg class="scale-75 lg:scale-100 mx-auto lg:ml-2 lg:mr-0 lg:mt-8 lg:mb-10" width="40" height="50" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M2.554 28.826 20 46.272l17.446-17.446M20 2.873v43.4" stroke="#32D64A" stroke-width="4" stroke-linecap="round"/></svg>
                <div class="flex flex-col items-center lg:items-start mt-8 mb-12">
                    <div class="w-16 min-w-[64px] h-16 flex items-center justify-center rounded-full border-green border-2 lg:mr-8 mb-4 lg:mb-0"><span class="checkmark"></span></div>
                    <h2 class="text-xl lg:text-lg text-green text-center lg:text-left mt-4 mb-4"><b>Anonimowe</b> — Imię i nazwisko</h2>
                    <p class="text-md lg:text-lg text-center lg:text-left font-light">Sklep nie otrzymuje, ani też nie potrzebuje Twojego imienia i nazwiska do realizacji zamówienia</p>
                    <p class="text-sm text-center lg:text-left font-light mt-4">*Wszystkich transakcji dokonujesz na poziomie Twojego Portfela OpenApp</p>
                </div>
                <div class="flex flex-col items-center lg:items-start mt-8 mb-12">
                    <div class="w-16 min-w-[64px] h-16 flex items-center justify-center rounded-full border-green border-2 lg:mr-8 mb-4 lg:mb-0"><span class="checkmark"></span></div>
                    <h2 class="text-xl lg:text-lg text-green text-center lg:text-left mt-4 mb-4"><b>Anonimowy</b> — Adres e-mail</h2>
                    <p class="text-md lg:text-lg text-center lg:text-left font-light">Generujemy unikalny, który automatycznie przesyła wszystkie wiadomości ze sklepu na Twój prywatny adres</p>
                </div>
                <div class="flex flex-col items-center lg:items-start mt-8 mb-12">
                    <div class="w-16 min-w-[64px] h-16 flex items-center justify-center rounded-full border-green border-2 lg:mr-8 mb-4 lg:mb-0"><span class="checkmark"></span></div>
                    <h2 class="text-xl lg:text-lg text-green text-center lg:text-left mt-4 mb-4"><b>Anonimowy</b> — Numer telefonu</h2>
                    <p class="text-md lg:text-lg text-center lg:text-left font-light">Sklep może zadzwonić do Ciebie przez aplikację OpenApp, nie potrzebuje więc Twojego prywatnego numeru telefonu</p>
                </div>
                <div class="flex flex-col items-center lg:items-start mt-8 mb-12">
                    <div class="w-16 min-w-[64px] h-16 flex items-center justify-center rounded-full border-green border-2 lg:mr-8 mb-4 lg:mb-0"><span class="checkmark"></span></div>
                    <h2 class="text-xl lg:text-lg text-green text-center lg:text-left mt-4 mb-4"><b>Anonimowy</b>  — Adres dostawy</h2>
                    <p class="text-md lg:text-lg text-center lg:text-left font-light">Gdy adresem dostawy jest adres Paczkomatu lub innego Punktu odbioru</p>
                    <p class="text-sm text-center lg:text-left font-light mt-4">*W pełni anonimowe zakupy online możliwe są przy wykorzystaniu metody dostawy do Punktu Odbioru. W przypadku wyboru dostawy kurierem przekazujemy adres dostawy wraz z kontaktowym numerem telefonu.
                    </p>
                </div>
            </div>
            <div class="col-span-12 lg:col-span-6">
                <img src="/wp-content/themes/openapp/img/screen_8.webp" class="ml-auto" alt="aplikacja openapp – ecommerce">
            </div>
        </div>
    </div>
    <div class="container mx-auto px-4 mt-16 bg-grey sm:rounded-xl">
        <div class="grid grid-cols-12 gap-4">
            <div class="col-span-12 text-center p-8 lg:p-20">
                <h3 class="text-xl lg:text-xl font-bold mb-2">To takie proste!</h3>
                <p class="text-xl lg:text-xl font-light mb-4">Zakupy są bardziej wygodne niż wcześniej, a dodatkowo w pełni anonimowe</p>
            </div>
        </div>
    </div>
</header>

<main>
    <section class="pb-32">
        <?php get_template_part("template-parts/client-upper-footer"); ?>
    </section>
</main>

<?php get_footer(); ?>