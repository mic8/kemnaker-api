<?php
/**
 * This file is part of the Atnaker API package.
 *
 * (c) 2018 KEMNAKER RI <http://kemnaker.go.id>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Kemnaker\Module\Auth\Value;

use Illuminate\Contracts\Support\Arrayable;

/**
 * @author  Iqbal Maulana <iq.bluejack@gmail.com>
 */
final class Signature implements Arrayable
{
    /**
     * @var string
     */
    private $token;

    /**
     * @var string
     */
    private $type;

    /**
     * @var array
     */
    private $attributes;

    /**
     * Constructor.
     *
     * @param string $token
     * @param string $type
     * @param array  $attributes
     */
    public function __construct(string $token, string $type, array $attributes = [])
    {
        $this->token = $token;
        $this->type = $type;
        $this->attributes = $attributes;
    }

    /**
     * @return string
     */
    public function getToken(): string
    {
        return $this->token;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return array
     */
    public function getAttributes(): array
    {
        return $this->attributes;
    }

    /**
     * {@inheritdoc}
     */
    public function toArray(): array
    {
        return array_merge(
            $this->attributes,
            [
                'token' => $this->token,
                'type'  => $this->type,
            ]
        );
    }
}
