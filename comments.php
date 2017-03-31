<?php
if ('comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
    die ('Ne pas charger cette page directement, merci !');
if (!empty($post->post_password)) { // if there's a password
    if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password)
    {  // and it doesn't match the cookie
        ?>

        <h2><?php _e('Mot de passe proteger'); ?></h2>
        <p><?php _e('Entrer un mot de passe pour voir les commentaires.'); ?></p>

        <?php return;
    }
}



$oddcomment = 'alt';

?>



<?php if ($comments) : ?>
    <h3 id="comments"><?php comments_number('Pas de réponse', 'Une réponse', '% réponses' );?>
        vers &#8220;<?php the_title(); ?>&#8221;</h3>

    <ol class="commentlist">
        <?php foreach ($comments as $comment) : ?>

            <li class="<?php echo $oddcomment; ?>" id="comment-<?php comment_ID() ?>">

                <div class="commentmetadata">
                    <strong><?php comment_author_link() ?></strong>, <?php _e('le'); ?>
                    <a href="#comment-<?php comment_ID() ?>"
                       title=""><?php comment_date('F jS, Y') ?> <?php _e('à');?>
                        <?php comment_time() ?></a> <?php _e('Dit&#58;'); ?>
                    <?php edit_comment_link('Editer le commentaire','',''); ?>
                    <?php if ($comment->comment_approved == '0') : ?>
                        <em><?php _e('Votre commentaire est en attente de modération'); ?></em>
                    <?php endif; ?>
                </div>

                <?php comment_text() ?>
            </li>

            <?php /* Changes every other comment to a different class */
            if ('alt' == $oddcomment) $oddcomment = '';
            else $oddcomment = 'alt';
            ?>

        <?php endforeach; ?>
    </ol>

<?php else : ?>

    <?php if ('open' == $post->comment_status) : ?>
        <!-- If comments are open, but there are no comments. -->
    <?php else : // comments are closed ?>


        <p class="nocomments">Les commentaires sont fermés</p>

    <?php endif; ?>
<?php endif; ?>


<?php if ('open' == $post->comment_status) : ?>

    <h3 id="respond">Laisser un commentaire</h3>

    <?php if ( get_option('comment_registration') && !$user_ID ) : ?>
        <p>You must be <a href="<?php echo get_option('siteurl'); ?>
/wp-login.php?redirect_to=<?php the_permalink(); ?>">
                connecter</a> pour envoyer un commentaire.</p>

    <?php else : ?>

        <form action="<?php echo get_option('siteurl'); ?>
/wp-comments-post.php" method="post" id="commentform">
            <?php if ( $user_ID ) : ?>

                <p>Connecter en tant que <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php">
                        <?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>
/wp-login.php?action=logout"
                                                              title="Log out of this account">Deconnexion &raquo;</a></p>

            <?php else : ?>

                <p><input type="text" name="author" id="author" value="<?php echo $comment_author; ?>"
                          size="40" tabindex="1" />
                    <label for="author"><small>Nom <?php if ($req) echo "(requis)"; ?></small></label></p>

                <p><input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>"
                          size="40" tabindex="2" />
                    <label for="email"><small>Mail (Ne sera pas publier) <?php if ($req) echo "(requis)"; ?>
                        </small></label></p>

            <?php endif; ?>

            <!--<p><small><strong>XHTML:</strong> <?php _e('Vous pouvez utiliser ces tag &#58;'); ?>
<?php echo allowed_tags(); ?></small></p>-->

            <p><textarea name="comment" id="comment" cols="60" rows="10" tabindex="4"></textarea></p>

            <p><input name="submit" type="submit" id="submit" tabindex="5" value="Envoyer !" />
                <input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
            </p>

            <?php do_action('comment_form', $post->ID); ?>

        </form>

    <?php endif; ?>

<?php endif; ?>