<?php
$categories = get_the_terms(get_the_ID(), 'flower_genus');
?>

<a href="<?= esc_url(get_permalink()); ?>">
    <div class="card rounded-1 p-0 overflow-hidden flower-wrapper" style="background-image:url(<?php the_post_thumbnail_url('medium_large') ?>)">
        <div class="position-absolute top-0 end-0 pt-3 pe-3">
            <button type="button" class="btn btn-light circle d-flex align-items-center justify-content-center blush">
                <i class="bi bi-star-fill"></i>
            </button>
        </div>
        <div class="position-absolute bottom-0 start-50 translate-middle-x text-center flower-info w-100">
            <h2 class="flower-title"><?php the_title(); ?></h2>
            <p class="flower-genus"><?= $categories[0]->name; ?></h2>
            <p class="my-4"> <span class="sightings px-3 py-1 rounded-pill blush">127 sightings</span></p>
        </div>
    </div>
</a>