<?php

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
//Cargamos las clases
use App\Http\Middleware\ApiAuthMiddleware;



/*Route::get('/', function () {
    return view('welcome');
});

Route::get('/prueba', function(){
    return '<h2>Texto desde una ruta</h2>';
});*/

//RUTAS API
/**
 * GET: Conseguir datos o recursos
 * POST: Guardar datos o recursos hacer logica desde formulario
 * PUT: Actualizar datos o recursos
 * DELETE: Eliminar datos o recurnos
 */
    /*PRUEBAs
    Route::get('/usuario/pruebas', 'UserController@pruebas');*/
    //Route::get('/proveedor/pruebas', 'ProveedoresController@pruebas');

    /****** RUTAS DE CONTROLADOR DE USUARIO ******/
    //elegimos el nombre de la direccion y luego el controlador con el metodo a llamar
    Route::post('/api/register', 'UserController@register');
    Route::post('/api/login', 'UserController@login');
    Route::put('/api/user/update', 'UserController@update');//metodo put especializado para actualizaciones
    Route::post('/api/user/upload', 'UserController@upload')->middleware(App\Http\Middleware\ApiAuthMiddleware::class);//asignamos metodo de autenticacion a traves de middleware
    Route::get('/api/user/avatar/{filename}', 'UserController@getImage');
    Route::get('/api/user/detail/{idEmpleado}', 'UserController@detail');
    
    /****** RUTAS DE CONTROLADOR DE PROVEEDORES ******/
    Route::post('/api/proveedor/register','ProveedoresController@register');
    Route::get('/api/proveedor/index','ProveedoresController@index');//mostrar proveedores activos
    Route::get('/api/proveedor/proveedoresDes','ProveedoresController@proveedoresDes');//mostrar proveedores deshabilitados
    Route::get('/api/proveedor/{proveedor}','ProveedoresController@show');//sacar proveedor por id
    Route::get('/api/proveedor/provContactos/{proveedor}','ProveedoresController@provContactos');//obtener contactos a partir de idProveedor
    Route::get('/api/proveedor/getNCP/{proveedor}','ProveedoresController@getNCP');//obtener contactos a partir de idProveedor
    Route::put('/api/proveedor/updatestatus/{proveedor}', 'ProveedoresController@updatestatus');//actualizacion de Status del proveedor
    
    /*******bancos */
    Route::get('/api/banco/index','BancoController@index');//mostrar BANcos
    /*******PRODUCTOS */
    Route::get('/api/productos/index','ProductoController@index');//mostrar productos activos
    Route::get('/api/productos/productosDes','ProductoController@productoDes');//mostrar proveedores deshabilitados
    Route::post('/api/productos/uploadimage', 'ProductoController@uploadimage');
    Route::get('/api/productos/getImageProduc/{filname}', 'ProductoController@getImageProduc');
    Route::post('/api/productos/register','ProductoController@register');
    Route::get('/api/productos/getlastproduct','ProductoController@getlastproduct');
    Route::get('/api/productos/{producto}','ProductoController@show');//sacar producto por id
    Route::get('/api/productos/showTwo/{producto}','ProductoController@showTwo');//sacar producto por id
    Route::put('/api/productos/updatestatus/{producto}', 'ProductoController@updateStatus');//actualizacion de Status del producto
    Route::put('/api/productos/updateProduct/{producto}', 'ProductoController@updateProduct');//actualizacion de los datos del producto
    Route::get('/api/productos/searchclaveEx/{producto}', 'ProductoController@getProductClaveex');
    /************DEPARTAMENTOS*/
    Route::get('/api/departamentos/index','DepartamentoController@index');//mostrar departamentos
    /************CATEGORIAS*/
    Route::get('/api/categoria/index','CategoriaController@index');//mostrar categorias
    Route::get('/api/categoria/getIdDepa/{value}','CategoriaController@getIdDepa');
    /************SUBCATEGORIAS*/
    Route::get('/api/subcategoria/index','SubCategoriaController@index');//mostrar subcategorias
    Route::get('/api/subcategoria/getIdSuca/{value}','SubCategoriaController@getIdSuca');
     /************MARCAS*/
    Route::get('/api/marca/index','MarcaController@index');//mostrar marcas
    /************MEDIDAS*/
    Route::get('/api/medidas/index','MedidaController@index');//mostrar medidas
    /************ALMACENES*/
    Route::get('/api/almacenes/index','AlmacenesController@index');//mostrar almacenes
    /************LOTE */
    Route::post('/api/lote/register','LoteController@register');//registro de lote
    Route::get('/api/lote/index','LoteController@index');// mostrar lotes
/***************************************************************************************+ */
