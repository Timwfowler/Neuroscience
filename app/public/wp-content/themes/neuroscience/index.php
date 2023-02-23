<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package theme-name
 */

get_header(); ?>




<?php get_footer(); ?>




<style>

@font-face { 
    font-family: 'king';
    src: url(<?php bloginfo('template_url'); ?>/KingsBureauGrotesqueThreeSeven-woff.woff) format("woff2");
  }

  @font-face { 
    font-family: 'king-small';
    src: url(<?php bloginfo('template_url'); ?>/KingsBureauGrotesqueFiveOne-woff.woff) format("woff2");
  }
  h1{
    margin-bottom: 0px;
  }

  p, input, label{
    font-family: king-small;
  }

  img{
    width: 100%;
    max-width: 300px;
  }

  body{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    height: 100vh;
    font-family: king;
    /* padding: 20px; */

    font-family: king;

  }
</style>