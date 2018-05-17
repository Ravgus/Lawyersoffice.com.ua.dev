<?php

namespace App\Providers;

use SleepingOwl\Admin\Providers\AdminSectionsServiceProvider as ServiceProvider;

class AdminSectionsServiceProvider extends ServiceProvider
{
    /**
     * @var array
     */
    protected $sections = [
        \App\Article::class => 'App\Http\Sections\Articles',
        \App\Faq::class => 'App\Http\Sections\Faqs',
        \App\Dtp::class => 'App\Http\Sections\Dtp',
        \App\Offer::class => 'App\Http\Sections\Offers',
        \App\Partner::class => 'App\Http\Sections\Partners',
        \App\Worker::class => 'App\Http\Sections\Workers',
    ];

    /**
     * Register sections.
     *
     * @return void
     */
    public function boot(\SleepingOwl\Admin\Admin $admin)
    {
        parent::boot($admin);
    }
}
