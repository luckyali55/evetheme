<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage evetheme
 * @since evetheme 1.0
 */
?>

<footer id="footer">
    <?php
        global $theme_opt;
       // print_r($theme_opt);
        if(isset($theme_opt['evetheme_social_enable']) && $theme_opt['evetheme_social_enable']==1)
        {
    ?>
    <ul class="icons">
        <?php if(isset($theme_opt['evetheme_social_facebook']) && $theme_opt['evetheme_social_facebook']!=''){ ?>
        <li><a href="<?php echo $theme_opt['evetheme_social_facebook']; ?>" class="icon circle fa-facebook"><span class="label">Facebook</span></a></li>
        <?php } ?>
        <?php if(isset($theme_opt['evetheme_social_twitter']) && $theme_opt['evetheme_social_twitter']!=''){ ?>
        <li><a href="<?php echo $theme_opt['evetheme_social_twitter']; ?>" class="icon circle fa-twitter"><span class="label">Twitter</span></a></li>
        <?php } ?>
        <?php if(isset($theme_opt['evetheme_social_google']) && $theme_opt['evetheme_social_google']!=''){ ?>
        <li><a href="<?php echo $theme_opt['evetheme_social_google']; ?>" class="icon circle fa-google-plus"><span class="label">Google+</span></a></li>
        <?php } ?>
        <?php if(isset($theme_opt['evetheme_social_youtube']) && $theme_opt['evetheme_social_youtube']!=''){ ?>
        <li><a href="<?php echo $theme_opt['evetheme_social_youtube']; ?>" class="icon circle fa-youtube"><span class="label">Youtube</span></a></li>
        <?php } ?>
        <?php if(isset($theme_opt['evetheme_social_pintrust']) && $theme_opt['evetheme_social_pintrust']!=''){ ?>
        <li><a href="<?php echo $theme_opt['evetheme_social_pintrust']; ?>" class="icon circle fa-pinterest"><span class="label">Pintrust</span></a></li>
        <?php } ?>
    </ul>
    <?php } ?>

    <ul class="copyright">
        <?php if(isset($theme_opt['evetheme_footer_txt']) && $theme_opt['evetheme_footer_txt']!=''){  ?>
        <li> <?php echo $theme_opt['evetheme_footer_txt']; ?> </li>
        <?php } ?>
        <li><a href="http://wordpress.org/" title="Semantic Personal Publishing Platform">
                Powered by WordPress                    </a>
            , Designed and Developed by
            <a href="http://www.999webtemplates.com/">
                999webtemplates                    </a></li>
    </ul>

</footer>
	</article>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.dropotron.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.scrolly.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.scrollgress.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/skel.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/util.js"></script>
    <!--[if lte IE 8]><script src="<?php echo get_template_directory_uri(); ?>/js/ie/respond.min.js"></script><![endif]-->
<script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
	<?php wp_footer(); ?>
</body>
</html>