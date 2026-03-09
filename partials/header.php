<!-- BEGIN: MainHeader -->
<header class="relative">
    <!-- Banner Section -->
    <div data-aos="<?= VITE_SITE_ANIMATION ?>" class="profile-banner w-full rounded-2xl overflow-hidden px-4 md:px-12 max-w-6xl mx-auto mt-12 h-[240px]">
        <div class="h-full w-full flex items-end rounded-2xl overflow-hidden">
            <!-- Optional: Overlay text or image if needed from reference -->
            <img src="%BASE%/img/banner.jpg" alt="Banner" class="w-full h-full object-cover">
            
        </div>
    </div>
    <!-- Header Content Container -->
    <div data-aos="<?= VITE_SITE_ANIMATION ?>"
        class="max-w-6xl mx-auto px-6 md:px-12 flex flex-col md:flex-row md:items-end justify-between profile-avatar-container">
        <div class="flex flex-col md:flex-row items-end gap-6">
            <!-- Profile Picture -->
            <div class="relative">
                <img alt="Carlos Hernandez"
                    class="w-60 h-60 md:w-60 md:h-60 rounded-full border-4 border-white object-cover shadow-sm"
                    src="%BASE%/img/avatar.png" />
                <div class="absolute bottom-2 right-2 bg-primary text-white rounded-full p-1 border-2 border-white">
                    <svg class="w-4 h-4" fill="currentColor" viewbox="0 0 20 20">
                        <path
                            d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.64.304 1.25.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z">
                        </path>
                    </svg>
                </div>
            </div>
            <!-- Name and Tagline -->
            <div class="mb-2">
                <h1 class="text-3xl font-bold text-primary">
                    <?= $t('header.username') ?>
                </h1>
                <p class="text-gray-500 mt-1 font-bold">
                    <?= $t('header.tagline') ?>
                </p>
            </div>
        </div>
        <!-- Action Buttons -->
        <div class="flex gap-3 mb-2 mt-6 md:mt-0">
            <!-- Language Switcher -->
            <?php
            $currentLang = $lang ?? 'en';
            $otherLang = $currentLang === 'en' ? 'es' : 'en';
            $otherLabel = strtoupper($otherLang);
            ?>
            <button
                class="lang-switcher flex items-center gap-1.5 px-3 py-2 border border-gray-200 rounded-lg font-medium hover:bg-gray-50 transition-colors text-sm"
                data-current-lang="<?= $currentLang ?>"
                data-other-lang="<?= $otherLang ?>"
                aria-label="<?= isset($t)
                	? $t('lang.switch_to_' . $otherLang)
                	: 'Switch language' ?>"
                title="<?= isset($t)
                	? $t('lang.switch_to_' . $otherLang)
                	: 'Switch language' ?>">
                <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129" />
                </svg>
                <span><?= $otherLabel ?></span>
            </button>

            <!-- Theme Switcher -->
            <button id="theme-toggle" class="flex items-center justify-center w-[38px] border border-gray-200 dark:border-gray-800 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors" aria-label="Toggle Dark Mode">
                <!-- Sun icon -->
                <svg class="w-5 h-5 hidden dark:block text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                <!-- Moon icon -->
                <svg class="w-5 h-5 block dark:hidden text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path></svg>
            </button>

            <!-- <button class="p-2 border border-gray-200 rounded-lg hover:bg-gray-50 transition-colors"
                data-purpose="options-button">
                <svg class="w-5 h-5 text-gray-600" fill="currentColor" viewbox="0 0 20 20">
                    <path
                        d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z">
                    </path>
                </svg>
            </button> -->
            <!-- <button
                class="flex items-center gap-2 px-4 py-2 border border-gray-200 rounded-lg font-medium hover:bg-gray-50 transition-colors"
                data-purpose="video-call-button">
                <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewbox="0 0 24 24">
                    <path
                        d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"
                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                </svg>
                <?= isset($t) ? $t('header.video_call') : 'Video call' ?>
            </button> -->
            <!-- <button
                class="flex items-center gap-2 px-4 py-2 bg-gray-900 text-white rounded-lg font-medium hover:bg-gray-800 transition-colors"
                data-purpose="message-button">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewbox="0 0 24 24">
                    <path
                        d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"
                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                </svg>
                <?= isset($t) ? $t('header.message') : 'Message' ?>
            </button> -->
        </div>
    </div>
</header>
<!-- END: MainHeader -->