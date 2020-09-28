<?php

/**
 *
 * @package UHLC
 * Template Name:ContactUpdated
 */
?>

<head>
    <title><?php bloginfo('name'); ?> | Home</title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <?php wp_head(); ?>
</head>

<body>
    <div id="wrapper">
        <?php get_header(); ?>
        <div id="inner">
            <?php

            if (have_posts()) {

                while (have_posts()) {
                    the_post();

                    get_template_part('template-parts/content', get_post_type());
                }
            }

            ?>

            <section id="form">
                <form action ="confirm" method="post">
                <div class="inner">
                    <h1>How may we help you?</h1>
                    <div class="row uniform">
                        <div class="6u 12u$(xsmall)">
                            <input type="text" name="name" id="name" value="" placeholder="Name" />
                        </div>
                        <div class="6u 12u$(xsmall)">
                            <input type="text" name="organization" id="organization" value="" placeholder="Organization" />
                        </div>
                        <div class="6u 12u$(xsmall)">
                            <input type="email" name="EMail" id="EMail" value="" placeholder="Email address" />
                        </div>
                        <div class="6u 12u$(xsmall)">
                            <input type="text" name="phone" id="phone" value="" placeholder="Phone number" />
                        </div>
                        <div class="12u$">
                              <input type="text" name="SMS" id="SMS" value="" placeholder="Preferred Method of Contact" />                          
                        </div>
                        <div class="12u$">
                            <textarea name="message" id="message" placeholder="Enter your message" rows="6"></textarea>
                        </div>
                        <!-- Break -->
                        <div class="12u$">
                            <ul class="actions">
                                <li><input type="submit"></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
	</form>
        </div>   
        <?php get_footer(); ?>
    </div>
</body>