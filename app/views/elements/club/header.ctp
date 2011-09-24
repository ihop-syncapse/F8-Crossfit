<?php
$club_picture = sprintf("http://graph.facebook.com/%s/picture", $club['Club']['fbid']);
$club_name = $club['Club']['name'];
?>

<div class="club-header header" style="padding-top: 1px;">
 <img src="<?php echo $club_picture ?>" class="club-picture" />
 <h3><?php echo $club_name ?></h3>
</div>
<div class="club-info">
    
</div>