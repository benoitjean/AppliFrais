<?php
	$this->load->helper('url');
?>
<div id="contenu">
	<h2>Liste des fiches de frais validées</h2>

	<?php if(!empty($notify)) echo '<p id="notify" >'.$notify.'</p>';?>

	<table class="listeLegere">
		<thead>
			<tr>
				<th >Auteur</th>
				<th >Montant</th>
				<th >Date valid.</th>
				<th  colspan="4">Actions</th>
			</tr>
		</thead>
		<tbody>

		<?php
			foreach( $mesFiches as $uneFiche)
			{
				$modLink = '';
				$signeLink = '';

				
				echo
				'<tr>
					<td class="Auteur">'.$uneFiche['nom'].'</td>
					<td class="Auteur">'.$uneFiche['prenom'].'</td>

					<td class="montant">'.$uneFiche['montantValide'].'</td>
					<td class="date">'.$uneFiche['dateValid'].'</td>
					<td class="action">'.$modLink.'</td>
					<td class="action">'.$signeLink.'</td>



				</tr>';
			}
		?>
		</tbody>
    </table>

</div>
