<?php
    include 'data/products.php'
?>

<head>
    <title>Tia Joana's | Beijinho</title>
</head>

<main>
    
    <div class="container p-3 mb-0 bg-dark text-light">
        <div class="container-fluid d-flex justify-content-between px-5 py-5">
            <div>
                <div>
                    <h1 class="display-5 fw-bold"><?php echo $arr['2']['name'] ?></h1>
                    <p class="col-md-8 fs-4"><?php echo $arr['2']['about'] ?></p>
                    <p>__________________________________________________</p><br>
                </div>
                <div class="mt-5">
                    
                    
                    <p class="mb-0">on sale for only</p>
                    <p class="display-1">$<?php echo $arr['2']['price'] ?><span class="fs-6">/UN</span></p>
                    <button type="button" class="btn btn-success btn-lg me-2">Buy</button>
                    <button type="button" class="btn btn-outline-success btn-lg">Try it for free</button>
                </div>
            </div>
            
            <img src="./img/beijinho2.png" width="700px" alt="beijinho">
            

        </div>
        <div class="container p-5 pt-0 pb-5">    
            <div class="container">
                <h1>Did you know?</h1> <br>
                
                Beijinho is the coconut version of the Brazilian brigadeiro. When rolled, it can be covered with granulated sugar or grated coconut. Traditionally a single clove is stuck in the top of the candy.

                It is believed that Beijinho was originally called "Nun's kiss" and formerly made with almonds, water and sugar. 
            </div>

        </div>    
    </div>
    <div class="container pt-0 mb-4 bg-light rounded-3">
        <div class="container px-5 py-5">
            <h1>You can too</h1> <br>
            <p class="">Are you thinking about receive in house? we have too: <br></p>
            <img src="./img/ifood.png" width="250px" alt="ifood" class="mt-3 me-5">
            <img src="./img/uber-eats.png" width="250px" alt="uber-eats" class="mt-3 me-5">
            <img src="./img/rappi.png" width="250px" alt="uber-eats" class="mt-3">
        </div>
    </div>

</main>