<?php
    use  \NoahBuscher\Macaw\Macaw;

    Macaw::get('/', 'HelloController@hello');
    
    Macaw::get('/fuck', function() {
        echo 'fuck';
    });

    Macaw::$error_callback = function() {
        throw new Exception("Unable to route 404 Not Found");
    };

    Macaw::dispatch();
?>

