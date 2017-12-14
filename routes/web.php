<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('/', function () use ($app) {
	$app_name = env('APP_NAME', 'betlolo');
    $app_view = env('APP_VIEW', 'betlolo');
    return view($app_view.'/index', ['app_name' => $app_name]);
});


$app->get('/login', function () use ($app) {
    $app_name = env('APP_NAME', 'betlolo');
    $app_view = env('APP_VIEW', 'betlolo');
    return view($app_view.'/login', ['app_name' => $app_name]);
});




$app->get('/logoff', function () use ($app) {
    session_destroy();
    echo "<script>window.location = '/';</script>";
});


$app->get('/admin/', function () use ($app) {

    $file = 'login';
    try {
       
        if(isset($_SESSION['logado']) && $_SESSION['logado']['logado']== 1)
            $file='admin';
    } catch (Exception $e) {
        $loggin_situation = array();
    }
    $msg = isset($_SESSION['login_message'])?$_SESSION['login_message']:''; 
    return view($file, ['app_name' => 'app de teste' , 'public' => '/adm/' , 'mensagem'=>$msg]);
});

$app->get('/admin/logoff', function () use ($app) {
    session_destroy();
    return view('login', ['app_name' => 'app de teste' , 'public' => '/adm/', 'mensagem'=>'até a proxima']);
});

$app->post('admin/login', 'LoginController@login');
/*$app->post('/admin/login', function () use ($app) {
    //return view('admin', ['app_name' => 'app de teste' , 'public' => '/adm/']);
});
*/
$app->get('/admin/listar/{entidade}', function ($entidade) use ($app) {
    return view('admin', ['app_name' => 'app de teste' , 'public' => '/adm/' , 'entidade'=>$entidade]);
});

$app->get('/admin/editar/{entidade}', function ($entidade) use ($app) {
    return view('admin', ['app_name' => 'app de teste' , 'public' => '/adm/' , 'entidade'=>$entidade]);
});

$app->get('/admin/editar/{entidade}/{id}', function ($entidade , $id ) use ($app) {
    return view('admin', ['app_name' => 'app de teste' , 'public' => '/adm/' , 'entidade'=>$entidade, 'id'=>$id]);
});

$app->get('/app/', function () use ($app) {
    return view('app', ['app_name' => 'app de teste']);
});

$app->get('/api/', function () use ($app) {
    return 'retorno do teste de api';
});

$app->get('/site/', function () use ($app) {
    return 'retorno do teste de api';
});



$app->get('/cookies/', function () use ($app) {

  

         return 'retorno do teste de cookie';
});



/*
      $cookie = @$_COOKIE['store_client_id'];

        // Sets the cookie for the shopping cart if doesn't exist
        if (!$cookie) {
            $_COOKIE['store_client_id']=md5('baconpedacudo').$id;
            echo 'nao existia o log desse usuario';
        }
*/


/**
 * Routes for resource group
 */
$app->get('api/group', 'GroupsController@all');
$app->get('api/group/{id}', 'GroupsController@get');
$app->post('api/group', 'GroupsController@add');
$app->put('api/group/{id}', 'GroupsController@put');
$app->delete('api/group/{id}', 'GroupsController@remove');

/**
 * Routes for resource user
 */
$app->get('api/user', 'UsersController@all');
$app->get('api/user/{id}', 'UsersController@get');
$app->post('api/user', 'UsersController@add');
$app->put('api/user/{id}', 'UsersController@put');
$app->delete('api/user/{id}', 'UsersController@remove');

/**
 * Routes for resource store
 */
$app->get('api/store', 'StoresController@all');
$app->get('api/store/{id}', 'StoresController@get');
$app->post('api/store', 'StoresController@add');
$app->put('api/store/{id}', 'StoresController@put');
$app->delete('api/store/{id}', 'StoresController@remove');

/**
 * Routes for resource categorie
 */
$app->get('api/categorie', 'CategoriesController@all');
$app->get('api/categorie/{id}', 'CategoriesController@get');
$app->post('api/categorie', 'CategoriesController@add');
$app->put('api/categorie/{id}', 'CategoriesController@put');
$app->delete('api/categorie/{id}', 'CategoriesController@remove');

