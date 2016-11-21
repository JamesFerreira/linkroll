
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>LinkRoll</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/creative.min.css" rel="stylesheet">

  <body>


    <h1 align="center"> Linkroll </h1>

    <?php

    // Nom du fichier à afficher, son adresse de localisation
    $fichier = file("liens.txt", FILE_SKIP_EMPTY_LINES);
    // sort = trie ordre alphabetique
    sort($fichier);
    // Nombre total des lignes du fichier
    $total = count($fichier);

    // Tableau qui stockera les catégories
    $categories = array();

    // On parcoure les lignes du fichier et on vérifie si la catégorie n'est pas
    // déjà dans le tableau des catégories, s'il n'est pas présente, on la stocke.
    for ($i = 0; $i < $total; $i++) {
      $array = explode(',', $fichier[$i]);
      $cat = $array[1];
      if (!in_array($cat, $categories)) {
        $categories[] = $cat;
      }
    }
    sort($categories);
    // On parcoure les catégories du tableau des catégories.
    foreach ($categories as $category) {
      echo '<section id="services">
              <div class="container">
                  <div class="row">
                      <div class="col-lg-12 text-center">
                          <h2 >' . $category . '</h2>
                      </div>
                  </div>
              </div>
          </section>
          ';
      // On parcoure les lignes du fichier, si la catégorie correspond,
      // on affiche le site.
      for ($i = 0; $i < $total; $i++) {
        $array = explode(',', $fichier[$i]);
        if ($category == $array[1]) {
          echo '<div class="row">
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="//www.apercite.fr/api/apercite/640x480/yes/http://' . $array[0] . '" class="img-responsive" alt="">
      <div class="caption">
        <h3>' . $array[0] . '</h3>
        <p> meta</p>
        <p><a <a href="http://' . $array[0] . '" class="btn btn-primary" role="button">Acceder</a>
      </div>
    </div>
  </div>
</div>';
        }
      }
      echo '</div>
          </div>
      </section>';
    }

    echo '<h1>' . "Site aléatoire" . '</h1>';

 $id =array_rand($fichier);

$values = explode(',', $fichier[$id]);

    echo '<div class="row">
    <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
    <img src="//www.apercite.fr/api/apercite/640x480/yes/http://' . $values[0] . '" class="img-responsive" alt="">
    <div class="caption">
    <h3>' . $values[0] . '</h3>
    <p> meta</p>
    <p><a <a href="http://' . $values[0] . '" class="btn btn-primary" role="button">Acceder</a>
    </div>
    </div>
    </div>
    </div>';



    echo '<br>';


    $id2 =array_rand($fichier);
   $values2 = explode(',', $fichier[$id2]);

       echo '<div class="row">
       <div class="col-sm-6 col-md-4">
       <div class="thumbnail">
       <img src="//www.apercite.fr/api/apercite/640x480/yes/http://' . $values2[0] . '" class="img-responsive" alt="">
       <div class="caption">
       <h3>' . $values2[0] . '</h3>
       <p> meta</p>
       <p><a <a href="http://' . $values2[0] . '" class="btn btn-primary" role="button">Acceder</a>
       </div>
       </div>
       </div>
       </div>';
    ?>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB" crossorigin="anonymous"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
