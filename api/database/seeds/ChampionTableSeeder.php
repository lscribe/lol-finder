<?php

use App\Models\Champion;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class ChampionTableSeeder extends Seeder
{
    public function run(): void
    {
        if (! Champion::count()) {
            $data = json_decode(Storage::get('seeders/champions.json'), true);

            foreach ($data['data'] as $champion) {
                factory(Champion::class)->create([
                    'id'    => $champion['id'],
                    'title' => $champion['title'],
                    'lore'  => $champion['blurb'],
                    'image' => config('app.champion_img_url') . $champion['image']['full'],
                    'tags'  => implode(',', $champion['tags']),
                ]);
            }
        }
    }
}
