<?php

    /**
     * Block Name: Services
     *
     * This is the template that displays the service block.
     */
    $section_title      = get_field('section_title');
    $heading            = get_field('header');
    $description        = get_field('description');
    $services           = get_field('service');
    $button_label       = get_field('button_label');
    $button_link        = get_field('button_link');

    $service_count = 1;

    // create id attribute for specific styling
    $id = 'introduction-' . $block['id']; ?>

    <section id="<?= $id ?>" class="bg-gray-800 bg-cover" style="background-image: url(<?= $background_image ?>)">
        <main class="main-container component-container services-container">
            <div class="flex flex-col self-center pr-8 mb-10 md:mb-0 md:col-span-6 lg:col-span-1">
                <h2 class="text-lg uppercase text-white mb-4 bg-papaya-400 py-2 px-4 font-extrabold w-fit"><?= $section_title; ?></h2>
                <p class="text-white font-bold text-3xl md:text-5xl mb-4"><?= $heading ?></p>
                <?php if($description) : ?>
                    <p class="subtitle w-1/2 lg:w-full"><?= $description ?></p>
                <?php endif; ?>

                <?php if($button_link ) : ?>
                    <div class="btn-primary-container">
                        <a href="<?= $button_link ?>" class="btn-primary">
                            <?= $button_label ?>
                        </a>
                    </div>
                <?php endif; ?>
            </div>
            <div class="flex md:col-span-2 lg:col-span-1">
                <?php foreach($services as $service): ?>
                    <?= ($service_count === 2) ? '</div><div class="grid md:grid-cols-2 lg:grid-cols-1 gap-6 lg:gap-12 md:col-span-4 lg:col-span-1">' : '' ?>
                    <div class="service bg-gray-600 py-10 px-10 self-center w-full col-span-1 lg:ml-8">
                        <img class="mb-3" src="<?= $service['icon']; ?>" />
                        <h4 class="text-xl md:text-2xl text-white font-bold mb-3 first-letter:bg-papaya-400 first-letter:px-2 first-letter:py-1"><?= $service['title']; ?></h4>
                        <p class="text-gray-400"><?= $service['description']; ?></p>
                    </div>
                <?php 
                $service_count++;
                endforeach; ?>
            </div>
        </main>
    </section>