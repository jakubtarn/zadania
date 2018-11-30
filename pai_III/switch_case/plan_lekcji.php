Napisz program, ktory po wpisaniu numeru godziny lekcyjnej wyswietli wszystkie lekcje zaczynajac od wprowadzonej godziny.
1 matematyka
2 j.polski
3 chemia
4 wf
5 fizyka
6 geografia
Uzyj instrukcji switch case.
<html>
<head>
</head>
<body>
	<form method = 'POST'>
		<input type = 'number' name='nr_lekcji'>
		<input type = 'submit' value = 'Pokaz plan'>
	</form>
	<?php
		//jesli zmienna POST jest rozna(!) od pustego
		if(!empty($_POST['nr_lekcji']))
		{
			$nr_lekcji = $_POST['nr_lekcji'];
			switch($nr_lekcji)
			{
				case 1:
				echo '<p>matematyka';
				case 2:
				echo '<p>j.polski';
				case 3:
				echo '<p>chemia';
				case 4:
				echo '<p>wf';
				case 5:
				echo '<p>fizyka';
				case 6:
				echo '<p>geografia';
				break;
				default:
				echo '<p>Nie znam takeigo numeru lekcji!';
				
			}
		}
	?>
</body>

</html>
