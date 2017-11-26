<?php
/**
 * Created by PhpStorm.
 * User: Vita
 * Date: 10/27/17
 * Time: 22:22
 */
namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="app_users")
 * @ORM\Entity()
 */

class User extends \FOS\UserBundle\Model\User
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * One User has Many Purchases.
     * @ORM\OneToMany(targetEntity="Purchase", mappedBy="user")
     */
    private $purchases;

    public function __construct() {
        parent::__construct();
        $this->purchases = new ArrayCollection();
    }

    /**
     * @return mixed
     */
    public function getPurchases()
    {
        return $this->purchases;
    }

    /**
     * @param mixed $purchases
     * @return User
     */
    public function setPurchases($purchases)
    {
        $this->purchases = $purchases;
        return $this;
    }



}
