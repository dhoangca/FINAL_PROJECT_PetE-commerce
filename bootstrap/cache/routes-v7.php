<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/sanctum/csrf-cookie' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sanctum.csrf-cookie',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/health-check' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.healthCheck',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/execute-solution' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.executeSolution',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/update-config' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.updateConfig',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::76r2nQpebqbwXjc4',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/Clients/AuthU/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'Clients.Register',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'Clients.postRegisterU',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/Clients/AuthU/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'Clients.Login',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'Clients.postLoginU',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/Clients/AuthU/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'Clients.logout',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/Clients/Contents/shop' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'Clients.shop',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/Clients/Contents/contact' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'Clients.contact',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/Clients/Contents/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'Clients.search',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/Clients/Contents/profile/edit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'Clients.profile.edit',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/Clients/Contents/profile/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'Clients.profile.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/Clients/Cart/cart' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'Clients.cart',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/Clients/Cart/get-cart-count' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'Clients.getCartCount',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/Clients/Cart/checkout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'Clients.postCheckout',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/Clients/Order/order' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'Clients.placeOrder',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/Admins' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'Admins.welcome',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/Admins/index' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'Admins.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/Admins/AuthA/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'Admins.Register',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'Admins.postRegister',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/Admins/AuthA/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'Admins.Login',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'Admins.postLogin',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/Admins/AuthA/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'Admins.logout',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/Admins/users/listuser' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'Admins.listuser',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/Admins/users/manageusers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'Admins.manageusers',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/Admins/Pets/listpets' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'Admins.listpets',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/Admins/Pets/managepets' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'Admins.managepets',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/Admins/Pets/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'Admins.petcreate',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'Admins.generated::7MSC7Y6oiiaIGCbO',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/Admins/Products/listproducts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'Admins.listproducts',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/Admins/Products/manageproducts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'Admins.manageproducts',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/Admins/Products/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'Admins.productcreate',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'Admins.generated::l3k0saesVKeAPE0U',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/Admins/Categoris/listcategoris' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'Admins.listcategoris',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/Admins/Categoris/managecategoris' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'Admins.managecategoris',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/Admins/Categoris/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'Admins.categorycreate',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'Admins.generated::zVdLXvQFuio0KzIz',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/Admins/Orders/listorders' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'Admins.listorders',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/Admins/Orders/manageorders' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'Admins.manageorders',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/Clients/(?|C(?|ontents/(?|shopdetailp(?|roducts/([^/]++)(*:64)|et/([^/]++)(*:82))|filtered\\-products\\-and\\-pets/([^/]++)(*:128))|art/(?|add\\-to\\-cart/([^/]++)/([^/]++)(*:175)|deletecart/([^/]++)(*:202)))|Order/order/(?|success/([^/]++)(*:243)|information(?:/([^/]++))?(*:276)))|/Admins/(?|users/(?|users/([^/]++)/(?|block(*:329)|unblock(*:344))|delete/([^/]++)(*:368))|P(?|ets/(?|edit/([^/]++)(?|(*:404))|delete/([^/]++)(*:428))|roducts/(?|edit/([^/]++)(?|(*:464))|delete/([^/]++)(*:488)))|Categoris/(?|edit/([^/]++)(?|(*:527))|delete/([^/]++)(*:551))|Orders/(?|de(?|tail/([^/]++)(*:588)|lete/([^/]++)(*:609))|edit/([^/]++)(?|(*:634)))))/?$}sDu',
    ),
    3 => 
    array (
      64 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'Clients.shopdetailproducts',
          ),
          1 => 
          array (
            0 => 'product_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      82 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'Clients.shopdetailpet',
          ),
          1 => 
          array (
            0 => 'pet_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      128 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'Clients.filtered-products-and-pets',
          ),
          1 => 
          array (
            0 => 'category_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      175 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'Clients.addToCart',
          ),
          1 => 
          array (
            0 => 'item_id',
            1 => 'item_type',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      202 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'Clients.deletecart',
          ),
          1 => 
          array (
            0 => 'item_id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      243 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'Clients.orderSuccess',
          ),
          1 => 
          array (
            0 => 'order',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      276 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'Clients.purchaseorder',
            'status' => NULL,
          ),
          1 => 
          array (
            0 => 'status',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      329 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'Admins.users.block',
          ),
          1 => 
          array (
            0 => 'user_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      344 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'Admins.users.unblock',
          ),
          1 => 
          array (
            0 => 'user_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      368 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'Admins.',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      404 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'Admins.generated::sJalOP0efnP7odKl',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'Admins.generated::Uk5t1dV3ej8lz3Fk',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      428 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'Admins.generated::SAYFpWwsNIAC2ps5',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      464 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'Admins.generated::sxotBSeYBP3WAQSW',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'Admins.generated::5osGAXkdYACh8PW6',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      488 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'Admins.generated::pqwh5nlLRvnxhToE',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      527 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'Admins.generated::omSFBtbFUu0z9dc1',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'Admins.generated::tljoVN7pgfwJXZUf',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      551 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'Admins.generated::mlYn98OdFgbZTfAq',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      588 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'Admins.generated::GsPiXBBxXQGgXIIB',
          ),
          1 => 
          array (
            0 => 'order_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      609 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'Admins.generated::UKO2VWPpmVNpC8en',
          ),
          1 => 
          array (
            0 => 'order_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      634 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'Admins.generated::0xjNH3CKOXQhKens',
          ),
          1 => 
          array (
            0 => 'order_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'Admins.generated::7oVAeN8yfRlU2oSN',
          ),
          1 => 
          array (
            0 => 'order_id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'sanctum.csrf-cookie' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sanctum/csrf-cookie',
      'action' => 
      array (
        'uses' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'controller' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'namespace' => NULL,
        'prefix' => 'sanctum',
        'where' => 
        array (
        ),
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'sanctum.csrf-cookie',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.healthCheck' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_ignition/health-check',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\HealthCheckController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\HealthCheckController',
        'as' => 'ignition.healthCheck',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.executeSolution' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/execute-solution',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\ExecuteSolutionController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\ExecuteSolutionController',
        'as' => 'ignition.executeSolution',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.updateConfig' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/update-config',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\UpdateConfigController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\UpdateConfigController',
        'as' => 'ignition.updateConfig',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::76r2nQpebqbwXjc4' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:77:"function (\\Illuminate\\Http\\Request $request) {
    return $request->user();
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000000034f0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::76r2nQpebqbwXjc4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '/',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Clients\\ClientsController@index',
        'controller' => 'App\\Http\\Controllers\\Clients\\ClientsController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'Clients.Register' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'Clients/AuthU/register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\AuthU\\RegisterUController@getRegisterU',
        'controller' => 'App\\Http\\Controllers\\AuthU\\RegisterUController@getRegisterU',
        'as' => 'Clients.Register',
        'namespace' => NULL,
        'prefix' => 'Clients/AuthU',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'Clients.postRegisterU' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'Clients/AuthU/register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\AuthU\\RegisterUController@postRegisterU',
        'controller' => 'App\\Http\\Controllers\\AuthU\\RegisterUController@postRegisterU',
        'as' => 'Clients.postRegisterU',
        'namespace' => NULL,
        'prefix' => 'Clients/AuthU',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'Clients.Login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'Clients/AuthU/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\AuthU\\LoginUController@getLoginU',
        'controller' => 'App\\Http\\Controllers\\AuthU\\LoginUController@getLoginU',
        'as' => 'Clients.Login',
        'namespace' => NULL,
        'prefix' => 'Clients/AuthU',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'Clients.postLoginU' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'Clients/AuthU/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\AuthU\\LoginUController@postLoginU',
        'controller' => 'App\\Http\\Controllers\\AuthU\\LoginUController@postLoginU',
        'as' => 'Clients.postLoginU',
        'namespace' => NULL,
        'prefix' => 'Clients/AuthU',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'Clients.logout' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'Clients/AuthU/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\AuthU\\LogoutUController@logoutU',
        'controller' => 'App\\Http\\Controllers\\AuthU\\LogoutUController@logoutU',
        'as' => 'Clients.logout',
        'namespace' => NULL,
        'prefix' => 'Clients/AuthU',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'Clients.shop' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'Clients/Contents/shop',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Clients\\ClientsController@shop',
        'controller' => 'App\\Http\\Controllers\\Clients\\ClientsController@shop',
        'as' => 'Clients.shop',
        'namespace' => NULL,
        'prefix' => 'Clients/Contents',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'Clients.shopdetailproducts' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'Clients/Contents/shopdetailproducts/{product_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Clients\\ClientsController@shopdetailproducts',
        'controller' => 'App\\Http\\Controllers\\Clients\\ClientsController@shopdetailproducts',
        'as' => 'Clients.shopdetailproducts',
        'namespace' => NULL,
        'prefix' => 'Clients/Contents',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'Clients.shopdetailpet' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'Clients/Contents/shopdetailpet/{pet_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Clients\\ClientsController@shopdetailpet',
        'controller' => 'App\\Http\\Controllers\\Clients\\ClientsController@shopdetailpet',
        'as' => 'Clients.shopdetailpet',
        'namespace' => NULL,
        'prefix' => 'Clients/Contents',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'Clients.contact' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'Clients/Contents/contact',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Clients\\ClientsController@contact',
        'controller' => 'App\\Http\\Controllers\\Clients\\ClientsController@contact',
        'as' => 'Clients.contact',
        'namespace' => NULL,
        'prefix' => 'Clients/Contents',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'Clients.search' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'Clients/Contents/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Clients\\SearchController@search',
        'controller' => 'App\\Http\\Controllers\\Clients\\SearchController@search',
        'as' => 'Clients.search',
        'namespace' => NULL,
        'prefix' => 'Clients/Contents',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'Clients.profile.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'Clients/Contents/profile/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Clients\\ProfileController@edit',
        'controller' => 'App\\Http\\Controllers\\Clients\\ProfileController@edit',
        'as' => 'Clients.profile.edit',
        'namespace' => NULL,
        'prefix' => 'Clients/Contents',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'Clients.profile.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'Clients/Contents/profile/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Clients\\ProfileController@update',
        'controller' => 'App\\Http\\Controllers\\Clients\\ProfileController@update',
        'as' => 'Clients.profile.update',
        'namespace' => NULL,
        'prefix' => 'Clients/Contents',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'Clients.filtered-products-and-pets' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'Clients/Contents/filtered-products-and-pets/{category_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Clients\\CategoriController@filterByCategory',
        'controller' => 'App\\Http\\Controllers\\Clients\\CategoriController@filterByCategory',
        'as' => 'Clients.filtered-products-and-pets',
        'namespace' => NULL,
        'prefix' => 'Clients/Contents',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'Clients.cart' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'Clients/Cart/cart',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Clients\\CartController@cart',
        'controller' => 'App\\Http\\Controllers\\Clients\\CartController@cart',
        'as' => 'Clients.cart',
        'namespace' => NULL,
        'prefix' => 'Clients/Cart',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'Clients.addToCart' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'Clients/Cart/add-to-cart/{item_id}/{item_type}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Clients\\CartController@addToCart',
        'controller' => 'App\\Http\\Controllers\\Clients\\CartController@addToCart',
        'as' => 'Clients.addToCart',
        'namespace' => NULL,
        'prefix' => 'Clients/Cart',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'Clients.getCartCount' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'Clients/Cart/get-cart-count',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Clients\\CartController@getCartCount',
        'controller' => 'App\\Http\\Controllers\\Clients\\CartController@getCartCount',
        'as' => 'Clients.getCartCount',
        'namespace' => NULL,
        'prefix' => 'Clients/Cart',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'Clients.deletecart' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'Clients/Cart/deletecart/{item_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Clients\\CartController@delete',
        'controller' => 'App\\Http\\Controllers\\Clients\\CartController@delete',
        'as' => 'Clients.deletecart',
        'namespace' => NULL,
        'prefix' => 'Clients/Cart',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'Clients.postCheckout' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'Clients/Cart/checkout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.user',
        ),
        'uses' => 'App\\Http\\Controllers\\Clients\\CartController@checkoutForm',
        'controller' => 'App\\Http\\Controllers\\Clients\\CartController@checkoutForm',
        'as' => 'Clients.postCheckout',
        'namespace' => NULL,
        'prefix' => 'Clients/Cart',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'Clients.orderSuccess' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'Clients/Order/order/success/{order}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.user',
        ),
        'uses' => 'App\\Http\\Controllers\\Clients\\OrderController@orderSuccess',
        'controller' => 'App\\Http\\Controllers\\Clients\\OrderController@orderSuccess',
        'as' => 'Clients.orderSuccess',
        'namespace' => NULL,
        'prefix' => 'Clients/Order',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'Clients.placeOrder' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'Clients/Order/order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.user',
        ),
        'uses' => 'App\\Http\\Controllers\\Clients\\OrderController@placeOrder',
        'controller' => 'App\\Http\\Controllers\\Clients\\OrderController@placeOrder',
        'as' => 'Clients.placeOrder',
        'namespace' => NULL,
        'prefix' => 'Clients/Order',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'Clients.purchaseorder' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'Clients/Order/order/information/{status?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth.user',
        ),
        'uses' => 'App\\Http\\Controllers\\Clients\\PurchaseOrderController@purchaseorder',
        'controller' => 'App\\Http\\Controllers\\Clients\\PurchaseOrderController@purchaseorder',
        'as' => 'Clients.purchaseorder',
        'namespace' => NULL,
        'prefix' => 'Clients/Order',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'Admins.welcome' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'Admins',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminController@welcome',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminController@welcome',
        'as' => 'Admins.welcome',
        'namespace' => NULL,
        'prefix' => '/Admins',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'Admins.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'Admins/index',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'role:admin,staff',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminController@index',
        'as' => 'Admins.index',
        'namespace' => NULL,
        'prefix' => '/Admins',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'Admins.Register' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'Admins/AuthA/register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\AuthA\\RegisterController@getRegister',
        'controller' => 'App\\Http\\Controllers\\AuthA\\RegisterController@getRegister',
        'as' => 'Admins.Register',
        'namespace' => NULL,
        'prefix' => 'Admins/AuthA',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'Admins.postRegister' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'Admins/AuthA/register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\AuthA\\RegisterController@postRegister',
        'controller' => 'App\\Http\\Controllers\\AuthA\\RegisterController@postRegister',
        'as' => 'Admins.postRegister',
        'namespace' => NULL,
        'prefix' => 'Admins/AuthA',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'Admins.Login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'Admins/AuthA/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\AuthA\\LoginController@getLogin',
        'controller' => 'App\\Http\\Controllers\\AuthA\\LoginController@getLogin',
        'as' => 'Admins.Login',
        'namespace' => NULL,
        'prefix' => 'Admins/AuthA',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'Admins.postLogin' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'Admins/AuthA/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\AuthA\\LoginController@postLogin',
        'controller' => 'App\\Http\\Controllers\\AuthA\\LoginController@postLogin',
        'as' => 'Admins.postLogin',
        'namespace' => NULL,
        'prefix' => 'Admins/AuthA',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'Admins.logout' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'Admins/AuthA/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\AuthA\\LogoutController@logout',
        'controller' => 'App\\Http\\Controllers\\AuthA\\LogoutController@logout',
        'as' => 'Admins.logout',
        'namespace' => NULL,
        'prefix' => 'Admins/AuthA',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'Admins.listuser' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'Admins/users/listuser',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'role:admin',
          2 => 'can:access-users',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserController@listuser',
        'controller' => 'App\\Http\\Controllers\\Admin\\UserController@listuser',
        'as' => 'Admins.listuser',
        'namespace' => NULL,
        'prefix' => 'Admins/users',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'Admins.manageusers' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'Admins/users/manageusers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'role:admin',
          2 => 'can:access-users',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserController@manageusers',
        'controller' => 'App\\Http\\Controllers\\Admin\\UserController@manageusers',
        'as' => 'Admins.manageusers',
        'namespace' => NULL,
        'prefix' => 'Admins/users',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'Admins.users.block' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'Admins/users/users/{user_id}/block',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'role:admin',
          2 => 'can:access-users',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserController@blockUser',
        'controller' => 'App\\Http\\Controllers\\Admin\\UserController@blockUser',
        'as' => 'Admins.users.block',
        'namespace' => NULL,
        'prefix' => 'Admins/users',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'Admins.users.unblock' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'Admins/users/users/{user_id}/unblock',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'role:admin',
          2 => 'can:access-users',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserController@unblockUser',
        'controller' => 'App\\Http\\Controllers\\Admin\\UserController@unblockUser',
        'as' => 'Admins.users.unblock',
        'namespace' => NULL,
        'prefix' => 'Admins/users',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'Admins.' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'Admins/users/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'role:admin',
          2 => 'can:access-users',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserController@delete',
        'controller' => 'App\\Http\\Controllers\\Admin\\UserController@delete',
        'as' => 'Admins.',
        'namespace' => NULL,
        'prefix' => 'Admins/users',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'Admins.listpets' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'Admins/Pets/listpets',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'role:admin,staff',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ManagePetController@listpets',
        'controller' => 'App\\Http\\Controllers\\Admin\\ManagePetController@listpets',
        'as' => 'Admins.listpets',
        'namespace' => NULL,
        'prefix' => 'Admins/Pets',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'Admins.managepets' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'Admins/Pets/managepets',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'role:admin,staff',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ManagePetController@managepets',
        'controller' => 'App\\Http\\Controllers\\Admin\\ManagePetController@managepets',
        'as' => 'Admins.managepets',
        'namespace' => NULL,
        'prefix' => 'Admins/Pets',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'Admins.petcreate' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'Admins/Pets/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'role:admin,staff',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ManagePetController@getCreatePets',
        'controller' => 'App\\Http\\Controllers\\Admin\\ManagePetController@getCreatePets',
        'as' => 'Admins.petcreate',
        'namespace' => NULL,
        'prefix' => 'Admins/Pets',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'Admins.generated::7MSC7Y6oiiaIGCbO' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'Admins/Pets/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'role:admin,staff',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ManagePetController@postCreatePets',
        'controller' => 'App\\Http\\Controllers\\Admin\\ManagePetController@postCreatePets',
        'as' => 'Admins.generated::7MSC7Y6oiiaIGCbO',
        'namespace' => NULL,
        'prefix' => 'Admins/Pets',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'Admins.generated::sJalOP0efnP7odKl' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'Admins/Pets/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'role:admin,staff',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ManagePetController@getEditPets',
        'controller' => 'App\\Http\\Controllers\\Admin\\ManagePetController@getEditPets',
        'as' => 'Admins.generated::sJalOP0efnP7odKl',
        'namespace' => NULL,
        'prefix' => 'Admins/Pets',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'Admins.generated::Uk5t1dV3ej8lz3Fk' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'Admins/Pets/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'role:admin,staff',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ManagePetController@postEditPets',
        'controller' => 'App\\Http\\Controllers\\Admin\\ManagePetController@postEditPets',
        'as' => 'Admins.generated::Uk5t1dV3ej8lz3Fk',
        'namespace' => NULL,
        'prefix' => 'Admins/Pets',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'Admins.generated::SAYFpWwsNIAC2ps5' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'Admins/Pets/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'role:admin,staff',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ManagePetController@delete',
        'controller' => 'App\\Http\\Controllers\\Admin\\ManagePetController@delete',
        'as' => 'Admins.generated::SAYFpWwsNIAC2ps5',
        'namespace' => NULL,
        'prefix' => 'Admins/Pets',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'Admins.listproducts' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'Admins/Products/listproducts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'role:admin,staff',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ManageProductsController@listproducts',
        'controller' => 'App\\Http\\Controllers\\Admin\\ManageProductsController@listproducts',
        'as' => 'Admins.listproducts',
        'namespace' => NULL,
        'prefix' => 'Admins/Products',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'Admins.manageproducts' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'Admins/Products/manageproducts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'role:admin,staff',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ManageProductsController@manageproducts',
        'controller' => 'App\\Http\\Controllers\\Admin\\ManageProductsController@manageproducts',
        'as' => 'Admins.manageproducts',
        'namespace' => NULL,
        'prefix' => 'Admins/Products',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'Admins.productcreate' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'Admins/Products/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'role:admin,staff',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ManageProductsController@getCreateProducts',
        'controller' => 'App\\Http\\Controllers\\Admin\\ManageProductsController@getCreateProducts',
        'as' => 'Admins.productcreate',
        'namespace' => NULL,
        'prefix' => 'Admins/Products',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'Admins.generated::l3k0saesVKeAPE0U' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'Admins/Products/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'role:admin,staff',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ManageProductsController@postCreateProducts',
        'controller' => 'App\\Http\\Controllers\\Admin\\ManageProductsController@postCreateProducts',
        'as' => 'Admins.generated::l3k0saesVKeAPE0U',
        'namespace' => NULL,
        'prefix' => 'Admins/Products',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'Admins.generated::sxotBSeYBP3WAQSW' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'Admins/Products/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'role:admin,staff',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ManageProductsController@getEditProducts',
        'controller' => 'App\\Http\\Controllers\\Admin\\ManageProductsController@getEditProducts',
        'as' => 'Admins.generated::sxotBSeYBP3WAQSW',
        'namespace' => NULL,
        'prefix' => 'Admins/Products',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'Admins.generated::5osGAXkdYACh8PW6' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'Admins/Products/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'role:admin,staff',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ManageProductsController@postEditProducts',
        'controller' => 'App\\Http\\Controllers\\Admin\\ManageProductsController@postEditProducts',
        'as' => 'Admins.generated::5osGAXkdYACh8PW6',
        'namespace' => NULL,
        'prefix' => 'Admins/Products',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'Admins.generated::pqwh5nlLRvnxhToE' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'Admins/Products/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'role:admin,staff',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ManageProductsController@delete',
        'controller' => 'App\\Http\\Controllers\\Admin\\ManageProductsController@delete',
        'as' => 'Admins.generated::pqwh5nlLRvnxhToE',
        'namespace' => NULL,
        'prefix' => 'Admins/Products',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'Admins.listcategoris' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'Admins/Categoris/listcategoris',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'role:admin,staff',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ManageCategoriController@listcategoris',
        'controller' => 'App\\Http\\Controllers\\Admin\\ManageCategoriController@listcategoris',
        'as' => 'Admins.listcategoris',
        'namespace' => NULL,
        'prefix' => 'Admins/Categoris',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'Admins.managecategoris' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'Admins/Categoris/managecategoris',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'role:admin,staff',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ManageCategoriController@managecategoris',
        'controller' => 'App\\Http\\Controllers\\Admin\\ManageCategoriController@managecategoris',
        'as' => 'Admins.managecategoris',
        'namespace' => NULL,
        'prefix' => 'Admins/Categoris',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'Admins.categorycreate' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'Admins/Categoris/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'role:admin,staff',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ManageCategoriController@getCreateCategori',
        'controller' => 'App\\Http\\Controllers\\Admin\\ManageCategoriController@getCreateCategori',
        'as' => 'Admins.categorycreate',
        'namespace' => NULL,
        'prefix' => 'Admins/Categoris',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'Admins.generated::zVdLXvQFuio0KzIz' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'Admins/Categoris/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'role:admin,staff',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ManageCategoriController@postCreateCategori',
        'controller' => 'App\\Http\\Controllers\\Admin\\ManageCategoriController@postCreateCategori',
        'as' => 'Admins.generated::zVdLXvQFuio0KzIz',
        'namespace' => NULL,
        'prefix' => 'Admins/Categoris',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'Admins.generated::omSFBtbFUu0z9dc1' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'Admins/Categoris/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'role:admin,staff',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ManageCategoriController@getEditCategori',
        'controller' => 'App\\Http\\Controllers\\Admin\\ManageCategoriController@getEditCategori',
        'as' => 'Admins.generated::omSFBtbFUu0z9dc1',
        'namespace' => NULL,
        'prefix' => 'Admins/Categoris',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'Admins.generated::tljoVN7pgfwJXZUf' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'Admins/Categoris/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'role:admin,staff',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ManageCategoriController@postEditCategori',
        'controller' => 'App\\Http\\Controllers\\Admin\\ManageCategoriController@postEditCategori',
        'as' => 'Admins.generated::tljoVN7pgfwJXZUf',
        'namespace' => NULL,
        'prefix' => 'Admins/Categoris',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'Admins.generated::mlYn98OdFgbZTfAq' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'Admins/Categoris/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'role:admin,staff',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ManageCategoriController@delete',
        'controller' => 'App\\Http\\Controllers\\Admin\\ManageCategoriController@delete',
        'as' => 'Admins.generated::mlYn98OdFgbZTfAq',
        'namespace' => NULL,
        'prefix' => 'Admins/Categoris',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'Admins.listorders' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'Admins/Orders/listorders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'role:admin,staff',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ManageOrdersController@listorders',
        'controller' => 'App\\Http\\Controllers\\Admin\\ManageOrdersController@listorders',
        'as' => 'Admins.listorders',
        'namespace' => NULL,
        'prefix' => 'Admins/Orders',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'Admins.manageorders' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'Admins/Orders/manageorders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'role:admin,staff',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ManageOrdersController@manageorders',
        'controller' => 'App\\Http\\Controllers\\Admin\\ManageOrdersController@manageorders',
        'as' => 'Admins.manageorders',
        'namespace' => NULL,
        'prefix' => 'Admins/Orders',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'Admins.generated::GsPiXBBxXQGgXIIB' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'Admins/Orders/detail/{order_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'role:admin,staff',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ManageOrdersController@detailorder',
        'controller' => 'App\\Http\\Controllers\\Admin\\ManageOrdersController@detailorder',
        'as' => 'Admins.generated::GsPiXBBxXQGgXIIB',
        'namespace' => NULL,
        'prefix' => 'Admins/Orders',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'Admins.generated::0xjNH3CKOXQhKens' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'Admins/Orders/edit/{order_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'role:admin,staff',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ManageOrdersController@getEditOrders',
        'controller' => 'App\\Http\\Controllers\\Admin\\ManageOrdersController@getEditOrders',
        'as' => 'Admins.generated::0xjNH3CKOXQhKens',
        'namespace' => NULL,
        'prefix' => 'Admins/Orders',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'Admins.generated::7oVAeN8yfRlU2oSN' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'Admins/Orders/edit/{order_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'role:admin,staff',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ManageOrdersController@postEditOrders',
        'controller' => 'App\\Http\\Controllers\\Admin\\ManageOrdersController@postEditOrders',
        'as' => 'Admins.generated::7oVAeN8yfRlU2oSN',
        'namespace' => NULL,
        'prefix' => 'Admins/Orders',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'Admins.generated::UKO2VWPpmVNpC8en' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'Admins/Orders/delete/{order_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'role:admin,staff',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ManageOrdersController@delete',
        'controller' => 'App\\Http\\Controllers\\Admin\\ManageOrdersController@delete',
        'as' => 'Admins.generated::UKO2VWPpmVNpC8en',
        'namespace' => NULL,
        'prefix' => 'Admins/Orders',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
  ),
)
);
