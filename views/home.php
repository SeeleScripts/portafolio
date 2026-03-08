<?php
require 'system/main.php';
$layout = new HTML(title: 'Carlos Hernandez - Portfolio', active: $active);
?>

<input id="magic_token" type="hidden" value="<?= $ajax_nonce ?>">


<!-- BEGIN: MainContent -->
<main class="max-w-6xl mx-auto px-6 md:px-12 py-12 space-y-16">
    <!-- Experience Section -->
    <section class="space-y-4" id="experience">
        <div class="flex justify-between items-center">
            <h2 class="text-xl font-bold text-gray-900">Experience</h2>
            <button class="text-gray-400 hover:text-gray-600">
                <svg class="w-5 h-5" fill="currentColor" viewbox="0 0 20 20">
                    <path
                        d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z">
                    </path>
                </svg>
            </button>
        </div>
        <p class="text-gray-600">I specialise in WordPress development, UI/UX design, brand strategy, and full-stack
            solutions.</p>
        <!-- Experience Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 pt-4">
            <!-- Experience Card 1 -->
            <div class="card-border rounded-xl p-6 space-y-4 hover:shadow-sm transition-shadow">
                <div class="flex items-center gap-4">
                    <div
                        class="w-12 h-12 bg-blue-600 rounded-full flex items-center justify-center text-white font-bold">
                        C</div>
                    <div>
                        <h3 class="font-bold text-gray-900">Lead WordPress Developer</h3>
                        <p class="text-sm text-gray-500">Coinbase</p>
                    </div>
                </div>
                <p class="text-sm text-gray-400">May 2020 – Present</p>
            </div>
            <!-- Experience Card 2 -->
            <div class="card-border rounded-xl p-6 space-y-4 hover:shadow-sm transition-shadow">
                <div class="flex items-center gap-4">
                    <div
                        class="w-12 h-12 bg-gray-200 rounded-full flex items-center justify-center text-gray-800 font-bold overflow-hidden">
                        <div class="w-full h-full bg-slate-800 flex items-center justify-center">
                            <div class="w-6 h-6 bg-white rotate-45"></div>
                        </div>
                    </div>
                    <div>
                        <h3 class="font-bold text-gray-900">WordPress Developer</h3>
                        <p class="text-sm text-gray-500">Linear</p>
                    </div>
                </div>
                <p class="text-sm text-gray-400">Jan 2018 – May 2020</p>
            </div>
            <!-- Experience Card 3 -->
            <div class="card-border rounded-xl p-6 space-y-4 hover:shadow-sm transition-shadow">
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
    <!-- About Me Section -->
    <section class="grid grid-cols-1 md:grid-cols-3 gap-12 border-t border-gray-100 pt-12" id="about">
        <div class="md:col-span-2 space-y-6">
            <h2 class="text-xl font-bold text-gray-900">About me</h2>
            <div class="text-gray-600 space-y-4 leading-relaxed">
                <p>I'm a WordPress Developer based in Melbourne, Australia. I enjoy working on custom theme development
                    and high-performance Webflow migrations. I occasionally take on freelance work.</p>
                <p>I've worked with some of the world's most exciting companies, including <span
                        class="text-primary font-medium">Coinbase</span>, <span
                        class="text-primary font-medium">Stripe</span>, and <span
                        class="text-primary font-medium">Linear</span>. I'm passionate about helping startups grow,
                    improve their UX and customer experience, and to fundraise through good design.</p>
                <p>My work has been featured on Typewolf, Mindsparkle Magazine, Webflow, Fonts In Use, CSS Winner,
                    httpster, Siteinspire, and Best Website Gallery.</p>
            </div>
        </div>
        <div class="space-y-8">
            <!-- Location -->
            <div>
                <h4 class="text-sm font-semibold text-gray-400 uppercase tracking-wider mb-2">Location</h4>
                <div class="flex items-center gap-2 font-medium">
                    <span class="text-lg">🇦🇺</span>
                    <span>Melbourne, AU</span>
                </div>
            </div>
            <!-- Website -->
            <div>
                <h4 class="text-sm font-semibold text-gray-400 uppercase tracking-wider mb-2">Website</h4>
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
                <h4 class="text-sm font-semibold text-gray-400 uppercase tracking-wider mb-2">Portfolio</h4>
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
                <h4 class="text-sm font-semibold text-gray-400 uppercase tracking-wider mb-2">Email</h4>
                <a class="flex items-center gap-1 font-medium text-gray-900 hover:text-primary transition-colors"
                    href="mailto:hi@laylahevans.com">
                    hi@carlosdev.com
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewbox="0 0 24 24">
                        <path d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                    </svg>
                </a>
            </div>
        </div>
    </section>
    <!-- Recent Work Section -->
    <section class="space-y-8 border-t border-gray-100 pt-12" id="recent-work">
        <div class="flex justify-between items-center">
            <h2 class="text-xl font-bold text-gray-900">Recent work</h2>
            <button class="text-gray-400 hover:text-gray-600">
                <svg class="w-5 h-5" fill="currentColor" viewbox="0 0 20 20">
                    <path
                        d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z">
                    </path>
                </svg>
            </button>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            <!-- Work Item 1 -->
            <div
                class="aspect-square bg-gray-100 rounded-xl overflow-hidden group cursor-pointer border border-gray-100">
                <img alt="Work 1"
                    class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuCFVh2aPDGoY8-etwEU3_OqNzvp0jClTCKkpigjDqJb2r9YE6EmRUvUySEP8Oy3qSMm1aQRrmxBBrB7Q77UirwuZyp5S2m34g-8o46kzsmF_wvwTbP223txFxFnBs3-hNyCZSfgP25saLMhza8XMUE5maIbpqFni14erLqIeANhtKka0bDtx_2H7nbQgij8KjycqBiAZtQPYjvf-pBLBFP0nfyih9TMaX6vyVDWWLzCcUCXwbTVSrchGTQFyfvPR1HMlCwnnGy4KLY" />
            </div>
            <!-- Work Item 2 -->
            <div
                class="aspect-square bg-gray-100 rounded-xl overflow-hidden group cursor-pointer border border-gray-100">
                <img alt="Work 2"
                    class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuCe1ZfzeXM93tmJay8t78sOZpJHc5wesibC55z9nJ9s6cc1e5hph7rmJnDrdNgr6msJl5cYt8Q-iRh816N547lEh_TLrOtelrduR0EgHVikeiiF0PXLYqxpxXn-ik-BTVvPGexCwu6FrqoCVwVbM1CU5EpJ76I4DZGTfB-wgMAJK3zc_o3MWtniCN7AQkgyEiggpf5Bwj5Ov3pQdkgUQAAVe3PjTrbL8sJXsLKjCCIIV0lCqC_cObZul4XZRySjyqbnPKu6uT1lvkc" />
            </div>
            <!-- Work Item 3 -->
            <div
                class="aspect-square bg-gray-100 rounded-xl overflow-hidden group cursor-pointer border border-gray-100">
                <img alt="Work 3"
                    class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuDdPcNb1DiBaepfh59riOxBZW771pT3eqp7dyNBmX91ZJvAgSxZgCaOeupM9UjUxOYJye32GyE1-Fgk3OZ5iiVUjB5kJDbSANe7nvE1_q7G_7b4xAG8D-nAsnBxknygIp_XoVAMMroeqayFScoS9fBASusHyIqlTRzO8ogZ_ITJ-q96DSGsaGNcry6NGD-Ssc5pBRcx7M7TWaiKCvdFO9lZMMv9L6kMCy6KCu46cCurTwdkMjUHMgwdJDOCAIkqmfu5tT_fz5GM6Hw" />
            </div>
            <!-- Work Item 4 -->
            <div
                class="aspect-square bg-gray-100 rounded-xl overflow-hidden group cursor-pointer border border-gray-100">
                <img alt="Work 4"
                    class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuAAUGNhxjtsdecjtvuNJONNak9W1pUTCkrHsNbHlfl9aULHKFUwt7zdbVGka-rM6yxJbI8KQ-tEkHwWgYgKFyM4JGkQcOkt6i5sG9bnCcNiZMubsz2JfDtgHXXN8qD_vSlJknfVVCtRwMivzpA12ZDYw8I9Kr_QSd2ptvg41ekQqasbVOqZ6-FDuuew1XvwMf2GUZp1khSGWeaVkmluAhZoqCLHMIKAzFhfYVuQbnMqo116RCTv-5C4GKlypJeRMAWRTZZJfZ8hrvQ" />
            </div>
        </div>
    </section>
</main>
<!-- END: MainContent -->
