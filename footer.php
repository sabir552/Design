<!-- ==========================================
     PREMIUM BIG-TYPOGRAPHY FOOTER
     ========================================== -->
<footer class="w-full bg-[#050505] pt-32 pb-10 px-6 md:px-12 border-t border-white/10 relative overflow-hidden">
    
    <div class="max-w-[1400px] mx-auto text-center md:text-left flex flex-col items-center md:items-start relative z-10" data-aos="fade-up" data-aos-duration="1000">
        <p class="text-gray-400 uppercase tracking-[0.3em] text-sm mb-4">
            <!-- NOTE: Footer choti tag line -->
            Have an idea?
        </p>
        <h2 class="font-heading text-6xl md:text-[10vw] font-black text-white leading-none hover-trigger cursor-pointer hover:text-gray-300 transition-colors duration-500">
            <!-- NOTE: Sabse bari footer heading, usually contact ke liye -->
            LET'S TALK.
        </h2>
    </div>

    <div class="max-w-[1400px] mx-auto mt-32 flex flex-col md:flex-row justify-between items-center text-gray-600 text-xs uppercase tracking-widest space-y-6 md:space-y-0" data-aos="fade-in" data-aos-duration="1000" data-aos-delay="300">
        
        <div>
            <!-- NOTE: Copyright text -->
            &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. ALL RIGHTS RESERVED.
        </div>
        
        <div class="flex space-x-10">
            <!-- NOTE: Social media links -->
            <a href="#" class="hover-trigger hover:text-white transition-colors">Instagram</a>
            <a href="#" class="hover-trigger hover:text-white transition-colors">Behance</a>
            <a href="#" class="hover-trigger hover:text-white transition-colors">Twitter</a>
        </div>
        
        <div class="text-right">
            <!-- NOTE: Designed by credit -->
            DESIGNED BY TOP TIER AI
        </div>

    </div>
</footer>

<?php wp_footer(); ?>

<!-- Custom Script for Premium Cursor & Animations -->
<script>
    // Initialize Scroll Animations
    AOS.init({
        once: true, // Animation ek hi baar chalegi jab scroll karenge
        offset: 100, // Thora sa scroll hone par trigger hogi
    });

    // Custom Cursor Logic
    const cursorDot = document.querySelector('.cursor-dot');
    const cursorOutline = document.querySelector('.cursor-outline');
    const hoverTriggers = document.querySelectorAll('.hover-trigger, a, button');

    window.addEventListener('mousemove', (e) => {
        const posX = e.clientX;
        const posY = e.clientY;

        // Dot follows instantly
        cursorDot.style.left = `${posX}px`;
        cursorDot.style.top = `${posY}px`;

        // Outline follows with a slight delay using simple animation frame
        cursorOutline.animate({
            left: `${posX}px`,
            top: `${posY}px`
        }, { duration: 500, fill: "forwards" });
    });

    // Hover effect for links
    hoverTriggers.forEach(trigger => {
        trigger.addEventListener('mouseenter', () => {
            cursorOutline.style.width = '60px';
            cursorOutline.style.height = '60px';
            cursorOutline.style.backgroundColor = 'rgba(255,255,255,0.1)';
        });
        trigger.addEventListener('mouseleave', () => {
            cursorOutline.style.width = '40px';
            cursorOutline.style.height = '40px';
            cursorOutline.style.backgroundColor = 'transparent';
        });
    });
</script>

</body>
</html>
