<?php include('about_data.php'); ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/about_bts.css">
    <title>Submit</title>
</head>
<body>

<?php include('header.php'); ?>

<div class="card">
  <div class="card-body m-auto">
    <h2>Merci d'avoir soumis votre formulaire.</h2>
    <h4><?php echo $_POST['firstname'].' '.$_POST['lastname'].' est desormais repertorié comme super-vilain dans la Bat-Database.</h4>'; ?>
  </div>
</div>




<div class="container">
 <div class="row row-cols-1 row-cols-sm-2 g-3 ">
  <?php
    
          echo '<div class="col d-flex justify-content-center mt-3">';
          echo '<div class="card" style="width: 18rem;">'.
            '<img src="'.$_POST['picture'].'" class="card-img-top" alt="">'.
              '<div class="card-body">'.
                '<h5 class="card-title">'.$_POST['firstname'].' '.$_POST['lastname'].'</h5>'.
                '<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card\'s content.</p>'.
                '<h6>Current status : '.@strtoupper($_POST['status']).'<h6>'.
                '<a href="#" class="btn btn-primary">En savoir +</a>'.
              '</div>'.
          '</div>';
          echo '</div>';
        
      ?>
    
</div>
</div>

<a href="about_bootstrap.php"><button type="button" class="btn btn-primary btn-lg">Retour</button></a>

<?php include('footer.php'); ?>   
</body>
</html>