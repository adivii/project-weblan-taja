<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TAJA | <?= $title ?></title>
    <link rel="shortcut icon" href="/assets/images/wheat-icons.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/styles/fonts.css">
    <link rel="stylesheet" href="/styles/color.css">
</head>

<body>
    <a class="btn position-absolute" style="z-index: 5; top: 10px; left: 10px;" data-bs-toggle="offcanvas" href="#mainSidebar" role="button" aria-controls="offcanvasExample">
        <img src="/assets/images/menu.png" height="20px">
    </a>
    <div class="offcanvas offcanvas-start" tabindex="-1" id="mainSidebar" aria-labelledby="mainSidebarLabel" style="background-color: var(--color-two); border: none;">
        <div class="offcanvas-header">
            <a href="/base" style="text-decoration: none;"><h4 class="offcanvas-title" id="mainSidebarLabel" style="color: #fefefe;font-weight: bold; text-decoration: none;">TAJA</h4></a>
        </div>
        <div class="offcanvas-body">
            <hr style="height: 3px; border: none; color: #fefefe; background-color: white;">
            <a class="nav-link ms-3" style="color: #fefefe;" href="#">Home</a>
            <hr style="height: 3px; border: none; color: #fefefe; background-color: white;">
            <a class="nav-link ms-3" style="color: #fefefe;" href="/about">About</a>
            <hr style="height: 3px; border: none; color: #fefefe; background-color: white;">
            <a class="nav-link ms-3" style="color: #fefefe;" href="/logout">Logout</a>
            <hr style="height: 3px; border: none; color: #fefefe; background-color: white;">
        </div>
    </div>

    <?= $this->renderSection('content') ?>
</body>

</html>