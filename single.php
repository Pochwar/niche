<?php get_header(); ?>
<div id="content">
    <div id="container">

        <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>

            <div class="post" id="post-<?php the_ID(); ?>">

                <h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                    <?php the_title(); ?></a></h2>

                    <div class="entry">

                        <?php the_content(); ?>

                        <p class="postmetadata">
                            <?php _e('Filed under&#58;'); ?> <?php the_category(', ') ?> <?php _e('by'); ?>
                            <?php  the_author(); ?><br />
                            <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?>
                            <?php edit_post_link('Edit', ' &#124; ', ''); ?>
                        </p>

                    </div>
                    <div class="comments-template">
                        <?php comments_template(); ?>
                    </div>
                </div>

            <?php endwhile; ?>

            <div class="navigation">
                <?php previous_post_link('%link') ?> <?php next_post_link(' %link') ?>
            </div>

        <?php endif; ?>

    </div>

    <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
