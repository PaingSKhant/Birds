<?php

require_once "./main/connect.php";

$data = $birds->connect();

$birds = $birds->bird();

$id = $_GET['id'];



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

<body>
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
            <a href="birds.php" class="text-decoration-none text-dark">
                <h4 class="">Birds</h4>
            </a>
        </div>
        <div class="col-4 text-end">
            <button class="btn btn-secondary rounded ">
            <a href="birds.php" class="text-decoration-none text-white"><span>Let's Fly</span></a>
            </button>
        </div>
    </div>

    <div class="container d-flex justify-content-center  p-4  mt-5  ">

        <?php foreach ($birds as $bird) : ?>

            <?php if ($bird['Id'] == $id) : ?>
                <div class="card w-75 p-2 " style="width: 18rem;">
                    <img src="<?php echo $bird['ImagePath'] ?>" class="card-img-top rounded" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $bird['BirdMyanmarName'] ?></h5>
                        <h6><?php echo $bird['BirdEnglishName'] ?></h6>
                        <p class="card-text"><?php echo $bird['Description'] ?></p>

                    </div>
                </div>

            <?php endif ?>
        <?php endforeach; ?>





</body>

</html>