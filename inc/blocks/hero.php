<?php

    /**
     * Block Name: Hero
     *
     * This is the template that displays the hero block.
     */

    $size               = get_field('size');
    $heading            = get_field('heading');
    $subheading         = get_field('sub_heading');
    $button_label       = get_field('button_label');
    $button_link        = get_field('button_link');
    $background_image   = get_field('background_image');

    // create id attribute for specific styling
    $id = 'introduction-' . $block['id']; ?>

    <section id="<?= $id ?>" class="bg-gray-800 bg-cover" style="background-image: url(<?= $background_image ?>)">
        <main class="hero-container <?= ($size === true) ? 'lg:min-h-screen' : ''; ?> content-center">
            <h1 class="text-white"><?= $heading ?></h1>
            <p class="subtitle">
                <?= $subheading ?>
            </p>
            <?php if($button_link ) : ?>
                <div class="btn-primary-container">
                    <a href="<?= $button_link ?>" class="btn-primary">
                        <?= $button_label ?>
                    </a>
                </div>
            <?php endif; ?>
        </main>
    </section>