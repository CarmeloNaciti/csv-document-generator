<?php

namespace UserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @const
     */
    const ROLE_ADMIN = 'ROLE_ADMIN';

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @return array
     */
    public static function getRoleOptions(): array
    {
        return $getRoleOptions = [
            self::ROLE_ADMIN => self::ROLE_ADMIN,
            self::ROLE_DEFAULT => self::ROLE_DEFAULT,
        ];
    }
}