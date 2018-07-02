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

namespace Kemnaker\Module\Auth\Command;

use Illuminate\Auth\AuthenticationException;
use Illuminate\Contracts\Hashing\Hasher;
use Kemnaker\Module\Auth\Value\Signature;
use Kemnaker\Module\User\Repository\UserRepository;
use Pandawa\Module\Api\Security\Authentication\AuthenticationManager;

/**
 * @author  Iqbal Maulana <iq.bluejack@gmail.com>
 */
final class AuthenticateHandler
{
    /**
     * @var AuthenticationManager
     */
    private $authManager;

    /**
     * @var UserRepository
     */
    private $repository;

    /**
     * @var Hasher
     */
    private $hasher;

    /**
     * Constructor.
     *
     * @param AuthenticationManager $authManager
     * @param UserRepository        $repository
     * @param Hasher                $hasher
     */
    public function __construct(AuthenticationManager $authManager, UserRepository $repository, Hasher $hasher)
    {
        $this->authManager = $authManager;
        $this->repository = $repository;
        $this->hasher = $hasher;
    }

    /**
     * @param Authenticate $authenticate
     *
     * @return Signature
     * @throws AuthenticationException
     */
    public function handle(Authenticate $authenticate): Signature
    {
        if (null === $user = $this->repository->findByCredential($authenticate->getUsername())) {
            throw new AuthenticationException(
                sprintf('User with username or email "%s" not found.', $authenticate->getUsername())
            );
        }

        if (false == $this->hasher->check($authenticate->getPassword(), $user->password)) {
            throw new AuthenticationException('The given password is invalid.');
        }

        $signature = $this->authManager->sign('jwt', $user);

        return new Signature($signature->getCredentials(), 'Bearer', $signature->getAttributes());
    }
}
