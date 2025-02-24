<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use App\Models\Reply;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

class BlogSeeder extends Seeder
{
    public function run(User $admin): void
    {
        $categories = [
            'Web Design',
            'Web Development',
            'Digital Marketing',
            'SEO',
            'Content Marketing',
            'Social Media Marketing',
            'E-commerce Solutions',
            'Business Growth',
            'Technology Trends',
            'Branding',
        ];

        $tags = [
            'UI Design', 'UX Design', 'Responsive Design', 'Website Mockups', 'Web Design Trends', 'Mobile-First Design', 'User Interface', 'User Experience', 'Design Principles', 'Website Redesign',
            'Frontend Development', 'Backend Development', 'Full-Stack Development', 'Laravel', 'React', 'Vue.js', 'API Development', 'Database Design', 'Web Security', 'Website Performance',
            'Online Advertising', 'Email Marketing', 'PPC (Pay-Per-Click)', 'Content Strategy', 'Marketing Analytics', 'Lead Generation', 'Customer Acquisition', 'Conversion Optimization', 'Marketing Automation',
            'Keyword Research', 'On-Page SEO', 'Off-Page SEO', 'Technical SEO', 'SEO Audits', 'Link Building', 'Local SEO', 'Mobile SEO', 'SEO Tools', 'Algorithm Updates',
            'Blog Posts', 'Articles', 'Case Studies', 'Ebooks', 'Infographics', 'Video Marketing', 'Content Strategy', 'Content Creation', 'Content Promotion', 'Content Calendar',
            'Facebook Marketing', 'Instagram Marketing', 'LinkedIn Marketing', 'Twitter Marketing', 'Social Media Strategy', 'Social Media Engagement', 'Social Media Advertising', 'Social Media Analytics', 'Community Management',
            'Shopify', 'WooCommerce', 'Magento', 'E-commerce SEO', 'E-commerce Marketing', 'Online Payments', 'Shopping Cart', 'Product Pages', 'Customer Experience (E-commerce)',
            'Startup Tips', 'Small Business Advice', 'Entrepreneurship', 'Business Strategy', 'Marketing Strategy', 'Sales Strategy', 'Customer Retention', 'Business Planning', 'Innovation', 'Leadership',
            'AI', 'Cloud Computing', 'Cybersecurity', 'Web 3.0', 'Mobile Technology', 'Data Analytics', 'Emerging Technologies', 'Future of Web', 'Digital Transformation',
            'Brand Identity', 'Brand Strategy', 'Brand Guidelines', 'Logo Design', 'Brand Messaging', 'Brand Voice', 'Brand Awareness', 'Brand Reputation', 'Visual Identity', 'Brand Storytelling',
        ];

        foreach ($tags as $tagName) {
            Tag::create([
                'title' => $tagName,
                'slug' => Str::slug($tagName),
                'description' => "Learn more about " . $tagName . " and its impact on your business.",
            ]);
        }

        $tagsInDb = Tag::query()->get(['id', 'title']);
        $usersInDb = User::query()->pluck('id')->toArray();

        foreach ($categories as $category) {
            $tg = $tagsInDb->random();
            $catItem = Category::factory()
                ->create([
                    'title' => $category,
                    'slug' => Str::slug($category),
                    'description' => "All about " . $category . " for your business.",
                    'body' => "Explore expert articles and insights on " . $category . " to enhance your online presence and business strategy.",
                ]);

            \Laravel\Prompts\info("Category: " . $category. PHP_EOL);
            \Laravel\Prompts\info("Seeding post...");
            Post::factory(rand(2,5))
                ->hasAttached(
                    $tg=$tagsInDb->random()
                )
                ->has(
                    Comment::factory(rand(2,3))
                        ->has(
                            Reply::factory(1, [
                                'user_id' => $admin->id
                            ])
                        )
                        ->state([
                            'user_id' => Arr::random($usersInDb),
                            'is_public' => true,
                            'status' => 'published'
                        ])
                )
                ->create([
                    'user_id' => $admin->id,
                    'tag' => $tg->title,
                    'category' => $category,
                    'category_id' => $catItem->id,
                    'author' => $admin->name
                    ]);

//            dd($post->id);

            \Laravel\Prompts\info("Seeded post.". PHP_EOL."Seeding comment and reply...");

        }

        \Laravel\Prompts\info('Seeded blog items.');
    }
}
