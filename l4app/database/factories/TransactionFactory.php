<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class TransactionFactory extends Factory
{
    const STATUSES = ['settled', 'error', 'authorized', 'refused'];
    const PAYMENT_METHODS = ['visa', 'mastercard', 'paypal', 'klarna', 'wechat'];
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
        'psp_reference' => strtoupper(fake()->bothify('???####??###??#')),
        'merchant_reference' => strtoupper(fake()->bothify('??######')),
        'account' => 'Projector L4',
        'date' => fake()->dateTime(),
        'amount' => fake()->randomFloat(2, 71, 343),
        'paymnt_method' => array_rand(self::PAYMENT_METHODS),
        'status' => array_rand(self::STATUSES),
        'risk_score' => fake()->numberBetween(0, 50),
        ];
    }
}
