<?php

namespace App\Sitemaps;

use Illuminate\Support\Facades\Storage;
use Spatie\Sitemap\Crawler\Profile;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\SitemapGenerator;
use Spatie\Sitemap\SitemapIndex;
use Spatie\Sitemap\Tags\Url;

class CustomProfile extends Profile
{
    public string $appUrl = '';
    public string $sitemapDir = 'sitemaps';
    public array $postsSitemaps = [];
    public array $pagesSitemaps = [];
    public array $pages = [
        '/blog',
        '/shop',
        '/contact',
        '/letters'
    ];

    public function __construct()
    {
        $this->appUrl = config('app.url');

        $this->getAllSitemaps();
    }

    public function run()
    {
        $this->pagesSitemap();

        $this->sitemapIndex();
    }

    public function sitemapIndex()
    {
        $index = SitemapIndex::create();

        if (!empty($this->pagesSitemaps)) {
            foreach ($this->pagesSitemaps as $pagesSitemap) {
                $index->add($pagesSitemap);
            }
        } else {
            $index->add('sitemaps/pages_sitemap.xml');
        }

        if (!empty($this->postsSitemaps)) {
            foreach ($this->postsSitemaps as $postsSitemap) {
                $index->add($postsSitemap);
            }
        }

        $index->writeToDisk('public', $this->sitemapDir.'/sitemap.xml', true);
    }

    public function pagesSitemap(): static
    {
        $pgSmp = Sitemap::create()->add($this->appUrl);

        foreach ($this->pages as $page) {
            $pgSmp->add($page);
        }
        $pgSmp->writeToDisk('public', $this->sitemapDir.'/pages_sitemap.xml', true);

        return $this;
    }

    public function addPage(string $page): static
    {
        $this->pages[] = $page;

        return $this;
    }

    public function sitemapCount($sitemap): \SimpleXMLElement|bool
    {
        $xmlPath = storage_path('app/public/sitemaps/'.$sitemap);

        return simplexml_load_file($xmlPath)->count();
    }

    public function createPostsSitemaps($postSlugs = [], $postSitemapName = 'posts_sitemap.xml'): static
    {
        $sitemap = Sitemap::create();

        $counter = 1;

        while ($this->checkSitemapExists($postSitemapName, $this->postsSitemaps)) {
            $postSitemapName = 'posts_sitemap' . $counter . '.xml';
            $counter++;
        }
        foreach ($postSlugs as $slug) {
            $sitemap->add(Url::create('/posts/'.$slug)
                ->setLastModificationDate(now()->subHour())
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
                ->setPriority(0.8)
            );
        }

        $sitemap->writeToDisk('public', $this->sitemapDir.'/'.$postSitemapName,true);

        $this->postsSitemaps[] = 'sitemaps/'.$postSitemapName;

        return $this;
    }

    public function getAllSitemaps(): static
    {
        $sitemaps = Storage::disk('public')->allFiles($this->sitemapDir);

        foreach ($sitemaps as $sitemap) {
            if (str_contains(haystack: $sitemap, needle: 'post')) {
                $this->postsSitemaps[] = $sitemap;
            }

            if (str_contains(haystack: $sitemap, needle: 'page')) {
                $this->pagesSitemaps[] = $sitemap;
            }
        }

        return $this;
    }

    public function checkSitemapExists($sitemapName, $category = []): bool|int|string
    {
        $category = empty($category) ? $this->postsSitemaps : $category;

        return in_array('sitemaps/'.$sitemapName, $category);
    }
}
