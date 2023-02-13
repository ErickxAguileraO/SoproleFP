<?php

use App\Http\Controllers\Management\EditableController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Management\UserController;
use App\Http\Controllers\Management\SliderController;
use App\Http\Controllers\ImageUploadController;
use App\Http\Controllers\Management\AlianzaController;
use App\Http\Controllers\Management\NoticiasController;
use App\Http\Controllers\Management\TipoNegocioController;

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

Route::get('/', function () {
    return view('web.home');
});
Route::get('/conocenos', function () {
    return view('web.conocenos.index');
});

Route::get('/politicas-de-privacidad', function () {
    return view('web.politicas.index');
});

Route::get('/terminos-condiciones', function () {
    return view('web.terminos.index');
});

Route::get('/informacion-consumidor', function () {
    return view('web.informacionConsumidor.index');
});

Route::get('/mini-sitio', function () {
    return view('web.miniSitios.index');
});

Route::get('/nuestras-recetas', function () {
    return view('web.recetas.index');
});
Route::get('/receta-detalle', function () {
    return view('web.recetas.detalle');
});


Route::get('/productos', function () {
    return view('web.productos.index');
});
Route::get('/producto-detalle', function () {
    return view('web.productos.detalle');
});

Route::get('/noticias-tendencias', function () {
    return view('web.noticias.index');
});

Route::get('/detalle-noticia-tendencia', function () {
    return view('web.noticias.detalle');
});


Route::get('/academia', function () {
    return view('web.academia.index');
});

Route::get('/academia-detalle', function () {
    return view('web.academia.detalle');
});


Route::get('/hazte-cliente', function () {
    return view('web.cliente.index');
});

Route::get('/contacto', function () {
    return view('web.contacto.index');
});

Route::post('image-upload', [ImageUploadController::class, 'storeImage'])->name('image.upload');

//ADMINISTRACIÓN
Route::group(['middleware' => ['auth']], function () {
    Route::group(['prefix' => 'administracion', 'as' => 'administracion.'], function () {
        Route::view('dashboard', 'management.home.index')->name('index');

        Route::controller(UserController::class)->prefix('usuarios')->group(function () {
            Route::get('', 'index')->name('usuarios.index');
            Route::post('', 'store')->name('usuarios.store');
            Route::get('listado', 'getUsers')->name('usuarios.get.users');
            Route::get('{usuario}/perfil', 'edit')->name('usuarios.edit');
            Route::post('{id}', 'update')->name('usuarios.update');
            Route::get('nuevo-usuario', 'create')->name('usuarios.create');
        });

        Route::controller(SliderController::class)->prefix('slider')->group(function () {
            Route::get('', 'index')->name('slider.index');
            Route::get('crear', 'crear')->name('slider.crear');
            Route::get('editar/{slider}', 'editar')->name('slider.editar');
            Route::get('listar', 'listar')->name('slider.listar');
            Route::get('eliminar/{slider}', 'eliminar')->name('slider.eliminar');
            Route::post('store', 'store')->name('slider.store');
            Route::post('update', 'update')->name('slider.update');
        });

        Route::controller(EditableController::class)->prefix('editable')->group(function () {
            Route::get('', 'index')->name('editable.index');
            Route::get('crear', 'crear')->name('editable.crear');
            Route::get('editar/{editable}', 'editar')->name('editable.editar');
            Route::get('listar', 'listar')->name('editable.listar');
            Route::get('eliminar/{editable}', 'eliminar')->name('editable.eliminar');
            Route::get('eliminar-imagen/{imagen}', 'eliminar_imagen')->name('editable.eliminar.imagen');
            Route::post('store', 'store')->name('editable.store');
            Route::post('update', 'update')->name('editable.update');
        });

        Route::controller(AlianzaController::class)->prefix('alianza')->group(function () {
            Route::get('', 'index')->name('alianza.index');
            Route::get('crear', 'crear')->name('alianza.crear');
            Route::get('editar/{alianza}', 'editar')->name('alianza.editar');
            Route::get('listar', 'listar')->name('alianza.listar');
            Route::get('eliminar/{alianza}', 'eliminar')->name('alianza.eliminar');
            Route::post('store', 'store')->name('alianza.store');
            Route::post('update', 'update')->name('alianza.update');
        });

        Route::controller(NoticiasController::class)->prefix('noticia')->group(function () {
            Route::get('', 'index')->name('noticia.index');
            Route::get('crear', 'crear')->name('noticia.crear');
            Route::get('editar/{noticia}', 'editar')->name('noticia.editar');
            Route::get('listar', 'listar')->name('noticia.listar');
            Route::get('eliminar/{noticia}', 'eliminar')->name('noticia.eliminar');
            Route::get('eliminar-imagen/{imagen}', 'eliminar_imagen')->name('noticia.eliminar.imagen');
            Route::post('store', 'store')->name('noticia.store');
            Route::post('update', 'update')->name('noticia.update');
        });

        Route::controller(TipoNegocioController::class)->prefix('tipo-negocio')->group(function () {
            Route::get('', 'index')->name('tipo.negocio.index');
            Route::get('crear', 'crear')->name('tipo.negocio.crear');
            Route::get('editar/{tipoNegocio}', 'editar')->name('tipo.negocio.editar');
            Route::get('listar', 'listar')->name('tipo.negocio.listar');
            Route::get('eliminar/{tipoNegocio}', 'eliminar')->name('tipo.negocio.eliminar');
            Route::get('eliminar-imagen/{imagen}', 'eliminar_imagen')->name('tipo.negocio.eliminar.imagen');
            Route::post('store', 'store')->name('tipo.negocio.store');
            Route::post('update', 'update')->name('tipo.negocio.update');
        });
    });
});
