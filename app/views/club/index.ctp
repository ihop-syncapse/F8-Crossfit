<h2>Crossfit Clubs</h2>

<ul class="club-list">
<?php foreach ($clubs as $club): 
    $club_picture = sprintf('http://graph.facebook.com/%s/picture', $club['Club']['fbid']);
    $club_name = $club['Club']['name'];
    $club_link = '/club/view/' . $club['Club']['id'];
    ?>
 <li>
  <img src="<?php echo $club_picture; ?>" />
  <h3><?php echo $html->link($club_name, $club_link); ?></h3>
 </li>
<?php endforeach; ?>
</ul>
<?php echo $this->element('pager'); ?>
