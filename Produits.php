<?php
// // application/controllers/Produits.php

// defined('BASEPATH') OR exit('No direct script access allowed');

// class Produits extends CI_Controller 
// {

//     public function liste()
//     {
//         $this->load->view('liste');
//         echo 'Produit test';
//     }
// }
?>
<?php
// // application/controllers/Produits.php

defined('BASEPATH') OR exit('No direct script access allowed');

class Produits extends CI_Controller 
{
public function liste()
    {
        // Déclaration du tableau associatif à tranmettre à la vue
        $aView = array();

        // Dans le tableau, on créé une donnée 'prénom' qui a pour valeur 'Dave'    
        $aView["prenom"] = "Dave";
        
        // Dans le tableau, on créé une donnée 'nom' qui a pour valeur 'Loper'    

        $aView["nom"] = "Loper";
        
        $this->load->view('liste', $aView);
        // On passe le tableau en second argument de la méthode 

        //"Athos", "Clatronic", "Camping", "Green"]
        // Déclaration du tableau associatif à tranmettre à la vue
        $aProduits = array("Athos", "Clatronic", "Camping", "Green");

        // Dans le tableau, on créé une donnée 'prénom' qui a pour valeur 'Dave' 
        $aProduits["nomp"] = $aProduits;

        $this->load->view('liste',$aProduits);
    }
}
?>