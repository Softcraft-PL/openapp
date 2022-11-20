<?php /* Template Name: Pomoc dla sklepu */ ?>

<?php
$args = array(
    'post_type' => 'pomoc-sklep',
    'post_status' => 'publish',
    'orderby' => 'title',
    'order' => 'ASC'
);
?>

<?php get_header(); ?>

<header class="py-32 xl:pt-40 mt-[-5.625rem] pt-[15.625rem] bg-gradient-image bg-left-bottom-custom lg:bg-cover bg-no-repeat">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-12 gap-4">
            <div class="col-span-12 lg:col-span-8 flex flex-col justify-center">
                <h1 class="text-2xl lg:text-3xl font-bold mb-4"><?php echo get_field('help_header_title', 11) ?></h1>
                <p class="text-2xl lg:text-3xl font-light"><?php echo get_field('help_header_description', 11) ?></p>
            </div>
        </div>
    </div>
</header>

<section class="pb-32 xl:pb-40">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-12 gap-4">
            <div class="col-span-12 lg:col-span-4">
                <div class="border-[1px] border-primary rounded-xl max-w-[280px] pt-8 pb-4 px-8">
                    <?php $topics = new WP_Query($args); ?>
                    <?php if ($topics->have_posts()): ?>
                        <?php while ($topics->have_posts()): $topics->the_post(); ?>
                            <a class="block text-md font-light mb-4" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></span></a>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    <?php wp_reset_query(); ?>
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

<?php get_footer(); ?>
