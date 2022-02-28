<?php 
get_header(); 

?>


<main>

    <section class="section-products py-20">
        <div class="container mb-10">
            <h1 class="text-center text-fu-secondary fw-bold">Nos produits en vente</h1>
            <p class="text-center text-fu-secondary">
                Nos offrons une gamme de produits de vente en équipements et accessoires de <br>
                premiers soins de haute qualité et respectant les standards de Santé-Canada.
            </p>
        </div>

        <div class="container">
            <?php echo do_shortcode('[products columns=4 limit=4 order=DESC]'); ?>
        </div>        
    </section>


    <section class="section-boss bg-fu-secondary py-3">
        <!-- <div class="container position-relative"> -->
            <!--
            <div class="row position-absolute top-0 bottom-0 start-0 end-0 pt-8">
                <div class="boss-image-box position-absolute mx-auto w-75 start-0 end-0 overflow-hidden">
                    <img class="img-fluid w-100" src="<?php assets_url('/images/michel-beamier-candidat-mairie-de-st-paulin-2021.jpg')?>" alt="CEO">
                </div>
            </div>
            -->
            <div class="row m-0">
                
                <div class="col-12 col-md-6 p-0">
                    <div class="box-image-boss overflow-hidden">
                        <img class="img-fluid w-100" src="<?php assets_url('/images/michel-beamier-candidat-mairie-de-st-paulin-2021.jpg')?>" alt="CEO">
                    </div>
                </div>               
                <div class="col-12 col-md-6 bg-fu-secondary text-white pt-4 p">
                        <div class="px-5 px-md-2 pt-0 pb-5 col-12 col-xxl-8">
                            <p class="text-fu-primary fs-6 fw-bold m-0">Président Directeur général</p>                   
                            <p class="fs-1 fw-bold mb-6">Michel Beaumier</p>
                            Fort d’une expérience dans le milieu médical et de sécurité. 
                            Michel a été directeur d’agence de sécurité ou il a été 
                            formateur en sécurité d’intervention spécialisée, garde du corps, 
                            détective privé et responsable d’équipes médicales événementielles.
                            Il a ainsi travaillé dans plusieurs milieux comme aux télécommunications 
                            pour la Sûreté du Québec, agent de sécurité dans plusieurs endroits 
                            et aussi dans la gestion de sécurité.

                            <div class="pt-7">
                                <a href="<?php echo bloginfo('url') . '/michel-beaumier' ?>" class="fw-bold text-white text-decoration-none btn-fu-white border border-white py-3 px-4">
                                    En savoir plus...
                                </a>
                            </div>
                        </div>
                </div>
            </div>
        <!--</div>-->
    </section>


    <section class="section-infos py-20 position-relative">
        <div class="position-absolute start-0 end-0 top-0 bottom-0 d-flex align-items-end">
            <!--
            <svg xmlns="http://www.w3.org/2000/svg" height="80%" preserveAspectRatio="none" viewBox="0 0 1440 320">
                <path fill="#E51D25" fill-opacity="0.2" d="M0,288L120,256C240,224,480,160,720,122.7C960,85,1200,75,1320,69.3L1440,64L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"></path></svg>
            -->
            <svg class="d-none d-md-block" xmlns="http://www.w3.org/2000/svg" height="70%" preserveAspectRatio="none" viewBox="0 0 1440 320"><path fill="#E51D25" fill-opacity="0.1" d="M0,192L40,181.3C80,171,160,149,240,133.3C320,117,400,107,480,112C560,117,640,139,720,170.7C800,203,880,245,960,218.7C1040,192,1120,96,1200,58.7C1280,21,1360,43,1400,53.3L1440,64L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>
        </div>
        <div class="container-xl position-relative"  style="z-index:10;">
            <div class="row">
                <div class="col-md-6 mb-3">
                    <div class="overflow-hidden p-0">
                        <img class="img-fluid" src="<?php assets_url('/images/ambulancier-formation.webp')?>" alt="">
                    </div>
                </div>

                <div class="col-md-6 mt-md-15 ms-md-n20 overflow-visible">
                    <div class="bg-white p-6 p-xl-8 shadow" style="min-height: 45rem;">
                        <h2 class="fw-bold text-fu-secondary" style="font-size: 4.5rem;">
                            Devenir un professionnel en secourisme
                        </h2>
                        <p class="text-fu-secondary pt-4 mb-7">
                            Donec litora sollicitudin erat arcu sociosqu hac. Porta orci dapibus dignissim 
                            ullamcorper ligula aliquam molestie rutrum ultricies semper lectus. Quis sem sit et orci nec 
                            lobortis dignissim maecenas. Class bibendum cubilia tempus tincidunt metus dictumst 
                            ligula aliquam molestie rutrum ultricies semper lectus.                           
                        </p>
                        <a href="#" class="fw-bold text-decoration-none text-fu-secondary btn-fu-white border border-fu-secondary py-3 px-4">
                            En savoir plus...
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>


<?php 
get_footer();

?>