<?php

namespace App\Providers;
use App\Models\Contact;
use App\Models\Page;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use TCG\Voyager\Http\Controllers\ContentTypes\Image;
use TCG\Voyager\Http\Controllers\ContentTypes\MultipleImage;
use TCG\Voyager\Http\Controllers\Controller;
use TCG\Voyager\Http\Controllers\VoyagerController;
use TCG\Voyager\Http\Controllers\VoyagerSettingsController;
use TCG\Voyager\Http\Controllers\VoyagerBaseController;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(VoyagerBaseController::class, \App\Http\Controllers\Voyager\VoyagerBaseController::class);
        $this->app->bind(VoyagerController::class, \App\Http\Controllers\Voyager\VoyagerController::class);
        $this->app->bind(Controller::class, \App\Http\Controllers\Voyager\Controller::class);
        $this->app->bind(VoyagerSettingsController::class, \App\Http\Controllers\Voyager\VoyagerSettingsController::class);
        $this->app->bind(Image::class, \App\Http\Controllers\Voyager\ContentTypes\Image::class);
        $this->app->bind(MultipleImage::class, \App\Http\Controllers\Voyager\ContentTypes\MultipleImage::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(256);
        view()->composer(['partials.header', 'partials.header_with_bg','partials.footer','pages.contacts','pages.home'], function ($view)
        {
            $phone = Contact::where('type','phone')->where('is_main',true)->where('status',true)->where('sort_id',1)->orderBy('sort_id')->firstOrFail();
            $view->with('phone',$phone);

            $phones = Contact::where('type','phone')->where('is_main',true)->where('status',true)->whereNotIn('sort_id',[1])->orderBy('sort_id')->get();
            $view->with('phones',$phones);

            $allPhones = Contact::where('type','phone')->where('is_main',true)->where('status',true)->orderBy('sort_id')->get();
            $view->with('allPhones',$allPhones);

            $emails = Contact::where('type','email')->where('is_main',true)->where('status',true)->orderBy('sort_id')->get();
            $view->with('emails',$emails);

            $adresses = Contact::where('type','address')->where('is_main',true)->where('status',true)->orderBy('sort_id')->get();
            $view->with('adresses',$adresses);

            $socials = Contact::where('type','social')->where('is_main',true)->where('status',true)->orderBy('sort_id')->get();
            $view->with('socials',$socials);

            $maps = Contact::where('type','map')->where('status',true)->get();
            $view->with('maps',$maps);

            $pages = Page::whereNotIn('type',['home'])->where('status',Page::STATUS_ACTIVE)->get();
            $pages = $pages->groupBy('type');
            $view->with('pages',$pages);
        });
    }
}
