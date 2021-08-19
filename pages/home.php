<?php
    include 'data/products.php';
?>

<main>
        
    <div class="row">
        <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
            <a href="#" ><img src="./img/candy-bg.png" class="img-responsive"></a>
            <h1 class="title display-5 fw-bold">You're welcome here! <small>Just have a look and feel free to explore</small></h1>
        </div>
    </div>


    <div class="container marketing">
        <div class="row py-5">
            <h2 class="featurette-heading fs-1">It's all for you!</h2>
            <p class="lead mb-5">Below we preparate for you some of our most popular candies, we hope you enjoy! </p>
            <!-- candy 1-->
            <div class="col-lg-4">
                <img src="<?php echo $arr['1']['image'] ?>" class="img-thumbnail" alt="<?php echo $arr['1']['name'] ?>">

                <h2 class="mt-3"><?php echo $arr['1']['name'] ?></h2>
                <p><?php echo $arr['1']['description'] ?></p>
                <p><a class="btn btn-danger" href="?i=product1">Take a look</a></p>
            </div>

            <!-- candy 2-->
            <div class="col-lg-4">
                <img src="<?php echo $arr['2']['image'] ?>" class="img-thumbnail" alt="<?php echo $arr['2']['name'] ?>">

                <h2 class="mt-3"><?php echo $arr['2']['name'] ?></h2>
                <p><?php echo $arr['2']['description'] ?></p>
                <p><a class="btn btn-danger" href="?i=product2">Take a look</a></p>
            </div>
            
            <!-- candy 3-->
            <div class="col-lg-4">
                <img src="<?php echo $arr['3']['image'] ?>" class="img-thumbnail" alt="<?php echo $arr['3']['name'] ?>">

                <h2 class="mt-3"><?php echo $arr['3']['name'] ?></h2>
                <p><?php echo $arr['3']['description'] ?></p>
                <p><a class="btn btn-danger" href="?i=product3">Take a look</a></p>
            </div>

            <!-- candy 4 -->
            <div class="col-lg-4 mt-5">
                <img src="<?php echo $arr['4']['image'] ?>" class="img-thumbnail" alt="<?php echo $arr['4']['name'] ?>">

                <h2 class="mt-3"><?php echo $arr['4']['name'] ?></h2>
                <p><?php echo $arr['4']['description'] ?></p>
                <p><a class="btn btn-danger" href="?i=product4">Take a look</a></p>
            </div>

            <!-- candy 5 -->
            <div class="col-lg-4 mt-5">
                <img src="<?php echo $arr['5']['image'] ?>" class="img-thumbnail" alt="<?php echo $arr['5']['name'] ?>">

                <h2 class="mt-3"><?php echo $arr['5']['name'] ?></h2>
                <p><?php echo $arr['5']['description'] ?></p>
                <p><a class="btn btn-danger" href="?i=product5">Take a look</a></p>
            </div>

            <!-- candy 6 -->
            <div class="col-lg-4 mt-5">
                <img src="<?php echo $arr['6']['image'] ?>" class="img-thumbnail" alt="<?php echo $arr['6']['name'] ?>">

                <h2 class="mt-3"><?php echo $arr['6']['name'] ?></h2>
                <p><?php echo $arr['6']['description'] ?></p>
                <p><a class="btn btn-secondary" href="#" disabled>Take a look</a></p>
            </div>
        </div>
    </div> 

  </div><!-- /.container -->

        
      <div class="container my-5">
        <h2 class="featurette-heading">News soon... <span class="text-muted">wait a little longer</span></h2>
        <p class="lead">We're preparing carefully more about what you'll like too much... sugar! :D</p>
      </div>
   
  
</main>