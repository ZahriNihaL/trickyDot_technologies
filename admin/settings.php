<?php

session_start();
if (!isset($_SESSION["loggedin"])) {
    header("Location:login.php");
}

include("includes/db.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/style.css">
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>


    <title>Dashboard</title>


</head>

<body>
    <div class="row min-vh-100 g-0">

        <?php include("content/navbar.php") ?>

        <div class="col-lg-10 wrapper">
            <div class="card custom-card-2">
                <div class="card-body p-3 d-flex align-items-center justify-content-between">
                    <h5 class="mb-0 fw-bold">SETTINGS</h5>
                </div>
            </div>

            <?php
            if (isset($_GET["error"])) {
            ?>
                <div class="alert alert-danger text-center mt-2" role="alert">
                    <?php
                    $error = $_GET["error"];
                    echo $error;
                    ?>
                </div>
            <?php
            } else if (isset($_GET["success"])) {
            ?>
                <div class="alert alert-success text-center mt-2" role="alert">
                    <?php
                    $error = $_GET["success"];
                    echo $error;
                    ?>
                </div>
            <?php } ?>

            <?php

            $sql = "select * from tbl_company where id='1'";
            $run = mysqli_query($con, $sql);
            $row = mysqli_fetch_array($run);

            $company_name = $row["company_name"];
            $place = $row["place"];
            $email1 = $row["email1"];
            $phone_number1 = $row["phone_number1"];
            $phone_number2 = $row["phone_number2"];
            $link = $row["link"];
            $facebook = $row["facebook"];
            $instagram = $row["instagram"];
            $twitter = $row["twitter"];
            $youtube = $row["youtube"];
            $linkedin = $row["linkedin"];

            ?>

            <div class="card custom-card-2 mt-2">
                <div class="card-body p-4">
                    <form method="post" action="functions/functions.php" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label class="form-label" for="title">Company_Name :</label>
                            <input type="text" class="form-control" value="<?php echo $company_name ?>" name="company_name" id="title" placeholder="Enter Company Name" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="title">Place :</label>
                            <input type="text" class="form-control" name="place" value="<?php echo $place ?>" id="title" placeholder="Enter Company Place" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="title">e-mail 1 :</label>
                            <input type="text" class="form-control" name="email1" value="<?php echo $email1 ?>" id="title" placeholder="Enter Primary Email" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="title">Phone_Number1 :</label>
                            <input type="text" class="form-control" name="phone_number1" value="<?php echo $phone_number1 ?>" id="title" placeholder="Enter Primary PhoneNumber" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="title">Phone_Number2 :</label>
                            <input type="text" class="form-control" name="phone_number2" id="title" value="<?php echo $phone_number2 ?>" placeholder="Enter Secondary PhoneNumber" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="link">Website :</label>
                            <input type="url" class="form-control" id="url" name="link" value="<?php echo $link ?>" placeholder="Enter Website Link" required>
                        </div>

                        <label class="form-label" for="title">Facebook :</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon3">https://facebook.com/</span>
                            <input type="text" class="form-control" id="basic-url" name="facebook" value="<?php echo $facebook ?>" aria-describedby="basic-addon3">
                        </div>

                        <label class="form-label" for="title">Instagram :</label>5
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon3">https://instagram.com/</span>
                            <input type="text" class="form-control" id="basic-url" name="instagram" value="<?php echo $instagram ?>" aria-describedby="basic-addon3">
                        </div>

                        <label class="form-label" for="title">Twitter :</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon3">https://twitter.com/</span>
                            <input type="text" class="form-control" id="basic-url" name="twitter" value="<?php echo $twitter ?>" aria-describedby="basic-addon3">
                        </div>

                        <label class="form-label" for="title">Youtube :</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon3">https://youtube.com/channel/</span>
                            <input type="text" class="form-control" id="basic-url" name="youtube" value="<?php echo $youtube ?>" aria-describedby="basic-addon3">
                        </div>

                        <label class="form-label" for="title">LinkedIn :</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon3">https://linkedin.com/</span>
                            <input type="text" class="form-control" id="basic-url" name="linkedin" value="<?php echo $linkedin ?>" aria-describedby="basic-addon3">
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="btn btn-success float-end" name="update_settings" style="background-color: #7d1128;">UPDATE</button>

                        </div>
                    </form>
                </div>
            </div>

            <button type="button" class="btn btn-success mt-3" name="change_password" data-bs-toggle="modal" data-bs-target="#myModal" style="background-color: #7d1128;">CHANGE PASSWORD</button>
        </div>
    </div>


    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <form method="POST" action="functions/functions.php">
                    <!-- Modal body -->
                    <div class="modal-body">


                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Old Password</label>
                            <input type="password" name="old_pass" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword2" class="form-label">New Password</label>
                            <input type="password" name="new_pass" class="form-control" id="exampleInputPassword2">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword3" class="form-label">Confirm Password</label>
                            <input type="password" name="retype_pass" class="form-control" id="exampleInputPassword3">
                        </div>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal" style="background-color: #7d1128;">Close</button>
                        <button type="submit" name="change_password" class="btn btn-primary" style="background-color: #7d1128;">Submit</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</body>

</html>