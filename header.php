<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Tailwind Configuration for Custom Futuristic Colors -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: { 
                        cyber: '#06b6d4', 
                        neonblue: '#3b82f6',
                        darkspace: '#030712'
                    }
                }
            }
        }
    </script>
    <?php wp_head(); ?>
</head>
<body <?php body_class('antialiased font-sans min-h-screen flex flex-col selection:bg-cyber selection:text-black'); ?>>
<?php wp_body_open(); ?>

<!-- ==========================================
     HEADER / NAVIGATION SECTION
     ========================================== -->
<!-- NOTE: Ye website ka sabse upar wala hissa hai jahan logo aur menu aata hai -->
<header class="glass-panel sticky top-4 z-50 p-5 flex justify-between items-center w-[95%] max-w-7xl mx-auto rounded-2xl shadow-2xl shadow-cyber/10 border border-white/10 transition-all duration-300">
    
    <div class="text-3xl font-black tracking-tighter neon-text text-transparent bg-clip-text bg-gradient-to-r from-cyber to-neonblue">
        <!-- NOTE: Yahan 'bloginfo' automatically aapki website ka naam dikhayega jo settings mein hai. 
             Agar aap logo image lagana chahte hain toh is <a> tag ke andar <img> tag add kar lena. -->
        <a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
    </div>

    <!-- NOTE: Ye aapke website ki navigation (Menu) hai. Abhi ye static hai, aap apne pages ke link yahan '#' ki jagah add kar sakte hain. -->
    <nav class="hidden md:flex space-x-10 text-sm font-bold tracking-widest uppercase text-gray-400">
        <a href="#" class="hover:text-white transition duration-300 hover:neon-text hover:-translate-y-0.5 transform">Home</a>
        <a href="#" class="hover:text-white transition duration-300 hover:neon-text hover:-translate-y-0.5 transform">About</a>
        <a href="#" class="hover:text-white transition duration-300 hover:neon-text hover:-translate-y-0.5 transform">Services</a>
        <a href="#" class="hover:text-white transition duration-300 hover:neon-text hover:-translate-y-0.5 transform">Contact</a>
    </nav>

    <!-- Mobile Menu Button (Optional integration space) -->
    <div class="md:hidden">
        <button class="text-gray-300 hover:text-white focus:outline-none">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
        </button>
    </div>
</header>
