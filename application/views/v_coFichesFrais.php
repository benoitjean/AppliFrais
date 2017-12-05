<?php
	$this->load->helper('url');
?>
<div id="contenu">
	<h2>Liste des fiches de frais validées C'EST v_co</h2>

	<?php if(!empty($notify)) echo '<p id="notify" >'.$notify.'</p>';?>

	<table class="listeLegere">
		<thead>
			<tr>
				<th>Voir fiche</th>
				<th >Nom Prenom</th>
				<th >Montant</th>
				<th >Date valid.</th>
			</tr>
		</thead>
		<tbody>

		<?php
			foreach( $mesFiches as $uneFiche)
			{
				$modLink = '';
				$signeLink = '';


				if ($uneFiche['id'] == 'CL') {
				echo
				'<tr>


					<td class="date">'.anchor('c_comptable/voirFiche/'.$uneFiche['mois'], $uneFiche['mois'],  'title="Consulter la fiche"').'</td>
					<td class="libelle">'.$uneFiche['nom'].'</td>
					<td class="Montant">'.$uneFiche['montantValide'].'</td>

					<td class="date">'.$uneFiche['dateModif'].'</td>



				</tr>';
				}
			}
		?>
		</tbody>
    </table>

</div>
