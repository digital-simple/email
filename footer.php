

<?php get_template_part('template-parts/membership'); ?>

<footer class="relative py-24 bg-main text-white text-center">
    <div class="absolute bottom-0 left-0 h-full w-full"
            style="background-size:cover; background-image: linear-gradient(0deg, rgba(0,0,0,.3) 0%, rgba(0,0,0,.9) 100%), url(<?php the_field('overlay_bg', 'option') ?>)">

    </div>
    <div class="relative container !mb-0 z-10" data-aos="fade-in">
        <h2 class="mb-8 max-w-5xl mx-auto">
            <?php the_field('footer_message', 'option') ?>
        </h2>
        <div class="footer-nav md:hidden">
            <?php
            wp_nav_menu(
                array(
                    'menu' => 'footer',
                    'container' => '',
                    'theme_location' => 'footer',
                )
            );
            ?>
        </div>
        <div class="social mt-8 md:pb-16">
            <?php
            $facebook = get_field('facebook', 'option');
            if (!empty($facebook)):
                ?>
                <a href="<?php the_field('facebook', 'option') ?>" target="_blank">
                    <div class="social-wrap">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M14 13.5h2.5l1-4H14v-2c0-1.03 0-2 2-2h1.5V2.14c-.326-.043-1.557-.14-2.857-.14C11.928 2 10 3.657 10 6.7v2.8H7v4h3V22h4v-8.5z" />
                        </svg>
                    </div>
                </a>
            <?php endif; ?>
            <?php
            $instagram = get_field('instagram', 'option');
            if (!empty($instagram)):
                ?>
                <a href="<?php the_field('instagram', 'option') ?>" target="_blank">
                    <div class="social-wrap">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M12 9a3 3 0 1 0 0 6a3 3 0 0 0 0-6zm0-2a5 5 0 1 1 0 10a5 5 0 0 1 0-10zm6.5-.25a1.25 1.25 0 0 1-2.5 0a1.25 1.25 0 0 1 2.5 0zM12 4c-2.474 0-2.878.007-4.029.058c-.784.037-1.31.142-1.798.332a2.886 2.886 0 0 0-1.08.703a2.89 2.89 0 0 0-.704 1.08c-.19.49-.295 1.015-.331 1.798C4.006 9.075 4 9.461 4 12c0 2.474.007 2.878.058 4.029c.037.783.142 1.31.331 1.797c.17.435.37.748.702 1.08c.337.336.65.537 1.08.703c.494.191 1.02.297 1.8.333C9.075 19.994 9.461 20 12 20c2.474 0 2.878-.007 4.029-.058c.782-.037 1.309-.142 1.797-.331a2.92 2.92 0 0 0 1.08-.702c.337-.337.538-.65.704-1.08c.19-.493.296-1.02.332-1.8c.052-1.104.058-1.49.058-4.029c0-2.474-.007-2.878-.058-4.029c-.037-.782-.142-1.31-.332-1.798a2.911 2.911 0 0 0-.703-1.08a2.884 2.884 0 0 0-1.08-.704c-.49-.19-1.016-.295-1.798-.331C14.925 4.006 14.539 4 12 4zm0-2c2.717 0 3.056.01 4.122.06c1.065.05 1.79.217 2.428.465c.66.254 1.216.598 1.772 1.153a4.908 4.908 0 0 1 1.153 1.772c.247.637.415 1.363.465 2.428c.047 1.066.06 1.405.06 4.122c0 2.717-.01 3.056-.06 4.122c-.05 1.065-.218 1.79-.465 2.428a4.883 4.883 0 0 1-1.153 1.772a4.915 4.915 0 0 1-1.772 1.153c-.637.247-1.363.415-2.428.465c-1.066.047-1.405.06-4.122.06c-2.717 0-3.056-.01-4.122-.06c-1.065-.05-1.79-.218-2.428-.465a4.89 4.89 0 0 1-1.772-1.153a4.904 4.904 0 0 1-1.153-1.772c-.248-.637-.415-1.363-.465-2.428C2.013 15.056 2 14.717 2 12c0-2.717.01-3.056.06-4.122c.05-1.066.217-1.79.465-2.428a4.88 4.88 0 0 1 1.153-1.772A4.897 4.897 0 0 1 5.45 2.525c.638-.248 1.362-.415 2.428-.465C8.944 2.013 9.283 2 12 2z" />
                        </svg>
                    </div>
                </a>
            <?php endif; ?>
        </div>
    </div>

    <div class="footer-copy md:flex-col">
        <div class="flex font-bold gap-4 md:flex-col">
            <div class="flex gap-2 items-center md:justify-center">
                <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/location.svg" alt=""
                    class="contact-icon">
                <div>
                    <?php the_field('address', 'option'); ?>
                </div>
            </div>
            <a href="tel:<?php the_field('phone', 'option'); ?>">
                <div class="flex gap-2 items-center md:justify-center md:mb-4">
                    <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/call.svg" alt=""
                        class="contact-icon">
                    <div>
                        <?php the_field('prepend', 'option') ?>
                        <?php the_field('phone', 'option'); ?>
                    </div>
                </div>
            </a>
        </div>
        <div class="text-sm">
            ©
            <?php echo date('Y'); ?>
            <?php echo get_bloginfo('name'); ?> All Rights Reserved.
        </div>
    </div>
</footer>
</body>

</html>

<?php wp_footer(); ?>