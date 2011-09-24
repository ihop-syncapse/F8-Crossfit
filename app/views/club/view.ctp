<?php 

echo $this->element('club/header'); 
echo $this->element('club/location');

$club_fb_url = sprintf('http://www.facebook.com/%s/', $club['Club']['fbid']);
$club_fb_url = $club['Club']['url'];
?>
<div style="clear: left;"></div>
<fb:like href="<?php echo $club_fb_url; ?>"></fb:like>

<h3>Recent Workouts</h3>
<ul class="workout-list">
<?php 
if (empty($workouts)) {
    echo '<i>No recent workouts</i>';
}
foreach ($workouts as $workout): 
    $workout_link = Router::url(sprintf('/workout/view/%d/', $workout['Workout']['id']));
    $workout_date = date('M d, Y', strtotime($workout['Workout']['date']));
    ?>
 <a href="<?php echo $workout_link; ?>">
 <li class="workout-item">
  <?php echo $workout_date; ?>
 </li>
 </a>
<?php endforeach; ?>
</ul>