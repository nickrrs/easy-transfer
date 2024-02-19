<?php

use App\Models\Shopkeeper;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class WalletTest extends TestCase
{
    use RefreshDatabase;

    public function testCreatedUserShouldHaveAWallet()
    {
        $user = User::factory()->create();

        $this->assertDatabaseHas('wallets', [
            'owner_id' => $user->id,
            'balance' =>  0
        ]);
    }

    public function testCreatedShopkeeperShouldHaveAWallet(){
        $shopkeeper = Shopkeeper::factory()->create();
        
        $this->assertDatabaseHas('wallets', [
            'owner_id' => $shopkeeper->id,
            'balance' => 0
        ]);
    }
}
