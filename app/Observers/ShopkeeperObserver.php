<?php

namespace App\Observers;

use App\Models\Shopkeeper;
use App\Repositories\Wallet\WalletRepository;

class ShopkeeperObserver
{

    protected $walletRepository;

    public function __construct(WalletRepository $walletRepository)
    {
        $this->walletRepository = $walletRepository;
    }

    /**
     * Handle the Shopkeeper "created" event.
     */
    public function created(Shopkeeper $shopkeeper): void
    {
        $this->walletRepository->createNewWallet($shopkeeper);
    }
}
