<?php

/*
 * This file is part of Laravel Eloquent Flag.
 *
 * (c) Anton Komarev <a.komarev@cybercog.su>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use Cog\Tests\Flag\Stubs\Models\Inverse\EntityWithDraftedFlag;
use Faker\Generator as Faker;

/* @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(EntityWithDraftedFlag::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'is_drafted' => false,
    ];
});
