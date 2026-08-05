<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProdukFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $hargaBeli = $this->faker->numberBetween(10000, 500000);

        return [
            'user_id' => User::where('role_id', 1)->inRandomOrder()->value('id'),

            'foto' => 'produk/' . $this->faker->uuid() . '.jpg',

            'nama' => $this->faker->words(3, true),

            // TAMBAHKAN INI
            'jenis_produk' => $this->faker->randomElement([
                'Makanan',
                'Minuman',
                'Snack',
                'ATK',
                'Lainnya'
            ]),

            'harga_beli' => $hargaBeli,

            'harga_jual' => $hargaBeli + $this->faker->numberBetween(5000, 100000),

            'stok' => $this->faker->numberBetween(1, 500),
        ];
    }
}