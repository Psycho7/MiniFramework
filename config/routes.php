<?php
	use  \NoahBuscher\Macaw\Macaw;

	Macaw::get('/', 'HomeController@home');

	Macaw::dispatch();

?>

