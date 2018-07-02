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

namespace Shared\Value;

use MabeEnum\Enum;
use Pandawa\Component\Serializer\DeserializableInterface;
use Pandawa\Component\Serializer\SerializableInterface;

/**
 * @author  Iqbal Maulana <iq.bluejack@gmail.com>
 */
abstract class AbstractEnum extends Enum implements SerializableInterface, DeserializableInterface
{
    /**
     * {@inheritdoc}
     */
    public static function deserialize($data)
    {
        return static::get($data);
    }

    /**
     * {@inheritdoc}
     */
    public function serialize()
    {
        return $this->getValue();
    }
}
