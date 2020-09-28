<?php

/**
 *
 * @package UHLC
 * Template Name:Calendar
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <title><?php bloginfo('name'); ?> | Calendar</title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

    <link href='/uhlc/wordpress/wp-content/themes/UHLC/node_modules/@fullcalendar/core/main.css' rel='stylesheet' />
    <link href='/uhlc/wordpress/wp-content/themes/UHLC/node_modules/@fullcalendar/daygrid/main.css' rel='stylesheet' />

    <script src='/uhlc/wordpress/wp-content/themes/UHLC/node_modules/@fullcalendar/core/main.js'></script>
    <script src='/uhlc/wordpress/wp-content/themes/UHLC/node_modules/@fullcalendar/daygrid/main.js'></script>
    <script src='/uhlc/wordpress/wp-content/themes/UHLC/node_modules/@fullcalendar/google-calendar/main.js'></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');

            var calendar = new FullCalendar.Calendar(calendarEl, {
                plugins: ['dayGrid', 'googleCalendar'],
                googleCalendarApiKey: 'AIzaSyAB5jTpNoZSLiQeStCLiGTAoAVfNavmS4s',
                events: {
                    googleCalendarId: '462ovjk9ahr2l0rp0me0ruptjc@group.calendar.google.com'
		    }
	    });

            calendar.render();
        });
    </script>

    <?php wp_head(); ?>

</head>

<body>
    <div id="wrapper">
        <?php get_header(); ?>
        <div id="inner">
            <h1 class="alt align-center">Calendar</h1>
            <div class="row uniform">

                <div class="12u$">
                    <div class="box box-color">
                        <?php include("template-parts/get-events.php"); ?>
                    </div>
                </div>

                <div class="12u$">
                    <div class="box box-color align-center padding-0">
			<div id="calendar"></div>
			<?php edit_post_link(); ?>
                        <!-- <iframe src="https://outlook.live.com/owa/calendar/00000000-0000-0000-0000-000000000000/8d0bb071-9982-467e-a8cb-ad1e40f0e042/cid-27D6E0FA64414174/index.html" style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe> -->
                        <!-- <iframe src="https://calendar.google.com/calendar/b/2/embed?height=600&amp;wkst=1&amp;bgcolor=%23ffffff&amp;ctz=America%2FDenver&amp;src=NDYyb3ZqazlhaHIybDBycDBtZTBydXB0amNAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&amp;color=%238A2D38&amp;showTitle=1" style="border-width:0" width="800" height="600" frameborder="0" scrolling="no"></iframe> -->
                    </div>
                </div>
            </div>
        </div>
        <?php get_footer(); ?>
    </div>
</body>
