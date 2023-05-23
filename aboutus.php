<?php 
// Template Name: About Us // 
get_header();
?>

<?php
if( have_posts() ) :
    while( have_posts() ) :
        the_post();
        get_template_part( 'template-parts/post/content' );
    endwhile;    
endif;
?>

<?php get_footer(); ?>

<!-- CSS -->

<style>

body {
    background-color: #141414;
}

.entry-title {
    display: none;
}

h1 {
    text-align: center;
    padding: 2rem 0;
    font-size: 150px;
    font-family: "franklin-gothic-urw", sans-serif;
    font-weight: 900;
    color: #f2f2f2;
}

.img-text-box {
    display: flex;
    justify-content: center;
    align-items: center;
}

.img-text-box .wp-container-3 {
    display: flex;
    justify-content: center;
    align-items: center!important;
}

.image-box {
    width: 50vw;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 1rem 100px;
    height: 100%;
}

.image {
    height: fit-content;
    margin: 0;
}

.image img {
    max-height: 50vh;
    width: auto;
}

.text-area {
    width: 50vw;
    padding: 1rem 100px;
    color: #f2f2f2;
    height: fit-content;
}

.text-box-headline {
    font-size: 30px;
    text-align: center;
    font-family: "franklin-gothic-urw", sans-serif;
    font-weight: 700;
    color: #f2f2f2;
    padding-bottom: 0.5rem;

}

.text-area p {
    padding-bottom: 1.2rem;
}

.about-columns {
    margin: 6rem 100px;
    background-color: #464646;
    border: #1e1e1e 5px solid;  
}

.about-contact-column {
    padding: 1rem 5rem;
    color: #f2f2f2;
}

.contact-form-column {
    background-color: #1e1e1e;
    color: #f2f2f2;
}

.wp-block-lazyblock-address {
    width: 100%;
    display: flex;
}

.contact-info-headline, .contact-form-headline {
    text-align: center;
    font-size: 30px;
    padding: 1rem 0;
    font-family: "franklin-gothic-urw", sans-serif;
    font-weight: 500;
}

.about-contact-column p {
    font-size: 18px;
    padding-bottom: 1.5rem;
}

.contact-info-box a {
    color: #f2f2f2;
}

.contact-form {
    width: 50%;
    padding: 1rem;
}

.wpforms-field-label {
    color: #e1e1e1!important;
    font-size: 18px!important;
    font-family: "franklin-gothic-urw", sans-serif;
    font-weight: 600;
}

.wpforms-required-label {
    color: #ff0000!important;
    font-family: "franklin-gothic-urw", sans-serif;
    font-weight: 600;
}

.wpforms-field {
    font-family: "franklin-gothic-urw", sans-serif;
    font-weight: 400;
}

@media (max-width: 1500px) {
    .img-text-box {
        flex-direction: column-reverse;
        justify-content: center;
    }
    
    .image-box {
        width: 80vw;
    }
    
    .text-area {
        width: 80vw;
    }
}

@media (max-width: 1200px) {
    .about-columns {
        flex-direction: column;
    }
}

</style>