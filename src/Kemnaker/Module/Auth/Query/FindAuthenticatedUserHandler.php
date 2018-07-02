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

namespace Kemnaker\Module\Auth\Query;

use Kemnaker\Module\User\Finder\UserFinder;
use Kemnaker\Module\User\Model\User;

/**
 * @author  Iqbal Maulana <iq.bluejack@gmail.com>
 */
final class FindAuthenticatedUserHandler
{
    /**
     * @var UserFinder
     */
    private $finder;

    /**
     * Constructor.
     *
     * @param UserFinder $finder
     */
    public function __construct(UserFinder $finder)
    {
        $this->finder = $finder;
    }

    /**
     * @param FindAuthenticatedUser $query
     *
     * @return User
     */
    public function handle(FindAuthenticatedUser $query): User
    {
        return $this->finder->findOrFail($query->getAuthUser());
    }
}
