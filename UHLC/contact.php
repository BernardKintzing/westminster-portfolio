<?php

/**
 *
 * @package UHLC
 * Template Name:Contact
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
                            <input type="email" name="email" id="email" value="" placeholder="Email address" />
                        </div>
                        <div class="6u 12u$(xsmall)">
                            <input type="text" name="phone" id="phone" value="" placeholder="Phone number" />
                        </div>


                        <div class="12u$">
                            <div class="select-wrapper">
                                <select name="category" id="reason">
                                    <option value="1">Preferred Method of Contact</option>
                                    <option value="1">Email</option>
                                    <option value="1">Phone</option>
                                    <option value="1">SMS</option>
                                </select>
                            </div>
                        </div>

                        <div class="12u$">
                            <textarea name="message" id="message" placeholder="Enter your message" rows="6"></textarea>
                        </div>

                        <!-- Break -->
                        <div class="12u$">
                            <ul class="actions">
                                <li><input id="send" type="button" value="Send Message" class="special" onclick="sendEmail();" /></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <?php get_footer(); ?>
    </div>
</body>