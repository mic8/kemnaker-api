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

namespace Kemnaker\Module\News\Specification;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Query\Builder as QueryBuilder;
use Pandawa\Component\Ddd\Specification\NameableSpecificationInterface;
use Pandawa\Component\Ddd\Specification\NameableSpecificationTrait;
use Pandawa\Component\Ddd\Specification\SpecificationInterface;

/**
 * @author Michael Reynald <michaelreynald78@gmail.com>
 */
final class FeatureNewsSpecification implements SpecificationInterface, NameableSpecificationInterface
{
    use NameableSpecificationTrait;

    /**
     * @param QueryBuilder|Builder $query
     */
    public function match($query): void
    {
        $query
            ->orderBy('created_at', 'DESC')
            ->limit(4);
    }
}