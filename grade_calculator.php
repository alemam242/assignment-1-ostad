<?php
$url = $_SERVER['REQUEST_URI'];
$error1 = $error2 = $error3 = "";
$show = false;
$result = 0;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $test1 = $_POST['test1'];
    $test2 = $_POST['test2'];
    $test3 = $_POST['test3'];

    if ($test1 < 0 || $test1 > 100) {
        $error1 = " * Mark should be in range(0-100)";
    }
    if ($test2 < 0 || $test2 > 100) {
        $error2 = " * Mark should be in range(0-100)";
    }
    if ($test3 < 0 || $test3 > 100) {
        $error3 = " * Mark should be in range(0-100)";
    }



    if ($error1 == "" && $error2 == "" && $error3 == "") {
        $avg = ($test1 + $test2 + $test3) / 3;
        $avg = sprintf("%.2f", $avg);

        if ($avg >= 80 && $avg <= 100) {
            $grade = "A+";
        } else if ($avg >= 70 && $avg <= 79) {
            $grade = "A";
        } else if ($avg >= 60 && $avg <= 69) {
            $grade = "A-";
        } else if ($avg >= 50 && $avg <= 59) {
            $grade = "B";
        } else if ($avg >= 40 && $avg <= 49) {
            $grade = "C";
        } else if ($avg >= 33 && $avg <= 39) {
            $grade = "D";
        } else {
            $grade = "F";
        }

        $show = true;
    }
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
                            <h1 class="text-center">Grade Calculator</h1>
                            <form method="POST" action="<?php $_SERVER['PHP_SELF'] ?>">
                                <div class="form-group">
                                    <label for="test1">Test 1 Score: <label for="test1" class="error"> <?= $error1 ?> </label> </label>
                                    <input type="number" class="form-control" id="test1" name="test1" required>
                                </div>
                                <div class="form-group">
                                    <label for="test2">Test 2 Score: <label for="test2" class="error"> <?= $error2 ?> </label> </label>
                                    <input type="number" class="form-control" id="test2" name="test2" required>
                                </div>
                                <div class="form-group">
                                    <label for="test3">Test 3 Score: <label for="test3" class="error"> <?= $error3 ?> </label> </label>
                                    <input type="number" class="form-control" id="test3" name="test3" required>
                                </div>
                                <button type="submit" class="btn btn-primary" name="submit">Calculate</button>
                            </form>


                            <?php

                            if ($show) {
                                echo "<div class='mt-3 p-3 text-white bg-warning text-center border rounded-3'>
                                <h3>Average Score: $avg</h3>
                                <h3>Grade: $grade</h3>
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