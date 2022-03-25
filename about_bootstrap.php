<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/about_bts.css">
    <title>A propos</title>
    <?php include('header.php');
    include('about_data.php'); ?>
</head>
<body>
  <div class="content">

  <div class="container">
    <div class="container-sm d-flex justify-content-center banner">
        
        <img class="logo" src="img/batman-logo-inverted.png" alt="Batman Logo">
    </div>  
    

    <div class= "container-sm  text-center bg-dark text-light align-items-center rounded-bottom"  >
        <p class="p-4 m-0">Ce site est une initiative de la ville de Gotham destinée à centraliser les demandes relatives à l'action de Batman et ses associés. <br>
      Il a été créé pour remplacer le Bat'signal et permettre une meilleure prise en charge des urgences criminelles sur le territoire de la ville.</p>
    </div>
    </div>

    <div class="faq">
        <h1>FAQ</h1>
        <div class=" container-sm accordion p-2.5" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button bg-dark text-light" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Pourquoi utiliser bat-signal.com ?
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="">
      <div class="accordion-body">
        <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed bg-dark text-light" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Quel est le délai de réponse en cas d'urgence ?
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="">
      <div class="accordion-body">
        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed bg-dark text-light" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
      Comment enrichir la Bat-Database ?
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="">
      <div class="accordion-body">
        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
</div>
    </div>

    <!-- bt card via forcheach -->
    

    <div class="card wiki bg-dark ">
    <div class='wiki-title bg-dark text-light'>   
    <h2>Wiki-Vilain</h2>
    <h5 class="fs-4" style="color:#adb5bd">Enrichissez la Bat-Database en renseignant un super-vilain</h5>
    </div>
      <div class="card-body hm-form-color d-flex justify-content-center p-5 pt-5 ">
        
        <form action="wiki_vilain_submit.php" method="POST" enctype="application/x-www-form-urlencoded">
          <div class="mb-3">
            <label for="lastname" class="form-label">Nom</label>
            <input type="text" name='lastname' class="form-control" id="lastname" placeholder="">
          </div>
          <div class="mb-3">
            <label for="firstname" class="form-label">Prénom</label>
            <input type="text" name='firstname' class="form-control" id="firstname" placeholder="">
          </div>

          <label for="status" class="form-label">Statut actuel</label>
          <select class="form-select mb-3" name="status">
          <option selected value="wanted">Recherché(e)</option>
          <option value="in prison">En prison</option>
          <option value="unknown">Inconnu</option>
          </select>

          <label for="picture" class="form-label">Portrait</label>
          <div class="input-group mb-5">
            <span class="input-group-text" id="basic-addon1">URL</span>
            <input type="text" name='picture' class="form-control" placeholder="Image URL only">
          </div>


          <!-- <div class="crime-checkbox">
            <label for="crime">Méfait</label>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
            <label class="form-check-label" for="defaultCheck1">
              Braquage
            </label>
          </div>

          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
            <label class="form-check-label" for="defaultCheck1">
              Enlevement
            </label>
          </div>

          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
            <label class="form-check-label" for="defaultCheck1">
              Escroquerie
            </label>
          </div>

          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
            <label class="form-check-label" for="defaultCheck1">
              Tentative d'anéantissement du Monde
            </label>
          </div>
          </div> -->


          <div class="text-center">
          <button type="submit" class="btn btn-primary">Soumettre</button>
          </div>
         </form>
      </div>
    </div>
    </div>
   
    
 
<div class="hm-width">
 <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-3">
  <?php
              foreach($vilain as $value){
          echo '<div class="col d-flex justify-content-center mt-3">';
          echo '<div class="card bg-dark text-light" style="width: 15rem;">'.
            '<img src="'.@$value['picture'].'" class="card-img-top" alt="">'.
              '<div class="card-body">'.
                '<h5 class="card-title">'.$value['name'].'</h5>'.
                '<p class="card-text mb-2 ">Some quick example text to build on the card title.</p>'.
                '<h6>Current status : '.@strtoupper($value['status']).'</h6>'.
                
                '<div class="text-center"> <a href="#" class="btn btn-light mt-2 text-nowrap">En savoir +</a></div>'.
              '</div>'.
          '</div>';
          echo '</div>';
        }
      ?>
    
</div>
</div>

        
    
    

<?php include('footer.php');
?>
    


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>