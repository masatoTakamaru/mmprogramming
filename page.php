<?php get_header(); ?>
<div id="container">
    <main class="main-flex">
        <?php if(have_posts()): while(have_posts()) : the_post(); ?>
        <article class="content-wrapper">
            <header class="content-header">
                <div class="title-block">
                    <h1><?php the_title(); ?></h1>
                </div>
            </header>
            <div class="content">
                <?php the_content(); ?>
            </div>
        </article>
        <?php endwhile; else: ?>
        <?php endif; ?>
    </main>
    <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>