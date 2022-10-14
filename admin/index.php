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
        <div class="col-lg-7 wrapper">
            <div class="row mb-4">
                <div class="col-sm-6 col-md-12 col-xl-5 mb-3 mb-5 mb-7 mb-9">
                    <div class="custom-card card-left">
                        <div class="card-header">
                            <div class="card-icon"><i class="bi bi-file-earmark-slides"></i></div>
                            <button class="btn ms-auto text-white py-0 px-1"></button>
                        </div>
                        <div class="card-text">
                            SLIDESHOW
                            <?php
                                $dash_query = "SELECT * from tbl_slideshow";
                                $dash_query_run = mysqli_query($con, $dash_query);
                                if($tbl_slideshow_total = mysqli_num_rows($dash_query_run))
                                {
                                    echo'<h4 class="mb-0"> '.$tbl_slideshow_total.'</h4>';
                                }
                                else{
                                    echo'<h4 class="mb-0"> '.$tbl_slideshow_total.' </h4>';
                                }
                            ?>
                        </div>                       
                    </div>
                </div>
                <div class="col-sm-6 col-md-12 col-xl-5 mb-3">
                    <div class="custom-card card-right">
                        <div class="card-header">
                            <div class="card-icon"><i class="bi bi-tv"></i></div>
                        </div>
                        <div class="card-text">
                            PORTFOLIO
                            <?php
                                $dash_query = "SELECT * from tbl_portfolio";
                                $dash_query_run = mysqli_query($con, $dash_query);
                                if($tbl_portfolio_total = mysqli_num_rows($dash_query_run))
                                {
                                    echo'<h4 class="mb-0"> '.$tbl_portfolio_total.'</h4>';
                                }
                                else{
                                    echo'<h4 class="mb-0"> '.$tbl_portfolio_total.' </h4>';
                                }
                            ?>
                        </div>                        
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-sm-6 col-md-12 col-xl-5 mb-3">
                    <div class="custom-card card-left">
                        <div class="card-header">
                            <div class="card-icon"><i class="bi bi-soundwave"></i></div>
                            <button class="btn ms-auto text-white py-0 px-1"></button>
                        </div>
                        <div class="card-text">
                            TESTIMONIAL
                            <?php
                                $dash_query = "SELECT * from tbl_testimonial";
                                $dash_query_run = mysqli_query($con, $dash_query);
                                if($tbl_testimonial_total = mysqli_num_rows($dash_query_run))
                                {
                                    echo'<h4 class="mb-0"> '.$tbl_testimonial_total.'</h4>';
                                }
                                else{
                                    echo'<h4 class="mb-0"> '.$tbl_testimonial_total.' </h4>';
                                }
                            ?>
                                                       
                        </div>                        
                    </div>
                </div>
                <div class="col-sm-6 col-md-12 col-xl-5 mb-3">
                    <div class="custom-card card-right">
                        <div class="card-header">
                            <div class="card-icon"><i class="bi bi-people"></i></div>
                        </div>
                        <div class="card-text">
                            CUSTOMERS
                            <?php
                                $dash_query = "SELECT * from tbl_customers";
                                $dash_query_run = mysqli_query($con, $dash_query);
                                if($tbl_customers_total = mysqli_num_rows($dash_query_run))
                                {
                                    echo'<h4 class="mb-0"> '.$tbl_customers_total.'</h4>';
                                }
                                else{
                                    echo'<h4 class="mb-0"> '.$tbl_customers_total.' </h4>';
                                }
                            ?>
                        </div>                      
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-sm-6 col-md-12 col-xl-5 mb-3">
                    <div class="custom-card card-left">
                        <div class="card-header">
                            <div class="card-icon"><i class="bi bi-people-fill"></i></div>
                            <button class="btn ms-auto text-white py-0 px-1"></button>
                        </div>
                        <div class="card-text">
                            TEAM
                            <?php
                                $dash_query = "SELECT * from tbl_team";
                                $dash_query_run = mysqli_query($con, $dash_query);
                                if($tbl_team_total = mysqli_num_rows($dash_query_run))
                                {
                                    echo'<h4 class="mb-0"> '.$tbl_team_total.'</h4>';
                                }
                                else{
                                    echo'<h4 class="mb-0"> '.$tbl_team_total.' </h4>';
                                }
                            ?>                 
                        </div>                      
                    </div>
                </div>
                <div class="col-sm-6 col-md-12 col-xl-5 mb-3">
                    <div class="custom-card card-right">
                        <div class="card-header">
                            <div class="card-icon"><i class="bi bi-question-circle"></i></div>
                        </div>
                        <div class="card-text">
                            FAQ
                            <?php
                                $dash_query = "SELECT * from tbl_faq";
                                $dash_query_run = mysqli_query($con, $dash_query);
                                if($tbl_faq_total = mysqli_num_rows($dash_query_run))
                                {
                                    echo'<h4 class="mb-0"> '.$tbl_faq_total.'</h4>';
                                }
                                else{
                                    echo'<h4 class="mb-0"> '.$tbl_faq_total.' </h4>';
                                }
                            ?>
                        </div>                       
                    </div>
                </div>
            </div>            
        <!-- <div class="col-lg-3 sidebar-right"> -->
            