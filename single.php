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
            <time class="content-time">
                <p>公開日:<?php the_time('Y/m/d');?></p>
                <p>&emsp;</p>
                <p>最終更新日:<?php the_modified_date('Y/m/d') ?></p>
            </time>
            <div class="content">
                <?php the_content(); ?>
            </div>
        </article>
        <?php endwhile; else: ?>
        <?php endif; ?>
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-1151265093391964"
        crossorigin="anonymous"></script>
        <ins class="adsbygoogle"
        style="display:block"
        data-ad-format="autorelaxed"
        data-ad-client="ca-pub-1151265093391964"
        data-ad-slot="1299326884"></ins>
        <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
    </main>
    <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>