<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: { 
                        premiumDark: '#050505', 
                        accentGold: '#D4AF37',
                        accentAccent: '#6366f1'
                    }
                }
            }
        }
    </script>
    <?php wp_head(); ?>
</head>
<body <?php body_class('font-body antialiased min-h-screen flex flex-col selection:bg-white selection:text-black'); ?>>
<?php wp_body_open(); ?>

<!-- Custom Cursor Elements -->
<div class="cursor-dot"></div>
<div class="cursor-outline"></div>

<!-- Noise Texture Overlay (Premium aesthetic) -->
<div class="fixed inset-0 z-[-1] opacity-20 pointer-events-none" style="background-image: url('https://grainy-gradients.vercel.app/noise.svg');"></div>

<!-- ==========================================
     PREMIUM HEADER / NAVIGATION
     ========================================== -->
<header class="fixed top-0 left-0 w-full z-50 mix-blend-difference px-8 py-6 flex justify-between items-center transition-all duration-500">
    
    <div class="font-heading text-2xl font-bold tracking-tight text-white uppercase" data-aos="fade-down" data-aos-duration="1000">
        <!-- NOTE: Yahan Website ka logo/naam aayega -->
        <a href="<?php echo esc_url(home_url('/')); ?>" class="hover-trigger"><?php bloginfo('name'); ?></a>
    </div>

    <!-- NOTE: Yahan Menu aayega. "#" ki jagah page ke link daalein. -->
    <nav class="hidden md:flex space-x-12 text-sm font-medium tracking-widest text-white uppercase" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="200">
        <a href="#" class="hover-trigger relative group">
            Work
            <span class="absolute -bottom-2 left-0 w-0 h-[2px] bg-white transition-all duration-300 group-hover:w-full"></span>
        </a>
        <a href="#" class="hover-trigger relative group">
            Studio
            <span class="absolute -bottom-2 left-0 w-0 h-[2px] bg-white transition-all duration-300 group-hover:w-full"></span>
        </a>
        <a href="#" class="hover-trigger relative group">
            Contact
            <span class="absolute -bottom-2 left-0 w-0 h-[2px] bg-white transition-all duration-300 group-hover:w-full"></span>
        </a>
    </nav>

    <div class="md:hidden text-white hover-trigger" data-aos="fade-down">
        <!-- Mobile Menu Icon -->
        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 8h16M4 16h16"></path></svg>
    </div>
</header>
