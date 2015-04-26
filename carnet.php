<?php
$title = 'Carnet de bord'; // For header
include('includes/header.php');
?>
					<h1>Carnet de bord</h1>

					<h2>Début du projet :</h2>
					<p>
						En décembre, Yann travaillait déja sur le projet avant que j'arrive, ainsi la fenêtre PyGame et une partie de l'interface était déjà faite.
						C'est-à-dire que que l'on pouvait déja dessiner et gommer.
						Nous avons commencé à nous organiser, il m'a donné ce qui a été fait pour que je puisse le lire pendant les vacances de noël. Et Yann a ajouter la séléction des couleurs.

					</p>

					<h2>Avancement :</h2>
					<p>
						En janvier les premières difficultés sont apparus car nous vions quelques difficultés avec les couleurs car donné dans le mauvais format par pygtk.
						Nous avons du passé par une transformation en RGB pour pouvoir le transmettre avec pickle.
						Nous nous sommes aussi répartis les tâches, Yann s'est occupé de l'import d'image, la rotation des images et la possibilté de changé la taille de la fenêtre et moi je me suis occupé du retour en arrière ainsi que de la sauvegarde de l'image.
						<br><br>
						Ainsi la possibilité d'import, de sauvegarde de l'image était fini.
						Nous avons réussi aussi à pouvoir faire changé la taille de la fenêtre de dessein malgré quelques difficulés /* à préciser */.
						Et aprés plusieurs bug, le fonction retour en arrière était opérationnelle.
					</p>

					<h2>Finalisation :</h2>
					<p>
						En Mars toute nos fonctionalités sont finis et opérationnelle. En avril nous entammons le refactoring ainsi que l'ajout et l'amélioration de commentaire dans le projet.
					</p>

<?php
include('includes/footer.php');
?>
