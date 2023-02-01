<?php /* Template Name: Sklep | O nas */ ?>

<?php get_header(); ?>


<header class="py-32 mt-[-6rem] pt-[15.625rem] xl:pt-[14rem] relative">
    <div class="absolute h-full max-h-[500px] w-full top-0" style="background: linear-gradient(to top, rgb(255, 255, 255) 0%,rgba(255,255,255,0) 70%);"></div>
    <div class="absolute h-full max-h-[500px] w-full top-0 z-[-1]" style="background-image: linear-gradient(to left top,#62ffff,#00ebff,#00d5ff,#00bdff,#00a3ff,#6599ff,#958df7,#bb7fe8,#dd8dd9,#f0a0d0,#f8b7ce,#f9cfd5);"></div>
    <div class="container mx-auto px-4 h-full relative z-10">
        <div class="grid grid-cols-12 gap-4 h-full">
            <div class="col-span-12 lg:col-span-6 flex flex-col justify-center">
                <h1 class="text-2xl lg:text-3xl font-bold"><?php echo get_field('about_shop_header_title_1'); ?></h1>
                <p class="text-2xl lg:text-3xl font-bold mb-12 mt-4"><?php echo get_field('about_shop_header_title_2'); ?></p>
                <div class="flex flex-col lg:flex-row items-center mb-12">
                    <div class="w-16 min-w-[64px] h-16 flex items-center justify-center rounded-full border-green border-2 lg:mr-8 mb-4 lg:mb-0"><span class="checkmark"></span></div>
                    <p class="text-md lg:text-lg text-center lg:text-left"><?php echo get_field('about_shop_header_description_1'); ?></p>
                </div>
                <div class="flex flex-col lg:flex-row items-center mb-12">
                    <div class="w-16 min-w-[64px] h-16 flex items-center justify-center rounded-full border-green border-2 lg:mr-8 mb-4 lg:mb-0"><span class="checkmark"></span></div>
                    <p class="text-md lg:text-lg text-center lg:text-left"><?php echo get_field('about_shop_header_description_2'); ?></p>
                </div>
                <div class="flex flex-col lg:flex-row items-center mb-12">
                    <div class="w-16 min-w-[64px] h-16 flex items-center justify-center rounded-full border-green border-2 lg:mr-8 mb-4 lg:mb-0"><span class="checkmark"></span></div>
                    <p class="text-md lg:text-lg text-center lg:text-left"><?php echo get_field('about_shop_header_description_3'); ?></p>
                </div>
            </div>
            <div class="col-span-12 lg:col-span-6">
                <?php if(get_field('about_shop_header_img')['url']): ?>
                    <img src="<?php echo get_field('about_shop_header_img')['url']; ?>" class="wmu-preview-img ml-auto" alt="aplikacja openapp – ecommerce">
                    <?php else: ?>
                    <img src="/wp-content/themes/openapp/img/screen_7.webp" class="wmu-preview-img ml-auto" alt="aplikacja openapp – ecommerce">
                <?php endif ?>
            </div>
        </div>
    </div>
</header>

<main>
    <section class="py-32 bg-grey-image bg-grey-image-2">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-12 gap-4">
                <div class="col-span-12 lg:col-span-6 flex flex-col justify-center">
                    <h1 class="text-md lg:text-2xl text-primary lg:text-black font-bold mb-2"><?php echo get_field('about_shop_s1_title'); ?></h1>
                    <p class="text-md lg:text-2xl font-light mb-4"><?php echo get_field('about_shop_s1_description_1'); ?></p>
                    <p class="text-sm font-light"><?php echo get_field('about_shop_s1_description_2'); ?></p>

                </div>
            </div>
        </div>
    </section>

    <section class="py-32">
        <?php get_template_part("template-parts/shop-upper-footer"); ?>
    </section>
</main>

<?php get_footer(); ?>