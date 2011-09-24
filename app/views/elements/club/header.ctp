<?php
$club_picture = sprintf("http://graph.facebook.com/%s/picture", $club['Club']['fbid']);
$club_name = $club['Club']['name'];
?>

<div class="club-header">
 <img src="<?php echo $club_picture ?>" class="club-picture" />
 <h2 class="club-name"><?php echo $club_name ?></h2>
</div>
<div class="club-info">
    
</div>