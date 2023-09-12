<?php
$url = $_SERVER['REQUEST_URI'];
$name = "Md. Al Emam";
$age = date('Y') - 2000;
$country = "Bangladesh";
$aboutMe = "Hello, Md. Al Emam here. I'm from Chapai Nawabganj in Rajshahi. I'm pursuing a Bachelor of Science in Computer Science and Engineering (CSE) at the Bangladesh University of Business and Technology (BUBT). I really enjoy programming. And one of my all-time favorite programming languages is PHP. I am a web and app development addict as well as an open-source contributor.";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Bootstrap Page</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="CSS/style.css">


</head>

<body>

    <?php include_once 'const/header.php' ?>

    <!-- Sidebar -->
    <div class="container-fluid mb-5">
        <div class="row">
            <?php include_once 'const/sidebar.php' ?>

            <!-- Main Content -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <!-- Content goes here -->

                <div class="container mt-5 mb-5">
                    <div class="row">
                        <div class="col-md-6 offset-md-3">
                            <div class="info-card">
                                <h1 class="text-center">Personal Information</h1>
                                <hr>
                                <div class="row">
                                    <div class="col-6">
                                        <p class="mt-3"><strong>Name:</strong> <?= $name ?></p>
                                        <p><strong>Age:</strong> <?= $age ?> Years old</p>
                                        <p><strong>Country:</strong> <?= $country ?></p>
                                    </div>
                                    <div class="col-6">
                                        <div class="text-center">
                                            <img src="image/myself.jpeg" alt="Md. Al Emam" class="img-fluid rounded-circle" style="max-width: 100px;">
                                        </div>
                                    </div>
                                </div>


                                <hr>
                                <p class="text-center"><em>Brief Introduction:</em></p>
                                <p class="text-start" style="text-align:justify"><?= $aboutMe ?></p>

                            </div>
                        </div>
                    </div>

                </div>
            </main>
        </div>

    </div>

    <!-- Footer -->
    <?php
    include_once 'const/footer.php'
    ?>

    <!-- Include Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>