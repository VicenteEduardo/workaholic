<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Editor;
use App\Http\Middleware\Administrador;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




/* Grupo de rotas autenticadas */

Route::middleware(['auth'])->group(function () {
    /* Manager Dashboard  */
    Route::get('admin/painel', ['as' => 'admin.home', 'uses' => 'Admin\DashboardController@index']);

    Route::middleware(['Administrador'])->group(function () {

        /* User */
        Route::get('admin/user/index', ['as' => 'admin.user.index', 'uses' => 'Admin\UserController@index']);
        Route::get('admin/user/show/{id}', ['as' => 'admin.user.show', 'uses' => 'Admin\UserController@show'])->withoutMiddleware(['Administrador']);

        Route::get('admin/user/edit/{id}', ['as' => 'admin.user.edit', 'uses' => 'Admin\UserController@edit'])->withoutMiddleware(['Administrador']);
        Route::put('admin/user/update/{id}', ['as' => 'admin.user.update', 'uses' => 'Admin\UserController@update'])->withoutMiddleware(['Administrador']);

        Route::get('admin/user/delete/{id}', ['as' => 'admin.user.delete', 'uses' => 'Admin\UserController@destroy']);
        /* end user */

        /* configuration */
        Route::get('admin/configuration/show', ['as' => 'admin.configuration.show', 'uses' => 'Admin\ConfigurationController@show']);

        Route::get('admin/configuration/edit/{id}', ['as' => 'admin.configuration.edit', 'uses' => 'Admin\ConfigurationController@edit']);
        Route::put('admin/configuration/update/{id}', ['as' => 'admin.configuration.update', 'uses' => 'Admin\ConfigurationController@update']);
        /* end configuration */
    });

    Route::middleware(['Editor'])->group(function () {


        /* Perguntas Frequentes */
        Route::get('admin/perguntas-Frequentes/index', ['as' => 'admin.commonQuestions.index', 'uses' => 'Admin\CommonQuestionsController@index']);
        Route::get('admin/perguntas-Frequentes/show/{id}', ['as' => 'admin.commonQuestions.show', 'uses' => 'Admin\CommonQuestionsController@show']);
        Route::get('admin/perguntas-Frequentes/create', ['as' => 'admin.commonQuestions.create', 'uses' => 'Admin\CommonQuestionsController@create']);
        Route::post('admin/perguntas-Frequentes/store', ['as' => 'admin.commonQuestions.store', 'uses' => 'Admin\CommonQuestionsController@store']);
        Route::get('admin/perguntas-Frequentes/edit/{id}', ['as' => 'admin.commonQuestions.edit', 'uses' => 'Admin\CommonQuestionsController@edit']);
        Route::put('admin/perguntas-Frequentes/update/{id}', ['as' => 'admin.commonQuestions.update', 'uses' => 'Admin\CommonQuestionsController@update']);
        Route::get('admin/perguntas-Frequentes/delete/{id}', ['as' => 'admin.commonQuestions.delete', 'uses' => 'Admin\CommonQuestionsController@destroy']);
        /* end Perguntas Frequentes */

        /* slideshow */
        Route::get('admin/slideshow/index', ['as' => 'admin.slideshow.index', 'uses' => 'Admin\SlideShowController@list']);
        Route::get('admin/slideshow/show/{id}', ['as' => 'admin.slideshow.show', 'uses' => 'Admin\SlideShowController@show']);
        Route::get('admin/slideshow/create', ['as' => 'admin.slideshow.create', 'uses' => 'Admin\SlideShowController@create']);
        Route::post('admin/slideshow/store', ['as' => 'admin.slideshow.store', 'uses' => 'Admin\SlideShowController@store']);
        Route::get('admin/slideshow/edit/{id}', ['as' => 'admin.slideshow.edit', 'uses' => 'Admin\SlideShowController@edit']);
        Route::put('admin/slideshow/update/{id}', ['as' => 'admin.slideshow.update', 'uses' => 'Admin\SlideShowController@update']);
        Route::get('admin/slideshow/delete/{id}', ['as' => 'admin.slideshow.delete', 'uses' => 'Admin\SlideShowController@destroy']);
        /* end slideshow */



        /* agentes */
        Route::get('admin/agentes/index', ['as' => 'admin.agentes.index', 'uses' => 'Admin\AngenteController@index']);
        Route::get('admin/agentes/show/{id}', ['as' => 'admin.agentes.show', 'uses' => 'Admin\AngenteController@show']);
        Route::get('admin/agentes/create', ['as' => 'admin.agentes.create', 'uses' => 'Admin\AngenteController@create']);
        Route::post('admin/agentes/store', ['as' => 'admin.agentes.store', 'uses' => 'Admin\AngenteController@store']);
        Route::get('admin/agentes/edit/{id}', ['as' => 'admin.agentes.edit', 'uses' => 'Admin\AngenteController@edit']);
        Route::put('admin/agentes/update/{id}', ['as' => 'admin.agentes.update', 'uses' => 'Admin\AngenteController@update']);
        Route::get('admin/agentes/delete/{id}', ['as' => 'admin.agentes.delete', 'uses' => 'Admin\AngenteController@destroy']);
        /* end agentes */


        /* servicos */
        Route::get('admin/servicos/index', ['as' => 'admin.servicos.index', 'uses' => 'Admin\ServiceController@index']);
        Route::get('admin/servicos/show/{id}', ['as' => 'admin.servicos.show', 'uses' => 'Admin\ServiceController@show']);
        Route::get('admin/servicos/create', ['as' => 'admin.servicos.create', 'uses' => 'Admin\ServiceController@create']);
        Route::post('admin/servicos/store', ['as' => 'admin.servicos.store', 'uses' => 'Admin\ServiceController@store']);
        Route::get('admin/servicos/edit/{id}', ['as' => 'admin.servicos.edit', 'uses' => 'Admin\ServiceController@edit']);
        Route::put('admin/servicos/update/{id}', ['as' => 'admin.servicos.update', 'uses' => 'Admin\ServiceController@update']);
        Route::get('admin/servicos/delete/{id}', ['as' => 'admin.servicos.delete', 'uses' => 'Admin\ServiceController@destroy']);
        /* end servicos */


        /* servicos */
        Route::get('admin/produtos/index', ['as' => 'admin.product.index', 'uses' => 'Admin\ProductController@index']);
        Route::get('admin/produtos/show/{id}', ['as' => 'admin.product.show', 'uses' => 'Admin\ProductController@show']);
        Route::get('admin/produtos/create', ['as' => 'admin.product.create', 'uses' => 'Admin\ProductController@create']);
        Route::post('admin/produtos/store', ['as' => 'admin.product.store', 'uses' => 'Admin\ProductController@store']);
        Route::get('admin/produtos/edit/{id}', ['as' => 'admin.product.edit', 'uses' => 'Admin\ProductController@edit']);
        Route::put('admin/produtos/update/{id}', ['as' => 'admin.product.update', 'uses' => 'Admin\ProductController@update']);
        Route::get('admin/produtos/delete/{id}', ['as' => 'admin.product.delete', 'uses' => 'Admin\ProductController@destroy']);
        /* end servicos */


        /* gallery */
        Route::get('admin/gallery/index', ['as' => 'admin.gallery.index', 'uses' => 'Admin\GalleryController@list']);
        Route::get('admin/gallery/show/{id}', ['as' => 'admin.gallery.show', 'uses' => 'Admin\GalleryController@show']);
        Route::get('admin/gallery/create', ['as' => 'admin.gallery.create', 'uses' => 'Admin\GalleryController@create']);
        Route::post('admin/gallery/store', ['as' => 'admin.gallery.store', 'uses' => 'Admin\GalleryController@store']);
        Route::get('admin/gallery/edit/{id}', ['as' => 'admin.gallery.edit', 'uses' => 'Admin\GalleryController@edit']);
        Route::put('admin/gallery/update/{id}', ['as' => 'admin.gallery.update', 'uses' => 'Admin\GalleryController@update']);
        Route::get('admin/gallery/delete/{id}', ['as' => 'admin.gallery.delete', 'uses' => 'Admin\GalleryController@destroy']);
        /* end gallery */

        /* imageGallery */
        Route::get('admin/imageGallery/create/{id}', ['as' => 'admin.imageGallery.create', 'uses' => 'Admin\ImageGalleryController@create']);
        Route::post('admin/imageGallery/store/{id}', ['as' => 'admin.imageGallery.store', 'uses' => 'Admin\ImageGalleryController@store']);
        Route::get('admin/imageGallery/delete/{id}', ['as' => 'admin.imageGallery.delete', 'uses' => 'Admin\ImageGalleryController@destroy']);
        /* End imageGallery */
    });
    Route::middleware(['EditorAnalist'])->group(function () {
        /* news */
        Route::get('admin/news/index', ['as' => 'admin.news.index', 'uses' => 'Admin\NewsController@list']);
        Route::get('admin/news/show/{id}', ['as' => 'admin.news.show', 'uses' => 'Admin\NewsController@show']);
        Route::get('admin/news/create', ['as' => 'admin.news.create', 'uses' => 'Admin\NewsController@create']);
        Route::post('admin/news/store', ['as' => 'admin.news.store', 'uses' => 'Admin\NewsController@store']);
        Route::get('admin/news/edit/{id}', ['as' => 'admin.news.edit', 'uses' => 'Admin\NewsController@edit']);
        Route::put('admin/news/update/{id}', ['as' => 'admin.news.update', 'uses' => 'Admin\NewsController@update']);
        Route::get('admin/news/delete/{id}', ['as' => 'admin.news.delete', 'uses' => 'Admin\NewsController@destroy'])->withoutMiddleware(['EditorAnalist'])->middleware(['Editor']);
        /* end news */


            /* news */
            Route::get('admin/parceiros/index', ['as' => 'admin.copartner.index', 'uses' => 'Admin\CopartnerController@list']);
            Route::get('admin/parceiros/show/{id}', ['as' => 'admin.copartner.show', 'uses' => 'Admin\CopartnerController@show']);
            Route::get('admin/parceiros/create', ['as' => 'admin.copartner.create', 'uses' => 'Admin\CopartnerController@create']);
            Route::post('admin/parceiros/store', ['as' => 'admin.copartner.store', 'uses' => 'Admin\CopartnerController@store']);
            Route::get('admin/parceiros/edit/{id}', ['as' => 'admin.copartner.edit', 'uses' => 'Admin\CopartnerController@edit']);
            Route::put('admin/parceiros/update/{id}', ['as' => 'admin.copartner.update', 'uses' => 'Admin\CopartnerController@update']);
            Route::get('admin/parceiros/delete/{id}', ['as' => 'admin.copartner.delete', 'uses' => 'Admin\CopartnerController@destroy'])->withoutMiddleware(['EditorAnalist'])->middleware(['Editor']);
            /* end news */

        /* Events */
        Route::get('admin/event/index', ['as' => 'admin.event.index', 'uses' => 'Admin\EventController@list']);
        Route::get('admin/event/show/{id}', ['as' => 'admin.event.show', 'uses' => 'Admin\EventController@show']);
        Route::get('admin/event/create', ['as' => 'admin.event.create', 'uses' => 'Admin\EventController@create']);
        Route::post('admin/event/store', ['as' => 'admin.event.store', 'uses' => 'Admin\EventController@store']);
        Route::get('admin/event/edit/{id}', ['as' => 'admin.event.edit', 'uses' => 'Admin\EventController@edit']);
        Route::put('admin/event/update/{id}', ['as' => 'admin.event.update', 'uses' => 'Admin\EventController@update']);
        Route::get('admin/event/delete/{id}', ['as' => 'admin.event.delete', 'uses' => 'Admin\EventController@destroy'])->withoutMiddleware(['EditorAnalist'])->middleware(['Editor']);
        /* end Events */
    });
});
