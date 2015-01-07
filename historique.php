<?php include("header.php"); 

include("donneesTest.php");

?>

<div class="container">

	<div class="page-header">
	
		<h1>Consulter les historiques</h1>

	</div>

	<div>

		<form method="post" action="historique.php">

			<label>Choisir client</label>
		
			<select type="text" name="client" class="form-control">
				<?php
					$item = "all";

					$item2 = "num";
				
					foreach ($clients as $value)
					{
						$solde = $value -> getCompte() -> getSolde();

						echo "<option value='".$value -> getClient($item2)."'>".$value -> getClient($item)." ".number_format($solde, 2, ',', ' ')." €</option>";
					}
				?>
		
			</select><br/>

			<button type="submit" class="btn btn-danger">Valider</button>


		</form>

	</div>

	<hr/>

	<table class="table table-bordered table-condensed table-striped">

		<thead>
			<tr>
				<th>Date</th>
				<th>Motif</th>
				<th>Crédit</th>
				<th>Débit</th>
				<th>Solde</th>
			</tr>
		</thead>

		<tbody>
		<?php
			if(isset($_POST['client']))
			{
				$getHisto = $bdd -> query ("SELECT * FROM histo WHERE compte =".$_POST['client']);

				while ($data = $getHisto->fetch_assoc())
				{
					$getMotif = $bdd -> query ("SELECT prenom, nom FROM clients WHERE id =".$data['motif']);

					$motif = $getMotif->fetch_assoc();

					echo "<tr>";
					echo "<td>".$data['date']."</td>";
					if($data['motif'] == '0')
					{
						echo "<td>Solde Initial</td>";
					}
					else
					{
						echo "<td>"."Virement à ".$motif['prenom']." ".$motif['nom']."</td>";
					}
					echo "<td>".number_format($data['credit'], 2, ',', ' ')." €</td>";
					echo "<td>".number_format($data['debit'], 2, ',', ' ')." €</td>";
					echo "<td>".number_format($data['solde'], 2, ',', ' ')." €</td>";
					echo "</tr>";
				}
			}
		?>
		</tbody>

	</table>

</div>


<?php include("footer.php");?>
