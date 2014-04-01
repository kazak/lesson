<?php
/**
 * Created by JetBrains PhpStorm.
 * User: dima
 * Date: 01.04.14
 * Time: 17:04
 * To change this template use File | Settings | File Templates.
 */

namespace Lesson\UserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;

/**
 * User
 */
class User extends BaseUser
{

    public function __construct()
    {
        parent::__construct();
    }
}