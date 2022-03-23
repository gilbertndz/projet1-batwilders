<?php
 include('./services_data.php');
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Bat'services</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link href="/css/about_bts.css" rel="stylesheet" type="text/css">
  <link href="/css/services.css" rel="stylesheet" type="text/css">
</head>

<body>
  <header>
    <?php include('./services_data.php');
?>
    <nav class="site-nav">
      <img src="/img/logo.svg" alt="logo">
      <div class="menu-toggle">
        <div class="hamburger"></div>
      </div>

      <ul class="open-desktop">
        <li><a href="index.html">Accueil</a></li>
        <li><a href="about.html">A propos de Batman</a></li>
        <li><a href="services.html">Services</a></li>
        <li><a href="actu.html">Actualités</a></li>
        <li><a href="contact.html">Contact</a></li>
      </ul>
    </nav>
  </header>
  <main class="card" style="width: 18rem;">

<?php
  
  echo '<h1>'.'Mes Bat\' Services'.'</h1>';

  foreach($data as $values){
    foreach($values as $value){
      echo '<div class="card-img-top">';
        echo '<img src="/img/'.$value['image'].'"width="" alt=" ">';
      echo '</div>';
      echo '<div class="card-body">';
        echo '<h5 class="card-title">'.$value['title'].'</h5>';
        echo '<p class="card-text">'.$value['description'].'</p>';
        echo '<a href="#" class="btn btn-primary">'.$value['button'].'</a>';
      echo '</div>'; 
    }
  }
 
  include('./avis_client.php');

?>

  </main>
  <footer>
    <div id="footer-responsive">
      <figure>
        <img class="center-foot" src="/img/logo.svg" alt="logo">
      </figure>
      <div class="txt-center padding-20">
        <ul>
          <h3>Navigation</h3>
          <li class="marg-foot">A propos</a></li>
          <li class="marg-foot">Services</li>
          <li class="marg-foot">Actualités</li>
          <li class="marg-foot">Contact</li>
        </ul>
      </div>

      <div class="margin-top txt-center" id="newsletter">
        <h4>S'abonner à la newsletter</h4>
        <p>Tenez vous informé(e) des nouvelles</p>
        <input type="text" name="" value="" placeholder="E-mail"> <br>
        <button class="uppercase margin-top-btn button-1" type="button" name="button">Envoyer</button>
      </div>
    </div>
    <div class="txt-center margin-top padding-20">
      <p>© Bat’Wilders - 2022</p>
    </div>
  </footer>
  <script src="js/jquery/jquery-3.4.1.min.js"></script>
  <script src="js/jquery/jquery.min.js"></script>
  <script src="js/nav.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>