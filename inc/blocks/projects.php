<?php

    /**
     * Block Name: Projects
     *
     * This is the template that displays the projects block.
     */

    $section_title      = get_field('section_title');
    $heading            = get_field('heading');
    $text               = get_field('text');
    $button_label       = get_field('button_label');
    $button_link        = get_field('button_link');

    // create id attribute for specific styling
    $id = 'introduction-' . $block['id']; ?>

    <section id="<?= $id ?>" class="bg-gradient-to-b from-gray-800 to-gray-500 pb-4">
        <main class="projects-container">
            <div class="flex flex-col self-center pr-8 mb-10 md:mb-0">
                <h2 class="text-lg uppercase text-white mb-4 bg-papaya-400 py-2 px-4 font-extrabold w-fit"><?= $section_title; ?></h2>
                <p class="text-white font-bold text-3xl md:text-5xl mb-4"><?= $heading ?></p>
                <?php if($text) : ?>
                    <p class="subtitle w-1/2 lg:w-full"><?= $text ?></p>
                <?php endif; ?>
            </div>
        </main>
        <div id="projects" class="px-4"></div>
    </section>

