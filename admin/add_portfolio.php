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

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">

    <title>Dashboard</title>


</head>

<body>
    <div class="row min-vh-100 g-0">

        <?php include("content/navbar.php") ?>

        <div class="col-lg-10 wrapper">

            <div class="card custom-card-2">
                <div class="card-body p-3 d-flex align-items-center justify-content-between">
                    <h5 class="mb-0 fw-bold">PORTFOLIO</h5>
                </div>
            </div>
            <div class=""></div>
            <div class="card custom-card-2 mt-2">
                <div class="card-body p-4">
                    <form method="post" action="functions/functions.php" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label class="form-label" for="name">Title :</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Enter Title" required style="background-color:#f0f1f2; height:36px;">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="name">Category :</label>
                            <select class="form-select" aria-label="Default select example" name="category_name" style="border: 0; background-color:#f0f1f2; height:36px;" required>

                                <option value="" selected>Select Category</option>
                               
                                <?php

                                $sql = "select * from tbl_category";
                                $run = mysqli_query($con, $sql);

                                while ($row = mysqli_fetch_array($run)) {
                                    $id = $row["id"];
                                    $category_name = $row["category_name"];
                                    
                                ?>

                                <option value="<?php echo $id ?>"><?php echo $category_name ?></option>

                                <?php }  ?>
                            </select>
                            <div class="mb-3">
                                <label class="form-label" for="image">Image :</label>
                                <input type="file" class="form-control" name="img" id="image" required style="background-color:#f0f1f2; height:36px;">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="name">Description :</label>
                                <input type="text" class="form-control" name="description" id="title" placeholder="Enter Any Description" required style=" background-color:#f0f1f2; height:36px;">
                            </div>
                     
                            
                            <div class="mb-3">
                                <button type="submit" class="btn btn-success float-end" name="add_portfolio" style="background-color: #7d1128;">SUBMIT</button>    
                            </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</body>

</html>