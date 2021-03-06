<?php
declare(strict_types=1);

namespace Kemnaker\Api;

use Pandawa\Component\Module\AbstractModule;
use Pandawa\Component\Module\Provider\RouteProviderTrait;

/**
 * @author  Iqbal Maulana <iq.bluejack@gmail.com>
 */
final class KemnakerApiModule extends AbstractModule
{
    use RouteProviderTrait;

    protected function routes(): array
    {
        return [
            [
                'type'       => 'group',
                'middleware' => 'api',
                'prefix'     => 'v{version}',
                'children'   => $this->getCurrentPath() . '/Resources/routes/routes.yaml',
            ],
        ];
    }
}
