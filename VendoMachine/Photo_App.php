<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Photo App</title>
	</head>
	<body>
		<center>
			<?php
				$imgSize = 30;
				$colop = 000000;

				if (isset($_GET['btnProcess'])) {
					$imgSize = $_GET['rangeSize'];
					$color = $_GET['colorBorder'];
				}
			?>


			<form method="get">
				<h2>Photo App</h2>

				<label for="rangeSize">Select Photo Size</label>
				<input type="range" name="rangeSize" id="rangeSize" min="10" max="100" step="10" value="60">

				<br>
				
				<label for="colorBorder">Select Bordar Color:</label>
				<input type="color" name="colorBorder" id="colorBorder">

				<br>

				<button type="submit" name="btnProcess">Process</button>
			</form>

			<br><br>

			<img src="green.jpg" alt="nature.jpg" width="<?php echo $imgSize; ?>%" border="5%" style="color:<?php echo "$color"; ?>">
		</center>
	</body>
</html>