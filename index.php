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
 * @package Wordpress_Test
 */

get_header();
?>
    <div class="row wp-test-intro">
        <div class="col-md-8 col-sm-12">
            <div class="description-area">
                <h2 class="title">Duurzame materialen</h2>
                <p class="description">
                    Alle EcoCabins hebben een hoge isolatiewaarde, worden geproduceerd met indien mogelijk duurzame en/of natuurlijke materialen en hebben als opvallende uiterlijke kenmerk de ‘ronde hoeken', mogelijk gemaakt door het specifieke materiaalgebruik. De voordelen van bouwen met hout zijn legio: hout is licht, flexibel, isoleert goed en bouwt snel en efficient.
                </p>
                <button class="btn btn-outline-secondary intro-btn" type="button">
                    Button
                </button>
            </div>
        </div>
        <div class="col-md-4 col-sm-12">
            <img class="roof wp-test-img animate__animated animate__lightSpeedInRight" src="<?php echo get_template_directory_uri() . '/img/wooden-roof.png' ?>" />
        </div>
    </div>
    <div class="row p-12">
        <div class="wp-test-innovatie">
            <div class="row ep">
                <h1 class="title">Innovatie</h1>
                <div class="col-md-6 col-sm-12 cols">
                    <span class="description">
                        Wij hebben als doel om de EcoCabins voortdurend verder te ontwikkelen en innoveren, zodat de EcoCabins uiteindelijk 100% duurzaam en circulair zijn. Voorwaarde hierbij is dat de EcoCabins betaalbaar blijven. Met behulp van de zon, de wind en de beste isolatie geniet u van.
                    </span>
                </div>
                <div class="col-md-6 col-sm-12 cols">
                    <span class="description">
                        Alle EcoCabins hebben een hoge isolatiewaarde, worden geproduceerd met indien mogelijk duurzame en/of natuurlijke materialen en hebben als opvallende uiterlijke kenmerk de ‘ronde hoeken’, mogelijk gemaakt door het specifieke materiaalgebruik De voordelen van bouwen.
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="row wp-test-usp">
        <div class="col-md-6 col-sm-12">
            <img class="wp-test-img animate__animated animate__lightSpeedInLeft" src="<?php echo get_template_directory_uri() . '/img/house.png' ?>" />
        </div>
        <div class="col-md-6 col-sm-12">
            <div class="row pb-12">
                <div class="col-md-6 cols">
                    <span class="title">Hout</span>
                    <p class="description">De draagconstructies van EcoCabins bestaan uit hout. Hout is duurzaam en.</p>
                </div>
                <div class="col-md-6 cols">
                    <span class="title">Glaswol isolatie</span>
                    <p class="description">De combinatie van glaswol met een houtskelet constructie geeft een.</p>
                </div>
            </div>
            <div class="row pb-12">
                <div class="col-md-6 cols">
                    <span class="title">Afwerking</span>
                    <p class="description">De draagconstructies van EcoCabins bestaan uit hout. Hout is duurzaam en.</p>
                </div>
                <div class="col-md-6 cols">
                    <span class="title">Triple gas</span>
                    <p class="description">De combinatie van glaswol met een houtskelet constructie geeft een.</p>
                </div>
            </div>
            <div class="row pb-12">
                <div class="col-md-6 cols">
                    <span class="title"> Stalen onderstel</span>
                    <p class="description">Het stalen onderstel is sterk zijn en heeft de benodigde stijfheid die.</p>
                </div>
                <div class="col-md-6 cols">
                    <span class="title">Infrarood vloer</span>
                    <p class="description">De vloer wordt opgewarmd middels opgewekte warmte uit eigen zonne-energie.</p>
                </div>
            </div>
        </div>
    </div>
<?php
get_sidebar();
get_footer();
