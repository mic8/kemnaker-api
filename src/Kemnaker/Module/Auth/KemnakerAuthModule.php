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

namespace Kemnaker\Module\Auth;

use Kemnaker\Module\Auth\Provider\UserProvider;
use Illuminate\Support\Facades\Auth;
use Kemnaker\Module\User\Repository\UserRepository;
use Pandawa\Component\Module\AbstractModule;

/**
 * @author  Iqbal Maulana <iq.bluejack@gmail.com>
 */
final class KemnakerAuthModule extends AbstractModule
{
    protected function build(): void
    {
        Auth::provider('kemnaker', function () {
            return new UserProvider(app()->get(UserRepository::class));
        });
    }
}
