<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="de">
<head>
	<meta charset="utf-8">
	<title><?php echo $this->config->item('title'); ?></title>
</head>
<body>
	<h1>Anmeldung Schlossführung</h1>
	<div id="reservation-form">
	<?php
		echo form_open();

		echo form_label('Datum wählen', 'tour_date');
		echo form_dropdown('tour_date', $tour_dates);

		echo form_label('Name', 'name');
		echo form_input([
			'name' => 'name'
		]);

		echo form_label('Anzahl der Personen', 'number_people');
		echo form_input([
			'name' => 'number_people'
		]);

		echo form_button([
			'name' => 'private_date',
			'content' => 'Privater Termin',
		]);

		echo form_submit('reservation_submit', 'Reservieren');
		echo form_reset('reservation_reset', 'Zurücksetzen');

		echo form_close();
	?>
	</div>
</body>
</html>
