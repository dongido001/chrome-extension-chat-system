<?php

  require('Pusher.php');

  $options = array(
    'encrypted' => true,
    'cluster'   => 'mt1',
  );
  $pusher = new Pusher(
    '771b40d7e86849cd6579',
    '205b1dafbe39a8633f93',
    '346906',
    $options
  );

  $data['message'] = $_REQUEST['message'] ?? "Hey";

  $pusher->trigger('chatx-channel', 'my-event', $data);
?>