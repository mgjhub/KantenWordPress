<?php 
get_header();

if( have_posts() ) :
    while( have_posts() ) :
        the_post();
        get_template_part( 'template-parts/post/content' );
    endwhile;    
endif;

get_footer();
?>

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

.event-box {
  width: 1000px;
  min-height: 250px;
  background: green;

  /* top left - bottom right */        
  -webkit-clip-path: polygon(0 15%, 0 100%, 95% 100%, 100% 85%, 100% 0, 5% 0);
  clip-path: polygon(0 15%, 0 100%, 95% 100%, 100% 85%, 100% 0, 5% 0);

  /* top right - bottom left */
  /* -webkit-clip-path: polygon(0px 0px, 0px 85%, 5% 100%, 100% 100%, 100% 15%, 95% 0);
  clip-path: polygon(0px 0px, 0px 85%, 5% 100%, 100% 100%, 100% 15%, 95% 0); */

  overflow: hidden;

  display: flex;
  align-items: center;
  margin: 5rem;
}

.image-box {
    width: 50%;
    height: 250px;
    overflow: hidden;
    padding-right: 1rem;
}

img {
    width: 100%;
    height: 250px;
    object-fit: cover;
}

.text-area {
    width: 50%;
    padding: 1rem;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

.time {
    display: flex;
    align-items: center;
}

.tid, .dato {
    width: 50%;
    height: fit-content;
}

.button-box {
    padding: 1rem;
}