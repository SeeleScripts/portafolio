<section class="mx-auto  pb-16">

    <header data-aos="<?= VITE_SITE_ANIMATION ?>" class="mb-12">

        <p class="text-lg text-gray-600 dark:text-gray-300 mb-4">
            <?= $t('projects.azwoundsolutions.short_description'); ?>
        </p>

        <span
            class="inline-block bg-gray-100 dark:bg-gray-800 px-3 py-1 rounded text-sm text-gray-600 dark:text-gray-300">
            <?= $t('projects.azwoundsolutions.seo_project'); ?>
        </span>


    </header>

    <div class="mb-12" data-aos="<?= VITE_SITE_ANIMATION ?>">
        <h2 class="text-2xl font-semibold text-primary mb-4">
            <?= $t('projects.azwoundsolutions.project_overview'); ?>
        </h2>
        <p class="text-gray-600 dark:text-gray-300 leading-relaxed mb-4">
            <?= $t('projects.azwoundsolutions.description_1'); ?>
        </p>

        <p class="text-gray-600 dark:text-gray-300 leading-relaxed">
            <?= $t('projects.azwoundsolutions.description_2'); ?>
        </p>
    </div>

    <div class="mb-12" data-aos="<?= VITE_SITE_ANIMATION ?>">
        <h2 class="text-2xl font-semibold text-primary mb-4">
            <?= $t('projects.azwoundsolutions.key'); ?>
        </h2>

        <ul class="space-y-2 text-gray-600 dark:text-gray-300 list-disc list-inside">
            <?= $t('projects.azwoundsolutions.key_description'); ?>
        </ul>
    </div>

    <div class="mb-12" data-aos="<?= VITE_SITE_ANIMATION ?>">
        <h2 class="text-2xl font-semibold text-primary mb-4">
            <?= $t('projects.azwoundsolutions.results'); ?>
        </h2>

        <p class="text-gray-600 dark:text-gray-300 leading-relaxed mb-4">
            <?= $t('projects.azwoundsolutions.results_description_1'); ?>
        </p>

        <ul class="space-y-2 text-gray-600 dark:text-gray-300 list-disc list-inside mb-4">
            <?= $t('projects.azwoundsolutions.results_list'); ?>
        </ul>

        <p class="text-gray-600 dark:text-gray-300 leading-relaxed">
            <?= $t('projects.azwoundsolutions.results_description_2'); ?>
        </p>
    </div>

</section>
<section data-aos="<?= VITE_SITE_ANIMATION ?>" class="mx-auto  pb-6">

    <h2 class="text-2xl font-semibold text-primary text-center mb-10">
        <?= $t('projects.azwoundsolutions.table_title'); ?>
    </h2>

    <div class="grid md:grid-cols-3 gap-6">

        <!-- Performance -->
        <div class="bg-white dark:bg-gray-800 rounded-xl shadow p-6 text-center">
            <h3 class="text-lg font-semibold mb-4">
                 <?= $t('projects.azwoundsolutions.performance'); ?>
            </h3>

            <div class="flex justify-center items-center gap-4">
                <div>
                    <p class="text-sm text-gray-500">
                        <?= $t('projects.azwoundsolutions.before'); ?>
                    </p>
                    <p class="text-red-500 text-3xl font-bold">48</p>
                </div>

                <span class="text-gray-400 text-xl">→</span>

                <div>
                    <p class="text-sm text-gray-500">
                        <?= $t('projects.azwoundsolutions.after'); ?>
                    </p>
                    <p class="text-green-500 text-3xl font-bold">96+</p>
                </div>
            </div>

        </div>

        <!-- SEO -->
        <div class="bg-white dark:bg-gray-800 rounded-xl shadow p-6 text-center">
            <h3 class="text-lg font-semibold mb-4">
                <?= $t('projects.azwoundsolutions.seo'); ?>
            </h3>

            <div class="flex justify-center items-center gap-4">
                <div>
                    <p class="text-sm text-gray-500">
                        <?= $t('projects.azwoundsolutions.before'); ?>
                    </p>
                    <p class="text-red-500 text-3xl font-bold">58</p>
                </div>

                <span class="text-gray-400 text-xl">→</span>

                <div>
                    <p class="text-sm text-gray-500">
                        <?= $t('projects.azwoundsolutions.after'); ?>
                    </p>
                    <p class="text-green-500 text-3xl font-bold">97</p>
                </div>
            </div>

        </div>

        <!-- Accessibility -->
        <div class="bg-white dark:bg-gray-800 rounded-xl shadow p-6 text-center">
            <h3 class="text-lg font-semibold mb-4">
                    <?= $t('projects.azwoundsolutions.accessibility'); ?>
            </h3>

            <div class="flex justify-center items-center gap-4">
                <div>
                    <p class="text-sm text-gray-500">
                        <?= $t('projects.azwoundsolutions.before'); ?>
                    </p>
                    <p class="text-red-500 text-3xl font-bold">55</p>
                </div>

                <span class="text-gray-400 text-xl">→</span>

                <div>
                    <p class="text-sm text-gray-500">
                        <?= $t('projects.azwoundsolutions.after'); ?>
                    </p>
                    <p class="text-green-500 text-3xl font-bold">96</p>
                </div>
            </div>

        </div>

    </div>

</section>