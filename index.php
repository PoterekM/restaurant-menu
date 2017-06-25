<?php
    $restaurant = "Veggie Sanctuary";
    $lunch_special = "Sweet Tater Tots";
    $lunch_description = "Gumbo beet greens corn soko endive gumbo gourd. Parsley shallot courgette tatsoi pea sprouts fava bean collard greens dandelion okra wakame tomato. Dandelion cucumber earthnut pea peanut soko zucchini.";
    $appetizer_special = "Fried Okra";
    $appetizer_description = "Nori grape silver beet broccoli kombu beet greens fava bean potato quandong celery. Bunya nuts black-eyed pea prairie turnip leek lentil turnip greens parsnip.";
?>


<!DOCTYPE html>
<html>
<head>
    <title>Veggie's Rest</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
    <body>
        <div class="container">
          <div class="jumbotron">
            <img src="img/animals.png" alt="herbivore">

            <h1>Welcome to <?php echo $restaurant; ?></h1>
            <h2>We are a refined resturaunt that tells you everything about the vegetables you're about to consume.</h2>
          </div>

            <div class="row">
                <div class="col-sm-3">
                  <!-- empty -->
                </div>
                <div class="col-sm-6">
                  <div class="well">
                  <h3>$5 plates</h3>
                  <p class="title"><?php echo $lunch_special; ?></p>
                  <p class="description"><?php echo $lunch_description; ?></p>
                  <p class="title"><?php echo $appetizer_special; ?></p>
                  <p class="description"><?php echo $appetizer_description; ?></p>
                </div>
                <div class="col-sm-3">
                  <!-- empty -->
                </div>
            </div>
          </div>

        </div>
    </body>
</html>
