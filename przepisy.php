<?php
	session_start();
	if (!isset($_SESSION['zalogowany']) && !isset($_SESSION['gosc'])) {
		header('Location: index.php');
		exit();
	}
?>

<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Lomo - przepisy fotograficzne</title>
	<link rel="stylesheet" href="style_przepisy.css" type="text/css" />
</head>

<body>

<div class="banner-area">
    <div class="content-area">
		<div class="content">
			
			<div class="container1">
				<div class="box11">
					<?php
						if(isset($_SESSION['zalogowany'])){
							
							echo "<h3>Witaj ".$_SESSION['user'].'!!!</h3>';
							echo "mail: ".$_SESSION['email']."<br/>";
							echo "id: ".$_SESSION['id']."<br/>";
							echo "z nami od: ".$_SESSION['date']."<br/>"; 
						}
						if(isset($_SESSION['gosc'])) {
							echo "<br /><h3>Witaj przybyszu !</h3><br />";
							echo "<p>Mam nadzieję że znajdziesz tu kilka przepisow dla siebie </p>";
						}
					?>
				</div>
				<div class="box12">
					<h3>finis est initium</h3>
					<a href= "logout.php"><button class="btn1">Back</button></a> <br /><br />
				</div>
			</div>
			 
			<div class="container2">
				<div class="box21">
					<h3>Box three</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam nec elit urna. Suspendisse a erat a nibh imperdiet fermentum. In eleifend ultricies massa, id pretium purus convallis nec. </p>
				</div>
				<div class="box21">
					<h3>Teoria</h3>
					<p>Wywoływanie materiałów fotograficznych (błon i papierów) – proces fotograficzny, którego zasadniczym etapem jest reakcja chemiczna, w wyniku której przetwarzane są naświetlone obszary substancji światłoczułej. W ten sposób obraz utajony przekształca się w negatywowy obraz jawny.</p>
				</div>
				<div class="box22">
					<h3>Box five</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam nec elit urna. Suspendisse a erat a nibh imperdiet fermentum. In eleifend ultricies massa, id pretium purus convallis nec. </p>
				</div>
			</div>


			<div class="container3">
				<div class="box3">
					<h3>Box six</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam nec elit urna. Suspendisse a erat a nibh imperdiet fermentum. In eleifend ultricies massa, id pretium purus convallis nec. </p>
				</div>
				<div class="box3">
					<h3>Box Seven</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam nec elit urna. Suspendisse a erat a nibh imperdiet fermentum. In eleifend ultricies massa, id pretium purus convallis nec. </p>
				</div>
				<div class="box3">
					<h3>Box Eight</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam nec elit urna. Suspendisse a erat a nibh imperdiet fermentum. In eleifend ultricies massa, id pretium purus convallis nec. </p>
				</div>
				<div class="box3">
					<h3>Box Nine</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam nec elit urna. Suspendisse a erat a nibh imperdiet fermentum. In eleifend ultricies massa, id pretium purus convallis nec. </p>
				</div>
				<div class="box3">
					<h3>Box Ten</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam nec elit urna. Suspendisse a erat a nibh imperdiet fermentum. In eleifend ultricies massa, id pretium purus convallis nec. </p>
				</div>
				<div class="box3">
					<h3>Box Eleven</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam nec elit urna. Suspendisse a erat a nibh imperdiet fermentum. In eleifend ultricies massa, id pretium purus convallis nec. </p>
				</div>
				<div class="box3">
					<h3>Box Twelve</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam nec elit urna. Suspendisse a erat a nibh imperdiet fermentum. In eleifend ultricies massa, id pretium purus convallis nec. </p>
				</div>
			</div>
				           
		</div>
    </div>
</div>


	


</body>
</html>
