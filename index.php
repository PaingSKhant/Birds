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
            <a href="" class="text-decoration-none text-dark">
                <h4 class="index.php">Home</h4>
            </a>
            <a href="birds.php" class="text-decoration-none text-dark">
                <h4 class="">Birds</h4>
            </a>
        </div>
        <div class="col-4 text-end">
            <button class="btn btn-secondary   rounded ">
                <a href="birds.php" class="text-decoration-none text-white"><span>Let's Fly</span></a>
            </button>
        </div>
    </div>

    <div class="rounded container p-5 d-flex justify-content-around mt-5 box ">

        <div class="card shadow-lg bg-white" style="max-width: 540px;">
            <div class="row  mt-2">
                <a href="aboutBird.php" class="d-flex text-decoration-none">
                    <div class="col-md-4">
                        <img src="./birdImg/bird1.jpg" class="img-thumbnail rounded text-center mt-3 ms-2" style="width:18rem;">

                    </div>
                    <div class="col-md-8">
                        <div class="card-body text-dark ms-2">
                            <h5 class="card-title">Bird</h5>
                            <h6 class="fs-4">ငှက်</h6>
                            <h6 class="card-text">ငှက် သည် အမွှေးအတောင်ရှိ၍ အတောင်ပံ နှစ်ဖက်ရှိသော သွေးနွေးသတ္တဝါအမျိုးအစားတွင်ပါဝင်သည်။ </h6>

                        </div>
                    </div>

                </a>
            </div>
        </div>


        <div class="card shadow-lg text-center text-dark bg-white mt-5" style="width: 10rem;  height:9rem;">
            <a href="https://my.wikipedia.org/wiki/%E1%80%84%E1%80%BE%E1%80%80%E1%80%BA" class="text-decoration-none text-dark mt-3">
                <h1 class=""><i class="fa-brands fa-wikipedia-w"></i></h1>
                <div class="card-body d-flex ">
                    <p class="card-text">Wikipedia</p>
                    <h5> <i class="fa-solid fa-circle-arrow-right ms-3"></i></h5>
                </div>
            </a>
        </div>

        <div class="card shadow-lg text-center text-dark bg-white mt-5" style="width: 10rem;  height:9rem;">
            <a href="https://web.facebook.com/bin.birdsinnature" class="text-decoration-none text-dark mt-3">
                <h1 class=""><i class="fa-brands fa-facebook"></i></h1>
                <div class="card-body d-flex">
                    <p class="card-text">Birds In Nature</p>
                    <h5> <i class="fa-solid fa-circle-arrow-right mt-4"></i></h5>
                </div>
            </a>
        </div>
    </div>

    <div class="rounded container d-flex justify-content-around  mt-3 p-5 box">
        <div class="col-2 d-flex   ">
            <div class=" p-2 flex-fill">
                <div class="card  shadow-lg">

                    <div class="card-body">
                        <h1 class="card-title">၈၆၀၀</h1>
                        <p class="card-text">ငှက်အမျိုးပေါင်း(မျိုးစိတ်ပေါင်း)</p>

                    </div>
                </div>
            </div>

        </div>

        <div class="col-2 d-flex   ">
            <div class=" p-2 flex-fill">
                <div class="card shadow-lg">

                    <div class="card-body">
                        <h1 class="card-title">၁၆၀၀</h1>
                        <p class="card-text">မျိုးစုပေါင်း</p>

                    </div>
                </div>
            </div>

        </div>
        <div class="col-2 d-flex   ">
            <div class=" p-2 flex-fill">
                <div class="card shadow-lg">

                    <div class="card-body">
                        <h1 class="card-title">၁၅၅</h1>
                        <p class="card-text">မျိုးရင်းပေါင်း</p>

                    </div>
                </div>
            </div>

        </div>
        <div class="col-2 d-flex   ">
            <div class=" p-2 flex-fill">
                <div class="card shadow-lg">

                    <div class="card-body">
                        <h1 class="card-title">၂၇</h1>
                        <p class="card-text">မျိုးစဥ်ပါင်း</p>

                    </div>
                </div>
            </div>

        </div>

        <div class="col-2 d-flex flex-end   ">
            <div class=" p-2 flex-fill">
                <div class="card shadow-lg">
                    <div class="card-body">
                        <a href="birds.php" class="text-decoration-none text-dark">
                            <h3><i class="fa-solid fa-circle-arrow-right "></i></h3>
                        </a>
                        <h2 class="card-title">
                            <span>Let's</span>
                            <span>explore</span>
                            <span class="text-violet">together</span>
                        </h2>

                    </div>
                </div>
            </div>

        </div>

    </div>

</body>

</html>