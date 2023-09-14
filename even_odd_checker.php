<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Even or Odd Checker</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <?php
    $number = "";
    $result = "";
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $number = $_POST['number'];

        if (is_numeric($number)) {
            if ($number % 2 == 0) {
                $result = "Even number";
            } else {
                $result = "Odd number";
            }
        } else {
            $result = "Please enter a valid number.";
        }
    }

    ?>

    <div class="container">
        <div class="row mt-5 align-items-center">
            <div class="col-md-6">
                <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                    <div class="mb-3">
                        <label for="number" class="form-label">Enter a Number:</label>
                        <input type="number" name="number" class="form-control" id="number">
                    </div>
                    <button type="submit" class="btn btn-primary">Check</button>
                </form>
            </div>
            <div class="col-md-6">
                <?php
                // Display the result
                if ($result !== "") {
                    echo "<p class='alert alert-success'>The number {$number} is {$result}.</p>";
                }
                ?>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>