<?php
/**
 * This file is part of the Kemnaker API package.
 *
 * (c) 2018 KEMNAKER RI <http://kemnaker.go.id>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Kemnaker\Module\User\Policy;

use Kemnaker\Module\User\Model\User;

/**
 * @author Michael Reynald <michaelreynald78@gmail.com>
 */
trait GreenPassedPolicy
{
    /**
     * @param User $user
     *
     * @return bool|null
     */
    public function before(User $user): ?bool
    {
        return true;
    }
}