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

namespace Kemnaker\Module\User\Model;

use Illuminate\Auth\Authenticatable;
use Kemnaker\Module\User\Value\UserStatus;
use Pandawa\Component\Ddd\AbstractModel;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Pandawa\Module\Api\Security\Contract\SignableUserInterface;

/**
 * @author Michael Reynald <michaelreynald78@gmail.com>
 */
class User extends AbstractModel implements AuthenticatableContract, SignableUserInterface
{
    use Authenticatable;

    /**
     * @var array
     */
    protected $attributes = [
        'status' => UserStatus::ACTIVE,
    ];

    /**
     * @var array
     */
    protected $casts = [
        'status' => UserStatus::class,
    ];

    /**
     * @var array
     */
    protected $hidden = [
        'password',
    ];

    /**
     * Encrypt the given password.
     *
     * @param string $value
     */
    public function setPasswordAttribute(string $value): void
    {
        $this->attributes['password'] = bcrypt($value);
    }

    /**
     * {@inheritdoc}
     */
    public function getSignPayload(): array
    {
        return [
            'sub'      => $this->id,
            'username' => $this->username,
        ];
    }
}