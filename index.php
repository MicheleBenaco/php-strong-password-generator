<?php
include __DIR__ .'./logic/fuction.php'

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>pass</title>
</head>
<body>
    <div class="container">
    <form action="index.php" method="POST" name="FormPass">
  <div class="form-group">
    <label for="pass">Lunghezza Password</label>
    <input type="number" class="form-control" id="LungPass" name="LungPass" placeholder="Inserisci un valore tra">
  </div>
 
  

    <button type="submit" class="btn btn-primary">Genera</button>
    <button type="reset" class="btn btn-danger">Elimina</button>

    <h2> la pass generata e <?php echo password_generate(7)."\n"; ?></h2>
</form>

    </div>

    
</body>
</html>