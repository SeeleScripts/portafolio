<section class="space-y-8 border-t border-gray-100 pt-12" id="contact">
    <div class="flex justify-between items-center">
        <h2 class="text-2xl text-primary">Get in touch</h2>
    </div>
    <div class="max-w-2xl">
        <p class="text-gray-600 mb-8">Have a project in mind or just want to say hi? Feel free to reach out using the
            form below.</p>
        <form action="#" class="space-y-6" method="POST">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="space-y-2">
                    <label class="block text-sm font-semibold text-gray-700" for="name">Name</label>
                    <input
                        class="w-full px-4 py-2 border border-gray-200 rounded-lg focus:ring-1 focus:ring-primary focus:border-transparent outline-none transition-all"
                        id="name" name="name" placeholder="Your name" required="" type="text" />
                </div>
                <div class="space-y-2">
                    <label class="block text-sm font-semibold text-gray-700" for="email">Email</label>
                    <input
                        class="w-full px-4 py-2 border border-gray-200 rounded-lg focus:ring-1 focus:ring-primary focus:border-transparent outline-none transition-all"
                        id="email" name="email" placeholder="hi@example.com" required="" type="email" />
                </div>
            </div>
            <div class="space-y-2">
                <label class="block text-sm font-semibold text-gray-700" for="message">Message</label>
                <textarea
                    class="w-full px-4 py-2 border border-gray-200 rounded-lg focus:ring-1 focus:ring-primary focus:border-transparent outline-none transition-all min-h-[150px]"
                    id="message" name="message" placeholder="How can I help you?" required=""></textarea>
            </div>
            <div>
                <button
                    class="px-8 py-3 bg-primary text-white font-semibold rounded-lg hover:opacity-90 transition-opacity shadow-sm"
                    type="submit">
                    Send Message
                </button>
            </div>
        </form>
    </div>
</section>