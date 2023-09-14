<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Temperature Convert</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>

    <?php
    $celsius = "";
    $fahrenheit = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $input_temperature          = $_POST["input_temperature"];
        $convert_temperature        = $_POST["convert_temperature"];

        if ('farenheit_to_celsius' === $convert_temperature) {
            $celsius = (5 / 9) * ($input_temperature - 32);
        }

        if ('celsius_to_farenheit' === $convert_temperature) {
            $fahrenheit = ($input_temperature * 9 / 5) + 32;
        }
    }

    ?>

    <div class="container">
        <div class="row mt-5">
            <div class="col-md-6">
                <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                    <div class="mb-3">
                        <label for="temperature_convert">Temperature Convert</label>
                        <input type="text" class="form-control" name="input_temperature" id="temperature_convert">
                    </div>
                    <div class="mb-3">
                        <select class="form-select" name="convert_temperature">
                            <option value="farenheit_to_celsius">Farenheit to Celsius</option>
                            <option value="celsius_to_farenheit">Celsius to Farenheit</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Convert</button>
                </form>
            </div>
            <div class="col-md-6">
                <?php
                if ($celsius !== "") { ?>
                    <div class="mb-3">
                        <label for="temperature_convert">Celsius to Fahrenheit</label>
                        <input type="text" class="form-control" value="<?php echo $celsius ?>">
                    </div>

                <?php } elseif ($fahrenheit !== "") { ?>
                    <div class="mb-3">
                        <label for="temperature_convert">Fahrenheit to Celsius</label>
                        <input type="text" class="form-control" value="<?php echo $fahrenheit ?>">
                    </div>
                <?php }
                ?>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>