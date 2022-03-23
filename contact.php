<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/css/contact.css">
  <title>Document</title>
</head>
<header>
  <link rel="stylesheet" href="/css/nav.css">
  <nav class="site-nav">
    <img src="/img/logo.svg" alt="logo">
    <div class="menu-toggle">
      <div class="hamburger"></div>
    </div>

    <ul class="open desktop">
      <li><a href="index.html">Accueil</a></li>
      <li><a href="about.html">A propos de Batman</a></li>
      <li><a href="services.html">Services</a></li>
      <li><a href="actu.html">Actualités</a></li>
      <li><a href="contact.html">Contact</a></li>
    </ul>
  </nav>
</header>

<body>
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
        <input type="email" id="mail" name="user_mail" ;">
      </div>
      <div class="textarea">
        <textarea id="message" placeholder="Ecrivez votre bat-message" rows="7" cols="25"></textarea>
      </div>
      <div>
        <button type="submit" value="Envoyer">Envoyer</button>
      </div>
  </div>
  </form>


  <script src="js/jquery/jquery-3.4.1.min.js"></script>
  <script src="js/jquery/jquery.min.js"></script>
  <script src="js/nav.js"></script>
</body>

</html>