<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Kenura\Mardock\Models\Markdown;

class MarkdownSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $articles = [
            [
                'name' => 'How to fetch your dev.to posts Kenura',
                'slug' => Str::slug('How to fetch your dev.to posts Kenura', '-'),
                'file_location' => config('markdown.markdowns_location') . '/1.md',
            ],
            [
                'name' => '3D Toggle Switch',
                'slug' => Str::slug('3D Toggle Switch', '-'),
                'file_location' => config('markdown.markdowns_location') . '/2.md',
            ],
            [
                'name' => 'React component for a jelly button',
                'slug' => Str::slug('React component for a jelly button', '-'),
                'file_location' => config('markdown.markdowns_location') . '/3.md',
            ],

        ];

        foreach ($articles as $key => $article) {

            Markdown::create($article);
        }
    }
}
