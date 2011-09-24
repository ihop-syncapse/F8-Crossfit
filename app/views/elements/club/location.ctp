<?php
$club_fbid = $club['Club']['fbid'];
?>


<script type="text/javascript">

var location_fbid = '<?php echo $club_fbid; ?>';
FB.api('/' + location_fbid, function(response) {
    if (response.location) {
       $('.club-location .street').text(response.location.street);
       $('.club-location .city').text(response.location.city);
       $('.club-location .state').text(response.location.state);
       $('.club-location .country').text(response.location.country);
       $('.club-location .zip').text(response.location.zip);
    } else {
        $('.club-location').hide();
    }
});


</script>

<dl class="club-location">
 <dt>street</dt><dd class="street">loading...</dd>
 <dt>city</dt><dd class="city"></dd>
 <dt>state</dt><dd class="state"></dd>
 <dt>country</dt><dd class="country"></dd>
 <dt>zip</dt><dd class="zip"></dd>
</dl>