/**
 * Routes for resource sub-categorie
 */
$app->get('api/sub-categorie', 'SubCategoriesController@all');
$app->get('api/sub-categorie/{id}', 'SubCategoriesController@get');
$app->post('api/sub-categorie', 'SubCategoriesController@add');
$app->put('api/sub-categorie/{id}', 'SubCategoriesController@put');
$app->delete('api/sub-categorie/{id}', 'SubCategoriesController@remove');

/**
 * Routes for resource product
 */
$app->get('api/product', 'ProductsController@all');
$app->get('api/product/{id}', 'ProductsController@get');
$app->post('api/product', 'ProductsController@add');
$app->put('api/product/{id}', 'ProductsController@put');
$app->delete('api/product/{id}', 'ProductsController@remove');





/**
 * Routes for resource content
 */
$app->get('api/content', 'ContentsController@all');
$app->get('api/content/{id}', 'ContentsController@get');
$app->post('api/content', 'ContentsController@add');
$app->put('api/content/{id}', 'ContentsController@put');
$app->delete('api/content/{id}', 'ContentsController@remove');


$app->post('upload/file', 'FileController@saveFile');
$app->get('file/list', 'FileController@getFileList');
$app->get('file/list/{content}/{id}', 'FileController@getFileListForEntity');
$app->get('view/{filename}', 'FileController@viewFile');
$app->get('file/delete/{filename}', 'FileController@deleteFile');

//$app->get('storage-file/{filename}', 'FileController@getFile');

$app->get('file/{filename}', function ($filename ) use ($app) {
    die("aqui");

    return response()->make(\Illuminate\Support\Facades\Storage::get('storage/app/public/'.$filename.".jpg"), 200, [
            'Content-Type' => \Illuminate\Support\Facades\Storage::mimeType($filename),
            'Content-Disposition' => 'inline; '.$filename,
        ]);
});
/**
 * Routes for resource address
 */
$app->get('address', 'AddressesController@all');
$app->get('address/{id}', 'AddressesController@get');
$app->post('address', 'AddressesController@add');
$app->put('address/{id}', 'AddressesController@put');
$app->delete('address/{id}', 'AddressesController@remove');



/**
 * Routes for resource product-categorie
 */
$app->get('api/product-categorie', 'ProductCategoriesController@all');
$app->get('api/product-categorie/{id}', 'ProductCategoriesController@get');
$app->post('api/product-categorie', 'ProductCategoriesController@add');
$app->put('api/product-categorie/{id}', 'ProductCategoriesController@put');
$app->delete('api/product-categorie/{id}', 'ProductCategoriesController@remove');

/**
 * Routes for resource product-sub-categorie
 */
$app->get('api/product-sub-categorie', 'ProductSubCategoriesController@all');
$app->get('api/product-sub-categorie/{id}', 'ProductSubCategoriesController@get');
$app->post('api/product-sub-categorie', 'ProductSubCategoriesController@add');
$app->put('api/product-sub-categorie/{id}', 'ProductSubCategoriesController@put');
$app->delete('api/product-sub-categorie/{id}', 'ProductSubCategoriesController@remove');



/**
 * Routes for resource manufacturer
 */
$app->get('api/manufacturer', 'ManufacturersController@all');
$app->get('api/manufacturer/{id}', 'ManufacturersController@get');
$app->post('api/manufacturer', 'ManufacturersController@add');
$app->put('api/manufacturer/{id}', 'ManufacturersController@put');
$app->delete('api/manufacturer/{id}', 'ManufacturersController@remove');

/**
 * Routes for resource tag
 */
$app->get('api/tag', 'TagsController@all');
$app->get('api/tag/{id}', 'TagsController@get');
$app->post('api/tag', 'TagsController@add');
$app->put('api/tag/{id}', 'TagsController@put');
$app->delete('api/tag/{id}', 'TagsController@remove');

/**
 * Routes for resource cart
 */
$app->get('api/cart', 'CartsController@all');
$app->get('api/cart/{id}', 'CartsController@get');
$app->post('api/cart', 'CartsController@add');
$app->put('api/cart/{id}', 'CartsController@put');
$app->delete('api/cart/{id}', 'CartsController@remove');

