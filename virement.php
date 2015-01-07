<?php include("header.php"); 

include("donneesTest.php");

?>

<div class="container">

	<div class="page-header">
	
		<h1>Effectuer un virement</h1>

	</div>

	<form method="post" action="virements.php" name="virement">
	
		<div class="row">

			<div class="col-lg-4 col-sm-4 col-xs-4">

				<label>Emetteur</label>
				
				<select type="text" name="emetteur" class="form-control">
					<?php
						$item = "all";

						$item2 = "num";
						
						foreach ($clients as $value)
						{
							$solde = $value -> getCompte() -> getSolde();

							echo "<option value='".$value -> getClient($item2)."'>".$value -> getClient($item)." ".number_format($solde, 2, ',', ' ')." €</option>";
						}
					?>
				
				</select>

			</div>
			
			<div class="col-lg-4 col-md-4 col-xs-4">

				<label>Destinataire</label>
				
				<select type="text" name="destinataire" class="form-control">
					<?php
						$item = "all";

						$item2 = "num";

						foreach ($clients as $value)
						{
							$solde = $value -> getCompte() -> getSolde();

							echo "<option value='".$value -> getClient($item2)."'>".$value -> getClient($item)." ".number_format($solde, 2, ',', ' ')." €</option>";
						}
					?>
				</select>

			</div>
			
			<div class="col-lg-4 col-md-4 col-xs-4">

				<label>Montant</label>
				
				<div class="input-group">
					
					<input name="somme" type="text" class="form-control" aria-label=" ">
					<span class="input-group-addon" id="sizing-addon2">€</span>

				</div>

			</div>


		</div>
			<br/>
		<div class="row">

			<div class="col-lg-4 col-md-4 col-xs-4">
				<button type="submit" class="btn btn-danger">Valider virement</button>
			</div>

		</div>

	</form>
<?php

	if(isset($_POST['somme']) and ($_POST['emetteur']) and ($_POST['destinataire']))
	{
		effectuerVirement($_POST['somme'], $_POST['emetteur'], $_POST['destinataire'], $clients);
	}

?>

</div>


<?php include("footer.php");?>
