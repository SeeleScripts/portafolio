<section class="space-y-8 border-t border-gray-100 dark:border-gray-800 pt-12" id="contact">
    <div class="flex justify-between items-center">
        <h2 class="text-2xl text-primary"><?= isset($t) ? $t('contact.title') : 'Get in touch' ?></h2>
    </div>
    <div class="max-w-2xl">
        <p class="text-gray-600 dark:text-gray-400 mb-8"><?= isset($t) ? $t('contact.subtitle') : 'Have a project in mind or just want to say hi? Feel free to reach out using the form below.' ?></p>
        <form id="contactForm" action="#" class="space-y-6" method="POST" novalidate>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="space-y-2">
                    <label class="block text-sm font-semibold text-gray-700 dark:text-gray-300" for="name">
                        <?= isset($t) ? $t('contact.name') : 'Name' ?>
                    </label>
                    <input
                        class="w-full px-4 py-2 border border-gray-200 dark:border-gray-700 rounded-lg bg-white dark:bg-gray-900 text-gray-900 dark:text-gray-100 placeholder-gray-400 dark:placeholder-gray-600 focus:ring-2 focus:ring-primary focus:border-transparent outline-none transition-colors"
                        id="name" name="name" placeholder="<?= isset($t) ? $t('contact.name_placeholder') : 'Your name' ?>" type="text" />
                </div>
                <div class="space-y-2">
                    <label class="block text-sm font-semibold text-gray-700 dark:text-gray-300" for="email">
                        <?= isset($t) ? $t('contact.email') : 'Email' ?>
                    </label>
                    <input
                        class="w-full px-4 py-2 border border-gray-200 dark:border-gray-700 rounded-lg bg-white dark:bg-gray-900 text-gray-900 dark:text-gray-100 placeholder-gray-400 dark:placeholder-gray-600 focus:ring-2 focus:ring-primary focus:border-transparent outline-none transition-colors"
                        id="email" name="email" placeholder="hi@example.com" type="email" />
                </div>
            </div>
            <div class="space-y-2">
                <label class="block text-sm font-semibold text-gray-700 dark:text-gray-300" for="message">
                    <?= isset($t) ? $t('contact.message') : 'Message' ?>
                </label>
                <textarea
                    class="w-full px-4 py-2 border border-gray-200 dark:border-gray-700 rounded-lg bg-white dark:bg-gray-900 text-gray-900 dark:text-gray-100 placeholder-gray-400 dark:placeholder-gray-600 focus:ring-2 focus:ring-primary focus:border-transparent outline-none transition-colors min-h-[150px] resize-y"
                    id="message" name="message" placeholder="<?= isset($t) ? $t('contact.message_placeholder') : 'How can I help you?' ?>"></textarea>
            </div>

            <!-- Cloudflare Turnstile -->
            <div class="cf-turnstile" data-sitekey="<?= VITE_SITE_TURNSTILE_KEY ?>"></div>

            <div>
                <button
                    id="contactSubmitBtn"
                    class="px-8 py-3 bg-primary text-white font-semibold rounded-lg hover:opacity-90 active:scale-95 transition-all shadow-sm disabled:opacity-50 disabled:cursor-not-allowed"
                    type="submit">
                    <span id="contactBtnText"><?= isset($t) ? $t('contact.send') : 'Send Message' ?></span>
                </button>
            </div>
        </form>
    </div>
</section>

<!-- Cloudflare Turnstile script -->
<script src="https://challenges.cloudflare.com/turnstile/v0/api.js" async defer></script>