<?php get_header(); ?>
<div id="container">
    <main>
        <div class="index-wrapper">
            <div class="index-container">
                <?php if(have_posts()):while(have_posts()):the_post(); ?>
                    <div class="post-card-wrapper">
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
                <?php endwhile; else: ?>
                <?php endif; ?>
            </div>
        </div>
        <div class="pagination">
            <?php the_posts_pagination(); ?>
        </div>
    </main>
    <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>