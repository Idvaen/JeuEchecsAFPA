<?php
// Objectifs :
// Assimiler les notions objet incontournables : la classe et l’héritage.
// Déroulement :
// Vous allez dans ce TP reprendre les premières notions abordées dans le support :
// « Réutilisez et spécialisez les classes : L’héritage ».
// Pour cela, vous construirez une hiérarchie de classes, implémenterez les concepts d’héritage,
// d’implémentation et de composition.
// Il est demandé de créer un projet PHP nommé JeuEchecs avec l’IDE de votre choix, VSC, Eclipse,
// NetBeans, …
// Vous rangerez les classes métier dans le package classes et le script principal index.php à la
// racine du projet.
// Remarques : Revoyez éventuellement comment créer un projet avec votre IDE.
// Au cours de ce TP, vous mettrez en évidence :
// La notion de classe usuelle.
// La notion de méthode.
// La notion d’héritage.
// La notion de classe abstraite.

// Etapes chronologiques à réaliser
// A. Classe PieceEchecs
// Définissez une classe PieceEchecs avec :
// - 2 données membres int privées définissant les coordonnées (de 1 à 8) de la case sur laquelle la
// pièce se trouve. (Le type int ne vous est donné qu’à titre d’information, PHP ne permet pas de
// typer les variables).
// - 1 donnée membre int privée définissant la couleur de la pièce avec la convention : 1 = blanche; 2 =
// noire
// - 1 constructeur permettant l’initialisation des données membres.
// - 1 méthode getCouleur() qui retourne un int valant 1 ou 2 suivant que la pièce est blanche ou noire.
// - 1 méthode getCouleurCase() qui retourne un int valant 1 ou 2 suivant que la case sur laquelle se
// trouve la pièce est blanche ou noire.
// Précision : Si les coordonnées ou la couleur sont incorrectes, forcez les valeurs au plus près pour
// créer une pièce valide.
// Testez avec une application principale echecs.php.
// B. Classes Cavalier et Fou
// Définissez 2 classes Cavalier et Fou héritant de PieceEchecs.
// Chacune de ces classes implémentera :
// - Un constructeur faisant simplement appel au constructeur de la superclasse.
// Inutile en PHP, car sans constructeur explicite, PHP appelle le constructeur parent.
// - Une méthode peutAllerA($x, $y) qui renvoie une valeur booléenne indiquant si la pièce en question
// peut aller en case ($x, $y), compte tenu de sa position actuelle.Mai 2019 Exercices PHP – Réutiliser et spécialiser 6/16
// Testez avec une application.
// Aller plus loin :
// Créez des setters dans la classe PieceEchecs pour permettre la modification des données membres.
// (Les setters doivent garantir les contraintes de valeurs pour les coordonnées et la couleur.)
// Créez la méthode estDansLEchiquier($x, $y) qui retourne vrai si la position passée en paramètre fait
// partie de l’échiquier.
// C. Tableau de PieceEchecs
// Depuis une application PHP, créez un tableau de pièces d’échecs. Chaque pièce sera soit un Fou soit
// un Cavalier.
// L’application déterminera pour chaque pièce si elle peut ou non aller à la case (5,5).
// D. Méthode peutAllerA()
// Pratique la manipulation des pièces dans un tableau, à condition que tous les objets placés dans le
// tableau possède la méthode peutAllerA() !
// Mettez en place une solution pour éviter que l’on oublie cette méthode dans les futurs
// développements.
// E. Classe Roi
// Créez une classe Roi dérivant aussi de PieceEchecs, avec les mêmes membres que Fou et Cavalier.
// Testez avec une application
// F. Classe Pion
// Créez une classe Pion dérivant aussi de PieceEchecs, avec les mêmes membres.
// Testez avec une application
// G. Méthode peutManger(PieceEchecs $piece)
// Maintenant, on veut aussi pouvoir dire si une pièce donnée peut « manger » une autre pièce.
// Ecrivez des méthodes peutManger(PieceEchecs $piece) qui renvoient une valeur booléenne
// indiquant si la pièce en question peut manger la pièce $piece, compte tenu des positions
// respectives des pièces et de leurs couleurs.
// Testez avec une application


spl_autoload_register(function ($class) {
    require_once "classes/$class.class.php";
});

const RC = "<br>\n";

try {
    $c1 = new Cavalier(3,3,PieceEchecs::NOIRE);
    $f1 = new Fou(5, 3, PieceEchecs::BLANCHE);
    $c2 = new Cavalier(2,8,PieceEchecs::BLANCHE);
    $f2 = new Fou(4, 5, PieceEchecs::NOIRE);
    $p1 = new Pion(4,2, PieceEchecs::BLANCHE);
    $p2 = new Pion(7,7, PieceEchecs::NOIRE);

} catch (PieceEchecsException $e) {
    echo $e->getMessage();
}



