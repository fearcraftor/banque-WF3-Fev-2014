<?php include("header.php"); 

include("donneesTest.php");

?>

<div class="container">

	<div class="page-header">
	
		<h1>Liste des clients</h1>

	</div>

	<table class="table table-bordered table-condensed table-striped">

		<thead>
			<tr>
				<th>Nom</th>
				<th>Prénom</th>
				<th>Adresse</th>
				<th>Solde</th>
				<th>Découvert Autorisé</th>
			</tr>
		</thead>

		<tbody>
		<?php
			$item1 = "nom";
			$item2 = "prenom";
			$item3 = "adresse";

			foreach ($clients as $value)
			{
				$solde = $value -> getCompte() -> getSolde();
				$autoDec = $value -> getCompte() -> getDec();
				
				echo "<tr>";
				echo "<td>".$value -> getClient($item1)."</td>";
				echo "<td>".$value -> getClient($item2)."</td>";
				echo "<td>".$value -> getClient($item3)."</td>";
				echo "<td>".number_format($solde, 2, ',', ' ')." €</td>";
				echo "<td>".number_format($autoDec, 2, ',', ' ')." €</td>";
				echo "</tr>";
			}
		?>
		</tbody>

	</table>

</div>

<?php include("footer.php");?>
