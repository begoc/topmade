<?php


use Illuminate\Database\Seeder;
use Topmade\Contracts\Repositories\Article;
use Topmade\Contracts\Repositories\Section;

class ArticlesTableSeeder extends Seeder
{
    /**
     * @var Article
     */
    private $article;
    /**
     * @var Section
     */
    private $section;

    public function __construct(Article $article, Section $section)
    {
        $this->article = $article;
        $this->section = $section;
    }

    public function run()
    {
        $articles = [
            [
                'icon' => 'heart',
                'title' => 'Quines Sómos',
                'content' => '',
                'section' => 'company',
                'order' => '1',
            ],
            [
                'icon' => 'qrcode',
                'title' => 'Recursos Humanos',
                'content' => '',
                'section' => 'company',
                'order' => '2',
            ],
            [
                'icon' => 'archive',
                'title' => 'Calidad y medio ambiente',
                'content' => '',
                'section' => 'company',
                'order' => '3',
            ],
            [
                'icon' => 'compass',
                'title' => 'Climatización',
                'content' => '',
                'section' => 'activities',
                'order' => '',
            ],
            [
                'icon' => 'fire',
                'title' => 'Incendios',
                'content' => '',
                'section' => 'activities',
                'order' => '1',
            ],
            [
                'icon' => 'wrench',
                'title' => 'Mantenimientos',
                'content' => '',
                'section' => 'activities',
                'order' => '2',
            ],
            [
                'icon' => 'flash',
                'title' => 'Electricidad',
                'content' => '',
                'section' => 'activities',
                'order' => '3',
            ],
            [
                'icon' => 'recycle',
                'title' => 'Energía Renovable',
                'content' => '',
                'section' => 'activities',
                'order' => '4',
            ],
        ];

        $sections = [];
        foreach ($articles as $article) {
            $sectionHandle = $article['section'];

            if (! isset($sections[$sectionHandle])) {
                $sections[$sectionHandle] = $this->section->findByHandel($sectionHandle);
            }

            $article['section_id'] = $sections[$sectionHandle]->id;

            $this->article->create($article);
        }
    }
}
