<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="/css/contact.css">
  <title>Contact</title>
</head>

<body>
  <header>
    <?php 
    include 'header.php';
    ?>
  </header>
  <main>
  <div class="flex">
    <div classe="title">
      <H1> Contactez-nous</H1>
    </div>
      <?php 
       if(empty($_POST['user_firstName']) || empty($_POST['user_name']) || empty($_POST['user_mail']) || empty($_POST['user_tel'])){
      echo '<h2>Veuillez renseigner les champs obligatoirs marqués par une *. Les champs manquants sont :</h2>';
      echo '<ul class="contactListe">';
        if(empty($_POST['user_firstName'])){
            echo '<li>Nom</li>';
        }
        if(empty($_POST['user_name'])){
            echo '<li>Prénom</li>';
        }
        if(empty($_POST['user_mail'])){
            echo '<li>E-mail</li>';
        }
        if(empty($_POST['user_tel'])){
            echo '<li>Telephone</li>';
        }
        echo '</ul>';
      }elseif(isset($_POST['user_firstName']) && isset($_POST['user_name']) && isset($_POST['user_mail']) && isset($_POST['user_tel']) && 
       isset($_POST['request']) && isset($_POST['contact'])){
         if(isset($_POST['bat_urgence'])){
           echo '<h3>Votre BAT-URGENCE a bien été reçue '.$_POST['user_name'].'. Batman mets tout en oeuvre pour vous contacter '
           .$_POST['contact']
           .' pour le service que vous avez séléctionné : '.$_POST['request'].'. Cette requète est prioritaire.</h3>';
         }
         if(!isset($_POST['bat_urgence'])){
           echo '<h2>Bonjour '.$_POST['user_name'].', votre demande pour '.$_POST['request'].' a bien été prise en compte. Batman rentrera en contact avec vous '
           .$_POST['contact'].'. En attendant n\'hésitez pas a faire un tour dans notre rubrique actualités.</h2>';
         }
       }
      ?>
    <form action="contact-reply.php" method="POST">

      <div class="flexname">
        <div>
          <label for="user_firstName">* Nom :</label>
          <input type="text" id="firstName" name="user_firstName" ;">
        </div>
        <div>
          <label for="user_name">* Prénom :</label>
          <input type="text" id="name" name="user_name" ;">
        </div>
      </div>

      <div>
        <label for="user_mail">* E-mail :</label>
        <input type="email" id="mail" name="user_mail" placeholder="default@exemple.com" pattern="[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+.[a-zA-Z.]{2,15}" ;">
      </div>
      <div>
        <label for="user_tel">* Telephone :</label>
        <input type="telephone" id="tel" name="user_tel" placeholder="ex : 0664764389" ;">
      </div>
      <div class="request">
        <label for="user_request">Type de demande :</label>
        <select name="request" id="request_select">
          <option name="sauvetage" value="un sauvetage">Sauvetage</option>
          <option name="enquete" value="une enquete">Enquête</option>
          <option name="conseil" value="un conseil">Conseils</option>
          <option name="uber" value="une course uber">Bat-Uber</option>
        </select>
      </div>
      <div class="contact">
        <label for="user_contact">Comment souhaitez vous être contacté :</label>
        <select name="contact" id="contact_select">
          <option name="telephone" value="par telephone">Telephone</option>
          <option name="mail" value="par mail">Mail</option>
          <option name="street" value="au detour d'une ruelle sombre">Au detour d'une ruelle sombre</option>
          <option name="surprise" value="au moment ou vous vous y attendrez le moins">Surprenez moi!</option>
        </select>
      </div>
      <div class="textarea">
        <textarea id="message" placeholder="Ecrivez votre bat-message" rows="7" cols="25" pattern="[a-zA-Z0-9]" ></textarea>
      </div>
      <div class="warning">
        <i class="fa-solid fa-triangle-exclamation" id="imgwarn"></i>
        <div class="urgence">
          <label for="user_prioritie">BAT-URGENCE</label>
          <input type="checkbox" id="bat_urgence" name="bat_urgence">
        </div>
        <i class="fa-solid fa-triangle-exclamation" id="imgwarn"></i>
      </div>
        <div class="button">
          <button class="submit" type="submit" value="Envoyer">Envoyer</button>
        </div>
  </div>
  </form>
</main>
<footer>
  <?php 
  include 'footer.php';
  ?>
</footer>
<script src="js/jquery/jquery-3.4.1.min.js"></script>
  <script src="js/jquery/jquery.min.js"></script>
  <script src="js/nav.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" charset="utf-8"></script>
</body>
</html>