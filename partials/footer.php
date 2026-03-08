<footer class="max-w-6xl mx-auto px-6 md:px-12 py-12 border-t border-gray-100">
    <div class="flex flex-col md:flex-row justify-between items-center gap-6">
        <div class="text-gray-500 text-sm">
          <?= isset($t)
          	? $t('footer.built_with')
          	: 'Carlos Hernandez. Built with Tailwind.' ?>
        </div>
        <div class="flex gap-6 text-sm font-medium text-gray-600">
    
            <a class="hover:text-primary transition-colors" href="#">LinkedIn</a>
            <a class="hover:text-primary transition-colors" href="#">GitHub</a>
            <a class="hover:text-primary transition-colors" href="#">SeeleScript</a>
        </div>
    </div>
</footer>