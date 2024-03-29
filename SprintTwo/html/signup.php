<!doctype html>
<html lang="en" data-bs-theme="dark" id="htmlTag">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign Up</title>
    <!--CDN IMPORTS-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="../scripts/scripts.js"></script>
    <link href="../styles/styles.css" rel="stylesheet" type="text/css">
    <script src="https://kit.fontawesome.com/dacf05fad1.js" crossorigin="anonymous"></script>
    <link href="https://fonts.cdnfonts.com/css/bignoodletitling" rel="stylesheet">
</head>



<body onload="onloadGroup('navSignup')">
<nav id="navbarTarget" class="navbar navbar-expand-lg bg-body-tertiary"></nav>
<!--NAVBAR ENDS HERE, NO ELEMENTS ABOVE THIS LINE-->


<div class="container-fluid col-lg-8 col-sm-8 col-xs-8 mt-3 overall border rounded-4 border-3 border-dark ">
    <div class="row">
        <div id = "signupShared" class="container-fluid">

            <div class="container-fluid  signupContainer mt-3">
                <div id="signupShared" class="rounded-4 ">
                    <?php
                    if($_POST['name'] != "" && $_POST['cohortnumber'] != "" && $_POST['email'] != ""&& $_POST['textmsgsignup'] != "")
                    {


                        echo '<h1 class="font-weight-bold">Name:</h1>';
                        echo '<h3 class="bg-white">'.$_POST["name"]."</h3>";

                        echo '<h1 class="font-weight-bold">E-mail:</h1>';
                        echo '<h3 class="bg-white">'.$_POST["email"]."</h3>";

                        echo '<h1 class="font-weight-bold">Cohort Number:</h1>';
                        echo '<h3 class="bg-white">'.$_POST["cohortnumber"]."</h3>";

                        echo '<h1 class="font-weight-bold">Message:</h1>';
                        echo '<h3 class="bg-white">'.$_POST["textmsgsignup"]."</h3>";




                        $to = $_POST["email"];
                        $subject = "Signup Form";
                        $information = $_POST["textmsgsignup"];


                        mail($to, $subject, "Name: ".$_POST["name"]."\n Email: ".$_POST["email"]."\n Message: ".$information);
                    }
                    else
                    {
                        echo '<h1 class="font-weight-bold">Please fill out the form!</h1>';
                    }
                    ?>
                </div>
            </div>
        </div>

    </div>

</div>


<!--FOOTER STARTS HERE, NO ELEMENTS BELOW THIS LINE-->
<footer id="footerTarget" class="container-fluid text-center"></footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>