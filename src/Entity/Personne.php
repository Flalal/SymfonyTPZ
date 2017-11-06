<?php

/**
 * Created by PhpStorm.
 * User: florian.flahaut
 * Date: 06/11/17
 * Time: 15:50
 */

namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;

class Personne
{
    /**
     * @var string
     * @ORM\Column(type="string", length=50)
     */
    public $nom;
    /**
     * @var string
     * @ORM\Column(type="string", length=50)
     */
    public $prenom;
    /**
     * @var string
     * @ORM\Column(type="string", length=50)
     */
    public $email;
    /**
     * @var string
     * @ORM\Column(type="string", length=50)
     */
    public $github;
    /**
     * @var string
     * @ORM\Column(type="string", length=50)
     */
    public $discord;

    /**
     * Personne constructor.
     * @param string $nom
     * @param string $prenom
     * @param string $email
     * @param string $github
     * @param string $discord
     */


    public function __construct($nom, $prenom, $email, $github, $discord)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->github = $github;
        $this->discord = $discord;
    }


    function __toString()
    {
        echo "tete";
        // TODO: Implement __toString() method.
    }


}