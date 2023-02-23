<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package theme-name
 */

get_header(); ?>

<img src="<?php bloginfo('template_url'); ?>/Respect-neurodevelopment-logo-1.png"  alt="">
 <h1>New website coming soon.</h1>
 <p>Enter your email address below to be notified when website is live.</p>
 <!-- Begin Mailchimp Signup Form -->
<link href="//cdn-images.mailchimp.com/embedcode/classic-071822.css" rel="stylesheet" type="text/css">
<style type="text/css">
	#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif;  width:600px;}
	/* Add your own Mailchimp form style overrides in your site stylesheet or in this style block.
	   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
</style>
<div id="mc_embed_signup">
    <form action="https://kcl.us21.list-manage.com/subscribe/post?u=4ff61322b16d2dd5611e2e8f4&amp;id=c7db6a3dc8&amp;f_id=0010f7e1f0" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
        <div id="mc_embed_signup_scroll">

        <div class="indicates-required"><span class="asterisk">*</span> indicates required</div>
<div class="mc-field-group">
	<label for="mce-FNAME">First Name </label>
	<input type="text" value="" name="FNAME" class="" id="mce-FNAME">
	<span id="mce-FNAME-HELPERTEXT" class="helper_text"></span>
</div>
<div class="mc-field-group">
	<label for="mce-LNAME">Last Name </label>
	<input type="text" value="" name="LNAME" class="" id="mce-LNAME">
	<span id="mce-LNAME-HELPERTEXT" class="helper_text"></span>
</div>
<div class="mc-field-group">
	<label for="mce-EMAIL">Email Address  <span class="asterisk">*</span>
</label>
	<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" required>
	<span id="mce-EMAIL-HELPERTEXT" class="helper_text"></span>
</div>
	<div id="mce-responses" class="clear foot">
		<div class="response" id="mce-error-response" style="display:none"></div>
		<div class="response" id="mce-success-response" style="display:none"></div>
	</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_4ff61322b16d2dd5611e2e8f4_c7db6a3dc8" tabindex="-1" value=""></div>
        <div class="optionalParent">
            <div class="clear foot">
                <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
                <p class="brandingLogo"><a href="http://eepurl.com/ikbdY1" title="Mailchimp - email marketing made easy and fun"><img src="https://eep.io/mc-cdn-images/template_images/branding_logo_text_dark_dtp.svg"></a></p>
            </div>
        </div>
    </div>
</form>
</div>
<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
<!--End mc_embed_signup-->


<?php get_footer(); ?>




<style>

@font-face { 
    font-family: 'king';
    src: url(<?php bloginfo('template_url'); ?>/KingsBureauGrotesqueThreeSeven-woff.woff) format("woff2");
  }

  @font-face { 
    font-family: 'king-small';
    src: url(<?php bloginfo('template_url'); ?>/KingsBureauGrotesqueFiveOne-woff.woff) format("woff2");
  }
  h1{
    margin-bottom: 0px;
  }

  p, input, label{
    font-family: king-small;
  }

  img{
    width: 100%;
    max-width: 300px;
  }

  body{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    height: 100vh;
    font-family: king;
    /* padding: 20px; */

    font-family: king;

  }
</style>