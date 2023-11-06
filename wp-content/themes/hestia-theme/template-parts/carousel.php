 <!--############# SECTION CAROUSEL #########-->
    <!-- ####################################### -->
    <section class="section-carousel">
        <div id="carouselExampleDark" class="carousel carousel-white slide" data-bs-ride="carousel">
            <!-- <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div> -->
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="3000">
                    <img src="<?php echo get_template_directory_uri();?>/img/depannage-chauffage-femme-tablette.jpg" class="d-block w-100" alt="Femme sur un canapé qui effectue des recherches sur sa tablette.">
                    <div class="carousel-caption text-center align-middle d-md-block">
                        <h2 class="text-uppercase slide-in">Besoin d'un dépannage&nbsp;?</h2>
                        <p class="reveal">Faites appel à un professionnel&nbsp;!</p>
                        <a class="btn btn-outline-light reveal" href="<?php echo esc_url( get_permalink( get_page_by_title( 'Contactez-nous&nbsp;!' ) ) ); ?>">Contactez-nous</a>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <img src="<?php echo get_template_directory_uri();?>/img/aides-de-l-etat-renovation-energetique.jpg" class="d-block w-100" alt="Maison">
                    <div class="carousel-caption d-md-block">
                        <h2 class="text-uppercase">Primes de l'état</h2>
                        <p>Nous constituons votre dossier&nbsp;!</p>
                        <a class="btn btn-outline-light" href="<?php echo esc_url( get_permalink( get_page_by_title( 'Contactez-nous&nbsp;!' ) ) ); ?>">En savoir plus</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="<?php echo get_template_directory_uri();?>/img/installation-chauffage-remplacement-equipements-renovation.jpg" class="d-block w-100" alt="Climatiseur, chauffage réversible">
                    <div class="carousel-caption d-md-block">
                        <h2 class="text-uppercase">Installation</h2>
                        <p>Pompe à chaleur, chaudière, climatisation&nbsp;...</p>
                        <a class="btn btn-outline-light" href="<?php echo esc_url( get_permalink( get_page_by_title( 'Contactez-nous&nbsp;!' ) ) ); ?>">Contactez-nous</a>
                    </div>
                </div>
            </div>
        </div>

    </section>