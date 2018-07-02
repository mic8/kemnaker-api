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

namespace Kemnaker\Module\Auth\Provider;

use Kemnaker\Auth\Exception\AuthRuntimeException;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Contracts\Auth\UserProvider as UserProviderContract;
use Kemnaker\Module\User\Model\User;
use Kemnaker\Module\User\Repository\UserRepository;
use Kemnaker\Module\User\Value\UserStatus;

/**
 * @author  Iqbal Maulana <iq.bluejack@gmail.com>
 */
final class UserProvider implements UserProviderContract
{
    /**
     * @var UserRepository
     */
    private $repository;

    /**
     * Constructor.
     *
     * @param UserRepository $repository
     */
    public function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param mixed $identifier
     *
     * @return User
     * @throws AuthenticationException
     */
    public function retrieveById($identifier)
    {
        /** @var User $user */
        if (null !== $user = $this->repository->find($identifier)) {
            if (UserStatus::BLOCKED === $user->status) {
                throw new AuthenticationException(__('This user is blocked'));
            }

            return $user;
        }

        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function retrieveByToken($identifier, $token)
    {
        throw new AuthRuntimeException('Unsupported called method "retrieveByToken"');
    }

    /**
     * {@inheritdoc}
     */
    public function updateRememberToken(Authenticatable $user, $token)
    {
        throw new AuthRuntimeException('Unsupported called method "updateRememberToken"');
    }

    /**
     * {@inheritdoc}
     */
    public function retrieveByCredentials(array $credentials)
    {
        throw new AuthRuntimeException('Unsupported called method "retrieveByCredentials"');
    }

    /**
     * {@inheritdoc}
     */
    public function validateCredentials(Authenticatable $user, array $credentials)
    {
        throw new AuthRuntimeException('Unsupported called method "validateCredentials"');
    }
}
