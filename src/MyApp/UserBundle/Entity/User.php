<?php

namespace MyApp\UserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    public function __construct() {
        parent::__construct();
        // your own logic
    }

    /**
     * @var \BackOffice\backBundle\Entity\Cin
     *
     * @ORM\ManyToOne(targetEntity="BackOffice\backBundle\Entity\Cin")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cin", referencedColumnName="id")
     * })
     */
    private $cin=null;

    /**
     * @var \BackOffice\backBundle\Entity\Extraitnaissances
     *
     * @ORM\ManyToOne(targetEntity="BackOffice\backBundle\Entity\Extraitnaissances")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="extraitnaissance", referencedColumnName="id")
     * })
     */
    private $extraitnaissance=null;

    /**
     * @var integer
     *
     * @ORM\Column(name="numtel", type="integer", nullable=true)
     */
    private $numtel=0;

  
    /**
     * @var string
     *
     * @ORM\Column(name="poste", type="string", length=10, nullable=true)
     */
    private $poste="";

    /**
     * @var string
     *
     * @ORM\Column(name="nopass", type="string", length=50, nullable=false)
     */
    private $nopass="";

}
