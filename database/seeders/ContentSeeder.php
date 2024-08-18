<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();

        DB::table('contents')->insert([
            [
                'id' => 1,
                'title' => 'The Future of AI',
                'short_description' => 'Exploring advancements in artificial intelligence.',
                'body' => 'Artificial intelligence (AI) has been evolving rapidly in recent years. In this article, we delve into the latest advancements in AI, including machine learning algorithms, neural networks, and the potential impact on various industries. We\'ll also discuss ethical considerations and future trends in AI technology.',
                'user_id' => 3,
                'updated_by' => 0,
                'photo' => 'photos/im8r7arAhO3aifgsr4AVezJvRO76htqFYfnk9UKx.jpg',
                'slug' => Str::slug('The Future of AI'),
                'updated_at' => $now,
                'created_at' => $now
            ],
            [
                'id' => 2,
                'title' => 'Top 10 Travel Destinations for 2024',
                'short_description' => 'Discover the most popular travel spots for the coming year.',
                'body' => 'Planning your next vacation? Check out our list of the top 10 travel destinations for 2024. From tropical paradises to bustling cityscapes, we cover the best places to visit, including must-see attractions, local cuisine, and travel tips. Whether you\'re looking for adventure or relaxation, this guide has something for everyone.',
                'user_id' => 3,
                'updated_by' => 0,
                'photo' => 'photos/im8r7arAhO3aifgsr4AVezJvRO76htqFYfnk9UKx.jpg',
                'slug' => Str::slug('Top 10 Travel Destinations for 2024'),
                'updated_at' => $now,
                'created_at' => $now
            ],
            [
                'id' => 3,
                'title' => 'Healthy Eating Tips for Busy Professionals',
                'short_description' => 'Simple strategies to maintain a healthy diet with a busy schedule.',
                'body' => 'Maintaining a healthy diet can be challenging for busy professionals. This article provides practical tips for eating well while juggling a hectic work schedule. Learn how to plan meals, make nutritious choices on-the-go, and incorporate healthy snacks into your day. Discover how small changes can lead to significant improvements in your overall well-being.',
                'user_id' => 3,
                'updated_by' => 0,
                'photo' => 'photos/im8r7arAhO3aifgsr4AVezJvRO76htqFYfnk9UKx.jpg',
                'slug' => Str::slug('Healthy Eating Tips for Busy Professionals'),
                'updated_at' => $now,
                'created_at' => $now
            ],
            [
                'id' => 4,
                'title' => 'Understanding Blockchain Technology',
                'short_description' => 'A beginner\'s guide to blockchain and its applications.',
                'body' => 'Blockchain technology is often associated with cryptocurrencies, but its applications extend far beyond that. In this guide, we explain the fundamentals of blockchain, how it works, and its potential uses in various sectors, including finance, supply chain management, and healthcare. Get a clear understanding of how blockchain can revolutionize different industries.',
                'user_id' => 3,
                'updated_by' => 0,
                'photo' => 'photos/im8r7arAhO3aifgsr4AVezJvRO76htqFYfnk9UKx.jpg',
                'slug' => Str::slug('Understanding Blockchain Technology'),
                'updated_at' => $now,
                'created_at' => $now
            ],
            [
                'id' => 5,
                'title' => 'DIY Home Improvement Projects',
                'short_description' => 'Creative ideas for enhancing your living space.',
                'body' => 'Looking to give your home a fresh look without breaking the bank? Check out these DIY home improvement projects that are both fun and budget-friendly. From painting and decorating to simple furniture upgrades, these projects will help you transform your living space with minimal cost and effort. Get inspired to tackle your next home improvement project.',
                'user_id' => 3,
                'updated_by' => 0,
                'photo' => 'photos/im8r7arAhO3aifgsr4AVezJvRO76htqFYfnk9UKx.jpg',
                'slug' => Str::slug('DIY Home Improvement Projects'),
                'updated_at' => $now,
                'created_at' => $now
            ],
        ]);
    }
}
