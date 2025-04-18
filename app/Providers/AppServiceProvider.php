<?php

namespace App\Providers;

use App\Faker\SpecialityProvider;
use App\Faker\DoctorTitleProvider;
use App\Repositories\CountryRepository;
use Illuminate\Support\ServiceProvider;
use App\Repositories\SpecialityRepository;
use App\Repositories\Interfaces\CountryInterface;
use App\Repositories\Interfaces\SpecialityInterface;

var_dump("Fourth Step => <h6 class='text-danger'>" . realpath(__DIR__) . '\\' . basename(__FILE__) . "</h6>   ||| ");

class AppServiceProvider extends ServiceProvider
{


    /**
     * Register any application services.
     */
    public function register(): void
    {
        app()->bind(SpecialityInterface::class, SpecialityRepository::class);
        app()->bind(CountryInterface::class, CountryRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        fake()->addProvider(new DoctorTitleProvider(fake()));
        fake()->addProvider(new SpecialityProvider(fake()));
    }
}