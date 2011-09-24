<div id="fb-root"></div>
<script type="text/javascript" src="http://connect.facebook.net/en_US/all.js"></script>
<script type="text/javascript">
  FB.init({
    appId  : '<?php echo Configure::read('Facebook.app_id'); ?>',
    status : true, // check login status
    cookie : true, // enable cookies to allow the server to access the session
    xfbml  : true, // parse XFBML
    <?php /*channelURL : 'http://WWW.MYDOMAIN.COM/channel.html', // channel.html file */ ?>
    oauth  : true // enable OAuth 2.0
  });
</script>