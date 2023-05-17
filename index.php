<?php 

$error_msg = "";

if(isset($_GET['length']) && !empty($_GET['length']) && ($_GET['length'] >= 6) && is_numeric($_GET['length'])){
  var_dump("ok c'è");
  $max_length = $_GET['length'];
  function generatePwd($number){
    $data = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!"#$%&()*+,-./:;<=>?@{|}~';
    $pwdArr = [];
    for ($i=0; $i < $number - 1; $i++) { 
      $carattereEstratto = rand(0,strlen($data) - 1);
      $pwdArr[] = $data[$carattereEstratto];
    }
    return explode("",$pwdArr);
  };

}else{
  var_dump("non c'è");
  $error_msg = "si prega di inserire un numero valido maggiore di 6";
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css' integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==' crossorigin='anonymous'/>

  <title>password generator</title>
</head>
<body>

  <div class="container my-5">
    <h1 class="my-5">generatore di password super sicuro</h1>

    <form action="index.php" method="GET">

      <div class="row">
          <div class="mb-3 col-3">
            <label for="length" class="form-label">Lunghezza Password</label>
            <input type="number" class="form-control" id="length" placeholder="inserisci la lunghezza della password" name="length">
            <p class="text-danger" > <?php echo $error_msg ?> </p>
          </div>
      </div>

        <div class="col">
          <button type="submit" class="btn btn-success mb-5">Invia</button>

          <!-- <?php if($pwdArr):?> -->
            <p class="text-success">Complimenti, la password generata è <?php echo generatePwd($max_length) ?> </p>
          <!-- <?php endif?> -->

        </div>
      </div>



    </form>

  </div>
  

  
</body>
</html>