<?php /* Template Name: Sklep */ ?>

<?php get_header(); ?>

<header class="pb-20 min-h-[56.25rem] mt-[-9rem] pt-[14.625rem] xl:pt-32 flex flex-col lg:justify-center" style="background-image: linear-gradient(to left top,#62ffff,#00ebff,#00d5ff,#00bdff,#00a3ff,#6599ff,#958df7,#bb7fe8,#dd8dd9,#f0a0d0,#f8b7ce,#f9cfd5)">

    <div class="container mx-auto px-4 h-full">
        <div class="grid grid-cols-12 gap-4 h-full">
            <div class="col-span-12 lg:col-span-6 flex flex-col justify-center">
                <h1 class="text-2xl lg:text-3xl text-white font-bold mb-2"><?php echo get_field('shop_header_title'); ?></h1>
                <p class="text-2xl lg:text-3xl text-white font-light"><?php echo get_field('shop_header_description'); ?></p>
                <a class="btn-outline lg:text-md mt-8" href="<?php echo get_field('shop_header_url') ?>"><?php echo get_field('shop_header_link') ?></a>
            </div>
            <div class="col-span-12 lg:col-span-6">
                <img src="/wp-content/themes/openapp/img/screen_9.webp" width="716" height="686" alt="aplikacja openapp" class="wmu-preview-img mt-8 lg:mt-0">
            </div>
        </div>
    </div>
</header>

<main>
    <section class="py-20 lg:py-32">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-12 gap-4">
                <div class="col-span-12">
                    <h1 class="text-primary text-xl font-bold text-center lg:text-left lg:text-2xl mb-2"><?php echo get_field('shop_s1_title'); ?></h1>
                    <p class="text-xl font-light text-center lg:text-left lg:text-2xl lg:mb-32"><?php echo get_field('shop_s1_description'); ?></p>
                </div>
            </div>
            <div class="grid grid-cols-12 gap-4">
                <div class="col-span-12 lg:col-span-4">
                    <div class="arrow-wrapper mt-8 lg:mt-0 mb-4 mx-auto lg:mx-0">
                        <div class="arrow arrow--down arrow--down-lg-right"></div>
                    </div>
                    <h2 class="text-md lg:text-xl font-bold text-primary text-center lg:text-left mb-2"><?php echo get_field('shop_s1_col1_title'); ?></h2>
                    <p class="text-center font-light lg:text-left"><?php echo get_field('shop_s1_col1_description'); ?></p>
                </div>
                <div class="col-span-12 lg:col-span-4">
                    <div class="arrow-wrapper mt-8 lg:mt-0 mb-4 mx-auto lg:mx-0">
                        <div class="arrow arrow--down arrow--down-lg-right"></div>
                    </div>
                    <h2 class="text-md font-bold text-primary text-center lg:text-left lg:text-xl mb-2"><?php echo get_field('shop_s1_col1_title'); ?></h2>
                    <p class="text-center font-light lg:text-left"><?php echo get_field('shop_s1_col1_description'); ?></p>
                </div>
                <div class="col-span-12 lg:col-span-4">
                    <div class="arrow-wrapper mt-8 lg:mt-0 mb-4 mx-auto lg:mx-0">
                        <div class="arrow arrow--down arrow--down-lg-right"></div>
                    </div>
                    <h2 class="text-md font-bold text-primary text-center lg:text-left lg:text-xl mb-2"><?php echo get_field('shop_s1_col3_title'); ?></h2>
                    <p class="text-center font-light lg:text-left"><?php echo get_field('shop_s1_col3_description'); ?></p>
                </div>
            </div>
        </div>
    </section>

    <div class="container mx-auto px-4">
        <div class="grid grid-cols-12 gap-4">
            <div class="col-span-12 lg:col-span-6">
                <section class="flex flex-col p-8 lg:p-20 rounded-xl min-h-[450px] lg:min-h-[700px] bg-grey bg-no-repeat bg-right-bottom">
                    <h1 class="text-md lg:text-2xl font-bold text-primary mb-4"><?php echo get_field('shop_box1_title'); ?></h1>
                    <div class="text-sm lg:text-lg font-light"><?php echo get_field('shop_box1_description_1'); ?></div>
                    <div class="text-[100px] lg:text-[180px] font-light text-primary mb-4"><?php echo get_field('shop_box1_commision'); ?></div>
                    <div class="text-sm lg:text-lg font-light"><?php echo get_field('shop_box1_description_2'); ?></div>
                </section>
            </div>
            <div class="col-span-12 lg:col-span-6">
                <section class="flex flex-col p-8 lg:p-20 rounded-xl min-h-[450px] lg:min-h-[700px] bg-primary bg-percent bg-blend-multiply bg-no-repeat bg-bottom bg-origin-content">
                    <h1 class="text-md lg:text-2xl text-white font-bold mb-4"><?php echo get_field('shop_box2_title'); ?></h1>
                    <div class="text-sm lg:text-lg text-white font-light"><?php echo get_field('shop_box2_description'); ?></div>
                    <a href="/dla-sklepu/kalkulator" class="btn-outline mt-8">Przelicz konwersję</a>
                </section>
            </div>
        </div>
    </div>

    <section class="py-20 lg:py-32">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-12 gap-4">
                <div class="col-span-12 lg:col-span-6 flex flex-col justify-center">
                    <h1 class="text-md lg:text-2xl text-primary font-bold"><?php echo get_field('shop_s2_title'); ?></h1>
                    <p class="text-md lg:text-2xl text-primary font-light mb-4"><?php echo get_field('shop_s2_description_1'); ?></p>
                    <p class="text-sm lg:text-md font-light mb-4"><?php echo get_field('shop_s2_description_2'); ?></p>
                    <a href="<?php echo get_field('shop_s2_url'); ?>" class="text-sm lg:text-md text-primary font-bold w-fit mt-4">
                        <?php echo get_field('shop_s2_link'); ?>
                        <div class="arrow-wrapper arrow-wrapper--box arrow-wrapper--small inline-flex ml-1 mt-8 lg:mt-0 mb-4">
                            <div class="arrow arrow--small arrow--box-right"></div>
                        </div>
                    </a>
                </div>
                <div class="col-span-12 lg:col-span-6">
                    <img src="/wp-content/themes/openapp/img/screen_6.webp" alt="aplikacja openapp" class="">
                </div>
            </div>
        </div>
    </section>

    <section class="py-32 bg-grey-image bg-grey-image">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-12 gap-4">
                <div class="col-span-12 lg:col-span-6 flex flex-col justify-center">
                    <h1 class="text-md lg:text-2xl text-primary lg:text-black font-bold mb-2"><?php echo get_field('shop_s3_title'); ?></h1>
                    <p class="text-md lg:text-2xl font-light mb-4"><?php echo get_field('shop_s3_description'); ?></p>
                    <a href="/dla-sklepu/o-nas" class="text-sm lg:text-md text-primary font-bold w-fit mt-4">
                        Dowiedz się więcej
                        <div class="arrow-wrapper arrow-wrapper--box arrow-wrapper--small inline-flex ml-1 mt-8 lg:mt-0 mb-4">
                            <div class="arrow arrow--small arrow--box-right"></div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 lg:py-32">
        <?php get_template_part("template-parts/shop-upper-footer"); ?>
    </section>
</main>

<?php get_footer(); ?>