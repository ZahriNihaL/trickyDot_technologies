<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link href='/assets/css/style.css' rel='stylesheet'>
</head>
<body>
    
<div class="col-lg-2 sidebar-left">
    <div class="profile d-flex mt-3 mx-3">
        <img src="./assets/images/trickydot" class="rounded-circle me-3">
        <div class="profile-details">
            <div class="profile-name" style="font-family:'Poppins' ;">TrickyDot.</div>
            <div class="profile-description">IT COMPANY</div>
        </div>
    </div>

    <ul class="nav flex-column" id="sidebar-nav">
        <li class="nav-item">
            <a class="nav-link active home-nav" href="slideshowpage.php">
            <i class="bi bi-house"></i>Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link slideshow-nav" href="slideshow.php">
            <i class="bi bi-file-earmark-slides"></i>Slideshow</a>
        </li>
        <li class="nav-item">
            <a class="nav-link slideshow-nav" href="services.php">
            <i class="bi bi-bucket-fill"></i>Services</a>
        </li>
        <li class="nav-item">
            <a class="nav-link portfolio-nav" href="category.php">
            <i class="bi bi-tv"></i>Category</a>
        </li>
        <li class="nav-item">
            <a class="nav-link portfolio-nav" href="portfolio.php">
            <i class="bi bi-tv"></i>Portfolio</a>
        </li>
        <li class="nav-item">
            <a class="nav-link testimonial-nav" href="testimonial.php">
            <i class="bi bi-soundwave"></i>Testimonial</a>
        </li>
        <li class="nav-item">
            <a class="nav-link customers-nav" href="customers.php">
            <i class="bi bi-people"></i>Customers</a>
        </li>
        <li class="nav-item">
            <a class="nav-link team-nav" href="team.php">
            <i class="bi bi-people-fill"></i>Team</a>
        </li>
        <li class="nav-item">
            <a class="nav-link  faq-nav" href="faq.php"><i class="bi bi-question-circle"></i>Faq</a>
        </li>
        <li class="nav-item">
            <a class="nav-link settings-nav" href="settings.php"><i class="bi bi-sliders"></i>Settings</a>
        </li>
        <form method="POST" action="functions/functions.php">
            <li class="nav-item">
                <a class="nav-link logout-nav" href="#" type="submit" name="logout"><i class="bi bi-person-circle"></i>Logout</a>
            </li>
        </form>
    </ul>
</div>
</body>
</html>

