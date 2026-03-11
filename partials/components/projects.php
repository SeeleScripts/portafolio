<!-- Recent Work Section -->
<section class="space-y-8 pt-12" id="work">
    <div class="flex justify-between items-center">
        <h2 data-aos="<?= VITE_SITE_ANIMATION ?>" class="text-3xl text-primary">Recent work</h2>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-8">
        <?php foreach ($projects as $slug => $project_data): ?>
        <!-- Project Card: <?= htmlspecialchars($project_data['title']) ?> -->
        <div data-aos="<?= VITE_SITE_ANIMATION ?>"
            class="card-border rounded-xl overflow-hidden flex flex-col hover:shadow-md transition-shadow bg-white">
            <div class="aspect-video bg-gray-100 overflow-hidden">
                <img alt="<?= htmlspecialchars($project_data['title']) ?>" class="w-full h-full object-cover"
                    src="<?= htmlspecialchars($project_data['images']['main']) ?>" />
            </div>
            <div class="p-5 flex-grow flex flex-col dark:bg-gray-800">
                <div class="flex flex-wrap gap-2 mb-3">
                    <?php foreach ($project_data['tags'] as $idx => $tag): ?>
                    <?php if ($idx % 2 === 0): ?>
                    <span
                        class="px-2 py-0.5 bg-blue-50 text-primary text-[10px] font-bold uppercase tracking-wider rounded-full border border-blue-100 dark:bg-gray-300"><?= htmlspecialchars($tag) ?></span>
                    <?php else: ?>
                    <span
                        class="px-2 py-0.5 bg-orange-50 text-secondary text-[10px] font-bold uppercase tracking-wider rounded-full border border-orange-100"><?= htmlspecialchars($tag) ?></span>
                    <?php endif; ?>
                    <?php endforeach; ?>
                </div>
                <h3 class="text-lg text-primary mb-2"><?= htmlspecialchars($project_data['title']) ?></h3>
                <p class="text-sm text-gray-600 mb-6 flex-grow dark:text-gray-300">
                    <?= $t($project_data['short_description']) ?>
                </p>
                <div class="flex items-center gap-3 mt-auto">
                    <?php if (!empty($project_data['client_url'])): ?>
                    <button
                        class="px-4 py-2 bg-primary text-white text-sm font-semibold rounded-lg hover:opacity-90 transition-opacity flex-1">
                        <a target="_blank" title="<?= htmlspecialchars($project_data['title']) ?> site" href="<?= htmlspecialchars($project_data['client_url']) ?>">
                            <?= $t('projects.view_project') ?>
                        </a>
                    </button>
                    <?php endif; ?>
                    <button
                        class="px-4 py-2 border border-gray-200 text-gray-600 dark:text-gray-300 dark:border-gray-600 text-sm font-semibold rounded-lg hover:bg-gray-50 transition-colors flex-1">
                        <a title="More details" href="/<?= $lang ?>/work/<?= htmlspecialchars($slug) ?>/">
                            <?= $t('projects.more_info') ?>
                        </a>
                    </button>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</section>