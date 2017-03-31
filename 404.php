<?php get_header(); ?>
<div id="content">
    <div id="container">

        <section class="error-404 not-found">
            <header class="page-header">
                <h1 class="page-title">I AM 404 !</h1>
            </header><!-- .page-header -->
            <div class="page-content">
                <div id="error">
                </div>
                <p>Apparemment, rien n’a été trouvé à cette adresse. Essayez avec une recherche ?</p>
                <?php get_search_form(); ?>
            </div><!-- .page-content -->
        </section><!-- .error-404 -->

    </div>

    <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
