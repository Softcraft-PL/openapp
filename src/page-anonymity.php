<?php /* Template Name: Anonimowość */ ?>

<?php get_header(); ?>

<header class="py-32 mt-[-6rem] pt-[15.625rem] xl:pt-[14rem] relative">
    <div class="absolute h-full max-h-[500px] w-full top-0" style="background: linear-gradient(to top, rgb(255, 255, 255) 0%,rgba(255,255,255,0) 70%);"></div>
    <div class="absolute h-full max-h-[500px] w-full top-0 z-[-1]" style="background-image: linear-gradient(to left top,#62ffff,#00ebff,#00d5ff,#00bdff,#00a3ff,#6599ff,#958df7,#bb7fe8,#dd8dd9,#f0a0d0,#f8b7ce,#f9cfd5);"></div>
    <div id="description" class="container mx-auto px-4 h-full relative">
        <div class="grid grid-cols-12 gap-4 h-full">
            <div class="col-span-12 lg:col-span-6 flex flex-col justify-center">
                <h1 class="text-2xl lg:text-3xl font-bold"><?php echo get_field('anonymity_header_title') ?></h1>
                <p class="text-2xl lg:text-3xl font-bold text-green mt-4"><?php echo get_field('anonymity_header_description_1') ?></p>
                <p class="text-md lg:text-lg font-light mb-12 mt-4"><?php echo get_field('anonymity_header_description_2') ?></p>
                <div class="flex flex-col items-center lg:items-start mt-8 mb-12">
                    <div class="w-16 min-w-[64px] h-16 flex items-center justify-center rounded-full border-green border-2 lg:mr-8 mb-4 lg:mb-0"><span class="checkmark"></span></div>
                    <h2 class="text-xl lg:text-lg text-green text-center lg:text-left mt-4 mb-4"><?php echo get_field('anonymity_header_box1_header') ?></h2>
                    <p class="text-md lg:text-lg text-center lg:text-left font-light"><?php echo get_field('anonymity_header_box1_description_1') ?></p>
                    <p class="text-sm text-center lg:text-left font-light mt-4"><?php echo get_field('anonymity_header_box1_description_2') ?></p>
                </div>
                <div class="flex flex-col items-center lg:items-start mt-8 mb-12">
                    <div class="w-16 min-w-[64px] h-16 flex items-center justify-center rounded-full border-green border-2 lg:mr-8 mb-4 lg:mb-0"><span class="checkmark"></span></div>
                    <h2 class="text-xl lg:text-lg text-green text-center lg:text-left mt-4 mb-4"><?php echo get_field('anonymity_header_box2_header') ?></h2>
                    <p class="text-md lg:text-lg text-center lg:text-left font-light"><?php echo get_field('anonymity_header_box2_description_1') ?></p>
                </div>
                <div class="flex flex-col items-center lg:items-start mt-8 mb-12">
                    <div class="w-16 min-w-[64px] h-16 flex items-center justify-center rounded-full border-green border-2 lg:mr-8 mb-4 lg:mb-0"><span class="checkmark"></span></div>
                    <h2 class="text-xl lg:text-lg text-green text-center lg:text-left mt-4 mb-4"><?php echo get_field('anonymity_header_box3_header') ?></h2>
                    <p class="text-md lg:text-lg text-center lg:text-left font-light"><?php echo get_field('anonymity_header_box3_description_1') ?></p>
                </div>
                <div class="flex flex-col items-center lg:items-start mt-8 mb-12">
                    <div class="w-16 min-w-[64px] h-16 flex items-center justify-center rounded-full border-green border-2 lg:mr-8 mb-4 lg:mb-0"><span class="checkmark"></span></div>
                    <h2 class="text-xl lg:text-lg text-green text-center lg:text-left mt-4 mb-4"><?php echo get_field('anonymity_header_box4_header') ?></h2>
                    <p class="text-md lg:text-lg text-center lg:text-left font-light"><?php echo get_field('anonymity_header_box4_description_1') ?></p>
                    <p class="text-sm text-center lg:text-left font-light mt-4"><?php echo get_field('anonymity_header_box4_description_2') ?></p>
                </div>
            </div>
            <div class="col-span-12 lg:col-span-6 relative">
                <?php if(get_field('anonymity_header_img')['url']): ?>
                    <img src="<?php echo get_field('anonymity_header_img')['url']; ?>" class="wmu-preview-img" alt="aplikacja openapp – ecommerce">
                    <?php else: ?>
                    <img src="/wp-content/themes/openapp/img/screen_8.webp" class="wmu-preview-img" alt="aplikacja openapp – ecommerce">
                <?php endif ?>
            </div>
        </div>
    </div>

    <div id="box" class="container mx-auto px-4 mt-16 bg-grey sm:rounded-xl">
        <div class="grid grid-cols-12 gap-4">
            <div class="col-span-12 text-center p-8 lg:p-20">
                <h3 class="text-xl lg:text-xl font-bold mb-2"><?php echo get_field('anonymity_header_container_header') ?></h3>
                <p class="text-xl lg:text-xl font-light mb-4"><?php echo get_field('anonymity_header_container_description') ?></p>
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