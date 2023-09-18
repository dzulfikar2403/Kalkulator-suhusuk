<?php 

$celcius = 0;
$reamur = 0;
$ferenheit = 0;
$kelvin = 0;
if(isset($_POST["submit"])){
  $angka = $_POST["number"];
  $ukur = $_POST["ukur"];

  if($ukur == 'Celcius'){
    $c = true;
    $reamur = (4/5) * ($angka - 0) + 0;
    $ferenheit = (9/5) * ($angka - 0) + 32;
    $kelvin = $angka + 273;
  }
  if($ukur == 'Reamur'){
    $r = true;
    $celcius = (5/4) * ($angka - 0) + 0;
    $ferenheit = (9/4) * ($angka - 0) + 32;
    $kelvin = (5/4) * ($angka - 0) + 273;
  }
  if($ukur == 'Ferenheit'){
    $f = true;
    $celcius = (5/9) * ($angka - 32) + 0;
    $reamur = (4/9) * ($angka - 32) + 0;
    $kelvin = (5/9) * ($angka - 32) + 273;
  }
  if($ukur == 'Kelvin'){
    $k = true;
    $celcius = $angka - 273;
    $reamur = (4/5) * ($angka - 273) + 0;
    $ferenheit = (9/5) * ($angka - 273) + 32;
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>kalkulator SuhuSuk</title>
  <link rel="stylesheet" href="style.css">
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->
  <!-- <script src="js/code.jquery.com_jquery-3.7.1.min.js"></script> -->
</head>
<body>

  <h1>Kalkulator SuhuSuk</h1>

  <form action="" method="post">
      <input type="number" name="number" class="number" placeholder="0">
      <select name="ukur" id="ukur" >
        <option value="Celcius" id="c">Celcius</option>
        <option value="Reamur" id="r">Reamur</option>
        <option value="Ferenheit" id="f">Ferenheit</option>
        <option value="Kelvin" id="k">Kelvin</option>
      </select>
      <button type="submit" name="submit" >Hasilkan!</button>
  </form>

  
  <p>Note : Jika ingin disubmit pastikan column angka sudah diisi. jika tidak, akan terjadi Error</p>

  <div id="container" class="col-md-6 d-flex">
    <?php if(isset($c)) : ?>
      <?php require 'tipe_suhu/celcius.php' ?>
      <?php endif; ?>
    <?php if(isset($r)) : ?>
      <?php require 'tipe_suhu/reamur.php' ?>
      <?php endif; ?>
    <?php if(isset($f)) : ?>
      <?php require 'tipe_suhu/ferenheit.php' ?>
      <?php endif; ?>
    <?php if(isset($k)) : ?>
      <?php require 'tipe_suhu/kelvin.php' ?>
    <?php endif; ?>

  </div>


  <footer>
    <span>Copyright 2023|Dzulfikar & Mordecai XI PPLG II</span>
  </footer>

  <!-- <script src="js/script.js"></script> -->
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> -->
</body>
</html>