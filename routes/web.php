<?php

use App\Http\Controllers\Management\EditableController;
use Illuminate\Support\Facades\Route;
use App\Models\DocumentosBasesLegales;

use App\Http\Controllers\Management\UserController;
use App\Http\Controllers\Management\SliderController;
use App\Http\Controllers\ImageUploadController;
use App\Http\Controllers\Management\AcademiaController;
use App\Http\Controllers\Management\AlianzaController;
use App\Http\Controllers\Management\CategoriaController;
use App\Http\Controllers\Management\ClienteController;
use App\Http\Controllers\Management\ConfiguracionController;
use App\Http\Controllers\Management\ContactoController;
use App\Http\Controllers\Management\HazteClienteController;
use App\Http\Controllers\Management\HomeController;
use App\Http\Controllers\Management\LocalController;
use App\Http\Controllers\Management\NoticiasController;
use App\Http\Controllers\Management\ProductoController;
use App\Http\Controllers\Management\RecetaController;
use App\Http\Controllers\Management\SegmentoController;
use App\Http\Controllers\Management\SubSegmentosController;
use App\Http\Controllers\Management\TipoNegocioController;
use App\Http\Controllers\Management\DocumentosBasesLegalesController;
use App\Http\Controllers\Management\FormularioContactoController;
use App\Http\Controllers\Management\TituloController;


use App\Http\Controllers\Web\HomeController as WebHomeController;
use App\Http\Controllers\Web\AcademiaController as WebAcademiaController;
use App\Http\Controllers\Web\ConocenosController as WebConocenosController;
use App\Http\Controllers\Web\ContactanosController  as WebContactanosController;
use App\Http\Controllers\Web\EditablesController as WebEditablesController;
use App\Http\Controllers\Web\HazteClienteController as WebHazteClienteController;
use App\Http\Controllers\Web\MiniSitioController  as WebMiniSitioController;
use App\Http\Controllers\Web\NoticiasController as WebNoticiasController;
use App\Http\Controllers\Web\RecetasController as WebRecetasController;
use App\Http\Controllers\Web\ProductoController as WebProductoController;
use App\Http\Controllers\Web\FormulariosController as WebFormulariosController;

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



Route::get('/', [WebHomeController::class, 'index']);

Route::get('formulario/{tipo}', [WebFormulariosController::class, 'index']);


Route::group(['as' => 'web.'], function () {
    Route::controller(WebNoticiasController::class)->prefix('noticia')->as('noticia.')->group(function () {
        Route::get('', 'index')->name('index');
        Route::get('detalle/{noticiaId}', 'detalle')->name('detalle');
    });
    Route::controller(WebRecetasController::class)->prefix('receta')->as('receta.')->group(function () {
        Route::get('', 'index')->name('index');
        Route::get('detalle/{recetaId}', 'detalle')->name('detalle');
    });
    Route::controller(WebAcademiaController::class)->prefix('academia')->as('academia.')->group(function () {
        Route::get('', 'index')->name('index');
        Route::get('detalle/{academiaId}', 'detalle')->name('detalle');
    });
});

Route::get('conocenos', [WebConocenosController::class, 'show'])->name('web.conocenos');
Route::get('web/get-comuna-by-region/{region}', [LocalController::class, 'getComunaByRegion'])->name('web.local.get.comuna,by.region');

Route::controller(WebMiniSitioController::class)->prefix('mini-sitio')->group(function () {
    Route::get('filtro/reset/{segmento}', 'reset')->name('web.mini.sitio.reset');
    Route::get('filtro/tags/{tag}/{segmento}', 'filtrar')->name('web.mini.sitio.filtrar');
    Route::get('{url}', 'index')->name('web.mini.sitio');
});

Route::controller(WebProductoController::class)->prefix('productos')->group(function () {
    Route::get('detalle/{url}', 'detalle')->name('web.productos.detalle');
    Route::get('', 'index')->name('web.productos');
});

Route::controller(WebHazteClienteController::class)->prefix('hazte-cliente')->group(function () {
    Route::get('', 'index')->name('web.hazte.cliente');
    Route::post('store', 'store')->name('web.hazte.cliente.store');
    Route::get('listar/locales/{region}/{comuna}', 'getLocales')->name('web.hazte.cliente.get.locales');
});

Route::controller(WebContactanosController::class)->prefix('contacto')->group(function () {
    Route::get('', 'index')->name('web.contacto');
    Route::post('store', 'store')->name('web.contacto.store');
});

