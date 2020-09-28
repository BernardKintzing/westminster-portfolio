<?php

/**
 *
 * @package UHLC
 * Template Name:Join
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
		<form action="confirm" method="post">
                <div class="inner">
                    <h1>Become a Member!</h1>
                    <div class="row uniform">
                        <div class="6u 12u$(xsmall)">
                            <input type="text" name="fname" id="fname" value="" placeholder="First Name" />
                        </div>
                        <div class="6u 12u$(xsmall)">
                            <input type="text" name="lname" id="lname" value="" placeholder="Last Name" />
                        </div>
                        <div class="6u 12u$(xsmall)">
                            <input type="EMail" name="EMail" id="EMail" value="" placeholder="Email Address" />
                        </div>
                        <div class="6u 12u$(xsmall)">
                        <input type="text" name="Organization" id="Organization" value="" placeholder="Organization" />
                        </div>
                        <div class="6u 12u$(xsmall)">
                            <input type="text" name="Address" id="Address" value="" placeholder="Address" />
                        </div>
                        <div class="6u 12u$(xsmall)">
                        <input type="text" name="City" id="City" value="" placeholder="City" />
                        </div>
                        <div class="6u 12u$(xsmall)">
                            <input type="text" name="State" id="State" value="" placeholder="State" />
                        </div>
                        <div class="6u 12u$(xsmall)">
                            <input type="text" name="ZIP" id="ZIP" value="" placeholder="ZIP" />
                        </div>
                        <div class="6u 12u$(xsmall)">
                            <input type="text" name="Phone" id="Phone" value="" placeholder="Phone" />
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
