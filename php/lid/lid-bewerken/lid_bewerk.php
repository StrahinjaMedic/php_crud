<?php
// start de session
require_once '../../session.inc.php';

// lees de config bestand in de pagina
require_once '../../config.inc.php';

// lees het ID uit de URL
$id = $_GET['id'];

// is het id een nummer?
if(is_numeric($id)) {
    // lees het lid uit de database
    $result = mysqli_query($mysqli, "SELECT * FROM crud.leden WHERE id = $id");

    // is er een lid gevonden uit de URL
    if(mysqli_num_rows($result) == 1) {
        // ja, lees het lid uit de dataset
        $data = mysqli_fetch_array($result);
    } else {
        echo "Geen lid gevonden!";
        exit;
    }
} else {
    // het ID was geen nummer 
    echo "Onjuist ID";
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
	<title>Lid Bewerken</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  </head>
  <body>
	<h1>lid Bewerken</h1>

	<form action="lid_bewerk_verwerk.php" method="post">

        <input type="hidden" name="id" value="<?php echo $id; ?>">

        <p>
            <label for="first_name">Voornaam:</label>
            <input type="text" name="first_name" id="first_name" required="required" 
            value="<?php echo $data['first_name'];?>">
        </p>
        <p>
            <label for="last_name">Achternaam:</label>
            <input type="text" name="last_name" id="last_name" required="required" 
            value="<?php echo $data['last_name'];?>">
        </p>
        <p>
            <label for="birth_date">Geboortedatum:</label>
            <input type="date" name="birth_date" id="birth_date" required="required" 
            value="<?php echo $data['birth_date'];?>">
        </p>
        <p>
			<label>
                <input type="radio" name="gender" id="gender_m" value="M" 
                <?php if ($data['gender'] == 'M') echo 'checked="checked"';?>>
                Man
			</label>
            <br>
            <label>
                <input type="radio" name="gender" id="gender_f" value="F" 
                <?php if ($data['gender'] == 'F') echo 'checked="checked"';?>>
                Vrouw
			</label>
		</p>
        <p>
            <label for="member_since">Lid sinds:</label>
            <input type="date" name="member_since" id="member_since" required="required" 
            value="<?php echo $data['member_since'];?>">
        </p>
        <p>
            <input type="submit" name="submit" id="submit" value="Opslaan">
            <button onClick="history.back();return false;">Annuleren</button>
        </p>
	</form>
  </body>
</html>