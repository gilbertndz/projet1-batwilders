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

    <form>

      <div class="flexname">
        <div>
          <label for="user_firstName">Nom :</label>
          <input type="text" id="firstName" name="user_firstName" ;">
        </div>
        <div>
          <label for="user_name">Prénom :</label>
          <input type="text" id="name" name="user_name" ;">
        </div>
      </div>

      <div>
        <label for="user_mail">E-mail :</label>
        <input type="email" id="mail" name="user_mail" placeholder="exemple@mail.fr" ;">
      </div>
      <div>
        <label for="user_tel">Telephone :</label>
        <input type="telephone" id="tel" name="user_tel" placeholder="ex : 0664764389";">
      </div>
      <div class="request">
        <label for="user_request">Type de demande :</label>
        <select name="request" id="request_select">
          <option value="sauvetage">Sauvetage</option>
          <option value="enquete">Enquête</option>
          <option value="conseil">Conseils</option>
          <option value="uber">Bat-Uber</option>
        </select>
      </div>
      <div class="contact">
        <label for="user_contact">Comment souhaitez vous être contacté :</label>
        <select name="contact" id="contact_select">
          <option value="telephone">Telephone</option>
          <option value="mail">Mail</option>
          <option value="street">Au detour d'une ruelle sombre</option>
          <option value="surprise">Surprenez moi!</option>
        </select>
      </div>
      <div class="textarea">
        <textarea id="message" placeholder="Ecrivez votre bat-message" rows="7" cols="25"></textarea>
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