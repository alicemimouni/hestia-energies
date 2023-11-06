<!--######### SECTION SERVICES ############ -->
    <!-- ###################################### -->
    <section class="section-services">
        <div class="container-fluid d-flex flex-column align-items-center pt-4 pb-4">
            <!-- CARTE DEPANNAGE -->
            <div class="service-card d-flex flex-column pb-4 mt-4">
                <img class="photo" src="<?php echo get_template_directory_uri();?>/img/depannage-plombier-outil.jpg" alt="Outil de plombier pour le dépannage">
                <div class="card-content">
                    <h5 class="card-title mt-4">Dépannage</h5>
                    <ul>
                        <li><span><img src="<?php echo get_template_directory_uri();?>/img/checkbox.svg"></span>Des professionnels qualifiés</li>
                        <li><span><img src="<?php echo get_template_directory_uri();?>/img/checkbox.svg"></span>Des interventions rapides</li>
                        <li><span><img src="<?php echo get_template_directory_uri();?>/img/checkbox.svg"></span>Un travail de qualité</li>
                    </ul>
                    <a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Besoin d\'un dépannage&nbsp;?' ) ) ); ?>" class="btn button-primary">Demander un dépannage</a>
                </div>
            </div>
            <!-- CARTE ENTRETIEN -->
            <div class="service-card d-flex flex-column pb-4 mt-4">
                <img class="photo" src="<?php echo get_template_directory_uri();?>/img/entretien-contrat-chaudiere-chauffage.jpg"
                    alt="Contrat d'entretien de chaudière">
                <div class="card-content">
                    <h5 class="card-title mt-4">Entretien</h5>
                    <ul>
                        <li><span><img src="<?php echo get_template_directory_uri();?>/img/checkbox.svg"></span>Des experts pour vous accompagner</li>
                        <li><span><img src="<?php echo get_template_directory_uri();?>/img/checkbox.svg"></span>Pour les particuliers et les collectivités</li>
                        <li><span><img src="<?php echo get_template_directory_uri();?>/img/checkbox.svg"></span>Préserver vos équipements</li>
                    </ul>
                    <a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Entretenir vos équipements' ) ) ); ?>" class="btn button-primary">Entretenir mes équipements</a>
                </div>
            </div>
            <!-- CARTE REMPLACEMENT -->
            <div class="service-card d-flex flex-column pb-4 mt-4">
                <img class="photo" src="<?php echo get_template_directory_uri();?>/img/plombier-depannage-chaudiere.jpg" alt="Plombier réparant une chaudière">
                <div class="card-content">
                    <h5 class="card-title mt-4">Remplacement</h5>
                    <ul>
                        <li><span><img src="<?php echo get_template_directory_uri();?>/img/checkbox.svg"></span>Respect de votre budget</li>
                        <li><span><img src="<?php echo get_template_directory_uri();?>/img/checkbox.svg"></span>Des équipements adaptés</li>
                        <li><span><img src="<?php echo get_template_directory_uri();?>/img/checkbox.svg"></span>Des professionnels à votre écoute</li>
                    </ul>
                    <a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Installation d\'équipements' ) ) ); ?>" class="btn button-primary">Remplacer mes équipements</a>
                </div>
            </div>

        </div>

    </section>