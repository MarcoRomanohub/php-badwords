<?php

$censura = $_GET['censura'];
$paragrafo = $_GET['paragrafo'];
$lunghezza_paragrafo = strlen($paragrafo);
$paragrafo_censurato = str_replace($censura, '***', $paragrafo);
$lunghezza_paragrafo_cens = strlen($paragrafo_censurato);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ricevo Form Get</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" integrity="sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <div class="container my-5 ">

    <p>Paragrafo: <?php echo $paragrafo ?> <?php echo $lunghezza_paragrafo ?></p>
    <p>Paragrafo: <?php echo $paragrafo_censurato ?> <?php echo $lunghezza_paragrafo_cens ?></p>


  </div>
</body>

</html>