<?php
$url = $_SERVER['REQUEST_URI'];
$show = false;
$result = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = $_POST["number"];

    if ($number >= 0 && $number % 2 == 0) {
        $result = "$number is a positive even number";
    } else if ($number < 0 && $number % 2 == 0) {
        $result = "$number is a negative even number";
    } else if ($number >= 0 && $number % 2 == 1) {
        $result = "$number is a positive odd number";
    } else if ($number < 0 && $number % 2 == 1) {
        $result = "$number is a negative odd number";
    }

    $show = true;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Bootstrap Page</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="CSS/style.css">


</head>

<body>

    <?php include_once 'const/header.php' ?>

    <!-- Sidebar -->
    <div class="container-fluid">
        <div class="row">
            <?php include_once 'const/sidebar.php' ?>

            <!-- Main Content -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <!-- Content goes here -->

                <div class="container mt-5">
                    <div class="row">
                        <div class="col-md-6 offset-md-3">
                            <h1 class="text-center">Even/Odd Checker</h1>
                            <form method="POST" action="<?php $_SERVER['PHP_SELF'] ?>">
                                <div class="form-group">
                                    <label for="number">Enter a Number:</label>
                                    <input type="number" class="form-control" id="number" name="number" required>
                                </div>
                                <button type="submit" class="btn btn-primary" name="submit">Check</button>
                            </form>

                            <?php

                            if ($show) {
                                echo "<div class='mt-3 p-3 text-white bg-warning text-center border rounded-3'>
                                <h3> $result </h3>
                            </div>";
                            }

                            ?>

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