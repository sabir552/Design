<!-- ==========================================
     FOOTER SECTION
     ========================================== -->
<footer class="w-full border-t border-white/10 mt-32 py-12 relative overflow-hidden bg-black/40 backdrop-blur-xl">
    
    <div class="max-w-7xl mx-auto px-6 flex flex-col md:flex-row justify-between items-center text-gray-500 text-sm relative z-10">
        
        <p class="font-medium tracking-wide">
            <!-- NOTE: Yahan apna Footer ka text / Copyright change karein -->
            &copy; <?php echo date('Y'); ?> <span class="text-white"><?php bloginfo('name'); ?></span>. The Future is Here.
        </p>
        
        <div class="flex space-x-6 mt-6 md:mt-0">
            <!-- NOTE: Yahan apne social media links lagayein ('#' ki jagah Facebook, Twitter etc ka link daalein) -->
            <a href="#" class="hover:text-cyber transition-colors duration-300 font-medium tracking-widest uppercase text-xs">Instagram</a>
            <a href="#" class="hover:text-cyber transition-colors duration-300 font-medium tracking-widest uppercase text-xs">Twitter</a>
            <a href="#" class="hover:text-cyber transition-colors duration-300 font-medium tracking-widest uppercase text-xs">LinkedIn</a>
        </div>

    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
