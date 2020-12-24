<!DOCTYPE html>
<html>
        <head>
                <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
                <title>Student Portal</title>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				$("#importStudentsLink").click(function(){
					$("#importStudentsFrm").show();
					return false;
				});
			});
		</script>
		<link type="text/css" rel="stylesheet" href="<?=BASE_URL;?>assets/css/styles.css">
	</head>
	<body>
		<header>
                        <p>Contact Us | About Us | Home</p>
                </header>

