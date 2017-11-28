<?php
	$this->load->helper('url');
?>
<div id="contenu">
	<h2>Liste de mes fiches de frais</h2>

	<?php if(!empty($notify)) echo '<p id="notify" >'.$notify.'</p>';?>

	<table class="listeLegere">
		<thead>
			<tr>
				<th >Mois</th>
				<th >Etat</th>
				<th >Montant</th>
				<th >Date modif.</th>
				<th  colspan="4">Actions</th>
			</tr>
		</thead>
		<tbody>

		<?php
		if ($uneFiche['id'] == 'CR') {
			foreach( $mesFiches as $uneFiche)
			{

				echo
				'<tr>
					<td class="date">'.anchor('c_visiteur/voirFiche/'.$uneFiche['mois'], $uneFiche['mois'],  'title="Consulter la fiche"').'</td>
					<td class="libelle">'.$uneFiche['libelle'].'</td>
					<td class="montant">'.$uneFiche['montantValide'].'</td>
					<td class="date">'.$uneFiche['dateModif'].'</td>
					<td class="action">'.$modLink.'</td>
					<td class="action">'.$signeLink.'</td>
				</tr>';
			}
		?>
		</tbody>
    </table>

</div>
