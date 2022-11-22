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

<header class="py-32 xl:pt-40 mt-[-9rem] pt-[15.625rem] bg-gradient-image bg-left-bottom-custom lg:bg-cover bg-no-repeat">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-12 gap-4">
            <div class="col-span-12 lg:col-span-6 flex flex-col justify-center">
                <h1 class="text-2xl lg:text-3xl font-bold mb-4"><?php echo get_field('help_header_title') ?></h1>
                <p class="text-2xl lg:text-3xl font-light"><?php echo get_field('help_header_description') ?></p>
            </div>
        </div>
    </div>
</header>

<section class="pb-32 xl:pb-40">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-12 gap-4">
            <div class="col-span-12 lg:col-span-4">
                <?php $topics = new WP_Query($args); ?>
                <?php if ($topics->have_posts()): ?>
                    <?php while ($topics->have_posts()): $topics->the_post(); ?>
                        <a class="block text-md font-light mb-4" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></span></a>
                    <?php endwhile; ?>
                <?php endif; ?>
                <?php wp_reset_query(); ?>
            </div>
            <div class="col-span-12 lg:col-span-8">
                <?php while (have_posts()) : the_post(); ?>
                    <h1 class="font-size-38 mb-3"><?php the_title(); ?></h1>
                    <div class="font-light"><?php the_content(); ?></div>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