function tableauxEchecs()
{

}

?>




<!DOCTYPE html>
<html>

<head>
    <title>Jeu de l'Echecs</title>
    <meta charset="UTF-8">
    <style>
        .chess-board {
            border-spacing: 0;
            border-collapse: collapse;
        }

        .chess-board th {
            padding: .5em;
        }

        .chess-board td {
            border: 1px solid;
            width: 2em;
            height: 2em;
        }

        .chess-board .light {
            background: #eee;
            color: black;
        }

        .chess-board .dark {
            background: #000;
            color: white;
        }
    </style>
</head>

<body>
    <h1>Jeu de l'echecs</h1>
    <form action="<?php $_SERVER["PHP_SELF"] ?>" method="post">
        <label for="x">X</label>
        <input type="number" name="x" id="x" style="width: 50px;" value="0">
        <label for="y">Y</label>
        <input type="number" name="y" id="y" style="width: 50px;" value="0">
        <input type="submit" value="Envoyer">
        <br>
        <br>

    </form>
    <table class="chess-board">
        <tbody>
            <tr>
                <th>8y</th>
                <td class="light"></td>
                <td class="dark">CB</td>
                <td class="light"></td>
                <td class="dark"></td>
                <td class="light"></td>
                <td class="dark"></td>
                <td class="light"></td>
                <td class="dark"></td>
            </tr>
            <tr>
                <th>7y</th>
                <td class="dark"></td>
                <td class="light"></td>
                <td class="dark"></td>
                <td class="light"></td>
                <td class="dark"></td>
                <td class="light"></td>
                <td class="dark">PB</td>
                <td class="light"></td>
            </tr>
            <tr>
                <th>6y</th>
                <td class="light"></td>
                <td class="dark"></td>
                <td class="light"></td>
                <td class="dark"></td>
                <td class="light"></td>
                <td class="dark"></td>
                <td class="light"></td>
                <td class="dark"></td>
            </tr>
            <tr>
                <th>5y</th>
                <td class="dark"></td>
                <td class="light"></td>
                <td class="dark"></td>
                <td class="light">FB</td>
                <td class="dark"></td>
                <td class="light"></td>
                <td class="dark"></td>
                <td class="light"></td>
            </tr>
            <tr>
                <th>4y</th>
                <td class="light"></td>
                <td class="dark"></td>
                <td class="light"></td>
                <td class="dark"></td>
                <td class="light"></td>
                <td class="dark"></td>
                <td class="light"></td>
                <td class="dark"></td>
            </tr>
            <tr>
                <th>3y</th>
                <td class="dark"></td>
                <td class="light"></td>
                <td class="dark">CW</td>
                <td class="light"></td>
                <td class="dark">FW</td>
                <td class="light"></td>
                <td class="dark"></td>
                <td class="light"></td>
            </tr>
            <tr>
                <th>2y</th>
                <td class="light"></td>
                <td class="dark"></td>
                <td class="light"></td>
                <td class="dark">PW</td>
                <td class="light"></td>
                <td class="dark"></td>
                <td class="light"></td>
                <td class="dark"></td>
            </tr>
            <tr>
                <th>1y</th>
                <td class="dark"></td>
                <td class="light"></td>
                <td class="dark"></td>
                <td class="light"></td>
                <td class="dark"></td>
                <td class="light"></td>
                <td class="dark"></td>
                <td class="light"></td>
            </tr>
            <tr>
                <th></th>
                <th>1x</th>
                <th>2x</th>
                <th>3x</th>
                <th>4x</th>
                <th>5x</th>
                <th>6x</th>
                <th>7x</th>
                <th>8x</th>
            </tr>
        </tbody>
    </table>

    <?php

    if (isset($_POST['x']) && isset($_POST['y'])) {
        $x = $_POST['x'];
        $y = $_POST['y'];
        echo "Cavalier white peut aller: "; var_dump($c1->peutAller($x, $y)); echo RC;
        echo "Fou white peut aller: "; var_dump($f1->peutAller($x, $y)); echo RC;
        echo "Cavalier black peut aller: "; var_dump($c2->peutAller($x, $y)); echo RC;
        echo "Fou black peut aller: "; var_dump($f2->peutAller($x, $y)); echo RC;
        echo "Pion white peut aller: "; var_dump($p1->peutAller($x, $y)); echo RC;
        echo "Pion black peut aller: "; var_dump($p2->peutAller($x, $y)); echo RC;
    }

    ?>
</body>

</html>