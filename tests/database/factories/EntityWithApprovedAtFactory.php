<?php

/*
 * This file is part of Laravel Eloquent Flag.
 *
 * (c) Anton Komarev <a.komarev@cybercog.su>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use Cog\Tests\Flag\Stubs\Models\Classic\EntityWithApprovedAt;
use Faker\Generator as Faker;

/* @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(EntityWithApprovedAt::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'approved_at' => null,
    ];
});
