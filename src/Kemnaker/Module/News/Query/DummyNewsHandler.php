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

namespace Kemnaker\Module\News\Query;

use Carbon\Carbon;
use Illuminate\Support\Collection;
use Kemnaker\Module\News\Model\News;
use Ramsey\Uuid\Uuid;

/**
 * @author Michael Reynald <michaelreynald78@gmail.com>
 */
final class DummyNewsHandler
{
    private $dummies;

    public function __construct()
    {
        $this->dummies = [
            new News([
                'id' => (string) Uuid::uuid4(),
                'title' => 'Indonesia Perjuangkan Jaminan Hak-Hak Pelaut Korban Bajak Laut',
                'content' => 'JENEWA-Indonesia secara tegas mendukung pengesahan amandemen Konvensi Pekerja Maritim (Maritim Labour Convention / MLC) yang mengatur jaminan hak-hak keuangan bagi pela...',
                'author' => 'BERITA NAKER',
                'date' => Carbon::now()->toDateString(),
            ]),
            new News([
                'id' => (string) Uuid::uuid4(),
                'title' => 'Diluar Dugaan, ILO Apresiasi Program Desmigratif',
                'content' => 'JENEWA-Indonesia secara tegas mendukung pengesahan amandemen Konvensi Pekerja Maritim (Maritim Labour Convention / MLC) yang mengatur jaminan hak-hak keuangan bagi pela...',
                'author' => 'BERITA NAKER',
                'date' => Carbon::now()->toDateString(),
            ]),
            new News([
                'id' => (string) Uuid::uuid4(),
                'title' => 'Diluar Dugaan, ILO Apresiasi Program Desmigratif',
                'content' => 'JENEWA-Indonesia secara tegas mendukung pengesahan amandemen Konvensi Pekerja Maritim (Maritim Labour Convention / MLC) yang mengatur jaminan hak-hak keuangan bagi pela...',
                'author' => 'BERITA NAKER',
                'date' => Carbon::now()->toDateString(),
            ]),
            new News([
                'id' => (string) Uuid::uuid4(),
                'title' => 'Diluar Dugaan, ILO Apresiasi Program Desmigratif',
                'content' => 'JENEWA-Indonesia secara tegas mendukung pengesahan amandemen Konvensi Pekerja Maritim (Maritim Labour Convention / MLC) yang mengatur jaminan hak-hak keuangan bagi pela...',
                'author' => 'BERITA NAKER',
                'date' => Carbon::now()->toDateString(),
            ]),
            new News([
                'id' => (string) Uuid::uuid4(),
                'title' => 'Diluar Dugaan, ILO Apresiasi Program Desmigratif',
                'content' => 'JENEWA-Indonesia secara tegas mendukung pengesahan amandemen Konvensi Pekerja Maritim (Maritim Labour Convention / MLC) yang mengatur jaminan hak-hak keuangan bagi pela...',
                'author' => 'BERITA NAKER',
                'date' => Carbon::now()->toDateString(),
            ]),
            new News([
                'id' => (string) Uuid::uuid4(),
                'title' => 'Diluar Dugaan, ILO Apresiasi Program Desmigratif',
                'content' => 'JENEWA-Indonesia secara tegas mendukung pengesahan amandemen Konvensi Pekerja Maritim (Maritim Labour Convention / MLC) yang mengatur jaminan hak-hak keuangan bagi pela...',
                'author' => 'BERITA NAKER',
                'date' => Carbon::now()->toDateString(),
            ]),
            new News([
                'id' => (string) Uuid::uuid4(),
                'title' => 'Diluar Dugaan, ILO Apresiasi Program Desmigratif',
                'content' => 'JENEWA-Indonesia secara tegas mendukung pengesahan amandemen Konvensi Pekerja Maritim (Maritim Labour Convention / MLC) yang mengatur jaminan hak-hak keuangan bagi pela...',
                'author' => 'BERITA NAKER',
                'date' => Carbon::now()->toDateString(),
            ]),
        ];
    }

    public function handle(DummyNews $message): Collection
    {
        return collect($this->dummies);
    }
}