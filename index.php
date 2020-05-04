<?php
  // Submit a request to the API endpoint.
  $networksJSONString = file_get_contents( 'http://api.citybik.es/v2/networks' );
  // Convert the response to a PHP object.
  $networksObject = json_decode( $networksJSONString );
  // Collect the first user in the data array.
  $networks = $networksObject->networks[0];
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>City Bikes</title>
</head>
<body>
  <h1>City Bikes</h1>
  
  <h2>CityBikes API Documentation</h2>
  <dl>
  <?php foreach( $networks as $networks) : ?>
    <dt>Location</dt>
    <dd>
      <?php echo $networks->location->city; ?>
      <?php echo $networks->location->country; ?>
      <?php echo $networks->location->longitude; ?>
      <?php echo $networks->location->latitude; ?>
    </dd>
    
    <dt>Company</dt>
    <dd><?php echo $networks->company; ?></dd>
    <dt>ID</dt>
    <dd><?php echo $networks->id->coin_toss_winner_election; ?></dd>
    <dt>Name</dt>
    <dd><?php echo $networks->name; ?></dd>
    <?php endforeach?>
  </dl>
</body>
</html>