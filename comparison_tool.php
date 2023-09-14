<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Comparison Tool</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <?php
    $number1 = 0;
    $number2 = 0;
    $larger_number = "";

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $number1 = $_POST["number1"];
        $number2 = $_POST["number2"];

        $larger_number = ($number1 > $number2) ? $number1 : $number2;
    }

    ?>

    <div class="container">
        <div class="row mt-5 align-items-center">
            <div class="col-md-6">
                <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                    <div class="mb-3">
                        <label for="number1" class="form-label">Enter Number 1:</label>
                        <input type="number" name="number1" class="form-control" id="number1">
                    </div>
                    <div class="mb-3">
                        <label for="number2" class="form-label">Enter Number 2:</label>
                        <input type="number" name="number2" class="form-control" id="number2">
                    </div>
                    <button type="submit" class="btn btn-primary">Compare</button>
                </form>
            </div>
            <div class="col-md-6">
                <?php
                // Display the weather message
                if ($larger_number !== "") {
                    echo "<p class='alert alert-success text-center'>{$larger_number}</p>";
                }
                ?>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>