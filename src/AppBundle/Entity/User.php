<?php
/**
 * Created by PhpStorm.
 * User: Vita
 * Date: 10/27/17
 * Time: 22:22
 */
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

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


}
