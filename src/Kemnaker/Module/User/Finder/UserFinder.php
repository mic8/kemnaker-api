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

namespace Kemnaker\Module\User\Finder;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Kemnaker\Module\User\Model\User;
use Kemnaker\Module\User\Repository\UserRepository;

/**
 * @author Michael Reynald <michaelreynald78@gmail.com>
 */
final class UserFinder
{
    /**
     * @var UserRepository
     */
    private $repository;

    /**
     * UserFinder constructor.
     * @param UserRepository $repository
     */
    public function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param string $id
     * @return User
     */
    public function findOrFail(string $id): User
    {
        if (null !== $user = $this->repository->find($id)) {
            return $user;
        }

        throw (new ModelNotFoundException())->setModel(User::class, [$id]);
    }
}