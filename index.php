<form action="" method="post">
<p>
    <!-- Champ pour renseigner le numéro du couplet souhaité. -->
    <input type="text" placeholder="Numéro de couplet" name="shooters" />

    <!-- Bouton à cliquer pour afficher un couplet de la chanson. -->
    <input type="submit" value="Afficher le couplet !" />
</p>
</form>

<?php
// Condition pour qu'un nombre soit inscrit.
if( isset( $_POST['shooters'] ) && is_numeric( $_POST['shooters']) ) {
    // Nombre total de shooters en entrée.
    $shooters_total = htmlspecialchars( $_POST['shooters'] );

    // Nombre de shooters disponibles juste après qu'un d'entre eux ait été consommé.
    $shooter_drank = htmlspecialchars( $_POST['shooters'] ) - 1;

    // Condition pour que le nombre de shooters inscrits soit entre 3 et 99.
    if( $shooters_total > 2 && $shooters_total < 100 ) {
        echo $shooters_total . ' shooters sans alcool sur le mur, ' .$shooters_total . ' shooters sans alcool.' .'<br>'
        .'Bois en un et au suivant ! ' . $shooter_drank . ' shooters sans alcool sur le mur. ';
    }
    // Condition pour que le nombre de shooter inscrit soit strictement égal à 0.
    elseif( $shooters_total == 0 ) {
        echo 'Plus de shooters sans alcool sur le mur, plus de shooters sans alcool.' .'<br>'
        .'Vas au supermarché pour en acheter, 99 shooters sans alcool sur le mur. ';
    }
    // Condition pour que le nombre de shooter inscrit soit strictement égal à 1.
    elseif( $shooters_total == 1 ) {
        echo $shooters_total . ' shooter sans alcool sur le mur, ' .$shooters_total . ' shooter sans alcool.' .'<br>'
        .'Bois en un et au suivant ! Plus de shooters sans alcool sur le mur. ';
    }
    // Condition pour que le nombre de shooter inscrit soit strictement égal à 2.
    elseif( $shooters_total == 2 ) {
        echo $shooters_total . ' shooters sans alcool sur le mur, ' .$shooters_total . ' shooters sans alcool.' .'<br>'
        .'Bois en un et au suivant ! ' . $shooter_drank . ' shooter sans alcool sur le mur. ';
    }
    // Message pour dire à l'utilisateur que son nombre doit impérativement être compris entre 0 et 99.
    else {
        echo '<font color="orange">Vous devez saisir une valeur comprise entre 0 et 99 pour pouvoir profiter
        de la musique.</font>';
    }
}
// Message pour indiquer à l'utilisateur de renseinger une valeur uniquement numérique.
elseif( !empty( $_POST ['shooters'] ) ) {
    echo '<font color="red">Votre valeur n\'est pas numérique, attention ! Assurez-vous d\'inscrire un nombre
    entre 0 et 99</font>'; 
}
else {
    echo 'Veuillez renseigner un numéro de couplet ci-dessus !';
}
?>