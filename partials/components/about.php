<!-- About Me Section -->
    <section class="grid grid-cols-1 md:grid-cols-3 gap-12 pt-12" id="about">
        <div class="md:col-span-2 space-y-6">
            <h2 class="text-xl font-bold text-gray-900"><?= $t(
            	'about.title',
            ) ?></h2>
            <div class="text-gray-600 space-y-4 leading-relaxed">
                <p><?= $t('about.bio_1') ?></p>
                <p><?= $t('about.bio_2') ?></p>
                <p><?= $t('about.bio_3') ?></p>
            </div>
        </div>
        <div class="space-y-8">
            <!-- Location -->
            <div>
                <h4 class="text-sm font-semibold text-gray-400 uppercase tracking-wider mb-2"><?= $t(
                	'about.location_label',
                ) ?></h4>
                <div class="flex items-center gap-2 font-medium">
                    <span class="text-lg">��</span>
                    <span><?= $t('about.location_value') ?></span>
                </div>
            </div>
            <!-- Website -->
            <div>
                <h4 class="text-sm font-semibold text-gray-400 uppercase tracking-wider mb-2"><?= $t(
                	'about.website_label',
                ) ?></h4>
                <a class="flex items-center gap-1 font-medium text-gray-900 hover:text-primary transition-colors"
                    href="#">
                    carlos.seelescript.com
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewbox="0 0 24 24">
                        <path d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                    </svg>
                </a>
            </div>
            <!-- Portfolio -->
            <div>
                <h4 class="text-sm font-semibold text-gray-400 uppercase tracking-wider mb-2"><?= $t(
                	'about.portfolio_label',
                ) ?></h4>
                <a class="flex items-center gap-1 font-medium text-gray-900 hover:text-primary transition-colors"
                    href="#">
                    @carlos.dev
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewbox="0 0 24 24">
                        <path d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                    </svg>
                </a>
            </div>
            <!-- Email -->
            <div>
                <h4 class="text-sm font-semibold text-gray-400 uppercase tracking-wider mb-2"><?= $t(
                	'about.email_label',
                ) ?></h4>
                <a class="flex items-center gap-1 font-medium text-gray-900 hover:text-primary transition-colors"
                    href="mailto:hi@carlosdev.com">
                    hi@carlosdev.com
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewbox="0 0 24 24">
                        <path d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                    </svg>
                </a>
            </div>
        </div>
    </section>