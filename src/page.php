<?php get_header(); ?>

<header class="py-32 mt-[-6rem] pt-[15.625rem] xl:pt-[14rem] relative">
    <div class="absolute h-full max-h-[500px] w-full top-0" style="background: linear-gradient(to top, rgb(255, 255, 255) 0%,rgba(255,255,255,0) 70%);"></div>
    <div class="absolute h-full max-h-[500px] w-full top-0 z-[-1]" style="background-image: linear-gradient(to left top,#62ffff,#00ebff,#00d5ff,#00bdff,#00a3ff,#6599ff,#958df7,#bb7fe8,#dd8dd9,#f0a0d0,#f8b7ce,#f9cfd5);"></div>
    <div class="container mx-auto px-4 relative">
        <div class="grid grid-cols-12 gap-4">
            <div class="col-span-12 lg:col-span-8 flex flex-col justify-center">
                <h1 class="text-2xl lg:text-3xl font-bold"><?php the_title(); ?></h1>
            </div>
        </div>
    </div>
</header>

<main>
    <section class="pb-32 xl:pb-40 wp-content">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-12 gap-4">
                <div class="col-span-12 xl:col-span-8 wp-content">
                <?php while (have_posts()) : the_post(); ?>
                    <div class="w-full h-[1px] bg-[#E3E3E3] my-8"></div>
                    <h1 class="font-bold text-md text-primary"><?php the_title(); ?></h1>
                    <?php the_content(); ?>
                <?php endwhile; ?>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>


