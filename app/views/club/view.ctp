<?php 

echo $this->element('club/header'); 
echo $this->element('club/location');
?>

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