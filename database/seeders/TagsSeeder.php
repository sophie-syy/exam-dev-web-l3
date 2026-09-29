<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tag;

class TagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tag::create([
            'nom' => 'Développement',
        ]);

        Tag::create([
            'nom' => 'Cybersécurité',
        ]);

        Tag::create([
            'nom' => 'Data',
        ]);

        Tag::create([
            'nom' => 'Vie étudiante',
        ]);

        Tag::create([
            'nom' => 'Conférence',
        ]);
    }
}
