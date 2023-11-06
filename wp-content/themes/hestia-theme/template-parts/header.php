
<!-- ########HEADER############### -->
<!-- ############################ -->
    <header>
        <div class="container-fluid container-nav p-0">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand m-0 d-block" href="<?php echo get_option('home'); ?>/">
                    <img src="<?php echo get_template_directory_uri();?>/img/logo-hestia-rm.png" alt="Logo">
                </a>
                <!-- <p class="text-bold mb-0 d-flex"><img src="<?php echo get_template_directory_uri();?>/img/telephone-hestia.svg" width="15px"/><span><a class="text-bold" href="tel:+33477273237">04 77 27 32 37</a></span></p> -->
                <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span><img src="<?php echo get_template_directory_uri();?>/img/burger-menu.svg" alt=""></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                <?php wp_nav_menu(array(
            'theme_location' => 'nav'
            )); ?>
                </div>
        </div>
        </nav>
    </header>