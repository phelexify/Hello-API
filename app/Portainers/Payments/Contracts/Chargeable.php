<?php

namespace App\Portainers\Payments\Contracts;

use App\Containers\User\Models\User;

/**
 * Interface  Chargeable
 *
 * @author   Mahmoud Zalt  <mahmoud@zalt.me>
 */
interface Chargeable
{
    public function charge(User $user, $amount, $currency);
}
