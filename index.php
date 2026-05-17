<?php get_header(); ?>

<!-- ==========================================
     MAIN CONTENT AREA
     ========================================== -->
<main class="flex-grow flex flex-col items-center justify-center p-6 w-full max-w-7xl mx-auto mt-10 relative">

    <!-- HERO SECTION (Website ka pehla aur sabse attractive hissa) -->
    <section class="text-center space-y-8 py-32 w-full relative">
        <!-- Futuristic Background Glow (Aesthetic ke liye) -->
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[500px] h-[500px] bg-cyber rounded-full blur-[180px] opacity-20 pointer-events-none -z-10"></div>

        <h1 class="text-6xl md:text-8xl font-black tracking-tighter text-transparent bg-clip-text bg-gradient-to-r from-white via-cyber to-neonblue leading-tight">
            <!-- NOTE: Yahan apne website ki sabse bari aur main heading likhein (Hero Title) -->
            Welcome to the Future
        </h1>
        
        <p class="text-xl md:text-2xl text-gray-400 max-w-3xl mx-auto font-light leading-relaxed">
            <!-- NOTE: Yahan apni website ka chota sa introduction ya tag line likhein. -->
            <?php bloginfo('description'); ?> 
            Experience the world's most advanced and high-end digital design directly on your WordPress.
        </p>
        
        <div class="pt-8">
            <!-- NOTE: Ye button hai! "#" ki jagah us page ka link dein jahan aap user ko bhejna chahte hain, aur "Explore Now" ki jagah apna text likhein. -->
            <a href="#" class="inline-block px-10 py-4 bg-white/5 backdrop-blur-md border border-white/10 text-white font-bold rounded-full hover:bg-cyber hover:text-black hover:border-cyber hover:shadow-[0_0_40px_rgba(6,182,212,0.6)] transition-all duration-500 transform hover:-translate-y-2 uppercase tracking-widest text-sm">
                Explore Now
            </a>
        </div>
    </section>

    <!-- POSTS GRID SECTION (Jahan aapke articles ya products aayenge) -->
    <section class="w-full mt-32 relative z-10">
        <div class="flex items-center justify-between mb-12 border-b border-white/10 pb-6">
            <h2 class="text-4xl font-bold neon-text text-white tracking-tight">
                <!-- NOTE: Yahan grid ke upar wali heading likhein jaise "Latest News" ya "Our Projects" -->
                Latest Discoveries
            </h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php 
            // WordPress Post Loop Starts
            if ( have_posts() ) : while ( have_posts() ) : the_post(); 
            ?>

                <!-- INDIVIDUAL CARD -->
                <article class="glass-panel p-8 rounded-3xl hover:bg-white/5 transition-all duration-500 group cursor-pointer border border-white/5 hover:border-cyber/50 hover:-translate-y-2 hover:shadow-2xl hover:shadow-cyber/20 relative overflow-hidden">
                    
                    <!-- Decorative hover glow inside card -->
                    <div class="absolute -inset-full bg-gradient-to-r from-transparent via-cyber/10 to-transparent group-hover:inset-0 transition-all duration-1000 blur-xl opacity-0 group-hover:opacity-100 pointer-events-none"></div>

                    <div class="relative z-10">
                        <h3 class="text-2xl font-bold mb-4 text-white group-hover:text-cyber transition-colors leading-snug">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h3>
                        <div class="text-gray-400 text-sm mb-6 line-clamp-3 leading-relaxed">
                            <!-- NOTE: Yahan automatically aapki post ka thora sa text (Excerpt) aayega -->
                            <?php the_excerpt(); ?>
                        </div>
                        <a href="<?php the_permalink(); ?>" class="inline-flex items-center text-neonblue font-bold uppercase text-xs tracking-widest group-hover:text-cyber transition-colors">
                            Read Article 
                            <svg class="w-4 h-4 ml-2 group-hover:translate-x-2 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                        </a>
                    </div>
                </article>

            <?php endwhile; else : ?>
                <div class="col-span-full text-center py-20">
                    <p class="text-2xl text-gray-500 font-light">
                        <!-- NOTE: Agar aapki website par koi post nahi hogi, toh ye text nazar aayega. Ise tabdeel kar sakte hain. -->
                        No futuristic content found yet. Initiate sequence by adding a new post in WordPress.
                    </p>
                </div>
            <?php endif; ?>
        </div>
    </section>

</main>

<?php get_footer(); ?>
