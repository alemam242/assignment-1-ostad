<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Bootstrap Page</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="style.css">


</head>

<body>
    <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar">
        <h2 class="ms-5 text-start" style="margin-left: 25px;margin-top: 10px;">All Tasks</h2>
        <div class="position-sticky">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link<?php if (str_contains($url, "personal_information.php")) echo " active"; ?>" href="personal_information.php">
                        Personal Information
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link<?php if (str_contains($url, "temperature_converter.php")) echo " active"; ?>" href="temperature_converter.php">
                        Temperature Converter
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link<?php if (str_contains($url, "grade_calculator.php")) echo " active"; ?>" href="grade_calculator.php">
                        Grade Calculator
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link<?php if (str_contains($url, "even_odd_checker.php")) echo " active"; ?>" href="even_odd_checker.php">
                        Even or Odd Checker
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link<?php if (str_contains($url, "weather_report.php")) echo " active"; ?>" href="weather_report.php">
                        Weather Report
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link<?php if (str_contains($url, "comparison_tool.php")) echo " active"; ?>" href="comparison_tool.php">
                        Comparison Tool
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link<?php if (str_contains($url, "simple_calculator.php")) echo " active"; ?>" href="simple_calculator.php">
                        Simple Calculator
                    </a>
                </li>
            </ul>
        </div>
    </nav>

</body>

</html>