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

use Ramsey\Uuid\Uuid;
use Illuminate\Database\Seeder;
use Kemnaker\Module\News\Model\News;
use Pandawa\Component\Ddd\Repository\Repository;

/**
 * @author Michael Reynald <michaelreynald78@gmail.com>
 */
class NewsTableSeeder extends Seeder
{
    /**
     * @throws ReflectionException
     */
    public function run()
    {
        $newsData = [
            [
                'id'      => (string)Uuid::uuid4(),
                'title'   => 'Indonesia Perjuangkan Jaminan Hak-Hak Pelaut Korban Bajak Laut',
                'author'  => 'BERITA NAKER',
                'content' => 'JENEWA-Indonesia secara tegas mendukung pengesahan amandemen Konvensi Pekerja Maritim (Maritim Labour Convention / MLC) yang mengatur jaminan hak-hak keuangan bagi pela...',
            ],
            [
                'id'      => (string)Uuid::uuid4(),
                'title'   => 'Diluar Dugaan, ILO Apresiasi Program Desmigratif',
                'author'  => 'BERITA NAKER',
                'content' => 'JENEWA-Indonesia secara tegas mendukung pengesahan amandemen Konvensi Pekerja Maritim (Maritim Labour Convention / MLC) yang mengatur jaminan hak-hak keuangan bagi pela...',
            ],
            [
                'id'      => (string)Uuid::uuid4(),
                'title'   => 'Diluar Dugaan, ILO Apresiasi Program Desmigratif',
                'author'  => 'BERITA NAKER',
                'content' => 'JENEWA-Indonesia secara tegas mendukung pengesahan amandemen Konvensi Pekerja Maritim (Maritim Labour Convention / MLC) yang mengatur jaminan hak-hak keuangan bagi pela...',
            ],
            [
                'id'      => (string)Uuid::uuid4(),
                'title'   => 'Diluar Dugaan, ILO Apresiasi Program Desmigratif',
                'author'  => 'BERITA NAKER',
                'content' => 'JENEWA-Indonesia secara tegas mendukung pengesahan amandemen Konvensi Pekerja Maritim (Maritim Labour Convention / MLC) yang mengatur jaminan hak-hak keuangan bagi pela...',
            ],
            [
                'id'      => (string)Uuid::uuid4(),
                'title'   => 'Diluar Dugaan, ILO Apresiasi Program Desmigratif',
                'author'  => 'BERITA NAKER',
                'content' => 'JENEWA-Indonesia secara tegas mendukung pengesahan amandemen Konvensi Pekerja Maritim (Maritim Labour Convention / MLC) yang mengatur jaminan hak-hak keuangan bagi pela...',
            ],
            [
                'id'      => (string)Uuid::uuid4(),
                'title'   => 'Diluar Dugaan, ILO Apresiasi Program Desmigratif',
                'author'  => 'BERITA NAKER',
                'content' => 'JENEWA-Indonesia secara tegas mendukung pengesahan amandemen Konvensi Pekerja Maritim (Maritim Labour Convention / MLC) yang mengatur jaminan hak-hak keuangan bagi pela...',
            ],
            [
                'id'      => (string)Uuid::uuid4(),
                'title'   => 'Diluar Dugaan, ILO Apresiasi Program Desmigratif',
                'author'  => 'BERITA NAKER',
                'content' => 'JENEWA-Indonesia secara tegas mendukung pengesahan amandemen Konvensi Pekerja Maritim (Maritim Labour Convention / MLC) yang mengatur jaminan hak-hak keuangan bagi pela...',
            ],
            [
                'id'      => (string)Uuid::uuid4(),
                'title'   => 'Diluar Dugaan, ILO Apresiasi Program Desmigratif',
                'author'  => 'BERITA NAKER',
                'content' => 'JENEWA-Indonesia secara tegas mendukung pengesahan amandemen Konvensi Pekerja Maritim (Maritim Labour Convention / MLC) yang mengatur jaminan hak-hak keuangan bagi pela...',
            ],
        ];

        $newsRepository = new Repository(News::class);

        foreach ($newsData as $news) {
            $news = new News($news);
            $newsRepository->save($news);
        }
    }
}