<h2 class="header">Crossfit Clubs</h2>

<ul class="club-list">
<?php foreach ($clubs as $club): 
    $club_picture = sprintf('http://graph.facebook.com/%s/picture', $club['Club']['fbid']);
    $club_name = $club['Club']['name'];
    $club_link = Router::url('/club/view/' . $club['Club']['id']);
    ?>
 <a href="<?php echo $club_link ?>">
 <li>
  <img src="<?php echo $club_picture; ?>" />
  <h3><?php echo $club_name; ?></h3>
 </li>
 </a>
<?php endforeach; ?>
</ul>
<?php echo $this->element('pager'); ?>
