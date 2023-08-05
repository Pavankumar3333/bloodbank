<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donor-main-page</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Dancing+Script:wght@500&family=Rubik+Glitch&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style.css?">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <!-- fontawesome  -->
    <script src="https://kit.fontawesome.com/d1eb574a3d.js" crossorigin="anonymous"></script>
    <style>
        .main-content{
            background-image: url("patient-main-image.jpg");
            background-repeat: no-repeat;
            background-size:100%;
        }
    </style>
</head>

<body>
    <!-- navbar starting -->
    <div id="navbar-div">

    </div>
    <script>
        $(function () {
            $("#navbar-div").load("navbar4.php");
        })
    </script>
    <!-- navbar ending -->
    <div class="main-content" >
        <div class="image-content">

            <p  style=" font-family: 'Anton', sans-serif; font-size:20px; color:rgb(13, 13, 13); text-shadow:0 0 20px rgb(234, 227, 227); ">
                "The bond of blood is stronger than anything."
            </p>
        </div>
    </div>

</body>

</html>
