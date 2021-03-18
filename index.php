<?php 
    $url = file_get_contents('https://api.kawalcorona.com/indonesia');
    $data = json_decode($url,true);
    $urle = file_get_contents('https://api.kawalcorona.com/indonesia/provinsi');
    $datae = json_decode($urle,true);
    ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Data covid</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    
  </head>
  <body>
   <div class="container">
     <div class="row text-center bg-white mt-3 p-2 rounded-3">
       <div class="col-md-12">
         <h4><i class="fas fa-bacteria"></i> Data covid 19 di Indonesia</h4>
         <p>data ini diperoleh dari web <a href="https://kawalcorona.com/" class="text-decoration-none text-dark" target="_blank" >Kawalcorona.com</a></p>
       </div>
     </div>
   </div>
   <hr>
    <div class="container bg-white p-3 m-auto ">
      <div class="row">
        <div class="col-md-4">
          <div class="card bg-primary text-dark p-3 mb-1">
            <div class="card-body">
              <h5 class="card-title bg-light p-2 text-center rounded-3">Positif</h5>
              <p class="card-text text-center"><i class="fas fa-plus"></i> <?= $data [0]['positif']; ?></p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card bg-danger text-dark p-3 mb-1">
            <div class="card-body">
              <h5 class="card-title bg-light p-2 text-center rounded-3">Meninggal</h5>
              <p class="card-text text-center"><i class="fas fa-skull-crossbones"></i> <?= $data [0]['meninggal']; ?></p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card bg-success text-dark p-3 mb-1">
            <div class="card-body">
              <h5 class="card-title bg-light p-2 text-center rounded-3">Sembuh</h5>
              <p class="card-text text-center"><i class="far fa-heart"></i> <?= $data [0]['sembuh']; ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row text-center bg-white p-2">
        <div class="col-md-12">
          <h4><i class="fas fa-table"></i> Kasus covid19 berdasarkan provinsi</h4>
        </div>
      </div>
    </div>
    <div class="container">
        <div class="table-responsive-md">
        <table class="table bg-white table-bordered">
        <thead>
          <th>NO</th>
          <th>Provinsi</th>
          <th>Positif</th>
          <th>Meninggal</th>
          <th>Sembuh</th>
        </thead>
        <tbody>
          <?php
          $a=1;
          foreach ($datae as $dt):
           ?>
          <tr>
            <td><?= $a++;  ?></td>
            <td><?= $dt['attributes']['Provinsi'];  ?> </td>
            <td><?= $dt['attributes']['Kasus_Posi'];  ?> </td>
            <td><?= $dt['attributes']['Kasus_Semb'];  ?> </td>
            <td><?= $dt['attributes']['Kasus_Meni'];  ?> </td>
          </tr>
          <?php endforeach; ?>      
        </tbody>
      </table>
      </div>
    </div>

    <footer class="bg-dark text-white text-center p-1 ">
    <p> Created with <i class="fas fa-heart text-danger"></i> by <a href="https://www.instagram.com/tulusiman17/" class="text-white fw-bold text-decoration-none">Tulus iman saputra</a></p>
    </footer>
  </body>
</html>