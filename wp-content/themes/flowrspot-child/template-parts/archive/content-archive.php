<div class="row mb-3">
    <div class="col-10 mx-auto border bg-transparent">
        <div class="input-group">
            <input type="text" class="form-control rounded-0 border-0 shadow-none bg-transparent" placeholder="Looking for something specific?" aria-label="Flower name" aria-describedby="button-addon2">
            <button class="btn btn-link color-pink rounded-0 bg-white bg-transparent" type="button" id="button-addon2"><i class="bi bi-search"></i></button>
        </div>
    </div>
</div>
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