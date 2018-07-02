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

namespace Kemnaker\Module\User\Repository;

use Kemnaker\Module\User\Model\User;
use Pandawa\Component\Ddd\Repository\Repository;

/**
 * @author Michael Reynald <michaelreynald78@gmail.com>
 */
final class UserRepository extends Repository
{
    public function findByCredential(string $credential): ?User
    {
        $qb = $this->createQueryBuilder();

        $qb
            ->where('username', $credential)
            ->orWhere('email', $credential)
        ;

        return $this->executeSingle($qb);
    }
}