<?php 
// Template Name: Kraftværket // 
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

.hero-img {
    max-height: 80vh;
    overflow: hidden;
    margin: 0;
}

.hero-img img {
    width: 100vw;
}

.mini-nav {
    height: 75px;
    width: 100vw;
    background-color: #464646;
    display: flex;
    justify-content: center;
    align-items: center;
}


.mini-nav a {
    font-size: 30px;
    text-decoration: none!important;
    color: #f2f2f2;
    margin: 0 2rem;
    width: fit-content;
    height: fit-content;
}

.mini-nav p {
    font-family: "franklin-gothic-urw", sans-serif;
    font-weight: 700;
}

.video-text-box {
    padding: 1rem 100px;
    height: fit-content;
}

.video-box {
    height: 100%;
    width: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
}

.youtube-video {
    margin: 0;
    height: 100%
}

.youtube-video iframe {
    width: 640px;
    height: 360px;
    margin: 3rem 0;
}

.text-area {
    display: flex;
    justify-content: center;
    align-items: center;
    height: fit-content;
    flex-direction: column;
    width: 50%;
}

.kraftvaerket-headline {
    text-align: center;
    padding: 2rem 0;
    font-size: 50px;
    font-family: "franklin-gothic-urw", sans-serif;
    font-weight: 900;
    color: #f2f2f2;
}

.text-area p {
    font-family: "franklin-gothic-urw", sans-serif;
    font-weight: 400;
    line-height: 1.5rem;
    color: #f2f2f2;
    padding-bottom: 1.2rem;
}

</style>