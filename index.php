<?php
    // lees de config bestand in de pagina
	require_once 'php/config.inc.php';
	$result = mysqli_query($mysqli, "SELECT * FROM crud.leden");
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Ledenbeheer</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  </head>
  <body>
    <h1>Ledenbeheer</h1>
	<table>
	<thead>
		<tr>
			<th>Voornaam</th>
			<th>Achternaam</th>
			<th>Geboortedatum</th>
			<th>Geslacht</th>
			<th>Lid sinds</th>
		</tr>
	</thead>
	<tbody>
		<?php
			while ($data = mysqli_fetch_array($result)) {
				echo 
				"<tr>",
					"<td>" . $data['first_name'] . "</td>",
					"<td>" . $data['last_name'] . "</td>",
					"<td>" . $data['birth_date'] . "</td>",
					"<td>" . $data['gender'] . "</td>",
					"<td>" . $data['member_since'] . "</td>",
				"</tr>";
			}
		?>
	</tbody>
	</table>
	<p><a href="php/lid/lid-toevoegen/lid_nieuw.php">Klik hier</a> om een nieuw lid toe te voegen.</p>
  </body>
</html>