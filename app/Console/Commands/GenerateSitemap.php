<?php

namespace App\Console\Commands;

use App\Models\Post;
use App\Sitemaps\CustomProfile;
use Illuminate\Console\Command;

class GenerateSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sitemap:generate {posts?*}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate app sitemaps.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $generator = new CustomProfile();

        $postsArgs = $this->argument('posts');

        $posts = $postsArgs;

        if (empty($postsArgs)) {
            $posts = Post::query()->select('slug')->cursor();
        }

        $chunkSize = 2000;

        if (!empty($posts)) {
            foreach ($posts->chunk($chunkSize) as $chunk) {
                $postSlugs = $chunk->pluck('slug')->toArray();
                $generator->createPostsSitemaps($postSlugs);
                $this->info('Processed a Chunk of ' . count($postSlugs) . ' Posts.');
            }
        }

        $generator->run();

        $this->info('Sitemap Generator Done.');
    }
}
