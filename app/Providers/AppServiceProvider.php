<?php

namespace App\Providers;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Builder::macro('search', function (array $fields, $string) {
            if ($string) {
                return $this->where(function ($query) use ($fields, $string) {
                    foreach ($fields as $field) {
                        $query->orWhere($field, 'like', '%' . $string . '%');
                    }
                });
            }

            return $this;
        });

        Schema::defaultStringLength(191);
    }
}
