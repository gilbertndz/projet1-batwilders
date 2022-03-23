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
    <div class="container-sm d-flex justify-content-center">
        
        <img class="logo" src="img/batman-logo-png.png" alt="Batman Logo">
    </div>

    <div class= "container-sm text-center bg-dark text-light rounded-3  align-items-center"  >
        <p class="p-4 m-0">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Possimus, tempora? Tempore vitae repudiandae nobis molestias ratione ea, rerum beatae praesentium laborum doloremque voluptas dolor molestiae, possimus deserunt voluptatem hic eius.</p>
    </div>

    <div class="faq">
        <h1>FAQ</h1>
        <div class=" container-sm accordion p-2.5" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button bg-dark text-light" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Accordion Item #1
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
        Accordion Item #2
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
        Accordion Item #3
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
        
    
 
<div class="container hm-width">
 <div class="row row-cols-1 row-cols-sm-2 g-3">
  <?php
              foreach($vilain as $value){
          echo '<div class="col d-flex justify-content-center mt-3">';
          echo '<div class="card" style="width: 18rem;">'.
            '<img src="img/'.$value['picture'].'" class="card-img-top" alt="">'.
              '<div class="card-body">'.
                '<h5 class="card-title">'.$value['name'].'</h5>'.
                '<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card\'s content.</p>'.
                '<h6>In prison since '.$value['prison_date'].'<h6>'.
                '<a href="#" class="btn btn-primary">En savoir +</a>'.
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