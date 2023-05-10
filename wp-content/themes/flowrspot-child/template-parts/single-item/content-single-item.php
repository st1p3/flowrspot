<?php
$categories = get_the_terms(get_the_ID(), 'flower_genus');
$desc = get_field("short_description");
$gallery = get_post_gallery(get_the_ID(), false); ?>
<div class="entry-content">
    <div class="flower-wrapper-large d-flex flex-column position-relative z-1" style="background-image:url(<?php the_post_thumbnail_url('medium_large') ?>)">
        <div class="mb-auto p-2"></div>
        <div class="p-3 flower-info">
            <div class="d-flex align-items-center mb-3">
                <div class="me-1">
                    <button type="button" class="btn btn-light circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-star-fill"></i>
                    </button>
                </div>
                <div><span class="sightings px-3 py-2 rounded-pill">127 sightings</span></div>
            </div>
            <div class="mb-5">
                <h2 class="flower-title fs-1 mb-3"><?php the_title(); ?></h2>
                <p class="flower-genus"><?= $categories[0]->name; ?></h2>
            </div>
        </div>
        <div class="position-absolute top-100 translate-middle-sighting z-3 ps-3">
            <button type="button" class="btn btn-primary rounded-1 py-2 px-4">
                <i class="bi bi-plus"></i>Add New Sighting
            </button>
        </div>
    </div>
    <div class="flower-description bg-white py-5 px-3">
        <div class="mb-3">
            <p class="fw-bold mb-1">Kingdom: Plantae</p>
            <p class="fw-bold mb-1">Order: Asterales</p>
            <p class="fw-bold mb-1">Family: Campanulaceae</p>
            <p class="fw-bold mb-1">Species: P. grandiflorus</p>
        </div>
        <p class="text-justified"><?= $desc ?></p>
    </div>
    <?php if (!empty($gallery)) {
    ?>
        <div class="bg-white">
            <div id="gallerySlider" class="carousel carousel-dark slide pb-3 " data-bs-ride="carousel">
                <div class="carousel-inner">
                    <?php
                    foreach ($gallery['src'] as $key =>
                        $image_url) {
                        $active_class = $key === 0 ? 'active' : ''; ?>
                        <div class="carousel-item <?php echo $active_class; ?>">
                            <img src="<?php echo $image_url; ?>" class="slider-image" alt="Image <?php echo $key; ?>" />
                        </div>
                    <?php
                    }
                    ?>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#gallerySlider" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#gallerySlider" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

    <?php
    }
    ?>

</div>