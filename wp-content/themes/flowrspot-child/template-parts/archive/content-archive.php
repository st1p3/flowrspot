<div class="row">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="col-6 col-md-3 p-1">
                <?php
                get_template_part('template-parts/archive-item/content', 'archive-item'); ?>
            </div>
    <?php endwhile;
    else :
        echo "No posts found!";
    endif; ?>
</div>