<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Personal Information</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>

    <?php
    $name = "";
    $age = "";
    $country = "";
    $brief = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name       = $_POST["name"];
        $age        = $_POST["age"];
        $country    = $_POST["country"];
        $brief      = $_POST["brief"];
    }

    ?>


    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2 class="mt-5 mb-5">Personal Information</h2>
                <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST">
                    <div class="mb-3">
                        <label for="inputName" class="form-label">Your Name</label>
                        <input type="text" name="name" class="form-control" id="inputName" placeholder="Jhon Doe">
                    </div>
                    <div class="mb-3">
                        <label for="inputNumber" class="form-label">Age</label>
                        <input type="number" name="age" class="form-control" id="inputNumber">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Select Country</label>
                        <select class="form-select" name="country">
                            <option disabled>Country</option>
                            <option value="Bangladesh">Bangladesh</option>
                            <option value="Pakistan">Pakistan</option>
                            <option value="Nepal">Nepal</option>
                            <option value="Maldives">Maldives</option>
                            <option value="Srilanka">Srilanka</option>
                            <option value="Bhutan">Bhutan</option>
                            <option value="India">India</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="inputInfo" class="form-label">About</label>
                        <textarea class="form-control" name="brief" id="inputInfo" rows="3"></textarea>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
            <?php
            if ($name !== "" || $age !== "" || $country !== "" || $brief !== "") {
            ?>
                <div class="col-md-6">
                    <h2 class="text-center mt-5 mb-5">Profile Information</h2>
                    <div class="card  mb-4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Full Name</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0"><?php echo $name ?></p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Age</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0"><?php echo $age ?></p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Country</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0"><?php echo $country ?></p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">About</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0"><?php echo $brief ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>