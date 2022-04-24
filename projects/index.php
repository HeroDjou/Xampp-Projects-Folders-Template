<?php
$dir = getcwd();
$arquivos = array_slice(scandir($dir), 2);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/font-awesome/css/font-awesome.min.css">
	<title>ROOT Xampp</title>
</head>
<body class="bg-light"> 
	<div class="mt-5 container">
		<div class="row">
			<div class="col-12"><h1 class="mb-3">Projetos</h1></div>
			<?php
			foreach ($arquivos as $files) {
				if (is_dir($files) && $files) {
					echo "<a class='text-dark' style='text-decoration:none !important' href='$files'>";
					echo '<div class="card m-2 shadow-sm" style="width:130px; height:110px">
					<div class="card-body">';
					echo '<h2 class="text-center"><i class="fa fa-folder-o" aria-hidden="true"></i></h2>';
					echo "<p class='text-center'>$files</p>";
					echo '</div>';
					echo '</div>';
					echo '</a>';
				}
			}
			?>
		</div>
	</div>
	<script src="../assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>