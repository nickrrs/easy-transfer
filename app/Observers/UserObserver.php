<?php

namespace App\Observers;

use App\Models\User;
use App\Repositories\Wallet\WalletRepository;

class UserObserver
{

    protected $walletRepository;

    public function __construct(WalletRepository $walletRepository)
    {
        $this->walletRepository = $walletRepository;
    }

    /**
     * Handle the User "created" event.
     */
    public function created(User $user): void
    {
        $this->walletRepository->createNewWallet($user);
    }
}
