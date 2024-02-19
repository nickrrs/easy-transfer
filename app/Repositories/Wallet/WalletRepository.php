<?php

namespace App\Repositories\Wallet;

use App\Models\Wallet;
use Ramsey\Uuid\Uuid;

class WalletRepository
{
    public function createNewWallet($provider)
    {
        $wallet = new Wallet();

        $wallet->id = Uuid::uuid4()->toString();
        $wallet->owner()->associate($provider);
        $wallet->balance = 0;

        $wallet->save();
    }
}
