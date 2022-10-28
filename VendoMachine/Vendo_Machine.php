<?php
	$sodaArr = array('Coke' => 15, 'Sprite' => 20, 'Royal' => 20, 'Pepsi' => 15, 'Mountain Dew' => 20,);
	$sizeArr = array('Regular' => 'Regular', 'Up-size (add ₱5)' => 'Up-size', 'Jumbo (add ₱10)' => 'Jumbo');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Vendo Machine</title>
</head>
	<body>
		<center>
			<h1>Vendo Machine</h1>
			<form method="post">


				<fieldset style="width: 375px;">
					<legend><b>Product:</b></legend>
					<?php
						if (isset($sodaArr)) {
							foreach ($sodaArr as $sodakey => $sodavalue) {
								echo "<input type='checkbox' name='sodacheck[". $sodakey ."]'value'". $sodavalue ."'>
								<label>". $sodakey." - ₱". $sodavalue ."</label><br>";
							}
						}
					?>
				</fieldset>

<!-------------------------------------Option---------------------------------->

				<fieldset style="display: inline-block;">

					<legend><b>Option:</b></legend>
					<label for="sizeSelect">Size</label>
					<select name="sizeSelect" id="sizeSelect">
						<?php
							if (isset($sizeArr)) {
								foreach ($sizeArr as $sizekey => $sizevalue) {
									echo "<option value='". $sizevalue ."'>". $sizekey ."</option>";
								}
							}
						?>				
					</select>

<!-------------------------------------Option---------------------------------->
					
					<label for="numQuality">Qualitys</label>
					<input type="number" name="numQuality" id="numQuality" min="0" max="100" value="0">
					<button type="submit" name="btnsubmit"> Check Out</button>
				</fieldset>
				
			</form>

			<?php
				if (isset($_POST['$btnSubmit'])) {
					
					if (isset($_POST['$sodacheck']) && isset($_POST['$sizeSelect'])){
						
						$quality = $_POST['numQuality'];
						$size = $_POST['sizeSelect'];
						$pop = $_POST['sodacheck'];

					/*-----------------------------Singular-------------------------------*/

						if ($quality == 1) {
							$term = "piece";
						}
						else {
							$term = "pieces";
						}

					/*-----------------------------Adds-On-------------------------------*/

						if ($size == 'Regular') {
							$addOn = 0;
						}
						elseif ($addOn == 'Up-size') {
							$addOn = 5;
						}
						elseif ($addOn == 'Jumbo') {
							$addOn = 10;
						}

						echo "<h3>Purchase Summary</h3>";

						foreach ($pop as $popkey => $popvalue) {
							echo 
								"<ul>
									<li>"
										. $quality ." ". $term ." of ". $size ." ". $popkey ."amounting of ₱"
										. $totalVal = intval($popvalue) * intval($quality) + ($addOn * intval($quality)) .
									"</li>
								</ul>";

								$itemTotal = ($quality = sizeof($pop));
								$grandTotal = (array_sum($pop) + $addOn * $quality) * $quality;

								echo "<label><br>Total number of Itme: </label>" . $itemTotal ."<br>";
								echo "<label><br>Total amount: </label>". $grandTotal;
								}
							}
						else {
							echo "No selected product; Please try again.";
					}
				}
			?>
		</center>
	</body>
</html>