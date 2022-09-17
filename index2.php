<?php
/**declare(strict_type=1);*/

/**--------FUNCTION---------------- */
/**
 * @param string|Null $firstname
 * @param string|Null $laststname
 * 
 * @return string
 */
function createFullName( $firstname, $lastname) 
{
    return $firstname.' '.$lastname;
}

function createName(?string $firstname, ?string $lastname) 
{
    return sprintf("%s %s", $firstname, $lastname );
}
 
function addition($nb1, $nb2)
{
    return $nb1 + $nb2;
}

echo createFullName("rabozaka", "rasoa");
echo addition(1,2);
echo createFullName("zaka", "soa");

/**-------------Objet------------- */
$person = new stdclass();
$person->name="RAKOTO";

echo $person->name;

$personn = new stdclass(); /**class standard */
$personn->nom="RAKOTO";
$personn->prenom="be";
$personn->etudes[] = ["college", "Lycée", "Université"];

echo $personn->nom;
echo $personn->prenom;
var_dump($personn);

/**-----------Class------------- */
class Person
{
    public $nom, $prenom, $age;
}

$Tojo = new Person();
$Tojo->nom = "Nirina";
$Tojo->prenom = "Jacky";
$Tojo->age = 20;


echo $Tojo->nom;
echo $Tojo->prenom;
echo $Tojo->age;

/**
 * get fonction maka valeur 
 * set fonction manova valeur (mila valeur ilay anovana anazy) 
*/
class Personn
{
    public $nom = "Razaka";
    public $prenom = "Tojo";
    public $age = 20;

    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($newNom)
    {
         $this->nom = $newNom;

         return $this;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }
    public function getAge()
    {
        return $this->age;
    }

}

$tojo = new Personn();
$tojo->setNom("RaTojo");
echo $tojo->getNom().PHP_EOL;
echo $tojo->getPrenom().PHP_EOL;
echo $tojo->getAge().PHP_EOL;

/**---------- */
class ParentOfPerson
{
    private $Age= 20;
    protected $prenom= "Tooj";
    
    private function getAge()
    {
        return $this->$age;
    }
    protected function getPrenom()
    {
        return $this->$prenom;
    }
}

class Enfant extends ParentOfPerson
{
    public function getPrenomFromEnfant()
    {
        return $this->getPrenom();
    }
    public function getAgeFromEnfant()
    {
        return $this->getAge();
    }
}

/**$enfant = new Enfant();
echo $enfant->getPrenomFromEnfant();

echo $enfant->getAgeFromEnfant();*/


/**--------Calculatrice----------- */
class Calculatrice
{
    private $nb1;
    private $nb2;

    public function __construct($nb1, $nb2)
    {
        $this->nb1 = $nb1;
        $this->nb2 = $nb2;
    }
    
    public function addition()
    {
        return $this->nb2 + $this->nb1;
    }

    public function multiplication()
    {
        return $this->nb2 * $this->nb1;
    }

}

$calc = new Calculatrice(3,2);
echo $calc->addition().PHP_EOL;
echo $calc->multiplication().PHP_EOL;
?>
