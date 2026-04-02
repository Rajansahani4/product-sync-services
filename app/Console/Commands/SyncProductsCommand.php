<?php

namespace App\Console\Commands;

use App\Jobs\SyncProductsJob;
use App\Services\ProductApiService;
use Illuminate\Console\Attributes\Description;
use Illuminate\Console\Attributes\Signature;
use Illuminate\Console\Command;

#[Signature('app:sync-products-command')]
#[Description('Fetch products from API and sync with database')]
class SyncProductsCommand extends Command
{
    /**
     * Execute the console command.
     */
    public function handle(ProductApiService $productApiService): int
    {

        $products = $productApiService->fetchProducts();

        SyncProductsJob::dispatch($products);

        $this->info('Products sync job dispatched successfully for '.count($products).' products.');

        return Command::SUCCESS;
    }
}
