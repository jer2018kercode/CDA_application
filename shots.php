<form action="" method="post">
<p>
    <!-- Area to type in the verse one wants to read. -->
    <input type="text" style="font-size: 18px" placeholder="Numéro de couplet" name="shots" />

    <!-- Button to click on in order to show a verse of the song. -->
    <input type="submit" style="font-size: 20px; background: tan" value="Afficher le couplet !" />
</p>
</form>

<?php
// Justifies that a number is sent to the program.
if( isset( $_POST['shots'] ) && is_numeric( $_POST['shots'] ) ) {

    // Total number of shots written by the user.
    $shots_total = htmlspecialchars( $_POST['shots'] );

    // Number of available shots right after one of them was drunk.
    $shot_drank = htmlspecialchars( $_POST['shots'] ) - 1;

    // Justifies that the number of shots written by the user must be between 3 and 99.
    if( $shots_total > 2 && $shots_total < 100 ) {
        echo $shots_total . ' shooters sans alcool sur le mur, ' .$shots_total . ' shooters sans alcool.' .'<br>'
        .'Bois en un et au suivant ! ' . $shot_drank . ' shooters sans alcool sur le mur. ';
    }
    // Justifies that the number of shots written by the user is only equal to 0.
    elseif( $shots_total == 0 ) {
        echo 'Plus de shooters sans alcool sur le mur, plus de shooters sans alcool.' .'<br>'
        .'Vas au supermarché pour en acheter, 99 shooters sans alcool sur le mur. ';
    }
    // Justifies that the number of shot written by the user is only equal to 1.
    elseif( $shots_total == 1 ) {
        echo $shots_total . ' shooter sans alcool sur le mur, ' .$shots_total . ' shooter sans alcool.' .'<br>'
        .'Bois en un et au suivant ! Plus de shooters sans alcool sur le mur. ';
    }
    // Justifies that the number of shots written by the user is only equal to 2.
    elseif( $shots_total == 2 ) {
        echo $shots_total . ' shooters sans alcool sur le mur, ' .$shots_total . ' shooters sans alcool.' .'<br>'
        .'Bois en un et au suivant ! ' . $shot_drank . ' shooter sans alcool sur le mur. ';
    }
    // Note to tell the user that his number must be between 0 and 99.
    else {
        echo '<font color="orange">Vous devez saisir une valeur comprise entre 0 et 99 pour pouvoir profiter
        de la musique.</font>';
    }
}
// Note to tell that a numeric value is needed.
elseif( !empty( $_POST ['shots'] ) ) {
    echo '<font color="red">Votre valeur n\'est pas numérique, attention ! Assurez-vous d\'inscrire un nombre
    entre 0 et 99</font>'; 
}
// Message to give the instructions to the user.
else {
    echo 'Veuillez renseigner un numéro de couplet ci-dessus !';
}
?>