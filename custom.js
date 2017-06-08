   // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;

    var pusher = new Pusher('771b40d7e86849cd6579', {
      encrypted: true,
      cluster:  'mt1'
    });

    var channel = pusher.subscribe('chatx-channel');
  
    //listen for connection...
    channel.bind('my-event', function(data) {
      echo_message(data.message);
    });

    function echo_message(msg){

        $("#chat-message").prepend(
           '<br /><div class="alert alert-info" role="alert"><strong>'+
              msg
           +'</strong></div>'
    		);
    }

$("#submit-message").submit( function(e) {
    e.preventDefault();

     var message = $("#message").val();

     $.post('http://localhost:9020/', {message: message}, function(data){
       $("#message").val('');
     });
});
