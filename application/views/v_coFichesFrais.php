<?php
		 $this->load->helper('url');
?>
<div id="contenu">
		 <h2>Liste des fiches de frais signées par les visiteurs: </h2>

		 <?php if(!empty($notify)) echo '<p id="notify" >'.$notify.'</p>';?>

		 <table class="listeLegere">
						 <thead>
										 <tr>
														 <th>Voir fiche</th>
														 <th >Nom Prenom</th>
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


														 if ($uneFiche['id'] == 'CL') {
																						 $modLink = anchor('c_comptable/acceptFiche/'.$uneFiche['mois'], 'accepter',  'title="Accepter la fiche"');
																						 $signeLink = anchor('c_visiteur/signeFiche/'.$uneFiche['mois'], 'refuser',  'title="Refuser la fiche"  onclick="return confirm(\'Voulez-vous vraiment signer cette fiche ?\');"');
																		 }
														 echo
														 '<tr>


																		 <td class="date">'.anchor('c_comptable/voirFiche/'.$uneFiche['mois'], $uneFiche['mois'],  'title="Consulter la fiche"').'</td>
																		 <td class="libelle">'.$uneFiche['nom']." ".$uneFiche['prenom'].'</td>
																		 <td class="Montant">'.$uneFiche['montantValide'].'</td>
																		 <td class="date">'.$uneFiche['dateModif'].'</td>
																		 <td class="action">'.$modLink.'</td>
																		 <td class="action">'.$signeLink.'</td>


														 </tr>';
														 }

						 ?>
						 </tbody>
 </table>

</div>
