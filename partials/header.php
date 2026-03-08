<!-- BEGIN: MainHeader -->
<header class="relative">
    <!-- Banner Section -->
    <div class="profile-banner w-full rounded-b-2xl overflow-hidden px-4 md:px-12 max-w-6xl mx-auto mt-12">
        <div class="h-full w-full bg-slate-200 flex items-end">
            <!-- Optional: Overlay text or image if needed from reference -->
        </div>
    </div>
    <!-- Header Content Container -->
    <div
        class="max-w-6xl mx-auto px-6 md:px-12 flex flex-col md:flex-row md:items-end justify-between profile-avatar-container">
        <div class="flex flex-col md:flex-row items-end gap-6">
            <!-- Profile Picture -->
            <div class="relative">
                <img alt="Laylah Evans"
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
                <h1 class="text-3xl font-bold text-gray-900">Carlos Hernandez</h1>
                <p class="text-gray-500 mt-1">I'm a Full Stack Developer based in Nicaragua.</p>
            </div>
        </div>
        <!-- Action Buttons -->
        <div class="flex gap-3 mb-2 mt-6 md:mt-0">
            <button class="p-2 border border-gray-200 rounded-lg hover:bg-gray-50 transition-colors"
                data-purpose="options-button">
                <svg class="w-5 h-5 text-gray-600" fill="currentColor" viewbox="0 0 20 20">
                    <path
                        d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z">
                    </path>
                </svg>
            </button>
            <button
                class="flex items-center gap-2 px-4 py-2 border border-gray-200 rounded-lg font-medium hover:bg-gray-50 transition-colors"
                data-purpose="video-call-button">
                <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewbox="0 0 24 24">
                    <path
                        d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"
                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                </svg>
                Video call
            </button>
            <button
                class="flex items-center gap-2 px-4 py-2 bg-gray-900 text-white rounded-lg font-medium hover:bg-gray-800 transition-colors"
                data-purpose="message-button">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewbox="0 0 24 24">
                    <path
                        d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"
                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                </svg>
                Message
            </button>
        </div>
    </div>
</header>
<!-- END: MainHeader -->