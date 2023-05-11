<?php
$post = get_post($post_id);
$title = $post->post_title;
$image_url = get_the_post_thumbnail_url($post_id, 'medium_large');
$location = get_post_meta($post_id, 'location', true);
$short_description = get_post_meta($post_id, 'short_description', true);
if (strlen($short_description) > 140) $short_description = substr($short_description, 0, 140) . '...';
?>
<div class="container">
    <div class="row bg-white d-flex align-items-center">
        <div class="col-md-4 flower-wrapper p-3" style="background-image:url(<?= $image_url ?>)">
            <span class="location px-3 py-1 rounded-pill">
                <svg width="13" height="16" viewBox="0 0 10 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <mask id="mask0_6842_554" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="10" height="13">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0.00146484 13V0H9.99234V13H0.00146484Z" fill="white" />
                    </mask>
                    <g mask="url(#mask0_6842_554)">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M9.99239 5.04887C9.99239 9.09167 5.47603 12.8359 5.47603 12.8359C5.21214 13.0547 4.78025 13.0547 4.51636 12.8359C4.51636 12.8359 0 9.09167 0 5.04887C2.51256e-05 2.26045 2.23691 0 4.99621 0C7.7555 0 9.99239 2.26045 9.99239 5.04887Z" fill="#DF9186" />
                    </g>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M4.99628 7.58905C3.61025 7.58905 2.48267 6.44954 2.48267 5.04894C2.48267 3.64832 3.61028 2.50879 4.99628 2.50879C6.38226 2.50879 7.50988 3.64829 7.50988 5.04892C7.50988 6.44952 6.38231 7.58905 4.99628 7.58905Z" fill="#FBDDCE" />
                </svg>
                <span class="ms-2">
                    <?= $location ?>
                </span>
            </span>
        </div>
        <div class="col-md-8 px-4">
            <div class="row d-flex align-items-center">
                <div class="col-2 text-end my-4">
                    <img src="https://images.unsplash.com/photo-1527980965255-d3b416303d12?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=40&q=80" class="avatar rounded-circle" />
                </div>
                <div class="col-10">
                    <h2 class="flower-title text-dark mb-0"><?= $title ?></h2>
                    <p class="flower-description mb-0"><i>by Stipan Marinovic</i>
                    </p>
                </div>
            </div>
            <p class="flower-description">
                <?= $short_description ?>
            </p>
            <div class="row border-top py-3">
                <div class="col-6 flower-description text-center"><i class="bi bi-chat-dots-fill me-3"></i> 18 comments</div>
                <div class="col-6 flower-description text-center"><i class="bi bi-heart-fill me-3"></i> 18 comments</div>
            </div>
        </div>
    </div>
</div>