<?php
	include "parsedown.php";
	$content = file_get_contents('content/four-bodies.md');
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Codex</title>
	<link rel="stylesheet" href="css/style.css">
</head>

<body>
	<div class="container">
		<?php
			$Parsedown = new Parsedown();
			echo $Parsedown->text($content);
		?>
	</div> <!-- /.container -->
</body>

</html>