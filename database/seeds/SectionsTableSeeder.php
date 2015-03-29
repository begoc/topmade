<?php


use Illuminate\Contracts\Auth\Registrar;
use Illuminate\Database\Seeder;

class SectionsTableSeeder extends Seeder
{

    /**
     * @var SectionRepository
     */
    private $section;

    public function __construct(SectionRepository $section)
    {
        $this->section = $section;
    }

    public function run()
    {
        $sections = [
            ['handle' => 'company'],
            ['handle' => 'activities'],
            ['handle' => 'location'],
            ['handle' => 'contact']
        ];

        foreach ($sections as $section) {
            $this->section->create($section);
        }
    }
}
