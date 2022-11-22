<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SingleController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\SlidersController;
use App\Http\Controllers\Admin\PagesController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\AuthorsController;



Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/about', [AboutController::class, 'about'])->name('about');

Route::get('/search-news', [CategoryController::class, 'searchNews'])->name('search.news');

Route::get('/contact', [ContactController::class, 'contact'])->name('contact');

Route::get('/search', [SearchController::class, 'search'])->name('search');

Route::get('/single/{id}', [SingleController::class, 'single'])->name('single');
Route::post('/single', [SingleController::class, 'singlePost'])->name('single.post');

Route::post('/mail', [MainController::class, 'mail'])->name('mail');
Route::get('/page/{id}', [MainController::class, 'page'])->name('page');

Route::group(['middleware'=>'notlogin'],function(){
Route::get('/admin', [AdminController::class, 'index'])->name('admin');

Route::prefix('admin')->group(function () {

    Route::get('/news', [NewsController::class, 'news'])->name('news');
    Route::get('/news-add', [NewsController::class, 'newsAdd'])->name('news.add');
    Route::post('/news-add', [NewsController::class, 'new'])->name('news.save');
    Route::get('/news-edit/{id}', [NewsController::class, 'newsEdit'])->name('news.edit');
    Route::get('/news/delete/{id}', [NewsController::class, 'delete'])->name('news.delete');
    Route::post('/news/update/{id}', [NewsController::class, 'update'])->name('news.update');
    Route::get('/search', [NewsController::class, 'search'])->name('admin.search');
    Route::get('/news/delete', [NewsController::class, 'trashed'])->name('news.trashed');
    Route::get('/recover/news/{id}', [NewsController::class, 'recover'])->name('news.recover');
    Route::get('/hard-delete/news/{id}', [NewsController::class, 'hardDelete'])->name('news.hard.delete');


    Route::get('/users', [UsersController::class, 'users'])->name('users');
    Route::get('/user-add', [UsersController::class, 'userAdd'])->name('user.add');
    Route::post('/user-add', [UsersController::class, 'userSave'])->name('user.save');
    Route::get('/user-edit/{id}', [UsersController::class, 'userEdit'])->name('user.edit');
    Route::get('/users/delete/{id}', [UsersController::class, 'delete'])->name('user.delete');
    Route::post('/user/update/{id}', [UsersController::class, 'update'])->name('user.update');



    Route::get('/contact', [PagesController::class, 'contact'])->name('contact');
    Route::get('/contact-edit', [PagesController::class, 'contactEdit'])->name('contact.edit');
    Route::post('/contact/update', [PagesController::class, 'contactUpdate'])->name('contact.update');


    Route::get('/about', [PagesController::class, 'about'])->name('admin.about');
    Route::get('/about-edit', [PagesController::class, 'aboutEdit'])->name('about.edit');
    Route::post('/about/update', [PagesController::class, 'update'])->name('about.update');


    Route::get('/slider', [SlidersController::class, 'slider'])->name('slider');
    Route::get('/slider-add', [SlidersController::class, 'sliderAdd'])->name('slider.add');
    Route::Post('/slider-add', [SlidersController::class, 'sliderSave'])->name('slider.save');

    Route::get('/slider-edit/{id}', [SlidersController::class, 'sliderEdit'])->name('slider.edit');
    Route::get('/slider/delete/{id}', [SlidersController::class, 'sliderDelete'])->name('slider.delete');
    Route::post('/slider/update/{id}', [SlidersController::class, 'sliderUpdate'])->name('slider.update');



    Route::get('/settings', [SettingsController::class, 'settings'])->name('settings');
    Route::get('/setting-edit', [SettingsController::class, 'settingEdit'])->name('setting.edit');

    Route::get('/category', [CategoriesController::class, 'category'])->name('category');
    Route::get('/category-add', [CategoriesController::class, 'categoryAdd'])->name('category.add');

    Route::post('/category-add', [CategoriesController::class, 'categorySave'])->name('category.save');

    Route::get('/category/delete/{id}', [CategoriesController::class, 'categoryDelete'])->name('category.delete');
    Route::get('/category-edit/{id}', [CategoriesController::class, 'categoryEdit'])->name('category.edit');
    Route::post('/category/update/{id}', [CategoriesController::class, 'categoryUpdate'])->name('category.update');

    Route::get('/author', [AuthorsController::class, 'author'])->name('author');
    Route::get('/author-add', [AuthorsController::class, 'authorAdd'])->name('author.add');

    Route::post('/author-add', [AuthorsController::class, 'authorSave'])->name('author.save');

    Route::get('/author/delete/{id}', [AuthorsController::class, 'authorDelete'])->name('author.delete');
    Route::get('/author-edit/{id}', [AuthorsController::class, 'authorEdit'])->name('author.edit');
    Route::post('/author/update/{id}', [AuthorsController::class, 'authorUpdate'])->name('author.update');

});
});

 Route::group(['middleware'=>'islogin'],function(){
        Route::get('/login',[UsersController::class,'index'])->name('login');
        Route::post('/login/submit',[UsersController::class,'login_submit'])->name('login-submit');


    });
Route::get('/login/logout',[UsersController::class,'logout'])->name('logout');



