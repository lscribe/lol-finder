<?php

use App\Models\Item;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class ItemTableSeeder extends Seeder
{
    public function run(): void
    {
        if (! Item::count()) {
            $data = json_decode(Storage::get('seeders/items.json'), true);

            foreach ($data['data'] as $item) {
                factory(Item::class)->create([
                    'name'        => $item['name'],
                    'description' => \strip_tags($item['description']),
                    'image'       => config('app.item_img_url') . $item['image']['full'],
                    'cost'        => $item['gold']['base'],
                    'sell'        => $item['gold']['sell'],
                    'tags'        => implode(',', $item['tags']),
                ]);
            }
        }
    }
}
