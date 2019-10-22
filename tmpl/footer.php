<?php
    $countTb = modtravelHelper::countTb();
    $countTravel = modtravelHelper::countTravel();
?>


<div class="container travel_footer mb-3 ">
    <div class="row">
        <div class="col-md-4 center">

            <header>
                <h4 class="fa fa-2x fa-info circled">
                    Info
                </h4>
            </header>

            <ul class="divided ">
                <li>
                    <a href="/site/1-chi-siamo.html">CHI SIAMO</a>
                </li>

                <li>
                    <a href="/contatti/1-info.html">CONTATTACI</a>
                </li>

                <li>
                    <a href="/contatti/1-info.html">SUGGERIMENTI</a>
                </li>

                <li>
                    <a href="/condizioni.html">PRIVACY POLICY</a>
                </li>


            </ul>
        </div>

        <!-- Posts -->
        <div class="col-md-4 center">
            <header>
                <h4 class="fa fa-2x fa-globe circled">
                    Travel Blogger
                </h4>
            </header>
            <ul class="divided ">

                <li>
                    <a href="/tblist"><?php echo $countTb; ?> Travel Blogger</a>
                </li>

                <li>
                    <a href="/travellist"><?php echo $countTravel; ?> posti visitati</a>
                </li>

                <li>
                    <a href="/blog/">BLOG</a>
                </li>



            </ul>
        </div>

        <div class="col-md-4 center">
            <header>
                <h4 class="fa fa-2x fa-camera circled">
                    Social
                </h4>
            </header>

            <ul class="icons">
                <li><a target="_blank" href="https://www.facebook.com/fyltravel/" class="fa fa-facebook">  Facebook </a></li>
                <li><a target="_blank" href="https://www.instagram.com/fyl_travel/" class="fa fa-instagram">  Instagram </a></li>
            </ul>

        </div>

    </div>
</div>
