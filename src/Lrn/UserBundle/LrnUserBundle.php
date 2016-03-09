<?php
/**
 * Created by PhpStorm.
 * User: Cleve
 * Date: 3/9/16
 * Time: 11:33 AM
 */

namespace Lrn\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class LrnUserBundle  extends Bundle {

    public function getParent()
    {
        return 'FOSUserBundle';
    }
} 