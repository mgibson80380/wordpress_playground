<?php

    /**
     * Block Name: Latest Blog
     *
     * This is the template that displays the contact block.
     */
    $section_title      = get_field('section_title');
    $heading            = get_field('heading');
    $button_label       = get_field('button_label');
    $button_link        = get_field('button_link');

    $service_count = 1;

    // create id attribute for specific styling
    $id = 'introduction-' . $block['id']; ?>

    <section id="<?= $id ?>" class="bg-gradient-to-b from-gray-500 to-gray-200 pb-4 m-h-screen">
        <main class="projects-container">
            <div class="flex flex-col self-center pr-8 mb-10 md:mb-0">
                <h2 class="text-lg uppercase text-white mb-4 bg-papaya-400 py-2 px-4 font-extrabold w-fit"><?= $section_title; ?></h2>
                <p class="text-white font-bold text-3xl md:text-5xl mb-4"><?= $heading ?></p>

                <div class="grid grid-cols-3 gap-4 mt-12">
                    <div class="post rounded-xl shadow-xl shadow-gray-200 w-full h-96 bg-white"></div>
                    <div class="post rounded-xl shadow-xl shadow-gray-200 w-full h-96 bg-white"></div>
                    <div class="post rounded-xl shadow-xl shadow-gray-200 w-full h-96 bg-white"></div>
                </div>

                <?php if($button_link ) : ?>
                    <div class="btn-secondary-container text-center">
                        <a href="<?= $button_link ?>" class="btn-secondary">
                            <?= $button_label ?>
                        </a>
                    </div>
                <?php endif; ?>
            </div>
        </main>
    </section>