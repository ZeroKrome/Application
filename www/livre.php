<?php
require_once "livre.class.php";
$l1 = new Livre(1, "Apprendre le CSS", "apprendre-css.png", 200);
$l2 = new Livre(2, "Apprendre Docker", "apprendre-docker.png", 400);
$l3 = new Livre(3, "Apprendre le Java", "apprendre-java.png", 600);
$l4 = new Livre(4, "Apprendre le JavScript", "apprendre-JS.png", 300);
$l5 = new Livre(5, "Apprendre le PHP", "apprendre-php.png", 1000);
$l6 = new Livre(3, "Apprendre le Wordpress", "apprendre-wordpress.png", 10);

// $livres = [$l1, $l2, $l3, $l4, $l5, $l6];
require_once "Livre.Manager.class.php";
$livreManager = new LivreManager;
$livreManager->AjouterLivre($l1);
$livreManager->AjouterLivre($l2);
$livreManager->AjouterLivre($l3);

?>
<?php ob_start() ?>

<table class="table table-hover table-info">
    <tr>
        <th>Image</th>
        <th>Titre</th>
        <th>Nombre de pages</th>
        <th colspan="2">Actions</th>
    </tr>
    <?php
    foreach ($livres as $livre) : ?>
        <tr class="table-secondary">
            <td class="allign-middle"><img src="public/images/<?php echo $livre->getImage(); ?>" height="150px"></td>
            <td class="allign-middle"><?php echo $livre->getTitre(); ?></td>
            <td class="allign-middle"><?php echo $livre->getNbDePages(); ?></td>
            <td class="allign-middle"><a href="#" class="btn btn-warning">Modifier</a></td>
            <td class="allign-middle"><a href="#" class="btn btn-danger">Supprimer</a></td>
        </tr>
    <?php endforeach; ?>
</table>
<a href="#" class="btn btn-success d-block">Ajouter</a>


<?php
$titre = "Ceci sont mes livre Hi Hi Hi";
$content = ob_get_clean();
require_once "template.php";
