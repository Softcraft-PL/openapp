<?php get_header(); ?>

    <header class="pb-20 min-h-[56.25rem] mt-[-9rem] pt-[14.625rem] xl:pt-32 flex flex-col lg:justify-center" style="background-image: linear-gradient(to left top,#62ffff,#00ebff,#00d5ff,#00bdff,#00a3ff,#6599ff,#958df7,#bb7fe8,#dd8dd9,#f0a0d0,#f8b7ce,#f9cfd5)">

        <div class="navbar__switcher navbar__switcher--mobile mb-8">
            <a href="/" class="navbar__switcher-button navbar__switcher-button--client">Dla klienta</a>
            <a href="/dla-sklepu/" class="navbar__switcher-button navbar__switcher-button--shop">Dla sklepu</a>
        </div>

        <div class="container mx-auto px-4 h-full">
            <div class="grid grid-cols-12 gap-4 h-full">
                <div class="col-span-12 lg:col-span-6 flex flex-col justify-center">
                    <h1 class="text-2xl lg:text-3xl text-white font-bold mb-2"><?php echo get_field('homepage_header_title') ?></h1>
                    <p class="text-2xl lg:text-3xl text-white font-light"><?php echo get_field('homepage_header_description') ?></p>
                    <a class="btn-outline lg:text-md mt-8" href="<?php echo get_field('homepage_header_url') ?>"><?php echo get_field('homepage_header_link') ?></a>
                </div>
                <div class="col-span-12 lg:col-span-6">
                    <?php if(get_field('homepage_header_img')['url']): ?>
                    <img src="<?php echo get_field('homepage_header_img')['url']; ?>" width="716" height="686" alt="aplikacja openapp" class="wmu-preview-img mt-8 lg:mt-0">
                    <?php else: ?>
                    <img src="/wp-content/themes/openapp/img/hero.webp" width="716" height="686" alt="aplikacja openapp" class="wmu-preview-img mt-8 lg:mt-0">
                    <?php endif ?>
                </div>
            </div>
        </div>
    </header>

    <main>
        <section class="py-20 lg:py-32">
            <div class="container mx-auto px-4">
                <div class="grid grid-cols-12 gap-4">
                    <div class="col-span-12">
                        <h1 class="text-primary text-md font-bold text-center lg:text-left lg:text-2xl mb-2"><?php echo get_field('homepage_s1_title') ?></h1>
                        <p class="text-md font-light text-center lg:text-left lg:text-2xl mb-8"><?php echo get_field('homepage_s1_description') ?></p>
                    </div>
                </div>
                <div class="grid grid-cols-12 gap-4">
                    <div class="col-span-12 lg:col-span-6 flex flex-col lg:flex-row items-center justify-center lg:justify-end">
                        <h2 class="text-md font-bold text-center lg:text-right lg:text-2xl"><?php echo get_field('homepage_s1_image_title_1') ?></h2>
                        <div class="arrow-wrapper mt-8 lg:mt-0 lg:ml-10">
                            <div class="arrow arrow--down arrow--down-lg-right"></div>
                        </div>
                    </div>
                    <div class="col-span-12 lg:col-span-6">
                        <?php if(get_field('homepage_s1_img_1')['url']): ?>
                        <img src="<?php echo get_field('homepage_s1_img_1')['url'] ?>" width="716" height="686" alt="aplikacja openapp – ekran 1">
                        <?php else: ?>
                        <img src="/wp-content/themes/openapp/img/screen_1.webp" width="716" height="686" alt="aplikacja openapp – ekran 1">
                        <?php endif ?>
                    </div>
                </div>
                <div class="grid grid-cols-12 gap-4">
                    <div class="col-span-12 lg:col-span-6 flex flex-col lg:flex-row items-center justify-center lg:justify-start">
                        <div class="arrow-wrapper mb-8 lg:mb-0 mt-2 lg:mt-0 lg:mr-10">
                            <div class="arrow arrow--down arrow--down-lg-left"></div>
                        </div>
                        <h2 class="text-md font-bold text-center lg:text-left lg:text-2xl"><?php echo get_field('homepage_s1_image_title_2') ?></h2>
                    </div>
                    <div class="col-span-12 lg:col-span-6 lg:row-start-1">
                        <?php if(get_field('homepage_s1_img_2')['url']): ?>
                        <img src="<?php echo get_field('homepage_s1_img_2')['url'] ?>" width="716" height="686" alt="aplikacja openapp – ekran 2">
                        <?php else: ?>
                        <img src="/wp-content/themes/openapp/img/screen_2.webp" width="716" height="686" alt="aplikacja openapp – ekran 2">
                        <?php endif ?>
                    </div>
                </div>
                <div class="grid grid-cols-12 gap-4">
                    <div class="col-span-12 lg:col-span-6 flex flex-col lg:flex-row items-center justify-center lg:justify-end">
                        <h2 class="text-md font-bold text-center lg:text-right lg:text-2xl"><?php echo get_field('homepage_s1_image_title_3') ?></h2>
                        <div class="arrow-wrapper mt-8 lg:mt-0 lg:ml-10">
                            <div class="arrow arrow--down arrow--down-lg-right"></div>
                        </div>
                    </div>
                    <div class="col-span-12 lg:col-span-6">
                        <?php if(get_field('homepage_s1_img_3')['url']): ?>
                        <img src="<?php echo get_field('homepage_s1_img_3')['url'] ?>" width="716" height="686" alt="aplikacja openapp – ekran 3">
                        <?php else: ?>
                        <img src="/wp-content/themes/openapp/img/screen_3.webp" width="716" height="686" alt="aplikacja openapp – ekran 3">
                        <?php endif ?>
                    </div>
                </div>
                <div class="grid grid-cols-12 gap-4">
                    <div class="col-span-12 lg:col-span-6 flex flex-col lg:flex-row items-center justify-center lg:justify-start">
                        <div class="arrow-wrapper mb-8 lg:mb-0 mt-2 lg:mt-0 lg:mr-10">
                            <div class="arrow arrow--down arrow--down-lg-left"></div>
                        </div>
                        <h2 class="text-md font-bold text-center lg:text-left lg:text-2xl"><?php echo get_field('homepage_s1_image_title_4') ?></h2>
                    </div>
                    <div class="col-span-12 lg:col-span-6 lg:row-start-1">
                        <?php if(get_field('homepage_s1_img_4')['url']): ?>
                        <img src="<?php echo get_field('homepage_s1_img_4')['url'] ?>" width="716" height="686" alt="aplikacja openapp – ekran 4">
                        <?php else: ?>
                        <img src="/wp-content/themes/openapp/img/screen_4.webp" width="716" height="686" alt="aplikacja openapp – ekran 4">
                        <?php endif ?>
                    </div>
                </div>
            </div>
        </section>

        <section class="relative py-20 lg:py-32" style="background: linear-gradient(90deg, rgba(244,191,182,1) 0%, rgba(248,163,191,1) 33%, rgba(163,158,249,1) 100%)">
            <div class="container mx-auto px-4">
                <h1 class="text-md font-bold text-center lg:text-left lg:text-2xl mb-2"><?php echo get_field('homepage_s2_title') ?></h1>
                <p class="text-md font-light text-center lg:text-left lg:text-2xl mb-8"><?php echo get_field('homepage_s2_description') ?></p>
                <div class="grid grid-cols-12 gap-4">
                    <div class="col-span-12 xl:col-span-4">
                        <div class="py-8 text-md text-center xl:text-left">
                            <div class="font-bold text-4xl">1</div>
                            <div class="font-light xl:max-w-[350px]"><?php echo get_field('homepage_s2_text_1'); ?></div>
                        </div>
                        <div class="py-8 text-md text-center xl:text-left">
                            <div class="font-bold text-4xl">2</div>
                            <div class="font-light xl:max-w-[350px]"><?php echo get_field('homepage_s2_text_2'); ?></div>
                        </div>
                        <div class="py-8 text-md text-center xl:text-left">
                            <div class="font-bold text-4xl">3</div>
                            <div class="font-light xl:max-w-[350px]"><?php echo get_field('homepage_s2_text_3'); ?></div>
                        </div>
                    </div>
                    <div class="col-span-12 xl:col-span-8">
                        <img width="500" height="656" class="z-10 xl:h-auto xl:w-[500px] xl:absolute xl:translate-y-[-50%] top-[482px] right-[380px] 2xl:right-[520px] mx-auto xl:mx-0" src="/wp-content/themes/openapp/img/phone.webp" alt="aplikacja openapp – telefon">
                        <img width="500" height="656" style="transition: opacity 1s;" class="animation absolute px-[15px] xl:px-0 max-h-[656px] z-10 xl:translate-y-[-50%] xl:h-auto xl:w-[500px] w-auto bottom-[80px] lg:bottom-[128px] xl:bottom-[initial] xl:top-[482px] translate-x-[-50%] left-[50%] xl:left-[initial] xl:right-[130px] 2xl:right-[270px]" src="/wp-content/themes/openapp/img/animation1.webp" alt="aplikacja openapp – animacja 1">
                        <img width="500" height="656" style="transition: opacity 1s;" class="animation absolute px-[15px] xl:px-0 max-h-[656px] z-10 xl:translate-y-[-50%] xl:h-auto xl:w-[500px] w-auto bottom-[80px] lg:bottom-[128px] xl:bottom-[initial] xl:top-[482px] translate-x-[-50%] left-[50%] xl:left-[initial] xl:right-[130px] 2xl:right-[270px]" src="/wp-content/themes/openapp/img/animation2.webp" alt="aplikacja openapp – animacja 2">
                        <img width="500" height="656" style="transition: opacity 1s;" class="animation absolute px-[15px] xl:px-0 max-h-[656px] z-10 xl:translate-y-[-50%] xl:h-auto xl:w-[500px] w-auto bottom-[80px] lg:bottom-[128px] xl:bottom-[initial] xl:top-[482px] translate-x-[-50%] left-[50%] xl:left-[initial] xl:right-[130px] 2xl:right-[270px]" src="/wp-content/themes/openapp/img/animation3.webp" alt="aplikacja openapp – animacja 3">
                        <img width="500" height="656" style="transition: opacity 1s;" class="animation absolute px-[15px] xl:px-0 max-h-[656px] z-10 xl:translate-y-[-50%] xl:h-auto xl:w-[500px] w-auto bottom-[80px] lg:bottom-[128px] xl:bottom-[initial] xl:top-[482px] translate-x-[-50%] left-[50%] xl:left-[initial] xl:right-[130px] 2xl:right-[270px]" src="/wp-content/themes/openapp/img/animation4.webp" alt="aplikacja openapp – animacja 4">
                        <img width="830" height="748" class="hidden xl:block xl:absolute lg:right-0 xl:translate-y-[-50%] w-full xl:right-[-120px] 2xl:right-0 xl:top-[446px] xl:max-w-fit" src="/wp-content/themes/openapp/img/screen_10.webp" width="716" height="686" alt="aplikacja openapp – ekrany">

                        <div class="cursor hidden xl:block xl:right-[524px] xl:bottom-[371px] 2xl:right-[662px] 2xl:bottom-[372px]"><div class="tap"></div></div>
                        <div class="cursor hidden z-[-1]"><div class="tap"></div></div>
                        <div class="cursor hidden xl:block xl:right-[612px] xl:bottom-[228px] 2xl:right-[750px] 2xl:bottom-[228px]"><div class="tap"></div></div>
                    </div>
                </div>
            </div>
        </section>

        <div class="container mx-auto px-4 py-20 lg:py-32">
            <div class="grid grid-cols-12 gap-4">
                <div class="col-span-12 lg:col-span-6">
                    <section class="flex flex-col p-8 lg:p-20 rounded-xl min-h-[450px] lg:min-h-[576px] 2xl:min-h-[600px] bg-grey bg-screen5 bg-contain bg-no-repeat bg-right-bottom">
                        <h1 class="text-md lg:text-2xl font-bold text-primary mb-4"><?php echo get_field('homepage_box1_title') ?></h1>
                        <div class="text-sm lg:text-md 2xl:text-lg font-light"><?php echo get_field('homepage_box1_description') ?></div>
                        <a href="/dla-klienta/anonimowosc" class="text-sm lg:text-md 2xl:text-lg text-primary font-bold w-fit mt-4 relative">
                            Dowiedz się więcej
                            <div class="arrow-wrapper arrow-wrapper--box arrow-wrapper--small inline-flex ml-1 mt-8 mb-4 lg:absolute top-1.5 right-[-30px] md:mt-[-1px] 2xl:mt-[3px]">
                                <div class="arrow arrow--small arrow--box-right"></div>
                            </div>
                        </a>
                    </section>
                </div>
                <div class="col-span-12 lg:col-span-6">
                    <section class="flex flex-col p-8 lg:p-20 rounded-xl min-h-[450px] lg:min-h-[576px] 2xl:min-h-[600px] bg-about bg-no-repeat bg-cover">
                        <h1 class="text-md lg:text-2xl text-white font-bold mb-4"><?php echo get_field('homepage_box2_title') ?></h1>
                        <div class="text-sm lg:text-md 2xl:text-lg text-white lg:font-light"><?php echo get_field('homepage_box2_description') ?></div>

                        <a href="/dla-klienta/o-nas" class="text-sm lg:text-md 2xl:text-lg text-white font-bold w-fit mt-4 relative">
                            Dowiedz się więcej
                            <div class="arrow-wrapper arrow-wrapper--white arrow-wrapper--box arrow-wrapper--small inline-flex ml-1 mt-8 mb-4 lg:absolute top-1.5 right-[-30px] md:mt-[-1px] 2xl:mt-[3px]">
                                <div class="arrow arrow--white arrow--small arrow--box-right"></div>
                            </div>
                        </a>
                    </section>
                </div>
            </div>
        </div>

        <section class="pb-20 lg:pb-32">
            <?php get_template_part("template-parts/client-upper-footer"); ?>
        </section>
    </main>

    <script>
        let slideIndex = 0;
        carousel();

        function carousel() {
            let i;
            let x = document.getElementsByClassName("animation");
            let cursor = document.getElementsByClassName("cursor");
            let tap = document.getElementsByClassName("tap");
            for (i = 0; i < x.length; i++) {
                x[i].style.opacity = "0";
                if(cursor[i] && tap[i]) {
                    cursor[i].style.opacity = "0";
                    tap[i].style.opacity = "0";
                    tap[i].classList.remove("tap--1");
                }
            }
            slideIndex++;
            if (slideIndex > x.length) {slideIndex = 1}
            x[slideIndex-1].style.opacity = "1";
            if(cursor[slideIndex-1] && tap[slideIndex-1]) {
                cursor[slideIndex - 1].style.opacity = "1";
                tap[slideIndex - 1].style.opacity = "1";
                tap[slideIndex - 1].classList.add("tap--1");
            }
            setTimeout(carousel, 2000); // Change image every 2 seconds
        }
    </script>

<?php get_footer(); ?>