<?php

    /**
     * Block Name: Trading View
     *
     * This is the template that displays the trading view block.
     */

    $heading        = get_field('heading');
    $subheading     = get_field('sub_heading'); 
    
     // create id attribute for specific styling
     $id = 'introduction-' . $block['id']; ?>

    <section id="<?= $id ?>" class="bg-white">
        <main class="py-10 mx-auto max-w-7xl px-4 sm:py-12 sm:px-6 md:py-16 lg:py-20 lg:px-8 xl:py-28">
            <div class="text-center mb-12">
                <h1 class="text-4xl tracking-tight font-extrabold text-gray-800 sm:text-5xl md:text-6xl">
                    <span class="block xl:inline"><?= $heading ?></span>
                </h1>
                <p class="mt-3 text-base text-gray-500 mx-auto sm:mt-5 sm:text-lg sm:max-w-xl md:mt-5 md:text-xl">
                    <?= $subheading ?>
                </p>
            </div>

            <div id="trading-chart"></div>
        </main>
    </section>