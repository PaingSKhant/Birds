<?php

require_once "./main/connect.php";

$data = $birds->connect();

$birds = $birds->bird();


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Birds</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="">
    <div class="container mt-3 d-flex justify-content-between">
        <div class="col-4 ">
            <a href="index.php" class="text-decoration-none">
                <h3 class="text-dark"><i class="fa-brands fa-earlybirds"></i></h3>
            </a>
        </div>
        <div class="col-4 d-flex justify-content-evenly  text-dark">
            <a href="index.php" class="text-decoration-none text-dark">
                <h4 class="">Home</h4>
            </a>
            <a href="" class="text-decoration-none text-dark">
                <h4 class="">Birds</h4>
            </a>
        </div>
        <div class="col-4 text-end">
            <button class="btn btn-secondary   rounded ">
                <span>Let's Fly</span>
            </button>
        </div>
    </div>


    <div class="container box mt-4 ">
        <div class="row d-flex justify-content-around">

            <?php foreach ($birds as $bird) : ?>
                <div class="card mt-3 shadow-lg" style="width: 18rem;">
                    <a href="birdsDescription.php?id=<?php echo $bird['Id']; ?>" class="text-decoration-none text-dark">
                        <img src="<?php echo $bird['ImagePath'] ?>" class="w-full text-center shadow-sm card-img-top rounded mt-1" alt="...">
                        <div class="card-body">
                            <h4 class="card-title"><?php echo $bird['BirdMyanmarName'] ?></h4>
                            <div class="d-flex">
                                <p class="card-text"><?php echo $bird['BirdEnglishName'] ?></p>
                                <h5> <i class="fa-solid fa-circle-arrow-right ms-3"></i></h5>
                            </div>

                        </div>
                    </a>

                </div>

            <?php endforeach; ?>





        </div>
    </div>
</body>

</html>