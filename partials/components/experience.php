  <!-- Experience Section -->
    <section class="space-y-8 pt-12" id="experience">
        <div class="flex justify-between items-center">
            <h2 data-aos="<?= VITE_SITE_ANIMATION ?>" class="text-xl text-primary"><?= $t(
	'experience.title',
) ?></h2>            
        </div>
        <p data-aos="<?= VITE_SITE_ANIMATION ?>" class="text-gray-600 dark:text-gray-400"><?= $t(
	'experience.description',
) ?></p>
        <!-- Experience Cards -->
        <div data-aos="<?= VITE_SITE_ANIMATION ?>" class="grid grid-cols-1 md:grid-cols-3 gap-6 pt-4">
            <!-- Experience Card 1 -->
            <div class="card-border rounded-xl p-6 space-y-4 hover:shadow-sm transition-shadow">
                <div class="flex items-center gap-4">
                    <div
                        class="w-12 h-12 bg-blue-600 rounded-full flex items-center justify-center text-white font-bold">
                        C</div>
                    <div>
                        <h3 class="text-primary">Senior WordPress Developer</h3>
                        <p class="text-sm text-gray-500">Evolve Agency Group</p>
                    </div>
                </div>
                <p class="text-sm text-gray-400">May 2021 – March 2026</p>
            </div>
            <!-- Experience Card 2 -->
            <div data-aos="<?= VITE_SITE_ANIMATION ?>" class="card-border rounded-xl p-6 space-y-4 hover:shadow-sm transition-shadow">
                <div class="flex items-center gap-4">
                    <div
                        class="w-12 h-12 bg-gray-200 rounded-full flex items-center justify-center text-gray-800 font-bold overflow-hidden">
                        <div class="w-full h-full bg-slate-800 flex items-center justify-center">
                            <div class="w-6 h-6 bg-white rotate-45"></div>
                        </div>
                    </div>
                    <div>
                        <h3 class="font-bold text-gray-900">Web Developer</h3>
                        <p class="text-sm text-gray-500">Accedo Technologies</p>
                    </div>
                </div>
                <p class="text-sm text-gray-400">Jan 2018 – May 2020</p>
            </div>
            <!-- Experience Card 3 -->
            <div data-aos="<?= VITE_SITE_ANIMATION ?>" class="card-border rounded-xl p-6 space-y-4 hover:shadow-sm transition-shadow">
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 bg-indigo-600 rounded-full flex items-center justify-center text-white">
                        <svg class="w-6 h-6" fill="currentColor" viewbox="0 0 24 24">
                            <path
                                d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z">
                            </path>
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-bold text-gray-900">Frontend Engineer</h3>
                        <p class="text-sm text-gray-500">Loom</p>
                    </div>
                </div>
                <p class="text-sm text-gray-400">Mar 2017 – Jan 2018</p>
            </div>
        </div>
    </section>