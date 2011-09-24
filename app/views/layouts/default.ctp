<html xmlns:fb="https://www.facebook.com/2008/fbml">
 <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# feightcrossfit: http://ogp.me/ns/fb/feightcrossfit#">
  <title><?php echo $title_for_layout ?></title>
  <?php if (!empty($og_for_layout)) { echo $og_for_layout; } ?>
  <?php echo $scripts_for_layout ?>
  <?php echo $html->css('layout'); ?>
  <?php echo $this->element('script/jquery'); ?>
 </head>       
 <body>
  <?php echo $this->element('script/facebook_js_sdk'); ?>
  <?php echo $content_for_layout ?>
  <div class="footer"></div>
 </body>
</html>

  