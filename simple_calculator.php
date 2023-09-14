<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Simple Calculator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>

    <?php
    $number1 = "";
    $number2 = "";
    $result = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number1    = $_POST["number1"];
        $number2    = $_POST["number2"];
        $operation  = $_POST["operation"];

        switch ($operation) {
            case 'add':
                $result = $number1 + $number2;
                break;
            case 'sub':
                $result = $number1 - $number2;
                break;
            case 'mul':
                $result = $number1 * $number2;
                break;
            case 'div':
                $result = $number1 / $number2;
                break;
            case 'mod':
                $result = $number1 % $number2;
                break;
            default:
                $result = "Invalid operation.";
        }
    }

    ?>

    <div class="container">
        <div class="row mt-5">
            <div class="col-md-6">
                <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                    <div class="mb-3">
                        <label for="number1">Enter Number 1:</label>
                        <input type="text" class="form-control" name="number1" id="number1">
                    </div>
                    <div class="mb-3">
                        <label for="number2">Enter Number 2:</label>
                        <input type="text" class="form-control" name="number2" id="number2">
                    </div>
                    <div class="mb-3">
                        <select class="form-select" name="operation">
                            <option value="add">Addition</option>
                            <option value="sub">Subtraction</option>
                            <option value="mul">Multiplication</option>
                            <option value="div">Divided</option>
                            <option value="mod">Modulus</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Calculate</button>
                </form>
            </div>
            <div class="col-md-6">
                <?php
                // Display the result
                if ($result !== "") {
                    echo "<p class='alert alert-success text-center'>{$result}</p>";
                }
                ?>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>