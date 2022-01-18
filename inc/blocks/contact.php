<?php

    /**
     * Block Name: Contact
     *
     * This is the template that displays the contact block.
     */
    $section_title      = get_field('section_title');
    $heading            = get_field('heading');
    $text               = get_field('text');
    $phone              = get_field('phone');
    $email              = get_field('email');

    $service_count = 1;

    // create id attribute for specific styling
    $id = 'introduction-' . $block['id']; ?>

    <div class="min-h-screen bg-gradient-to-b from-gray-200">
        <main class="main-container component-container">
            <div class="grid grid-cols-2 gap-16 w-full">
                <div class="rounded-xl shadow-2xl shadow-gray-500 h-96 bg-gray-100 w-full p-8">
                    <form class="w-full max-w-lg">
                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                                First Name
                            </label>
                            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="Jane">
                            <p class="text-red-500 text-xs italic">Please fill out this field.</p>
                            </div>
                            <div class="w-full md:w-1/2 px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                                Last Name
                            </label>
                            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="Doe">
                            </div>
                        </div>
                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                                Email
                            </label>
                            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-password" type="password" placeholder="******************">
                            <p class="text-gray-600 text-xs italic">Make it as long and as crazy as you'd like</p>
                            </div>
                        </div>
                        <div class="flex flex-wrap -mx-3 mb-2">
                            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
                                City
                            </label>
                            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-city" type="text" placeholder="Albuquerque">
                            </div>
                            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                                State
                            </label>
                            <div class="relative">
                                <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                                <option>New Mexico</option>
                                <option>Missouri</option>
                                <option>Texas</option>
                                </select>
                                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                                </div>
                            </div>
                            </div>
                            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-zip">
                                Zip
                            </label>
                            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-zip" type="text" placeholder="90210">
                            </div>
                        </div>
                        </form>
                </div>
                <div class="flex flex-col self-center pr-8 mb-10 md:mb-0">
                    <h2 class="text-lg uppercase text-white mb-4 bg-papaya-400 py-2 px-4 font-extrabold w-fit"><?= $section_title; ?></h2>
                    <p class="text-gray-800 font-bold text-3xl md:text-5xl mb-4"><?= $heading ?></p>
                    <?php if($text) : ?>
                        <p class="subtitle w-1/2 lg:w-full mb-8"><?= $text ?></p>
                    <?php endif; ?>
                    <?php if($phone) : ?>
                        <p class="text-gray-500 text-xl"><i class="fas fa-phone-alt mr-3 text-papaya-400"></i><?= $phone; ?></p>
                    <?php endif; ?>
                    <?php if($email) : ?>
                        <p class="text-gray-500 text-xl mt-4"><i class="fas fa-envelope mr-3 text-papaya-400"></i><?= $email; ?></p>
                    <?php endif; ?>
                </div>      
            </div>
        </div>
    </div>