/**
 * Routes for resource cart-product
 */
$app->get('api/cart-product', 'CartProductsController@all');
$app->get('api/cart-product/{id}', 'CartProductsController@get');
$app->post('api/cart-product', 'CartProductsController@add');
$app->put('api/cart-product/{id}', 'CartProductsController@put');
$app->delete('api/cart-product/{id}', 'CartProductsController@remove');

/**
 * Routes for resource coupon
 */
$app->get('api/coupon', 'CouponsController@all');
$app->get('api/coupon/{id}', 'CouponsController@get');
$app->post('api/coupon', 'CouponsController@add');
$app->put('api/coupon/{id}', 'CouponsController@put');
$app->delete('api/coupon/{id}', 'CouponsController@remove');

/**
 * Routes for resource attach
 */
$app->get('api/attach', 'AttachesController@all');
$app->get('api/attach/{id}', 'AttachesController@get');
$app->post('api/attach', 'AttachesController@add');
$app->put('api/attach/{id}', 'AttachesController@put');
$app->delete('api/attach/{id}', 'AttachesController@remove');

/**
 * Routes for resource payment
 */
$app->get('payment', 'PaymentsController@all');
$app->get('payment/{id}', 'PaymentsController@get');
$app->post('payment', 'PaymentsController@add');
$app->put('payment/{id}', 'PaymentsController@put');
$app->delete('payment/{id}', 'PaymentsController@remove');

/**
 * colocar routes geradas pelo generator acima dessa linha , as linhas abaixo são custom
 //nao apagar até aonde tem aviso
 */
$app->get('shop/main', 'ShopController@principal');
$app->get('shop/categoria/{categoria}', 'ShopController@categoria');
$app->get('shop/produto/{produto}', 'ShopController@produto');
$app->get('shop/carrinho', 'ShopController@carrinho');
$app->post('shop/carrinho', 'ShopController@fragmento');
$app->post('shop/carrinho/add', 'ShopController@adiciona');
$app->post('shop/carrinho/remove', 'ShopController@remove');
$app->post('shop/carrinho/remove_produto', 'ShopController@remove_produto');
$app->get('shop/checkout', 'ShopController@check');
$app->post('shop/checkout', 'ShopController@checkout');
$app->post('shop/novo_cliente', 'ShopController@novo_cliente');
$app->post('shop/login', 'ShopController@login');
$app->post('shop/endpoint/extension', 'ShopController@endpoint');
$app->get('shop/imagem', 'ShopController@imagem');

//aqui foram as routes implementadas até agora...
//generator vai colocar mais routes aqui enbaixo , caso o stores.yml nao mude , apagar tudo.
//se o stores.yml mudar , colocar a nova entidade (as routes dela acima do shop main)

/**
 * Routes for resource uber
 */
$app->get('uber', 'UbersController@index');
$app->get('uber/registrar', 'UbersController@registrar');
$app->post('uber/cadastrar', 'UbersController@cadastrar');
$app->post('uber/logar', 'UbersController@logar');


/**
 * Routes for resource lulu
 */
$app->get('luluweb', 'LulusController@index');
/*$app->get('lulu/{id}', 'LulusController@get');
$app->post('lulu', 'LulusController@add');
$app->put('lulu/{id}', 'LulusController@put');
$app->delete('lulu/{id}', 'LulusController@remove');*/

/**
 * Routes for resource btc
 */
$app->get('btc', 'BtcsController@index');

/**
 * Routes for resource original
 */
$app->get('original', 'OriginalsController@index');
$app->get('original/sdk', 'OriginalsController@sdk');
/**
 * Routes for resource betlolo
 */
$app->get('betlolo', 'BetlolosController@index');
$app->post('betlolo/registrar', 'BetlolosController@registrar');
$app->post('betlolo/logar', 'BetlolosController@logar');
$app->get('betlolo/minhapagina', 'BetlolosController@minha');
$app->get('betlolo/ranking', 'BetlolosController@ranking');
$app->get('betlolo/indicacao', 'BetlolosController@indicacao');
$app->get('recuperar', 'BetlolosController@recuperar');
$app->post('betlolo/lembrar', 'BetlolosController@lembrar');
