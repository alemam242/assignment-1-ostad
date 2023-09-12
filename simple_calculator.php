<?php
$url = $_SERVER['REQUEST_URI'];
$error = "";
$show = false;
$result = 0;
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    if ($num2 == 0) {
        $error = " * DivisionByZero is not possible!";
    }
    $operator = $_POST["operation"];

    switch ($operator) {
        case "+":
            $result = "$num1 + $num2 = " . $num1 + $num2;
            break;
        case "-":
            $result = "$num1 - $num2 = " . $num1 - $num2;
            break;
        case "*":
            $result = "$num1 * $num2 = " . $num1 * $num2;
            break;
        case "/":
            if ($error == "") {
                $result = sprintf("$num1 / $num2 = %.2f", $num1 / $num2);
            }
            break;
        default:
            $result = 0;
    }

    if ($error == "") {
        $show = true;
    }
}

/*
function validNumber($num)
{
    $pattern = '/^-?\d+(\.\d+)?$/';

    if (preg_match($pattern, $num)) {
        return true;
    } else {
        return false;
    }
}
*/

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
                            <h1 class="text-center">Simple Calculator</h1>
                            <form method="POST" action="<?php $_SERVER['PHP_SELF'] ?>">
                                <div class="form-group">
                                    <label for="num1">Number 1:</label>
                                    <input type="number" class="form-control" id="num1" name="num1" step="any" placeholder="Enter number1" required>
                                </div>

                                <div class="form-group">
                                    <label for="num2">Number 2: <label for="num2" class="error"> <?= $error ?> </label> </label>
                                    <input type="number" class="form-control" id="num2" name="num2" step="any" placeholder="Enter number2" required>
                                </div>

                                <div class="form-group">
                                    <label for="operation">Operation:</label>
                                    <select class="form-control" id="operation" name="operation">
                                        <option value="+">Addition</option>
                                        <option value="-">Subtraction</option>
                                        <option value="*">Multiplication</option>
                                        <option value="/">Division</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary" name="submit">Calculate</button>

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