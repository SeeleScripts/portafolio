  <!-- Experience Section -->
    <section class="space-y-4" id="experience">
        <div class="flex justify-between items-center">
            <h2 class="text-xl font-bold text-gray-900"><?= $t(
            	'experience.title',
            ) ?></h2>
            <button class="text-gray-400 hover:text-gray-600">
                <svg class="w-5 h-5" fill="currentColor" viewbox="0 0 20 20">
                    <path
                        d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z">
                    </path>
                </svg>
            </button>
        </div>
        <p class="text-gray-600"><?= $t('experience.description') ?></p>
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