<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Water | Home Page </title>
    <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Righteous&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Overpass&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=DM+Serif+Display&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css"
        rel="stylesheet">
    <script src="javascript/jquery-3.4.1.min.js"></script>
</head>

<body>
    <div id="wrapper">
        <!--sidebar-->
        <div id="side-wrapper">
            <ul class="sidebar-nav">
                <li class="active"><a href="index.php">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="upload.php">Upload</a></li>
            </ul>
        </div>
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <a href="#" class="btn btn-primary" id="menu-toggle"
                            style="width: 150px;height:50px;font-family: 'Overpass', sans-serif;font-size:30px;">Menu</a>

                        <h1 class="content">Contribute Your Part</h1>
                        <hr style="width:40vw;">
                        <p class="contentp">Help to Save</p>

                    </div>

                </div>
            </div>


        </div>


    </div>

    <script>
        $("#menu-toggle").click(function (e) {
            e.preventDefault();
            $("#wrapper").toggleClass("menuDisplayed");




        });
    </script>
</body>
<!--Bootstrap cdn starts here-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<!--bootsrap cdn ends here-->

</html>