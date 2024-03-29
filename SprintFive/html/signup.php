<?php

$isAdminVar = $_SESSION['isAdmin'];

?>

<!doctype html>
<html data-bs-theme="dark" id="htmlTag" lang="en">
<head><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sign Up</title>
	<!--CDN IMPORTS--><script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" rel="stylesheet" /><script src="../scripts/scripts.js"></script>
	<link href="../styles/styles.css" rel="stylesheet" type="text/css" /><script src="https://kit.fontawesome.com/dacf05fad1.js" crossorigin="anonymous"></script>
	<link href="../styles/styles.css" rel="stylesheet" type="text/css" />
	<link href="https://fonts.cdnfonts.com/css/bignoodletitling" rel="stylesheet" />
</head>
<?php
if ($isAdminVar == 1) {
    echo " <body onload = \"AfterLoginonloadGroup('SignupPage', 1)\">";
} else {
    echo " <body onload = \"AfterLoginonloadGroup('SignupPage', 0)\"> ";
}
?>
<nav id="navbarTarget"></nav>
<!--NAVBAR ENDS HERE, NO ELEMENTS ABOVE THIS LINE-->

<div class="signupheading">
	<h3 class="text-center pt-3">SIGN UP</h3>
</div>

<div class="container-fluid col-8 overall border rounded-4 border-3 border-dark ">
	<div class="row">
		<div class="container-fluid" id="signupShared">
			<div class="requiredwarning ">
				<p class="required"></p>

				<p class="requiredwarning2">Required Information</p>
			</div>



			<form action="signupReciept.php" id="form" method="post" name="signup">
				<section class="mb-4"><label class="required" for="uName" id="userName">Username</label><br />
					<input class="form-control input-default " id="uName" name="uName" placeholder="" required="" type="text" />
					<div class="error"></div>
				</section>

				<section class="mb-4"><label class="required" for="pWord" id="passWord">Password</label><br />
					<input class="form-control input-default " id="pWord" name="pWord" placeholder="" required="" type="text" />
					<div class="error"></div>
				</section>

				<section class="mb-4"><label class="required" for="name" id="namesignup">Name</label><br />
					<input class="form-control input-default " id="name" name="name" placeholder="" required="" type="text" />
					<div class="error"></div>
				</section>

				<section class="input-control mb-4" id="orderEmail"><label class="userinfo required" for="email">Email</label><br />
					<input class="form-control" id="email" name="email" placeholder="example@greenriver.edu" required="" type="email" />
					<div class="error"></div>
				</section>

				<section class="mb-4"><label class="required" for="cohortnumber" id="cnumbersignup">Cohort Number</label><br />
					<input class="form-control input-default" id="cohortnumber" name="cohortnumber" placeholder="0-100" required="" type="number" />
					<div class="error"></div>
				</section>
				<label class="required">Current Status</label>

				<section class="mb-4">
					<section><input id="flexCheckDefault1" name="status" type="checkbox" value="Seeking Internship" /> <label class="form-check-label" for="flexCheckDefault1"> Seeking Internship </label></section>

					<section><input id="flexCheckDefault2" name="status" type="checkbox" value="Seeking Job" /> <label class="form-check-label" for="flexCheckDefault2"> Seeking Job </label></section>

					<section><input class="form-check-input" id="flexCheckDefault3" name="status" type="checkbox" value="Not Actively Searching" /> <label class="form-check-label" for="flexCheckDefault3"> Not Actively Searching </label></section>
				</section>

				<section class="mb-4"><label class="form-label" for="textmsgsignup">Type of roles</label><br />
					<textarea class="rounded-3 form-control" id="textmsgsignup" name="textmsgsignup" required="" rows="3"></textarea>
				</section>

		</div>
	</div>
</div>

<section class="text-center"><button class="mt-3 dashButtonLinks" type="submit">Submit</button></section>
</form>
<!-- </div> --><!--<div class="container-fluid text-center fixed-bottom mt-3">--><!--<div class="row " style="border: 10px black">--><!--<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">--><!--            <h3>Resources</h3>--><!--            <a href="https://www.facebook.com/GreenRiverCollege" class="fa fa-facebook"></a>--><!--            <a href="https://www.linkedin.com/school/green-river-community-college/" class="fa fa-linkedin"></a>--><!--            <a href="https://slack.com/community" class="fa fa-slack"></a>--><!--           <a href="https://github.com/greenrivercollege" class="fa fa-git"></a>--><!--           <a href="https://www.devs.greenrivertech.net" class="fa fa-external-link-square"></a>--><!--        </div>--><!--        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">--><!--          <h3>School of Technology</h3>--><!--            <p>Affordable tuition, instructors who care, access to tech industry mentors, and project-based learning--><!--                   make our applied bachelor’s program a popular destination for computing majors throughout the--><!--                   Seattle-Tacoma region.\n"--><!--                </p>--><!--        </div>--><!--    </div>--><!--</div>--><!--FOOTER STARTS HERE, NO ELEMENTS BELOW THIS LINE-->

<footer class="container-fluid text-center" id="footerTarget"></footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script></body>
</html>