<?php
/*
Plugin Name: 	Alice Form
Plugin URI:		http://wordpress.org/plugins/alice-form/
Description: 	contact form for WordPress
Version: 		1.0
Author: 		Alice Richardeau
Author URI: 	https://github.com/alicemimouni

	Copyright 2021
*/


function form_plugin() {
    $content = '';
    $content .= ' <section class="section-form d-flex flex-column justify-content-center align-items-center">';
    $content .= '<div class="container text-center mt-5">';
    $content .= '<h2 class="fs-3">Une question, une demande de devis&nbsp;?</h2>';
    $content .= '<p>Remplissez le formulaire ci-dessous, nous vous recontacterons rapidement&nbsp;!</p>';
    $content .= '</div>';
    $content .= '<form class="container mt-3 p-4" id="contact_form" method="post" action="http://localhost/hestia/merci-pour-votre-message">';
    $content .= '<div class="form-floating mb-3">';
    $content .= ' <input type="text" name="your_name" class="form-control" required>';
    $content .= '<label for="your_name">Nom</label>';
    $content .= '</div>';
    $content .= '<div class="form-floating mb-3">';
    $content .= '<input type="text" name="your_firstname" class="form-control" required>';
    $content .= '<label for="your_firstname">Prénom</label>';
    $content .= ' </div>';
    $content .= '<div class="form-floating mb-3">';
    $content .= '<input type="email" name="your_email" class="form-control" required pattern="[^@]+@[^@]+\.[a-zA-Z]{2,6}">';
    $content .= '<label for="your_emai">Email</label>';
    $content .= '</div>';
    $content .= '<div class="form-floating mb-3">';
    $content .= '<input type="tel" name="your_tel" class="form-control" pattern="^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$" required>';
    $content .= ' <label for="your_tel">Téléphone</label>';
    $content .= '</div>';
    $content .= '<div class="form-floating mb-3">';
    $content .= '<input type="text" name="your_address" class="form-control">';
    $content .= '<label for="your_address">Adresse</label>';
    $content .= '</div>';
    $content .= '<div class="form-floating mb-3">';
    $content .= '<input type="text" name="your_postal_code" class="form-control">';
    $content .= '<label for="your_postal_code">Code postal</label>';
    $content .= '</div>';
    $content .= '<div class="form-floating mb-3">';
    $content .= '<input type="text" name="your_city" class="form-control">';
    $content .= ' <label for="your_city">Ville</label>';
    $content .= '</div>'; 
    $content .= '<div>';
    $content .= '<p class="fs-5 mt-4">Votre demande concerne&nbsp;:</p>';
    $content .= '<div class="form-check">';
    $content .= '<input class="form-check-input" type="checkbox" name="ask_state-help" value="help">';
    $content .= '<label class="form-check-label" for="ask_state-help">Les Aides de l\'État</label>';
    $content .= '</div>';
    $content .= '<div class="form-check">';
    $content .= '<input class="form-check-input" type="checkbox" name="ask_contract" value="contract">';
    $content .= '<label class="form-check-label" for="ask_contract">Nos Contrats d\'Entretien</label>';
    $content .= '</div>';
    $content .= '<div class="form-check">';
    $content .= '<input class="form-check-input" name="ask_quote" type="checkbox" value="quote">';
    $content .= '<label class="form-check-label" for="ask_quote">Une Demande de Devis</label>';
    $content .= '</div>';
    $content .= '<div class="form-check">';
    $content .= '<input class="form-check-input" name="ask_other" type="checkbox" value="other">';
    $content .= '<label class="form-check-label mb-4" for="ask_other">Autre</label>';
    $content .= ' </div>';
    $content .= '</div>';
    $content .= '<div class="form-floating mb-3">';
    $content .= '<textarea class="form-control" name="your_comments"></textarea>';
    $content .= '<label for="your_comments">Votre message</label>';
    $content .= '</div>';
    $content .= '<div id="html_element"></div>';
    $content .= '<button type="submit" name="form_submit" class=" btn button-primary mt-3 mb-5">Envoyer</button>';
    $content .= '</form>';
    $content.= '<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
    async defer>
    </script>';
    $content .= '</section>';

    return $content;
}
// shortcode to insert form in wordpress page
add_shortcode('contact_form', 'form_plugin');


function form_capture() {
    
    if(isset($_POST['form_submit'])) {

        // allow to clean text
       $name = sanitize_text_field($_POST['your_name']);
       $firstname = sanitize_text_field($_POST['your_firstname']); 
       $email = sanitize_text_field($_POST['your_email']);
       $tel = sanitize_text_field($_POST['your_tel']);
       $address = sanitize_text_field($_POST['your_address']);
       $postal_code = sanitize_text_field($_POST['your_postal_code']);
       $city = sanitize_text_field($_POST['your_city']);
       if(isset($_POST['ask_state-help'])) {
           $ask_help_state = sanitize_text_field($_POST['ask_state-help']);
       }
       if(isset($_POST['ask_contract'])) {
           $ask_contract = sanitize_text_field($_POST['ask_contract']);
        }
        if(isset($_POST['ask_quote'])) { 
            $ask_quote = sanitize_text_field($_POST['ask_quote']);
        }
        if(isset($_POST['ask_other'])) {
            $ask_other = sanitize_text_field($_POST['ask_other']);
        }
       $comments = sanitize_textarea_field($_POST['your_comments']);

       
       $to = 'alicerichardeau@outlook.com';
       $subject = 'contact-hestia';

       if(isset($_POST['ask_contract'])) {
        $object = 'contrats d\'entretien';
       }
       else if(isset($_POST['ask_state-help'])) {
        $object = 'aides de l\'état';
       }
       else if(isset($_POST['ask_other'])) {
        $object = 'autre sujet';
       }
       else if(isset($_POST['ask_quote'])) {
        $object ='demande de devis';
       }
       else {
           $object = 'non renseigné';
       }

    $message = 'Nom : '.$name.' 
            Prénom : '.$firstname.' 
            Email :  '.$email.' 
            Téléphone : '.$tel.' 
            Adresse :  '.$address.'
            Code Postal : '.$postal_code.'
            Ville : '.$city.'
            Object : '.$object.'
            Message : '.$comments;
            
       wp_mail($to, $subject, $message);
    }
}

add_action('wp_head', 'form_capture');