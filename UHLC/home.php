<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage UHLC
 * @since 1.0.0
 * Template Name: Home
 */
get_header();
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <title><?php bloginfo('name'); ?> | Home</title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <?php wp_head(); ?>
</head>

<body>
    <?php get_header(); ?>
    <div id="wrapper">
        <div id="inner">

            <?php

            // if (have_posts()) {

            // 	while (have_posts()) {
            // 		the_post();

            // 		get_template_part('template-parts/content', get_post_type());
            // 	}
            // }

            ?>


            <div class="row uniform">
                <!-- Mission Statement -->
                <div class="12u$">
                    <div class="box box-color">
                        <h1 class="align-center margin-0 no-case">A place for professionals and the public to join in understanding the path to better health and find quality health information</h1>
                    </div>
                </div>

                <!-- About -->
                <div class="12u$">
                    <div class="box box-color">
                        <h2 class="no-case">Who we are and what we do</h1>
                        <p>The Utah Health Literacy Coalition (UTHLC) is an affiliation of health educators, public health officials, community health workers, librarians and other professionals who are dedicated to improving health for all Utahns by providing understandable and useful health information. UTHLC promotes health literacy through the expansion of professional knowledge which encourages best practices in health communication, including meeting health consumers where they are at with respect to their ability to listen or read and comprehend health information. UTHLC pursues these goals through educational programs, share groups, library lending arrangements, and seminars.</p>
                    </div>
                </div>

                <!-- Events -->
                <div class="12u$">
                    <div class="box box-color">
                        
                        <?php include("template-parts/get-events.php"); ?>
                    </div>
                </div>
            
                <!-- Quick Links -->
                <div class="row uniform quick-links">
                    <div class="4u">
                        <div class="content">
                            <h1 class="align-center bold">
                                <a href="http://cs.westminstercollege.edu/uhlc/uhlc/index.php/resources/#things-to-read">Things to read</a></h1>
                        </div>
                    </div>
                    <div class="4u">
                        <div class="content">
                            <h1 class="align-center bold">
                                <a href="http://cs.westminstercollege.edu/uhlc/uhlc/index.php/resources/#things-to-watch">Things to watch</a></h1>
                        </div>
                    </div>
                    <div class="4u">
                        <div class="content">
                            <h1 class="align-center bold">
                                <a href="http://cs.westminstercollege.edu/uhlc/uhlc/index.php/contact">Ask a question</a></h1>
                        </div>
                    </div>
                </div>
            </div>




            <div class="row uniform">
                
                
            </div>
        </div>
        <?php get_footer(); ?>
    </div>
</body>