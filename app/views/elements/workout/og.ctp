<?php

$club_fbid = $workout['Club']['fbid'];
$workout_id = $workout['Workout']['id'];
$workout_url = Router::url(sprintf("/workout/%d/", $workout_id), true);
$workout_title = sprintf("%s - %s",
        $workout['Club']['name'], date('M d, Y', strtotime($workout['Workout']['date'])));
$workout_description = str_replace("\n", "\n", $workout['Workout']['description']);
?>
<meta property="fb:app_id" content="<?php echo Configure::read('Facebook.app_id'); ?>"> 
<meta property="og:type" content="<?php echo Configure::read('Facebook.namespace'); ?>:workout"> 
<meta property="og:url" content="<?php echo $workout_url; ?>"> 
<meta property="og:title" content="<?php echo $workout_title; ?>"> 
<meta property="og:description" content="<?php echo $workout_description; ?>"> 
<meta property="og:image" content="https://s-static.ak.fbcdn.net/images/devsite/attachment_blank.png"> 
<meta property="feightcrossfit:club" content="<?php echo $club_fbid; ?>"> 
