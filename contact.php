<?php
/**
Template Name: contact
 */
?>
<?php get_header(); ?>
<div id="content">
    <div id="boxContact">

        <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>

            <div class="post">

                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

                <div class="contact">

                    <?php the_content(); ?>

                    <div id="contactForm">
                        <?php echo do_shortcode('[contact-form-7 id="13" title="Formulaire de base"]'); ?>
                    </div>
                </div>
            </div>

        <?php endwhile; ?>

    </div>
    <?php endif; ?>


    <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
