<?php

class Model{

    public function getData(): array
    {
        $dsn = "mysql:host=localhost;dbname=simple_cms;charset=utf8;port=3306";

        $pdo = new PDO($dsn, "root", "", [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]);

        $stmt = $pdo->query("SELECT * FROM posts");

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getHeroContent(): array
    {
        return [
            'title' => 'ANAK IT BN',
            'subtitle' => 'WELCOME TO ANAK IT BN',
            'button_text' => 'Go to our Meetup Page',
            'button_link' => 'https://www.meetup.com/Anak-IT-Brunei/',
            'background_image' => '/assets/cosmo.jpg',
            'logo_image' => '/assets/logo.png',
        ];
    }

    // About section content
    public static function getAboutContent()
    {
        return [
            'title' => 'ABOUT',
            'description' => 'ANAK IT is an open, non-profit community created as a center of learning for locals to share their knowledge in IT...',
            'image' => '/assets/about-anak-it.jpg',
        ];
    }

    // Portfolio content
    public static function getPortfolioContent()
    {
        return [
            'title' => 'PORTFOLIO',
            'description' => 'We do what we love and we make sure you do too.',
            'items' => [
                [
                    'title' => 'Workshops, Seminars, Crash Courses',
                    'description' => 'We like to spread the love for networking, information security, programming...',
                    'image' => '/assets/class1.jpg',
                ],
                [
                    'title' => 'Drop-in / Sharing Sessions',
                    'description' => 'Open sharing sessions for everyone to discuss (really) about anything!',
                    'image' => '/assets/drop1.jpg',
                ],
            ],
        ];
    }

}