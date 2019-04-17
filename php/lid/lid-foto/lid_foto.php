<?php
// lees het ID uit de URL
$id = $_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lid Foto</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <form action="foto_verwerk.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $id; ?>">

        
    </form>
</body>
</html>