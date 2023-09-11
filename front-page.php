<?php get_header();?>

<main id="home">
    <?php get_template_part('template-parts/header-nav');?>

    <section class="section top-section">
        <div class="container">
            <h1 class="text-center" data-aos="fade-in"> <?php the_title();?> </h1>
            <?php if (have_posts()) : while(have_posts()) : the_post();?>
            <?php the_content();?>
            <?php endwhile; endif;?>            
        </div>
    </section>
</main>

<?php get_footer();?>