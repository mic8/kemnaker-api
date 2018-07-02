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

namespace Kemnaker\Module\User\Relationship\User;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Kemnaker\Module\User\Model\User;
use Pandawa\Component\Ddd\RelationshipBehaviorTrait;

/**
 * @author Michael Reynald <michaelreynald78@gmail.com>
 */
trait BelongsToUserTrait
{
    use RelationshipBehaviorTrait;

    /**
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}