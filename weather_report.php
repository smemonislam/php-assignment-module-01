<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Weather Report</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <?php
    $temperature  = 0;
    $weather_message = "";
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $temperature = $_POST["temperature"];

        if ($temperature <= 0) {
            $weather_message = "It's freezing!";
        } elseif ($temperature > 0 && $temperature <= 15) {
            $weather_message = "It's cool.";
        } elseif ($temperature > 15) {
            $weather_message = "It's warm.";
        }
    }

    ?>

    <div class="container">
        <div class="row mt-5 align-items-center">
            <div class="col-md-6">
                <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                    <div class="mb-3">
                        <label for="weather" class="form-label">Enter Temperature (in Celsius):</label>
                        <input type="number" name="temperature" class="form-control" id="weather">
                    </div>
                    <button type="submit" class="btn btn-primary">Check Weather</button>
                </form>
            </div>
            <div class="col-md-6">
                <?php
                // Display the weather message
                if ($weather_message !== "") {
                    echo "<p class='alert alert-success'>{$weather_message}</p>";
                }
                ?>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>