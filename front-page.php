<?php
    /*
     Template Name: Front Page
    */
?>

<?php
get_header();
?>

	<main class="main--counter">

        <div class="count-down__wrapper">
            <div class="count-down">
                <div class="timer days-container">
                    <h1 id="days" class="counter__number"></h1>
                    <p class="count-down__unit">Days</p>
                </div>
                <div class="timer hours-container">
                    <h1 id="hours" class="counter__number"></h1>
                    <p class="count-down__unit">Hours</p>
                </div>
                <div class="timer mins-container">
                    <h1 id="mins" class="counter__number"></h1>
                    <p class="count-down__unit">Minutes</p>
                </div>
                <div class="timer secs-container">
                    <h1 id="secs" class="counter__number"></h1>
                    <p class="count-down__unit">Seconds</p>
                </div>
            </div>

        </div>

        <script>
            // The data/time we want to countdown to
                var countDownDate = new Date("May 4, 2022 16:00:00").getTime();

                // Run myfunc every second
                var myfunc = setInterval(function() {

                var now = new Date().getTime();
                var timeleft = countDownDate - now;

                // Calculating the days, hours, minutes and seconds left
                var days = Math.floor(timeleft / (1000 * 60 * 60 * 24));
                var hours = Math.floor((timeleft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                var minutes = Math.floor((timeleft % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((timeleft % (1000 * 60)) / 1000);

                // Result is output to the specific element
                document.getElementById("days").innerHTML = days
                document.getElementById("hours").innerHTML = hours
                document.getElementById("mins").innerHTML = minutes
                document.getElementById("secs").innerHTML = seconds

                // Display the message when countdown is over
                if (timeleft < 0) {
                    clearInterval(myfunc);
                    document.getElementById("days").innerHTML = ""
                    document.getElementById("hours").innerHTML = ""
                    document.getElementById("mins").innerHTML = ""
                    document.getElementById("secs").innerHTML = ""
                    document.getElementById("end").innerHTML = "TIME UP!!";
                }
                }, 1000);
        </script>

        <div class="splash-subtitle">
            <div class="splash__container">
                <div class="splash__video">
                    <video autoplay loop muted>
                        <source src= "<?php echo get_template_directory_uri(); ?>/vid/desktop_animation.mp4" type="video/mp4">
                    </video>

                    <video id="video--mobile" autoplay loop muted playsinline>
                        <source src= "<?php echo get_template_directory_uri(); ?>/vid/mobile_animation.mp4" type="video/mp4">
                    </video>

                </div>
            </div>
            <div class=subtitle>
                <p class="subtitle__copy">Senior Exhibition 2022</p>
                <p class="subtitle__copy">Visual Communication Design</p>
                <p class="subtitle__copy">Arizona State University</p>
            </div>
        </div>

	</main><!-- #main -->

<?php

get_footer('home');
