<?php

echo $this->element('club/header'); 
$workout_date = date('M d, Y', strtotime($workout['Workout']['date']));
$workout_details = str_replace("\n", "<br/>\n", $workout['Workout']['description']);
?>

<h3>Workout</h3>
<dl>
 <dt>date</dt><dd><?php echo $workout_date; ?></dd>
 <dt>details</dt><dd style="margin-left: 60px;"><?php echo $workout_details; ?></dd>
</div>
<h3>People</h3>
<dl>
 <dt>attending</dt><dd><?php echo $attending . ' ' . __n('person', 'people', $attending, true); ?></dd>
 <dt>completed</dt><dd><?php echo $completed . ' ' . __n('person', 'people', $completed, true); ?></dd>
</dl>
<a href="#" class="button" id="attend">Attend</a> |
<a href="#" class="button" id="complete_show">Complete</a>
<form id="complete_form" style="display: none;">
 <label for="score">Score</label>
 <input type="text" name="score" id="score" /><br/>
 <a href="#" class="button" id="complete">Complete</a>
</form>

<script type="text/javascript">
$('#attend').click(function() {
    fb_require_login(function() {
        var url = '/me/<?php echo Configure::read('Facebook.namespace') ?>:attend?workout=' + escape(document.location);
        FB.api(url, 'post', function(response) {
            alert('attending' + JSON.);
        });
    });
});
$('#complete_show').click(function() {
    $(this).hide();
    $('#complete_form').show();
});
$('#complete').click(function() {
    fb_require_login(function() {
        var score = $('#score').val();
        var url = '/me/<?php echo Configure::read('Facebook.namespace') ?>:complete?workout=' + escape(document.location) + '&score=' + score;
        FB.api(url, function(response) {
            alert('completed: ' + JSON.stringify(response));
        });
    });
});
</script>

<h3>Leaderboard</h3>
<ul class="leaderboard-list">
<?php foreach($completions as $completion):
    $user_picture = sprintf('http://graph.facebook.com/%s/picture', $completion['WorkoutCompletion']['user_fbid']);
    ?>
    <li>
     <img src="<?php echo $user_picture; ?>" />
     <b>User Name</b><br/>
     Score: <?php echo $user_score; ?>
    </li>
<?php endforeach;?>
</ul>