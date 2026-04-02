<?php

namespace App\Services;

class ProductApiService
{
    /**
     * fetch a product data from static data source
     */
    public function fetchProducts(): array
    {
        return[
            [
                'external_id' => 'prod-001',
                'name' => 'Product 1',
                'price' => 10.99,
                'stock' => 100,
            ],
            [
                'external_id' => 'prod-002',
                'name' => 'Product 2',
                'price' => 19.99,
                'stock' => 50,
            ],
            [
                'external_id' => 'prod-003',
                'name' => 'Product 3',
                'price' => 5.99,
                'stock' => 200,
            ],
            [
                'external_id' => 'prod-004',
                'name' => 'Product 4',
                'price' => 15.49,
                'stock' => 75,
            ],
            [
                'external_id' => 'prod-005',
                'name' => 'Product 5',
                'price' => 8.99,
                'stock' => 150,
            ],
            [
                'external_id' => 'prod-006',
                'name' => 'Product 6',
                'price' => 12.99,
                'stock' => 120,
            ]
            ,[
                'external_id' => 'prod-007',
                'name' => 'Product 7',
                'price' => 25.99,
                'stock' => 30,
            ],
            [
                'external_id' => 'prod-008',
                'name' => 'Product 8',
                'price' => 9.99,
                'stock' => 80,
            ],
            [
                'external_id' => 'prod-009',
                'name' => 'Product 9',
                'price' => 14.99,
                'stock' => 60,
            ],
            [
                'external_id' => 'prod-010',
                'name' => 'Product 10',
                'price' => 7.99,
                'stock' => 90,
            ],
            [
                'external_id' => 'prod-011',
                'name' => 'Product 11',
                'price' => 18.99,
                'stock' => 40,
            ],
            [
                'external_id' => 'prod-012',
                'name' => 'Product 12',
                'price' => 11.99,
                'stock' => 110,
            ],
            [
                'external_id' => 'prod-013',
                'name' => 'Product 13',
                'price' => 22.99,
                'stock' => 25,
            ],
            [
                'external_id' => 'prod-014',
                'name' => 'Product 14',
                'price' => 6.99,
                'stock' => 130,
            ],
            [
                'external_id' => 'prod-015',
                'name' => 'Product 15',
                'price' => 16.99,
                'stock' => 55,
            ]
        ];
    }
}
