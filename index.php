<?php
include __DIR__ . '/db/db.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- FONTAWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- STYLESHEET -->
    <link rel="stylesheet" href="./css/style.css">
    <link href='https://fonts.googleapis.com/css?Roboto' rel='stylesheet'>
    <title>Animal &(it's for few)</title>

</head>

<body>
    <div class="container text-center">
        <h1>Animal &</h1>
        <div class="row">
            <?php foreach ($product as $products) { ?>
                <div class="col-sm-4">
                    <div class="card m-2">
                        <img src="<?php echo $products->imgs; ?>" class="img-fluid" />
                        <h4><?php echo $products->name ?></h4>
                        <p>Prezzo € <?php echo $products->price ?></p>
                        <p>
                            <?php
                            if (isset($products->weight)) {
                                echo $products->weight;
                            }

                            if (isset($products->composure)) {
                                echo $products->composure;
                            }

                            if (isset($products->feature)) {
                                echo $products->feature;
                            }

                            if (isset($products->size)) {
                                echo $products->size;
                            }

                            ?>
                        </p>

                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</body>

</html>