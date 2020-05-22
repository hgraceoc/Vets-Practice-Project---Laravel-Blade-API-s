<?php

namespace App\Providers;
use Laravel\Passport\Passport;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    // ...
  
    public function boot()
    {
      // ...
      Passport::routes();
    }
  
}
