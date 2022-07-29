<?php get_header(); ?>
<div id="container">
    <main>
        <h1 class="title-block">
            「<?php echo esc_html($_GET['s']); ?>」の検索結果：<?php echo $wp_query->found_posts; ?>件
        </h1>
        <div class="index-wrapper">
            <?php if(have_posts()): ?>
                <?php while(have_posts()):the_post(); ?>
                    <div class="post-wrapper">
                        <a href="<?php the_permalink() ?>">
                            <div class="post-card">
                                <div class="post-thumb">
                                    <?php
                                    if(has_post_thumbnail()):
                                        the_post_thumbnail('thumbnail');
                                    endif; ?>
                                </div>
                                <div class="post-header">
                                    <?php the_title(); ?>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endwhile; ?>
                <div class="pagination">
                    <?php the_posts_pagination(); ?>
                </div>
            <?php else: ?>
                <p>検索されたキーワードに一致する記事はありませんでした</p>
            <?php endif; ?>
        </div>
    </main>
    <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>