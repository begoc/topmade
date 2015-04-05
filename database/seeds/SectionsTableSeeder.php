<?php


use Illuminate\Database\Seeder;
use Topmade\Contracts\Repositories\Section;

class SectionsTableSeeder extends Seeder
{

    /**
     * @var SectionRepository
     */
    private $section;

    public function __construct(Section $section)
    {
        $this->section = $section;
    }

    public function run()
    {
        $sections = [
            [
                'handle' => 'company',
                'title' => 'TOPMADE Empresa - Aire Acondicionado - Calefacción - ACS',
                'description' => 'TOPMADE Empresa - Aire Acondicionado - Calefacción - ACS',
                'author' => 'topmade'
            ],
            [
                'handle' => 'activities',
                'title' => 'TOPMADE Actividades - Aire Acondicionado - Calefacción - ACS',
                'description' => 'TOPMADE Actividades - Aire Acondicionado - Calefacción - ACS',
                'author' => 'topmade'
            ],
            [
                'handle' => 'location',
                'title' => 'TOPMADE Localización - Aire Acondicionado - Calefacción - ACS',
                'description' => 'TOPMADE Localización - Aire Acondicionado - Calefacción - ACS',
                'author' => 'topmade'
            ],
            [
                'handle' => 'contact',
                'title' => 'TOPMADE Contactenos - Aire Acondicionado - Calefacción - ACS',
                'description' => 'TOPMADE Contactenos - Aire Acondicionado - Calefacción - ACS',
                'author' => 'topmade'
            ]
        ];

        foreach ($sections as $section) {
            $this->section->create($section);
        }
    }
}
