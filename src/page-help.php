<?php /* Template Name: Pomoc */ ?>

<?php
$args = array(
    'post_type' => 'pomoc',
    'post_status' => 'publish',
    'orderby' => 'title',
    'order' => 'ASC'
);
?>

<?php get_header(); ?>

<header class="py-32 mt-[-6rem] pt-[15.625rem] xl:pt-[14rem] relative">
    <div class="absolute h-full max-h-[500px] w-full top-0" style="background: linear-gradient(to top, rgb(255, 255, 255) 0%,rgba(255,255,255,0) 70%);"></div>
    <div class="absolute h-full max-h-[500px] w-full top-0 z-[-1]" style="background-image: linear-gradient(to left top,#62ffff,#00ebff,#00d5ff,#00bdff,#00a3ff,#6599ff,#958df7,#bb7fe8,#dd8dd9,#f0a0d0,#f8b7ce,#f9cfd5);"></div>
    <div class="container mx-auto px-4 relative">
        <div class="grid grid-cols-12 gap-4">
            <div class="col-span-12 lg:col-span-8 flex flex-col justify-center">
                <h1 class="text-2xl lg:text-3xl font-bold mb-4"><?php echo get_field('help_header_title', 11) ?></h1>
                <p class="text-2xl lg:text-3xl font-light"><?php echo get_field('help_header_description', 11) ?></p>
            </div>
        </div>
    </div>
</header>

<main>
    <section class="pb-32 xl:pb-40">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-12 gap-4">
                <div class="col-span-12 lg:col-span-4">
                    <div class="border-[1px] border-primary rounded-xl max-w-[280px] pt-8 pb-4 px-8">
                        <?php wp_nav_menu(array('theme_location' => 'nav-menu-help', 'container' => false)); ?>
                    </div>
                </div>
                <div class="col-span-12 lg:col-span-8 wp-content">
                    <?php while (have_posts()) : the_post(); ?>
                        <h1 class="text-xl font-bold text-primary mb-4"><?php the_title(); ?></h1>
                        <div class="text-md font-light">Wybierz zagadniene, które Cię interesuje.</div>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