Route::controller(WebEditablesController::class)->group(function () {
    Route::get('politicas-de-privacidad', 'index')->name('web.politicas.privacidad');
    Route::get('terminos-condiciones', 'index')->name('web.terminos.condiciones');
    Route::get('informacion-consumidor', 'index')->name('web.informacion.consumidor');
});

Route::get('/nuestras-recetas', function () {
    return view('web.recetas.index');
});
Route::get('/receta-detalle', function () {
    return view('web.recetas.detalle');
});

Route::get('/noticias-tendencias', function () {
    return view('web.noticias.index');
});

Route::get('/detalle-noticia-tendencia', function () {
    return view('web.noticias.detalle');
});

Route::get('/correo', function () {
    return view('mails.index');
});

Route::get('/bases-legales', function () {
    return view('web.basesLegales.index',[
        'documentos' => DocumentosBasesLegales::orderBy('dbs_orden','asc')->get()
    ]);
});

Route::get('/formularios', function () {
    return view('web.formularios.index');
});


Route::post('image-upload', [ImageUploadController::class, 'storeImage'])->name('image.upload');

//ADMINISTRACIÓN
Route::group(['middleware' => ['auth']], function () {
    Route::group(['prefix' => 'administracion', 'as' => 'administracion.'], function () {

        Route::controller(HomeController::class)->prefix('dashboard')->group(function () {
            Route::get('', 'index')->name('index');
            Route::get('contar', 'contar')->name('contar');
        });

        Route::controller(TituloController::class)->prefix('titulo')->group(function () {
            Route::get('', 'index')->name('titulo.index');
            Route::post('update', 'update')->name('titulo.update');
        });

        Route::controller(FormularioContactoController::class)->prefix('pop-up-contacto')->group(function () {
            Route::get('', 'index')->name('popup.contacto.index');
            Route::post('update', 'update')->name('popup.contacto.update');
        });


        Route::controller(UserController::class)->prefix('usuarios')->group(function () {
            Route::get('', 'index')->name('usuarios.index');
            Route::post('', 'store')->name('usuarios.store');
            Route::get('listado', 'getUsers')->name('usuarios.get.users');
            Route::get('{usuario}/perfil', 'edit')->name('usuarios.edit');
            Route::post('actualizar-cuenta', 'actualizar_cuenta')->name('usuarios.editar.cuenta.submit');
            Route::post('{id}', 'update')->name('usuarios.update');
            Route::get('nuevo-usuario', 'create')->name('usuarios.create');
            Route::get('editar-cuenta', 'editarCuenta')->name('usuarios.editar.cuenta');
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
            Route::post('store', 'store')->name('tipo.negocio.store');
            Route::post('update', 'update')->name('tipo.negocio.update');
        });

        Route::controller(SubSegmentosController::class)->prefix('subsegmento')->group(function () {
            Route::get('', 'index')->name('subsegmento.index');
            Route::get('crear', 'crear')->name('subsegmento.crear');
            Route::get('editar/{subsegmento}', 'editar')->name('subsegmento.editar');
            Route::get('listar', 'listar')->name('subsegmento.listar');
            Route::get('eliminar/{subsegmento}', 'eliminar')->name('subsegmento.eliminar');
            Route::post('store', 'store')->name('subsegmento.store');
            Route::post('update', 'update')->name('subsegmento.update');
        });

        Route::controller(SegmentoController::class)->prefix('segmento')->group(function () {
            Route::get('', 'index')->name('segmento.index');
            Route::get('crear', 'crear')->name('segmento.crear');
            Route::get('editar/{segmento}', 'editar')->name('segmento.editar');
            Route::get('listar', 'listar')->name('segmento.listar');
            Route::get('listarWithProducto', 'listarWithProducto')->name('segmento.listarWithProducto');
            Route::get('eliminar/{segmento}', 'eliminar')->name('segmento.eliminar');
            Route::post('store', 'store')->name('segmento.store');
            Route::post('update', 'update')->name('segmento.update');
        });

        Route::controller(CategoriaController::class)->prefix('categoria')->group(function () {
            Route::get('', 'index')->name('categoria.index');
            Route::get('crear', 'crear')->name('categoria.crear');
            Route::get('editar/{categoria}', 'editar')->name('categoria.editar');
            Route::get('listar', 'listar')->name('categoria.listar');
            Route::get('eliminar/{categoria}', 'eliminar')->name('categoria.eliminar');
            Route::post('store', 'store')->name('categoria.store');
            Route::post('update', 'update')->name('categoria.update');
        });

        Route::controller(ProductoController::class)->prefix('producto')->group(function () {
            Route::get('', 'index')->name('producto.index');
            Route::get('crear', 'crear')->name('producto.crear');
            Route::get('editar/{producto}', 'editar')->name('producto.editar');
            Route::get('listar', 'listar')->name('producto.listar');
            Route::get('eliminar/{producto}', 'eliminar')->name('producto.eliminar');
            Route::get('eliminar-imagen/{imagen}', 'eliminar_imagen')->name('producto.eliminar.imagen');
            Route::post('store', 'store')->name('producto.store');
            Route::post('update', 'update')->name('producto.update');
        });

        Route::controller(RecetaController::class)->prefix('receta')->group(function () {
            Route::get('', 'index')->name('receta.index');
            Route::get('crear', 'crear')->name('receta.crear');
            Route::get('editar/{receta}', 'editar')->name('receta.editar');
            Route::get('listar', 'listar')->name('receta.listar');
            Route::get('eliminar/{receta}', 'eliminar')->name('receta.eliminar');
            Route::get('eliminar-imagen/{imagen}', 'eliminar_imagen')->name('receta.eliminar.imagen');
            Route::post('store', 'store')->name('receta.store');
            Route::post('update', 'update')->name('receta.update');
        });

        Route::controller(AcademiaController::class)->prefix('academia')->group(function () {
            Route::get('', 'index')->name('academia.index');
            Route::get('crear', 'crear')->name('academia.crear');
            Route::get('editar/{academia}', 'editar')->name('academia.editar');
            Route::get('listar', 'listar')->name('academia.listar');
            Route::get('eliminar/{academia}', 'eliminar')->name('academia.eliminar');
            Route::post('store', 'store')->name('academia.store');
            Route::post('update', 'update')->name('academia.update');
        });

        Route::controller(ClienteController::class)->prefix('cliente')->group(function () {
            Route::get('', 'index')->name('cliente.index');
            Route::get('crear', 'crear')->name('cliente.crear');
            Route::get('editar/{cliente}', 'editar')->name('cliente.editar');
            Route::get('listar', 'listar')->name('cliente.listar');
            Route::get('eliminar/{cliente}', 'eliminar')->name('cliente.eliminar');
            Route::post('store', 'store')->name('cliente.store');
            Route::post('update', 'update')->name('cliente.update');
        });

        Route::controller(ContactoController::class)->prefix('contacto')->group(function () {
            Route::get('', 'index')->name('contacto.index');
            Route::get('ver/{contacto}', 'editar')->name('contacto.editar');
            Route::get('listar', 'listar')->name('contacto.listar');
        });

        Route::controller(DocumentosBasesLegalesController::class)->prefix('bases-legales')->group(function () {
            Route::get('', 'index')->name('bases.legales.index');
            Route::get('crear', 'crear')->name('bases.legales.crear');
            Route::get('editar/{documento}', 'editar')->name('bases.legales.editar');
            Route::get('listar', 'listar')->name('bases.legales.listar');
            Route::get('eliminar/{documento}', 'eliminar')->name('bases.legales.eliminar');
            Route::post('store', 'store')->name('bases.legales.store');
            Route::post('update', 'update')->name('bases.legales.update');
        });





        Route::controller(HazteClienteController::class)->prefix('hazte-cliente')->group(function () {
            Route::get('', 'index')->name('hazte.cliente.index');
            Route::get('ver/{cliente}', 'editar')->name('hazte.cliente.editar');
            Route::get('listar', 'listar')->name('hazte.cliente.listar');
        });

        Route::controller(LocalController::class)->prefix('local')->group(function () {
            Route::get('', 'index')->name('local.index');
            Route::get('crear', 'crear')->name('local.crear');
            Route::get('editar/{local}', 'editar')->name('local.editar');
            Route::get('listar', 'listar')->name('local.listar');
            Route::get('eliminar/{local}', 'eliminar')->name('local.eliminar');
            Route::post('store', 'store')->name('local.store');
            Route::post('update', 'update')->name('local.update');
            Route::get('get-comuna-by-region/{region}', 'getComunaByRegion')->name('local.get.comuna,by.region');
        });

        Route::controller(ConfiguracionController::class)->prefix('configuracion')->group(function () {
            Route::get('', 'index')->name('configuracion.index');
            Route::get('crear', 'crear')->name('configuracion.crear');
            Route::get('editar/{configuracion}', 'editar')->name('configuracion.editar');
            Route::get('listar', 'listar')->name('configuracion.listar');
            Route::get('listarByTipo/', 'listarByTipo')->name('configuracion.listarByTipo');
            Route::get('eliminar/{configuracion}', 'eliminar')->name('configuracion.eliminar');
            Route::post('store', 'store')->name('configuracion.store');
            Route::post('update', 'update')->name('configuracion.update');
        });
    });
});
