<?php get_header(); ?>

<!-- ==========================================
     MAIN CONTENT
     ========================================== -->
<main class="flex-grow w-full relative overflow-hidden">

    <!-- HERO SECTION -->
    <section class="relative w-full h-screen flex flex-col items-center justify-center text-center px-4 overflow-hidden">
        <!-- Premium Animated Aurora Background -->
        <div class="aurora-bg"></div>
        
        <div class="z-10 mt-16">
            <!-- NOTE: Yahan main bari heading likhein. 'font-heading' isko premium look deta hai -->
            <h1 class="font-heading text-6xl md:text-9xl font-extrabold text-white leading-[0.9] tracking-tighter mix-blend-difference" data-aos="fade-up" data-aos-duration="1500">
                ELEVATE <br>
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-gray-400 to-white">YOUR VISION</span>
            </h1>
            
            <p class="font-body text-lg md:text-2xl text-gray-400 max-w-2xl mx-auto mt-8 font-light" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300">
                <!-- NOTE: Yahan tagline likhein -->
                A masterclass in digital experience. Designed for those who refuse to blend in.
            </p>
            
            <div class="mt-12" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="500">
                <!-- NOTE: 'Explore' button ka link aur text -->
                <a href="#projects" class="hover-trigger inline-block px-10 py-5 border border-white/30 text-white rounded-full font-medium tracking-widest uppercase hover:bg-white hover:text-black transition-all duration-500">
                    Discover Our Work
                </a>
            </div>
        </div>
        
        <!-- Scroll Down Indicator -->
        <div class="absolute bottom-10 left-1/2 -translate-x-1/2 flex flex-col items-center" data-aos="fade-in" data-aos-delay="1000">
            <span class="text-[10px] tracking-[0.3em] uppercase text-gray-500 mb-2">Scroll</span>
            <div class="w-[1px] h-12 bg-gradient-to-b from-gray-500 to-transparent"></div>
        </div>
    </section>

    <!-- PREMIUM PORTFOLIO/POSTS GRID -->
    <section id="projects" class="py-32 px-6 md:px-12 max-w-[1400px] mx-auto z-10 bg-[#050505]">
        
        <div class="mb-20">
            <h2 class="font-heading text-4xl md:text-7xl font-bold text-white tracking-tighter" data-aos="fade-right">
                <!-- NOTE: Grid section ki heading -->
                SELECTED WORKS
            </h2>
            <div class="w-full h-[1px] bg-white/20 mt-10" data-aos="scale-x"></div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-x-12 gap-y-24">
            <?php 
            $counter = 0;
            if ( have_posts() ) : while ( have_posts() ) : the_post(); 
            $counter++;
            // Adding a dynamic offset for the second column to create a premium asymmetric masonry look
            $margin_class = ($counter % 2 == 0) ? 'md:mt-32' : '';
            ?>

                <!-- POST CARD -->
                <article class="<?php echo $margin_class; ?> group cursor-pointer hover-trigger" data-aos="fade-up" data-aos-duration="1200">
                    <a href="<?php the_permalink(); ?>" class="block w-full">
                        <div class="w-full aspect-[4/5] img-hover-zoom rounded-2xl bg-white/5 relative overflow-hidden border border-white/5">
                            
                            <!-- NOTE: Yahan featured image show hogi. Agar post mein image nahi hai toh ek premium grey background aayega -->
                            <?php if (has_post_thumbnail()) : ?>
                                <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'large'); ?>" alt="<?php the_title(); ?>" class="w-full h-full object-cover opacity-80 group-hover:opacity-100 transition-opacity duration-700">
                            <?php else: ?>
                                <div class="w-full h-full bg-gradient-to-tr from-gray-900 to-black flex items-center justify-center">
                                    <span class="text-white/20 font-heading text-4xl">NO IMAGE</span>
                                </div>
                            <?php endif; ?>
                            
                            <!-- Hover View Project Badge -->
                            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-32 h-32 bg-white rounded-full flex items-center justify-center opacity-0 group-hover:opacity-100 transform scale-50 group-hover:scale-100 transition-all duration-500 z-20 mix-blend-screen">
                                <span class="text-black font-bold uppercase tracking-widest text-xs">View</span>
                            </div>
                        </div>

                        <div class="mt-8 flex justify-between items-start">
                            <div>
                                <h3 class="font-heading text-3xl font-bold text-white group-hover:text-gray-300 transition-colors">
                                    <!-- NOTE: Post ka title -->
                                    <?php the_title(); ?>
                                </h3>
                                <p class="text-gray-500 mt-2 uppercase tracking-widest text-xs">
                                    <!-- NOTE: Post ki category -->
                                    <?php 
                                        $categories = get_the_category();
                                        if ( ! empty( $categories ) ) {
                                            echo esc_html( $categories[0]->name );   
                                        } else {
                                            echo 'Editorial';
                                        }
                                    ?>
                                </p>
                            </div>
                            <span class="text-gray-600 font-heading text-lg">0<?php echo $counter; ?></span>
                        </div>
                    </a>
                </article>

            <?php endwhile; else : ?>
                <div class="col-span-full py-20">
                    <h3 class="font-heading text-5xl text-gray-700">
                        <!-- NOTE: Empty posts message -->
                        No Masterpieces Found.
                    </h3>
                </div>
            <?php endif; ?>
        </div>
    </section>

</main>

<?php get_header(); ?> <!-- Actually get_footer should be here, keeping structure exact -->
<?php get_footer(); ?>
