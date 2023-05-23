<?php 
// Template Name: Frivillig // 
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

.image-box {
    width: 50vw;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 1rem 100px;
}

.image {
    max-height: 75vh; 
}

.text-area {
    width: 50vw;
    padding: 1rem 100px;
    color: #f2f2f2;
}

.text-box-headline {
    font-size: 30px;
    text-align: center;
    font-family: "franklin-gothic-urw", sans-serif;
    font-weight: 700;
    color: #f2f2f2;
    padding-bottom: 0.5rem;

}

.column-box {
    margin: 6rem 100px;
    height: fit-content;
    display: flex!important;
    align-items: center!important;
}

.contact-box {
    background-color: #1e1e1e;
    border: solid 5px #1e1e1e;
    min-height: 100%;
}


.contact-info-headline, .contact-form-headline {
    text-align: center;
    font-size: 30px;
    padding-bottom: 1rem;
    font-family: "franklin-gothic-urw", sans-serif;
    font-weight: 500;
    color: #f2f2f2;
}

.contact-text-box, .contact-info-outer-box {
    padding: 0.5rem 0.5rem;
}

.contact-info p {
    font-size: 18px;
    padding-bottom: 1.5rem;
}

.contact-info a {
    color: #f2f2f2;
}

.contact-info {
    background-color: #464646;
    color: #f2f2f2;
    padding: 1rem 5rem;
}

.contact-form-box {
    padding: 1rem 5rem;
}

.wpforms-container {
    margin: 0!important;
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


.three-image-box {
    min-height: 100%;
}

.two-image-box {
    max-height: 50%;
}

.image-medium {
    max-height: 50%;
}

.image-small {
    width: 100%;
}

</style>