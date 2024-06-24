<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PromoTilesSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'title'       => 'Summer Sale',
                'description' => 'Get up to 50% off on all summer items.',
                'image_url'   => 'https://example.com/images/summer_sale.jpg',
                'created_at'  => date('Y-m-d H:i:s'),
                'updated_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'title'       => 'Winter Collection',
                'description' => 'New arrivals for the winter season.',
                'image_url'   => 'https://example.com/images/winter_collection.jpg',
                'created_at'  => date('Y-m-d H:i:s'),
                'updated_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'title'       => 'Back to School',
                'description' => 'Discounts on all back-to-school items.',
                'image_url'   => 'https://example.com/images/back_to_school.jpg',
                'created_at'  => date('Y-m-d H:i:s'),
                'updated_at'  => date('Y-m-d H:i:s'),
            ],
        ];

        $this->db->table('promo_tiles')->insertBatch($data);
    }
}