<?php /* Template Name: Kontakt */ ?>

<?php get_header(); ?>

<header class="py-32 mt-[-6rem] pt-[15.625rem] xl:pt-[14rem] relative">
    <div class="absolute h-full max-h-[500px] w-full top-0" style="background: linear-gradient(to top, rgb(255, 255, 255) 0%,rgba(255,255,255,0) 70%);"></div>
    <div class="absolute h-full max-h-[500px] w-full top-0 z-[-1]" style="background-image: linear-gradient(to left top,#62ffff,#00ebff,#00d5ff,#00bdff,#00a3ff,#6599ff,#958df7,#bb7fe8,#dd8dd9,#f0a0d0,#f8b7ce,#f9cfd5);"></div>
    <div class="container mx-auto px-4 relative">
        <div class="grid grid-cols-12 gap-4">
            <div class="col-span-12 lg:col-span-6 flex flex-col justify-center">
                <h1 class="text-2xl lg:text-3xl font-bold mb-4"><?php echo get_field('contact_header_title') ?></h1>
                <p class="text-2xl lg:text-3xl font-light"><?php echo get_field('contact_header_description') ?></p>
            </div>
        </div>
    </div>
</header>

<section class="pb-32 xl:pb-40">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-12 gap-4">
            <div class="col-span-12 lg:col-span-6">
                <h1 class="text-md font-bold mb-4"><?php echo get_field('contact_s1_title_1') ?></h1>
                <div class="flex items-center mb-2">
                    <svg class="w-[22px] mr-2" width="21" height="21" fill="none" xmlns="http://www.w3.org/2000/svg"><path clip-rule="evenodd" d="M9.842 11.06c3.99 3.989 4.894-.625 7.434 1.913 2.449 2.448 3.856 2.939.754 6.04-.389.312-2.858 4.07-11.535-4.605-8.678-8.676-4.923-11.147-4.61-11.536 3.11-3.11 3.591-1.694 6.04.754 2.54 2.539-2.072 3.447 1.917 7.435Z" stroke="#6377FE" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    <a class="leading-[1.2] text-md font-light" href="tel:<?php echo str_replace(" ", "", get_field('config_phone', 24)); ?>"><?php echo get_field('config_phone', 24) ?></a>
                </div>
                <div class="flex items-center mb-2">
                    <svg class="w-[22px] mr-2" width="18" height="20" fill="none" xmlns="http://www.w3.org/2000/svg"><path clip-rule="evenodd" d="M7.03 2.383a2.245 2.245 0 0 0-3.116-.303L2.181 3.427a2.142 2.142 0 0 0-.72 2.984C1.495 6.466 11 18.353 11 18.353a1.7 1.7 0 0 0 1.309.633l3.639.045.82-3.47c.115-.488 0-1-.316-1.395L7.03 2.383Z" stroke="#6377FE" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    <a class="block leading-[1.2] text-md font-light" href="mailto:<?php echo get_field('config_email', 24) ?>"><?php echo get_field('config_email', 24) ?></a>
                </div>
                <div class="flex items-center">
                    <svg class="w-[22px] mr-2 self-start" width="21" height="22" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M7.468 19.866v-3.067c0-.78.636-1.414 1.424-1.42h2.886c.791 0 1.433.636 1.433 1.42v3.076c0 .662.534 1.204 1.203 1.22h1.924c1.918 0 3.473-1.54 3.473-3.439v0-8.724a2.44 2.44 0 0 0-.962-1.905l-6.58-5.247a3.18 3.18 0 0 0-3.945 0L1.773 7.037A2.42 2.42 0 0 0 .81 8.942v8.714c0 1.899 1.554 3.438 3.472 3.438h1.925c.685 0 1.24-.55 1.24-1.228v0" stroke="#6377FE" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    <div class="text-md font-light">
                        <p><?php echo get_field('config_company', 24) ?></p>
                        <p><?php echo get_field('config_street', 24) ?></p>
                        <p><?php echo get_field('config_city', 24) ?></p>
                    </div>
                </div>
                <h2 class="text-md font-bold mt-8 mb-4"><?php echo get_field('contact_s1_title_2') ?></h2>
                <a href="<?php echo get_field('config_linkedin', 24) ?>" target="_blank">
                    <svg width="33" height="34" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M29.071.83H3.93A3.93 3.93 0 0 0 0 4.757V29.9a3.93 3.93 0 0 0 3.929 3.93H29.07A3.93 3.93 0 0 0 33 29.9V4.759A3.93 3.93 0 0 0 29.071.829ZM10.214 13.4v14.93H5.5V13.4h4.714ZM5.5 9.056c0-1.1.943-1.941 2.357-1.941 1.414 0 2.302.84 2.357 1.94 0 1.1-.88 1.988-2.357 1.988-1.414 0-2.357-.887-2.357-1.987Zm22 19.273h-4.714v-7.857c0-1.572-.786-3.143-2.75-3.174h-.063c-1.902 0-2.687 1.618-2.687 3.174v7.857H12.57V13.4h4.715v2.012S18.802 13.4 21.85 13.4c3.119 0 5.649 2.146 5.649 6.49v8.44Z" fill="#6377FE"/></svg>
                </a>
            </div>
            <div class="col-span-12 lg:col-span-6 mt-10 xl:mt-0">
                <?php echo do_shortcode('[contact-form-7 id="189" title="Kontakt"]'); ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
