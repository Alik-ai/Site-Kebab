<?php


    //ajouter
    session_start();  //on crée un cookies en 1 on lui demande ce qu'on veut par exemple le nom(pseudo)
                      //Ensuite un exemple
                      //et le time est le temps qu'o,n veut garde le cookies 30jours * 24h * le nombre de seconde car ca se calcule avec des secondes (ici dans l'exemple y va durer un mois)
    setcookie('pseudo', 'Lika', time() + (30 * 24 * 3600));
    //recuper un cookies specifique
    setcookie('id', 18, time() + 60);
    if(isset($_COOKIE['pseudo'])){
        echo "l'élément existe bien ". $_COOKIE['pseudo'];
    }
    else {
        "l'element n'existe pas";
    }
    //supprimer
//  setcookie('pseudo' , '', time());

    
    echo "id : " . $_COOKIE["id"]
?>