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

use Pandawa\Component\Message\AbstractQuery;
use Pandawa\Component\Message\NameableMessageInterface;
use Pandawa\Component\Support\NameableClassTrait;

/**
 * @author  Iqbal Maulana <iq.bluejack@gmail.com>
 */
final class FindAuthenticatedUser extends AbstractQuery implements NameableMessageInterface
{
    use NameableClassTrait;

    /**
     * @var string
     */
    protected $authUser;

    /**
     * @return string
     */
    public function getAuthUser(): string
    {
        return $this->authUser;
    }
}
