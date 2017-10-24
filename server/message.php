<?php

  require('Pusher.php');

  $options = array(
    'encrypted' => true,
    'cluster'   => 'mt1',
  );

  // Add your real pusher ID here
  
  $pusher = new Pusher(
    '*************', 
    '*************', 
    '*******',
    $options
  );

  $data['message'] = $_REQUEST['message'] ?? "Hey";

  $pusher->trigger('chatx-channel', 'my-event', $data);
?>
