<?php /* Template Name: Anonimowość */ ?>

<?php get_header(); ?>

<div class="absolute top-0 left-0 bg-gradient-image bg-left-top lg:bg-cover bg-no-repeat h-full max-h-[800px] w-full z-[-1]" ></div>

<header class="py-32 xl:pt-40 mt-[-5.625rem] pt-[15.625rem]">
    <div id="description" class="container mx-auto px-4 h-full">
        <div class="grid grid-cols-12 gap-4 h-full">
            <div class="col-span-12 lg:col-span-6 flex flex-col justify-center">
                <h1 class="text-2xl lg:text-3xl font-bold"><?php echo get_field('anonymity_header_title') ?></h1>
                <p class="text-2xl lg:text-3xl font-bold text-green mt-4"><?php echo get_field('anonymity_header_description_1') ?></p>
                <p class="text-md lg:text-lg font-light mb-12 mt-4"><?php echo get_field('anonymity_header_description_2') ?></p>
                <svg class="scale-75 lg:scale-100 mx-auto lg:ml-2 lg:mr-0 lg:mt-8 lg:mb-10" width="40" height="50" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M2.554 28.826 20 46.272l17.446-17.446M20 2.873v43.4" stroke="#32D64A" stroke-width="4" stroke-linecap="round"/></svg>
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
                <img src="/wp-content/themes/openapp/img/screen_8.webp" id="phone" class="wmu-preview-img lg:fixed mx-auto lg:ml-auto lg:mr-0 lg:max-w-[472px]" alt="aplikacja openapp – ecommerce">
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

<script>
    let boxPosition;
    let phonePosition;
    let fixed = false;
    let initialPhoneTopPosition = document.getElementById("phone").offsetTop;

    window.addEventListener('load', (event) => {
        boxPosition = getBoxPosition(document.getElementById("box"));
    });

    window.addEventListener('scroll', () => {
        if(window.matchMedia("(min-width: 992px)").matches) {
            let phoneElement = document.getElementById("phone");
            let descriptionElement = document.getElementById("description");
            let phoneHeight = phoneElement.naturalHeight;
            let phoneTopPosition = phoneElement.offsetTop;

            if (fixed) phoneTopPosition = initialPhoneTopPosition;

            if (scrollY >= descriptionElement.getBoundingClientRect().height + descriptionElement.offsetTop - phoneHeight - phoneTopPosition + 77) {
                fixed = true;
                document.getElementById("phone").classList.remove("lg:fixed");
                document.getElementById("phone").classList.add("absolute");
                document.getElementById("phone").classList.add("bottom-0");
            } else {
                fixed = false;
                document.getElementById("phone").classList.add("lg:fixed");
                document.getElementById("phone").classList.remove("absolute");
                document.getElementById("phone").classList.remove("bottom-0");
            }
        }
    });

    function getBoxPosition(element) {
        return element.getBoundingClientRect().top + window.scrollX;
    }

</script>

<?php get_footer(); ?>