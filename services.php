<?php

echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">';
echo '<link href="/css/services.css" rel="stylesheet"';
echo '<link href="/css/about_bts.css" rel="stylesheet" type="text/css">';
echo '<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
';

include ('./header.php') ;

include ('./services_data.php');

echo '<br/>';

echo '<body>';

echo '<div id="service" class="container mt-3 mb-5">';

    foreach($data as $title => $values){
        echo '<div class="text-center pb-3">
                <h3 class="dis play-4 font-weight-bold">'.$title.'</h3>
                <hr class="w-50 mx-auto pb-0.1">
             </div>';
                
                foreach($values as $value){
                    echo '<div class="row">
                    <div class="col-lg-4 col-md-6 col-12 pb-5">
                      <div class="card">
                        <img class="card-img-top" src="/img/'.$value['image'].'" alt="image de service">
                        <div class="card-body">
                          <h5 class="card-title">'.$value['title'].'</h5>
                          <p class="card-text">'.$value['description'].'</p>
                          <a href="#" class="btn btn-dark">'.$value['button'].'</a>
                        </div>
                      </div>
                    </div>';
                    }
        }

echo '</body>';

include ('./avis_client.php');

 echo '<br/><br/>';

include ('./footer.php');

?>