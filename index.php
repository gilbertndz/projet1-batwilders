<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Acceuil</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="css/normalize.css" rel="stylesheet">
  <link rel="stylesheet" href="css/accueil.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
  <header>
    <?php include 'header.php'; ?>
  </header>
  <main>
    <section>
      <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="10000">
            <img src="img/img-1.webp" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <img src="img/img-2.webp" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/img-3.webp" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
          data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
          data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </section>
    <section class="flex-content">
      <section class="block-content">
        <h2>A propos</h2>
        <article class="">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi id ante c
        </article>
        <button class="button-1" role="button">En savoir plus &nbsp <img src="img/plus.svg" alt="logo plus"></button>

      </section>

      <section class="block-content">
        <h2>Services</h2>
        <article class="">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi id ante c
        </article>
        <button class="button-1" role="button">En savoir plus &nbsp <img src="img/plus.svg" alt="logo plus"></button>
      </section>
    </section>

    <section class="flex-content">
      <section class="block-content">
        <h2>Actualités</h2>
        <article class="">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi id ante c
        </article>
        <button class="button-1" role="button">En savoir plus &nbsp <img src="img/plus.svg" alt="logo plus"></button>
      </section>

      <section class="block-content">
        <h2>A propos</h2>
        <article class="">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi id ante c
        </article>
        <button class="button-1" role="button">En savoir plus &nbsp <img src="img/plus.svg" alt="logo plus"></button>
      </section>
    </section>
    <?php include 'footer.php' ?>
  </main>
  <script src="js/jquery/jquery-3.4.1.min.js"></script>
  <script src="js/jquery/jquery.min.js"></script>
  <script src="js/nav.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" charset="utf-8"></script>
</body>

</html>