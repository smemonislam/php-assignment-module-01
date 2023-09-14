<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Grade Calculator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>

    <?php
    $bangla     = 0;
    $english    = 0;
    $math       = 0;
    $letter_grade = "";


    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $bangla     = $_POST['bangla'];
        $english    = $_POST['english'];
        $math       = $_POST['math'];

        $average = ($bangla + $english + $math) / 3;


        if ($average >= 80 && $average <= 100) {
            $letter_grade = "A+";
        } else if ($average >= 70 && $average < 80) {
            $letter_grade = "A";
        } else if ($average >= 60 && $average < 70) {
            $letter_grade = "A-";
        } else if ($average >= 50 && $average < 60) {
            $letter_grade = "B";
        } else if ($average >= 40 && $average < 50) {
            $letter_grade = "C";
        } else if ($average >= 33 && $average < 40) {
            $letter_grade = "D";
        } else {
            $letter_grade = "F";
        }
    }
    ?>

    <div class="container">
        <div class="row mt-5 align-items-center">
            <div class="col-md-6">
                <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                    <div class="mb-3">
                        <label for="bangla" class="form-label">Bangla</label>
                        <input type="number" name="bangla" class="form-control" id="bangla">
                    </div>
                    <div class="mb-3">
                        <label for="english" class="form-label">English</label>
                        <input type="number" name="english" class="form-control" id="english">
                    </div>
                    <div class="mb-3">
                        <label for="mathematics" class="form-label">Mathematics</label>
                        <input type="number" name="math" class="form-control" id="mathematics">
                    </div>
                    <button type="submit" class="btn btn-primary">Calculate</button>
                </form>
            </div>
            <div class="col-md-6">
                <?php if ($_SERVER['REQUEST_METHOD'] == 'POST') { ?>
                    <h2 class="text-center">Mark Sheet</h2>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Bangla</th>
                                <th scope="col">English</th>
                                <th scope="col">Math</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?php echo $bangla ?></td>
                                <td><?php echo $english ?></td>
                                <td><?php echo $math ?></td>
                            </tr>
                            <tr>
                                <td scope="row">Result</td>
                                <td>Average: <?php echo $average ?></td>
                                <td>Letter Grade: <?php echo $letter_grade ?></td>
                            </tr>
                        </tbody>
                    </table>
                <?php } ?>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>