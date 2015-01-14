<?php
	use  \NoahBuscher\Macaw\Macaw;

	// Test
	Macaw::get('/hello', function() {
		echo "Hello MiniFramework!";
	});

	Macaw::get('(:all)', function($fu) {
		echo "Unable to route<br>".$fu;
	});
	// End Test

	Macaw::dispatch();

?>
