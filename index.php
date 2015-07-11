<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>TABLAS DE MULTIPLICAR</title>
	<style type="text/css">
	    h2{
	    	text-align:center;
	    }
		body {
			background-color:lightsalmon;
		}
		tr:nth-child(odd){
			background-color:lightgrey;
		}
		tr:nth-child(even){
			background-color:lightblue;
		}
	</style>
</head>
<body>
	<form id="form" action="index.php" method="post">	
		<p>
			<select name="estructura">
				<option>For</option>
				<option>While</option>
				<option>Dowhile</option>
			</select>
		</p>
		<p>
			<input type="submit" id="calcula" value="Llamar" />
			<input type="reset" id="borrar" value="Borrar"/>
		</p>
		<?php
		if(!empty($_POST)){
		$estructura=$_POST["estructura"];
		function crearTablas($estructura){
			if($estructura==="For")
			{
				echo "<br>";
				echo "<h2>TABLAS DE MULTIPLICAR CON FOR</h2>";
				echo "<br>";
				echo "<table>";
				echo "<tr>";
				for($ciclo=1;$ciclo<=10;$ciclo++)
				{
				echo "<td>";
				echo "<table border=2>";
				echo "<tr align=center><td colspan=5>Tabla de multiplicar del ".$ciclo."</td></tr>";

				for($ciclo2=1;$ciclo2<=10;$ciclo2++)
				{
				$mult=$ciclo*$ciclo2;
				echo "<tr align=center><td  colspan=5 >".$ciclo." X ".$ciclo2."= ".$mult."</td></tr>";
				}
				echo "</table>";
				echo "</td>";
				}		
				echo "</tr>";
				echo "</table>";
			}elseif($estructura==="While"){
				$ciclo1=1;
				echo "<br>";
				echo "<h2>TABLAS DE MULTIPLICAR CON WHILE</h2>";
				echo "<br>";
				echo "<table>";
				echo "<tr>";
				while($ciclo1<=10)
				{
					echo "<td>";
					echo "<table border=3><tr align=center><td colspan=5>Tabla de multiplicar del ".$ciclo1."</td></tr>";
					$ciclo2=1;
					while($ciclo2<=10)
					{
					$mult=$ciclo1*$ciclo2;
					echo "<tr align=center><td colspan=5>".$ciclo1."  X  ".$ciclo2."  =  ".$mult."</td></tr>";
					$ciclo2++;
					}
					echo "</table>";
					echo "</td>";
					$ciclo1++;
				}
				echo "</tr>";
				echo "</table>";
			}elseif($estructura==="Dowhile"){
				echo "<br>";
				echo "<h2>TABLAS DE MULTIPLICAR CON DO WHILE</h2>";
				echo "<br>";
				echo "<table>";
				echo "<tr>";
				$ciclo1=1;
				do
				{
				echo "<td>";
				echo "<table border=3><tr align=center><td colspan=5>Tabla de multiplicar del ".$ciclo1."</td></tr>";
				$ciclo2=1;
				do
				{
				$mult=$ciclo1*$ciclo2;
				echo "<tr align=center><td  colspan=5>".$ciclo1."  X  ".$ciclo2."  =  ".$mult."</td></tr>";
				$ciclo2++;
				}while($ciclo2<=10);
				echo "</table>";
				echo "</td>";
				$ciclo1++;
				}while($ciclo1<=10);
				echo "</table>";
					echo "</td>";
				}
			}
			crearTablas($estructura);
		}
		?>
	</form>
</body>
</html>