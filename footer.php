<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Inspiro
 * @subpackage Inspiro_Lite
 * @since Inspiro 1.0.0
 * @version 1.0.0
 */

?>

<!-- #content -->

<?php get_template_part( 'template-parts/footer/footer', 'instagram-widget' ); ?>

<footer id="colophon" <?php inspiro_footer_class(); ?> role="contentinfo">
    <div class="inner-wrap footer-wrapper">
        <div>
            <div class="column-header">
                Hent appen
            </div>
            <ul class="first-col">
                <li>
                    <a href="https://apps.apple.com/dk/app/morrow-forudbestil-din-mad/id1533718255?l=da" target="_blank">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/app-store.svg" />
                    </a>
                </li>
                <li>
                    <a href="https://play.google.com/store/apps/details?id=com.morrowapp&hl=da" target="_blank">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/Google-Play-Logo-2015-2016.png" />
                    </a>
                </li>
            </ul>
        </div>
        <div>
            <div class="column-header">
                Indhold
            </div>
            <ul>
                <li><a href="http://johanrives.dk/morrow/index.php/udforsk/">Udforsk</a></li>
                <li><a href="http://johanrives.dk/morrow/index.php/mad-i-naerheden/">Mad i nærheden</a></li>
                <li><a href="http://johanrives.dk/morrow/index.php/populaert-i-dag/">Populært i dag</a></li>
                <li><a href="http://johanrives.dk/morrow/index.php/bestil-igen/">Bestil igen</a></li>
                <li><a href="http://johanrives.dk/morrow/index.php/kategorier/">Kategorier</a></li>
            </ul>
        </div>
        <div>
            <div class="column-header">
                Om Morrow
            </div>
            <ul>
                <li><a href="http://johanrives.dk/morrow/index.php/om/">Hvem er vi</a></li>
            </ul>
            <div class="column-header">
                Følg os her
            </div>
            <ul>
                <li class="social-wrapper">
                    <a href="https://www.facebook.com/morrowapp/" target="_blank">
                        <img class="social_fb" src="<?php echo get_stylesheet_directory_uri() ?>/assets/fbIcon.svg" />
                    </a>
                    <a href="https://www.instagram.com/morrow.app/?hl=da" target="_blank">
                        <img class="social_ig" src="<?php echo get_stylesheet_directory_uri() ?>/assets/ig.svg" />
                    </a>
                </li>
            </ul>
        </div>
        <div>
            <div class="column-header">
                Kontaktinformation
            </div>
            <ul>
                <li><a href="mailto:support@morrow.app" target="_blank">support@morrow.app</a></li>
                <li><a href="tel:+4532421714" target="_blank">+45 XX XX XX XX</a></li>
                <li>KONTOR</li>
                <li>
                    <a href="https://www.google.com/maps/place/Morrow+app/@55.6711876,12.4537421,11z/data=!3m1!4b1!4m5!3m4!1s0x4652536ac74e23db:0x31555b050d87fd36!8m2!3d55.6712674!4d12.5938239" target="_blank">Adresse, 1599 København</a>
                </li>
            </ul>
        </div>
        <?php
				// get_template_part( 'template-parts/footer/footer', 'widgets' );
				// get_template_part( 'template-parts/footer/site', 'info' );
				?>
    </div><!-- .inner-wrap -->
</footer><!-- #colophon -->
</div><!-- .site-content-contain -->
</div><!-- #page -->
<?php wp_footer(); ?>

</body>

<style>
    .site-footer {
        background: #07ba8a;
        color: #000000;
    }

    a {
        color: white;
    }

    .footer-wrapper {
        padding: 20px 0;
        width: 80%;
        margin: 0 auto;
        display: flex;
    }

    .footer-wrapper div {
        flex-basis: 25%;
    }

    .footer-wrapper .column-header {
        text-transform: uppercase;
        color: black;
    }

    .footer-wrapper ul {
        margin-left: 0;
        list-style: none;
    }

    .footer-wrapper ul li {
        margin: 7px 0;

    }

    .footer-wrapper ul.first-col img {
        width: 128px;
    }

    .smuktekst {
        color: white;
    }

    .social-wrapper {
        display: flex;
        gap: 10px;
        width: 50%;
    }

    .social-wrapper a {
        flex-basis: 25%;
    }

    .social_fb,
    .social_ig {
        filter: invert(1);
    }

    .social_fb:hover,
    .social_ig:hover {
        filter: contrast(1) invert(.7);
    }

</style>

</html>
