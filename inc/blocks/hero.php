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
        <main class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 grid py-24 md:pb-24 md:pt-32 lg:py-52 <?= ($size === true) ? 'md:h-screen p-0' : ''; ?> content-center">
            <h1 class="text-4xl tracking-tight font-extrabold text-white sm:text-5xl md:text-6xl first-letter:bg-papaya-400 first-letter:px-4 first-letter:py-1 first-letter:text-white"><?= $heading ?></h1>
            <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl md:mx-0 lg:text-4xl">
                <?= $subheading ?>
            </p>
            <?php if($button_link ) : ?>
                <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
                    <div class="rounded-md shadow">
                        <a href="<?= $button_link ?>" class="w-full flex items-center justify-center px-8 py-3 border border-papaya-400 text-base font-medium rounded-md text-white bg-transparent hover:bg-papaya-400 md:py-4 md:text-lg md:px-10">
                        <?= $button_label ?>
                        </a>
                    </div>
                </div>
            <?php endif; ?>
        </main>
    </section>