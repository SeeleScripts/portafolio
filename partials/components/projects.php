<!-- Recent Work Section -->
<section class="space-y-8 border-t border-gray-100 pt-12" id="work">
    <div class="flex justify-between items-center">
        <h2 data-aos="<?= VITE_SITE_ANIMATION ?>" class="text-3xl text-primary">Recent work</h2>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-8">
    <!-- Project Card 1 -->
        <div data-aos="<?= VITE_SITE_ANIMATION ?>" class="card-border rounded-xl overflow-hidden flex flex-col hover:shadow-md transition-shadow bg-white">
            <div class="aspect-video bg-gray-100 overflow-hidden">
                <img alt="Project 1" class="w-full h-full object-cover"
                    src="%BASE%/img/posts/thescreamingchef/thescreaming-chef.webp" />
            </div>
            <div class="p-5 flex-grow flex flex-col dark:bg-gray-800">
                <div class="flex flex-wrap gap-2 mb-3">
                    <span
                        class="px-2 py-0.5 bg-blue-50 text-primary text-[10px] font-bold uppercase tracking-wider rounded-full border border-blue-100 dark:bg-gray-300">WordPress</span>
                    <span
                        class="px-2 py-0.5 bg-orange-50 text-secondary text-[10px] font-bold uppercase tracking-wider rounded-full border border-orange-100">Bootstrap</span>
                </div>
                <h3 class="text-lg text-primary mb-2">The Screaming Chef</h3>
                <p class="text-sm text-gray-600 mb-6 flex-grow dark:text-gray-300">
                    <?= $t('projects.thescreamingchef.short_description') ?>
                </p>
                <div class="flex items-center gap-3 mt-auto">
                    <button
                        class="px-4 py-2 bg-primary text-white text-sm font-semibold rounded-lg hover:opacity-90 transition-opacity flex-1">
                        <a target="_blank" title="The Screaming Chef site" href="https://thescreamingchef.com">
                            <?= $t('projects.view_project') ?>
                        </a>
                    </button>
                    <button
                        class="px-4 py-2 border border-gray-200 text-gray-600 dark:text-gray-300 dark:border-gray-600 text-sm font-semibold rounded-lg hover:bg-gray-50 transition-colors flex-1">
                        <a title="More details" href="/the-screaming-chef"><?= $t(
                        	'projects.more_info',
                        ) ?></a>    
                    </button>
                </div>
            </div>
        </div>

    </div>
</section>