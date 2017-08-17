<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package chengdu
 */

?>

	 <div class="footer">
      <div class="foot_line">
        <p>END</p>
      </div>
      <div class="w1200">
        <div class="f_server clearfix">
			<?php  dynamic_sidebar('footer-widget'); ?>
        </div>
        <div class="f_support">
          <p><?php global $chengdu; echo $chengdu['copy-text']; ?></p>
        </div>
      </div>
    </div>
    <!-- 悬浮咨询 -->
	
	<?php wp_footer(); ?>
  </body>
</html>

