<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Seeder;

class PageTableSeeder extends Seeder
{
    protected $pages = [
        [
            'title' => 'Homepage',
            'route' => 'home',
            'meta_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscingelit. Nullam euismod, nisl eget ultricies aliquam, nunc sapien aliquet urna, vitae aliquam nisi nisl vitae nunce.',
            'meta_og' => 'Lorem ipsum dolor sit amet, consectetur adipiscingelit. Nullam euismod, nisl eget ultricies aliquam, nunc sapien aliquet urna, vitae aliquam nisi nisl vitae nunce.',
            'meta_twitter' => 'Lorem ipsum dolor sit amet, consectetur adipiscingelit. Nullam euismod, nisl eget ultricies aliquam, nunc sapien aliquet urna, vitae aliquam nisi nisl vitae nunce.',
            'content' => [
                'hero' => [
                    'welcome' => 'Bonjour, I\'m Jonathan Rixhon',
                    'job' => 'Fullstack developer',
                    'subtitle' => 'with a big focus on code quality and good practise',
                    'cta' => 'Contact me',
                ],
                'works' => [
                    'title' => 'My works',
                    'cta' => 'My works',
                ],
                'about' => [
                    'title' => 'About me',
                    'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscingelit. Nullam euismod, nisl eget ultricies aliquam, nunc sapien aliquet urna, vitae aliquam nisi nisl vitae nunce.',
                ],
                'skills' => [
                    'title' => 'Skills',
                ],
                'contact' => [
                    'title' => 'Get in touch',
                    'body' => 'Are you convinced ? Don\'t hesitate any longer !',
                    'cta' => 'Contact me',
                ],
            ]
        ],
        [
            'title' => 'Contact',
            'route' => 'contact',
            'meta_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscingelit. Nullam euismod, nisl eget ultricies aliquam, nunc sapien aliquet urna, vitae aliquam nisi nisl vitae nunce.',
            'meta_og' => 'Lorem ipsum dolor sit amet, consectetur adipiscingelit. Nullam euismod, nisl eget ultricies aliquam, nunc sapien aliquet urna, vitae aliquam nisi nisl vitae nunce.',
            'meta_twitter' => 'Lorem ipsum dolor sit amet, consectetur adipiscingelit. Nullam euismod, nisl eget ultricies aliquam, nunc sapien aliquet urna, vitae aliquam nisi nisl vitae nunce.',
            'content' => [
                'form' => [
                    'title' => 'Contact me',
                    'subtitle' => 'I will get back to you as quickly as possible.',
                    'submit' => 'Send',
                ],
            ]
        ],
        [
            'title' => 'Works',
            'route' => 'works',
            'meta_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscingelit. Nullam euismod, nisl eget ultricies aliquam, nunc sapien aliquet urna, vitae aliquam nisi nisl vitae nunce.',
            'meta_og' => 'Lorem ipsum dolor sit amet, consectetur adipiscingelit. Nullam euismod, nisl eget ultricies aliquam, nunc sapien aliquet urna, vitae aliquam nisi nisl vitae nunce.',
            'meta_twitter' => 'Lorem ipsum dolor sit amet, consectetur adipiscingelit. Nullam euismod, nisl eget ultricies aliquam, nunc sapien aliquet urna, vitae aliquam nisi nisl vitae nunce.',
            'content' => [
                'works' => [
                    'title' => 'My works',
                ],
            ]
        ]
    ];
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->pages as $page) {
            Page::create($page);
        }
    }
}
