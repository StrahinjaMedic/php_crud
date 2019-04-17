<?php
// start de session
require_once '../../session.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
	<title>Lid Toevoegen</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  </head>
  <body>
	<h1>Nieuwe lid toevoegen</h1>

	<form action="lid_nieuw_verwerk.php" method="post">
        <p>
            <label for="first_name">Voornaam:</label>
            <input type="text" name="first_name" id="first_name" required="required">
        </p>
        <p>
            <label for="last_name">Achternaam:</label>
            <input type="text" name="last_name" id="last_name" required="required">
        </p>
        <p>
            <label for="birth_date">Geboortedatum:</label>
            <input type="date" name="birth_date" id="birth_date" required="required">
        </p>
        <p>
			<label>
                <input type="radio" name="gender" id="gender_m" value="M" checked="checked">
                Man
			</label>
            <br>
            <label>
                <input type="radio" name="gender" id="gender_f" value="F" checked="checked">
                Vrouw
			</label>
		</p>
        <p>
            <label for="member_since">Lid sinds:</label>
            <input type="date" name="member_since" id="member_since" required="required">
        </p>
        <p>
            <input type="submit" name="submit" id="submit" value="Opslaan">
            <button onClick="history.back();return false;">Annuleren</button>
        </p>
	</form>
  </body>
</html>