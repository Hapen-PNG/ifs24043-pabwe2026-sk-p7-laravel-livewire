<?php

namespace Tests\Feature;

use App\Features\Stock\Models\Stock;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RoutingTest extends TestCase
{
    use RefreshDatabase;

    public function test_root_renders_public_landing_page_for_guest(): void
    {
        $this->get('/')
            ->assertOk()
            ->assertSee('Manajemen Stok Barang')
            ->assertSee(route('login'))
            ->assertSee(route('register'));
    }

    public function test_login_and_register_are_accessible_to_guests(): void
    {
        $this->get('/login')->assertOk();
        $this->get('/register')->assertOk();
    }

    public function test_root_redirects_member_to_stocks(): void
    {
        $member = User::factory()->member()->create();

        $this->actingAs($member)
            ->get('/')
            ->assertRedirect(route('stocks.index'));
    }

    public function test_root_redirects_admin_to_admin_users(): void
    {
        $admin = User::factory()->admin()->create();

        $this->actingAs($admin)
            ->get('/')
            ->assertRedirect(route('admin.users'));
    }

    public function test_health_check_endpoint(): void
    {
        $this->get('/up')
            ->assertStatus(200);
    }

    public function test_member_can_access_protected_stock_and_profile_pages(): void
    {
        $member = User::factory()->member()->create();
        $stock = Stock::factory()->create([
            'user_id' => $member->id,
        ]);

        $this->actingAs($member);

        $this->get('/stocks')->assertOk();
        $this->get('/profile')->assertOk();
        $this->get(route('stocks.show', $stock))->assertOk();
    }
}
