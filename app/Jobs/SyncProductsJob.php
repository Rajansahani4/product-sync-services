<?php

namespace App\Jobs;

use App\Models\Product;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\Log;

class SyncProductsJob implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance which sync products.
     */
    public function __construct(public array $products){}

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        try{
            Product::upsert(
                $this->products,
                ['external_id'],
                ['name', 'price', 'stock']
            );

            Log::info('Products synced successfully.',['synced_count' => count($this->products)]);

        }catch(\Exception $e){
            Log::error('Error syncing products: '.$e->getMessage());
        }
    }
}
