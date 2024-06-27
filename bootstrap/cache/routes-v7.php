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
      '/clockwork' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::YcBke6ysOHGa7txX',
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
      '/clockwork/app' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::H951xtSrEYlX5ucJ',
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
      '/__clockwork' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::e7k8jlglnGwgEuIg',
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
      '/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'login',
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
            '_route' => 'generated::O1DcVeMmxKVWvoI7',
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
      '/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'logout',
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
      '/forgot-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.request',
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
            '_route' => 'password.email',
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
      '/reset-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.update',
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
      '/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'register',
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
            '_route' => 'generated::4AEcDxEGKwjcavd6',
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
      '/user/profile-information' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user-profile-information.update',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user-password.update',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/confirm-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::TiaplOJCf0WKaJ25',
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
            '_route' => 'password.confirm',
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
      '/user/confirmed-password-status' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.confirmation',
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
      '/two-factor-challenge' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'two-factor.login',
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
            '_route' => 'generated::hqwsHiGO0Ckfkr80',
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
      '/user/two-factor-authentication' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'two-factor.enable',
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
        1 => 
        array (
          0 => 
          array (
            '_route' => 'two-factor.disable',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/confirmed-two-factor-authentication' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'two-factor.confirm',
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
      '/user/two-factor-qr-code' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'two-factor.qr-code',
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
      '/user/two-factor-secret-key' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'two-factor.secret-key',
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
      '/user/two-factor-recovery-codes' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'two-factor.recovery-codes',
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
            '_route' => 'generated::drp1OO9XNJiBq0QE',
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
      '/user/profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'profile.show',
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
      '/teams/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'teams.create',
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
      '/current-team' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'current-team.update',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sanctum/csrf-cookie' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fz1xP6TyqbL7dW9i',
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
      '/livewire/upload-file' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'livewire.upload-file',
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
      '/livewire/livewire.js' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::TZ6gR3hHY6wMh39B',
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
      '/livewire/livewire.js.map' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::xKSCpiRfEPuOpVAd',
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
      '/broadcasting/auth' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::xvm3otnpLk4e9lh3',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
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
            '_route' => 'generated::HwasCkDmTayYRGkf',
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
      '/api/myprofile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::T91c4FISiNpNedUt',
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
      '/api/user/profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZzUJRUJsY4xGQrWF',
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
      '/api/user/photo' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::q3JDVPczVp7arfgF',
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
      '/api/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5lJy757ga9SHnCjV',
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
      '/api/post/comment' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MnK2jkjf3Z71f6jc',
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
      '/api/post/reply' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::oy0AncfRsQcHlxW8',
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
      '/api/users' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lf7RLVCLnDzTZEEN',
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
      '/api/like' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vIjJRSGCw8MdMzt6',
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
      '/api/post/commentcom' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jbqUgWpsTC5K8NqW',
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
      '/api/post/replycom' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hm6Pgh0jECnsVNuG',
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
      '/api/likecom' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::AIbPSEPFq4KjXe9O',
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
      '/api/ceklike' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CEWpEUbEAYicDtw4',
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
      '/api/ceklikecome' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::J9Y2ZzvH1nEQQGAr',
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
      '/api/categoriespremium' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8oLx9ahjKWyK2I7k',
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
      '/api/premium-content' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7E45KIYxTPLM2sHn',
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
      '/api/today-premium' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gNJtzZoiP3oCRygl',
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
      '/api/popularpremium' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::PfJ2TnBlae11DehK',
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
      '/api/popularcategorypremium' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Kq2k4hSHymR6OBuj',
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
      '/api/article' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3Czxlj6CH1bQ01pj',
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
      '/api/popularnews' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::23S0JIWpCcCbOXEU',
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
      '/api/categoryprem' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'categoryprem.index',
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
            '_route' => 'categoryprem.store',
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
      '/api/categoryprem/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'categoryprem.create',
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
      '/api/subcategoryprem' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::leMLeoeZkD9sIwBL',
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
      '/api/category-parent-prem' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::eIrRvbTX317kLtCg',
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
      '/api/notifications' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::UJZpv87SyyGzau7C',
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
      '/api/category' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'category.index',
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
            '_route' => 'category.store',
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
      '/api/category/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'category.create',
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
      '/api/subcategory' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QZUo66u4UmSotLkV',
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
      '/api/category-parent' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0hM9BfcAvrMCaw6X',
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
      '/api/category-community' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'category-community.index',
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
            '_route' => 'category-community.store',
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
      '/api/category-community/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'category-community.create',
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
      '/api/categories' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4SZGZd0NjOkqZnqM',
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
      '/api/content' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::yeNVR1AjEIZLgn45',
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
      '/api/today' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QkTJdKZDYczCP3m8',
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
      '/api/populararticle' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::VcznjVRublo4m2xl',
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
      '/api/popularcategory' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0QtkbDiu06R6KZeh',
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
      '/api/community-news' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Qi55OFSNijXZbCge',
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
      '/api/popularcommunity' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9gKuPqOPiJm1ZWoS',
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
      '/api/communities' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0gsuj81DcVwpL87J',
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
      '/api/categoriescom' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::KupOJm359kXQSdlW',
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
      '/api/community-video' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::93oOvQTu8pfkd2GY',
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
      '/api/community-group' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XWfwSeZ7ItWyxXV5',
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
      '/api/poppular-community-video' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::c7SUtuGjrRwHrSXc',
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
      '/api/webinar' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::qQMZoqvIE63wjyA9',
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
      '/api/video-article' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fOxqhzm1Xsvo61RH',
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
      '/api/popularvideoarticle' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FqOLdlfiXd9KAhcW',
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
      '/api/webinarsurveyquestion' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vPNptrwt0xs1fsKk',
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
      '/api/register-webinar-answer' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::88HizdrlVojVhAog',
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
            '_route' => 'generated::bhXt53SNNt4Opjz1',
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
      '/api/tags' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mM1U1NNbCCX029QT',
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
      '/api/tagscommunity' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Gjl6gc6DcPBuf29p',
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
      '/api/tagswebinar' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hXrdtLUJpVxNTplc',
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
      '/api/getads' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9IZa2ooF9ipitkNi',
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
      '/api/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::omTfuPWbkjB91Rug',
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
      '/api/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::g9miwHHRfIcM8BJE',
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
      '/api/email/verification-notification' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::C2A0C4JBd6sa7QYY',
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
      '/api/auth/google' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::AHBoc31CppTWKcbi',
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
      '/api/auth/google/callback' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CnpiggWJo7c3Uomz',
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
            '_route' => 'generated::JEkLpMsr34Xdi0Ca',
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
      '/debug-sentry' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fmO0yq07DQV4OQp5',
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
      '/auth/google' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::UGWZ9sTayOLCLtaI',
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
      '/auth/google/callback' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7IEet0M4lFlMBvEN',
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
      '/administrator' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard',
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
            '_route' => 'generated::FGtniAdY5tx7OR9Z',
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
      '/administrator/analytic' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mCuul12ASzuRddBv',
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
      '/administrator/admin' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::TMUXbv2cTDGOFWmT',
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
            '_route' => 'admin.store',
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
      '/administrator/admin/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Ah7kOuZOP1J5m1s9',
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
      '/administrator/post' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'post.index',
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
            '_route' => 'post.store',
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
      '/administrator/post/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'post.create',
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
      '/administrator/premiumcontent' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'premiumcontent.index',
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
            '_route' => 'premiumcontent.store',
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
      '/administrator/premiumcontent/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'premiumcontent.create',
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
      '/administrator/video-article' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'video-article.index',
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
            '_route' => 'video-article.store',
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
      '/administrator/video-article/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'video-article.create',
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
      '/administrator/webinars' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'webinars.index',
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
            '_route' => 'webinars.store',
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
      '/administrator/webinars/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'webinars.create',
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
      '/administrator/category-article' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'category-article.index',
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
            '_route' => 'category-article.store',
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
      '/administrator/category-article/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'category-article.create',
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
      '/administrator/category-premium' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'category-premium.index',
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
            '_route' => 'category-premium.store',
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
      '/administrator/category-premium/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'category-premium.create',
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
      '/administrator/category-webinars' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'category-webinars.index',
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
            '_route' => 'category-webinars.store',
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
      '/administrator/category-webinars/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'category-webinars.create',
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
      '/administrator/categorycommunity' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'categorycommunity.index',
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
            '_route' => 'categorycommunity.store',
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
      '/administrator/categorycommunity/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'categorycommunity.create',
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
      '/administrator/tags' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'tags.index',
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
            '_route' => 'tags.store',
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
      '/administrator/tags/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'tags.create',
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
      '/administrator/subcat' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::g1xyKkrCsWqXyPL4',
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
      '/administrator/tagswebinars' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'tagswebinars.index',
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
            '_route' => 'tagswebinars.store',
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
      '/administrator/tagswebinars/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'tagswebinars.create',
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
      '/administrator/tagscommunity' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'tagscommunity.index',
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
            '_route' => 'tagscommunity.store',
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
      '/administrator/tagscommunity/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'tagscommunity.create',
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
      '/administrator/community-news' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'community-news.index',
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
            '_route' => 'community-news.store',
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
      '/administrator/community-news/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'community-news.create',
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
      '/administrator/community-video' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'community-video.index',
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
            '_route' => 'community-video.store',
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
      '/administrator/community-video/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'community-video.create',
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
      '/administrator/communitiesgroup' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'communitiesgroup.index',
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
            '_route' => 'communitiesgroup.store',
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
      '/administrator/communitiesgroup/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'communitiesgroup.create',
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
      '/administrator/media' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pMbQJAVHf0RVphg6',
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
      '/administrator/roles' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'roles.index',
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
            '_route' => 'roles.store',
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
      '/administrator/roles/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'roles.create',
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
      '/administrator/users' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'users.index',
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
            '_route' => 'users.store',
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
      '/administrator/users/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'users.create',
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
      '/administrator/author/export' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::rBUgZmxVe8JcW66b',
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
      '/administrator/content/export' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Kx4K5oEdCZzIPHAo',
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
      '/administrator/likes/export' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::RA7mCoz3IrPuXKrN',
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
      '/administrator/comments/export' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7vlnsBQszCluIo4f',
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
      '/administrator/superadmin' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::bYKcBv99zq5xeZlr',
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
      '/administrator/editor' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XyUfCiakKxRiczt4',
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
      '/administrator/editor/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::C2rkt7DxcdnTpc8v',
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
      '/administrator/editor/posteditor' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::rTKoLztVLkc3owW5',
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
      '/administrator/contributor' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::VM5XsNKO68j87FI4',
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
      '/administrator/subscriber' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::xwcI2Yi54oll7rr2',
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
      '/administrator/comment' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'comment.index',
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
            '_route' => 'comment.store',
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
      '/administrator/comment/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'comment.create',
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
      '/administrator/commentcom' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'commentcom.index',
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
            '_route' => 'commentcom.store',
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
      '/administrator/commentcom/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'commentcom.create',
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
      '/administrator/ads' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ads.index',
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
            '_route' => 'ads.store',
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
      '/administrator/ads/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ads.create',
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
      0 => '{^(?|/__clockwork/(?|((?:[0-9-]+|latest))/extended(*:52)|((?:[0-9-]+|latest))(?:/((?:next|previous))(?:/(\\d+))?)?(*:115)|([^/]++)(*:131)|a(?|uth(*:146)|pp(*:156))|(.+)(*:169))|/clockwork/(.+)(*:193)|/reset\\-password/([^/]++)(*:226)|/team(?|s/([^/]++)(*:252)|\\-invitations/([^/]++)(*:282))|/livewire/(?|message/([^/]++)(*:320)|preview\\-file/([^/]++)(*:350))|/a(?|pi/(?|category(?|prem/([^/]++)(?|(*:397)|/edit(*:410)|(*:418))|/([^/]++)(?|(*:439)|/edit(*:452)|(*:460))|\\-community/([^/]++)(?|(*:492)|/edit(*:505)|(*:513)))|image(?|/([^/]++)(*:540)|user/([^/]++)(*:561))|v(?|ideo/([^/]++)(*:587)|erify\\-email/([^/]++)/([^/]++)(*:625))|webinarsurveyquestion/([^/]++)(*:664))|dministrator/(?|ad(?|min/(?|([^/]++)(?|(*:712)|/edit(*:725)|(*:733))|postadmin(*:751))|s/([^/]++)(?|(*:773)|/edit(*:786)|(*:794)))|p(?|ost/(?|([^/]++)(?|(*:826)|/edit(*:839)|(*:847))|edittitle/([^/]++)(*:874)|updatetitle(*:893))|remiumcontent/(?|([^/]++)(?|(*:930)|/edit(*:943)|(*:951))|edittitle/([^/]++)(*:978)))|video\\-article/([^/]++)(?|(*:1014)|/edit(*:1028)|(*:1037))|webinars/([^/]++)(?|(*:1067)|/edit(*:1081)|(*:1090))|r(?|egister\\-webinar\\-export/([^/]++)(*:1137)|oles/([^/]++)(?|(*:1162)|/edit(*:1176)|(*:1185)))|c(?|ategory(?|\\-(?|article/([^/]++)(?|(*:1234)|/edit(*:1248)|(*:1257))|premium/([^/]++)(?|(*:1286)|/edit(*:1300)|(*:1309))|webinars/([^/]++)(?|(*:1339)|/edit(*:1353)|(*:1362)))|community/([^/]++)(?|(*:1394)|/edit(*:1408)|(*:1417)))|omm(?|unit(?|y\\-(?|news/(?|([^/]++)(?|(*:1466)|/edit(*:1480)|(*:1489))|edittitle/([^/]++)(*:1517))|video/([^/]++)(?|(*:1544)|/edit(*:1558)|(*:1567)))|iesgroup/([^/]++)(?|(*:1598)|/edit(*:1612)|(*:1621)))|ent(?|/([^/]++)(?|(*:1650)|/edit(*:1664)|(*:1673))|com/([^/]++)(?|(*:1698)|/edit(*:1712)|(*:1721)))))|tags(?|/([^/]++)(?|(*:1753)|/edit(*:1767)|(*:1776))|webinars/([^/]++)(?|(*:1806)|/edit(*:1820)|(*:1829))|community/([^/]++)(?|(*:1860)|/edit(*:1874)|(*:1883)))|users/([^/]++)(?|(*:1911)|/edit(*:1925)|(*:1934)))))/?$}sDu',
    ),
    3 => 
    array (
      52 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::rSBVCQNjYSyWgTZB',
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
          5 => false,
          6 => NULL,
        ),
      ),
      115 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dCqfuu2rtsdWYYPS',
            'direction' => NULL,
            'count' => NULL,
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'direction',
            2 => 'count',
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
      131 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::PhEjb6nhv17Z4LMW',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      146 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kFIQrGP40HcufBOZ',
          ),
          1 => 
          array (
          ),
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
      156 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1KMKEFSyhJyMkyyN',
          ),
          1 => 
          array (
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
      169 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cBazJskukTh9Q7KH',
          ),
          1 => 
          array (
            0 => 'path',
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
      193 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::KzKlQKu2eqbshI65',
          ),
          1 => 
          array (
            0 => 'path',
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
      226 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.reset',
          ),
          1 => 
          array (
            0 => 'token',
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
      252 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'teams.show',
          ),
          1 => 
          array (
            0 => 'team',
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
      282 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'team-invitations.accept',
          ),
          1 => 
          array (
            0 => 'invitation',
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
      320 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'livewire.message',
          ),
          1 => 
          array (
            0 => 'name',
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
      350 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'livewire.preview-file',
          ),
          1 => 
          array (
            0 => 'filename',
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
      397 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'categoryprem.show',
          ),
          1 => 
          array (
            0 => 'categoryprem',
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
      410 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'categoryprem.edit',
          ),
          1 => 
          array (
            0 => 'categoryprem',
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
      418 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'categoryprem.update',
          ),
          1 => 
          array (
            0 => 'categoryprem',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
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
            '_route' => 'categoryprem.destroy',
          ),
          1 => 
          array (
            0 => 'categoryprem',
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
      439 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'category.show',
          ),
          1 => 
          array (
            0 => 'category',
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
      452 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'category.edit',
          ),
          1 => 
          array (
            0 => 'category',
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
      460 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'category.update',
          ),
          1 => 
          array (
            0 => 'category',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
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
            '_route' => 'category.destroy',
          ),
          1 => 
          array (
            0 => 'category',
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
      492 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'category-community.show',
          ),
          1 => 
          array (
            0 => 'category_community',
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
      505 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'category-community.edit',
          ),
          1 => 
          array (
            0 => 'category_community',
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
      513 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'category-community.update',
          ),
          1 => 
          array (
            0 => 'category_community',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
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
            '_route' => 'category-community.destroy',
          ),
          1 => 
          array (
            0 => 'category_community',
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
      540 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Abk3O6X72GRcrfz7',
          ),
          1 => 
          array (
            0 => 'filename',
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
      561 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::YQ7dg3vW7PMBh38Q',
          ),
          1 => 
          array (
            0 => 'filename',
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
      587 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hq7ataSyjHWJb978',
          ),
          1 => 
          array (
            0 => 'filename',
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
      625 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'verification.verify',
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'hash',
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
      664 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MYWA5EitwxSrdFxC',
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
      712 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.show',
          ),
          1 => 
          array (
            0 => 'admin',
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
      725 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.edit',
          ),
          1 => 
          array (
            0 => 'admin',
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
      733 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.update',
          ),
          1 => 
          array (
            0 => 'admin',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
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
            '_route' => 'admin.destroy',
          ),
          1 => 
          array (
            0 => 'admin',
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
      751 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mlYYMdJnQbGOQOCK',
          ),
          1 => 
          array (
          ),
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
      773 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ads.show',
          ),
          1 => 
          array (
            0 => 'ad',
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
      786 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ads.edit',
          ),
          1 => 
          array (
            0 => 'ad',
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
      794 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ads.update',
          ),
          1 => 
          array (
            0 => 'ad',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
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
            '_route' => 'ads.destroy',
          ),
          1 => 
          array (
            0 => 'ad',
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
      826 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'post.show',
          ),
          1 => 
          array (
            0 => 'post',
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
      839 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'post.edit',
          ),
          1 => 
          array (
            0 => 'post',
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
      847 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'post.update',
          ),
          1 => 
          array (
            0 => 'post',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
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
            '_route' => 'post.destroy',
          ),
          1 => 
          array (
            0 => 'post',
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
      874 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hmuRZgB7izo9Lp20',
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
      893 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::KtpB8HdVNWY7lWlx',
          ),
          1 => 
          array (
          ),
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
      930 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'premiumcontent.show',
          ),
          1 => 
          array (
            0 => 'premiumcontent',
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
      943 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'premiumcontent.edit',
          ),
          1 => 
          array (
            0 => 'premiumcontent',
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
      951 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'premiumcontent.update',
          ),
          1 => 
          array (
            0 => 'premiumcontent',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
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
            '_route' => 'premiumcontent.destroy',
          ),
          1 => 
          array (
            0 => 'premiumcontent',
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
      978 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5GdFooV51ahZuNOQ',
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
      1014 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'video-article.show',
          ),
          1 => 
          array (
            0 => 'video_article',
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
      1028 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'video-article.edit',
          ),
          1 => 
          array (
            0 => 'video_article',
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
      1037 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'video-article.update',
          ),
          1 => 
          array (
            0 => 'video_article',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
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
            '_route' => 'video-article.destroy',
          ),
          1 => 
          array (
            0 => 'video_article',
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
      1067 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'webinars.show',
          ),
          1 => 
          array (
            0 => 'webinar',
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
      1081 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'webinars.edit',
          ),
          1 => 
          array (
            0 => 'webinar',
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
      1090 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'webinars.update',
          ),
          1 => 
          array (
            0 => 'webinar',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
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
            '_route' => 'webinars.destroy',
          ),
          1 => 
          array (
            0 => 'webinar',
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
      1137 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'exportregisterwebinar',
          ),
          1 => 
          array (
            0 => 'webinar_slug',
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
      1162 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'roles.show',
          ),
          1 => 
          array (
            0 => 'role',
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
      1176 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'roles.edit',
          ),
          1 => 
          array (
            0 => 'role',
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
      1185 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'roles.update',
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
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
            '_route' => 'roles.destroy',
          ),
          1 => 
          array (
            0 => 'role',
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
      1234 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'category-article.show',
          ),
          1 => 
          array (
            0 => 'category_article',
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
      1248 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'category-article.edit',
          ),
          1 => 
          array (
            0 => 'category_article',
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
      1257 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'category-article.update',
          ),
          1 => 
          array (
            0 => 'category_article',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
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
            '_route' => 'category-article.destroy',
          ),
          1 => 
          array (
            0 => 'category_article',
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
      1286 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'category-premium.show',
          ),
          1 => 
          array (
            0 => 'category_premium',
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
      1300 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'category-premium.edit',
          ),
          1 => 
          array (
            0 => 'category_premium',
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
      1309 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'category-premium.update',
          ),
          1 => 
          array (
            0 => 'category_premium',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
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
            '_route' => 'category-premium.destroy',
          ),
          1 => 
          array (
            0 => 'category_premium',
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
      1339 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'category-webinars.show',
          ),
          1 => 
          array (
            0 => 'category_webinar',
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
      1353 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'category-webinars.edit',
          ),
          1 => 
          array (
            0 => 'category_webinar',
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
      1362 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'category-webinars.update',
          ),
          1 => 
          array (
            0 => 'category_webinar',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
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
            '_route' => 'category-webinars.destroy',
          ),
          1 => 
          array (
            0 => 'category_webinar',
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
      1394 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'categorycommunity.show',
          ),
          1 => 
          array (
            0 => 'categorycommunity',
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
      1408 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'categorycommunity.edit',
          ),
          1 => 
          array (
            0 => 'categorycommunity',
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
      1417 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'categorycommunity.update',
          ),
          1 => 
          array (
            0 => 'categorycommunity',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
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
            '_route' => 'categorycommunity.destroy',
          ),
          1 => 
          array (
            0 => 'categorycommunity',
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
      1466 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'community-news.show',
          ),
          1 => 
          array (
            0 => 'community_news',
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
      1480 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'community-news.edit',
          ),
          1 => 
          array (
            0 => 'community_news',
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
      1489 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'community-news.update',
          ),
          1 => 
          array (
            0 => 'community_news',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
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
            '_route' => 'community-news.destroy',
          ),
          1 => 
          array (
            0 => 'community_news',
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
      1517 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NGaBldE4qJHzjzH2',
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
      1544 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'community-video.show',
          ),
          1 => 
          array (
            0 => 'community_video',
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
      1558 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'community-video.edit',
          ),
          1 => 
          array (
            0 => 'community_video',
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
      1567 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'community-video.update',
          ),
          1 => 
          array (
            0 => 'community_video',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
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
            '_route' => 'community-video.destroy',
          ),
          1 => 
          array (
            0 => 'community_video',
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
      1598 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'communitiesgroup.show',
          ),
          1 => 
          array (
            0 => 'communitiesgroup',
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
      1612 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'communitiesgroup.edit',
          ),
          1 => 
          array (
            0 => 'communitiesgroup',
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
      1621 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'communitiesgroup.update',
          ),
          1 => 
          array (
            0 => 'communitiesgroup',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
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
            '_route' => 'communitiesgroup.destroy',
          ),
          1 => 
          array (
            0 => 'communitiesgroup',
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
      1650 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'comment.show',
          ),
          1 => 
          array (
            0 => 'comment',
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
      1664 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'comment.edit',
          ),
          1 => 
          array (
            0 => 'comment',
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
      1673 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'comment.update',
          ),
          1 => 
          array (
            0 => 'comment',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
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
            '_route' => 'comment.destroy',
          ),
          1 => 
          array (
            0 => 'comment',
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
      1698 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'commentcom.show',
          ),
          1 => 
          array (
            0 => 'commentcom',
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
      1712 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'commentcom.edit',
          ),
          1 => 
          array (
            0 => 'commentcom',
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
      1721 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'commentcom.update',
          ),
          1 => 
          array (
            0 => 'commentcom',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
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
            '_route' => 'commentcom.destroy',
          ),
          1 => 
          array (
            0 => 'commentcom',
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
      1753 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'tags.show',
          ),
          1 => 
          array (
            0 => 'tag',
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
      1767 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'tags.edit',
          ),
          1 => 
          array (
            0 => 'tag',
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
      1776 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'tags.update',
          ),
          1 => 
          array (
            0 => 'tag',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
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
            '_route' => 'tags.destroy',
          ),
          1 => 
          array (
            0 => 'tag',
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
      1806 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'tagswebinars.show',
          ),
          1 => 
          array (
            0 => 'tagswebinar',
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
      1820 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'tagswebinars.edit',
          ),
          1 => 
          array (
            0 => 'tagswebinar',
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
      1829 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'tagswebinars.update',
          ),
          1 => 
          array (
            0 => 'tagswebinar',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
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
            '_route' => 'tagswebinars.destroy',
          ),
          1 => 
          array (
            0 => 'tagswebinar',
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
      1860 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'tagscommunity.show',
          ),
          1 => 
          array (
            0 => 'tagscommunity',
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
      1874 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'tagscommunity.edit',
          ),
          1 => 
          array (
            0 => 'tagscommunity',
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
      1883 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'tagscommunity.update',
          ),
          1 => 
          array (
            0 => 'tagscommunity',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
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
            '_route' => 'tagscommunity.destroy',
          ),
          1 => 
          array (
            0 => 'tagscommunity',
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
      1911 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'users.show',
          ),
          1 => 
          array (
            0 => 'user',
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
      1925 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'users.edit',
          ),
          1 => 
          array (
            0 => 'user',
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
      1934 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'users.update',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
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
            '_route' => 'users.destroy',
          ),
          1 => 
          array (
            0 => 'user',
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
    'generated::rSBVCQNjYSyWgTZB' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '__clockwork/{id}/extended',
      'action' => 
      array (
        'uses' => 'Clockwork\\Support\\Laravel\\ClockworkController@getExtendedData',
        'controller' => 'Clockwork\\Support\\Laravel\\ClockworkController@getExtendedData',
        'as' => 'generated::rSBVCQNjYSyWgTZB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'id' => '([0-9-]+|latest)',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dCqfuu2rtsdWYYPS' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '__clockwork/{id}/{direction?}/{count?}',
      'action' => 
      array (
        'uses' => 'Clockwork\\Support\\Laravel\\ClockworkController@getData',
        'controller' => 'Clockwork\\Support\\Laravel\\ClockworkController@getData',
        'as' => 'generated::dCqfuu2rtsdWYYPS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'id' => '([0-9-]+|latest)',
        'direction' => '(next|previous)',
        'count' => '\\d+',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PhEjb6nhv17Z4LMW' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => '__clockwork/{id}',
      'action' => 
      array (
        'uses' => 'Clockwork\\Support\\Laravel\\ClockworkController@updateData',
        'controller' => 'Clockwork\\Support\\Laravel\\ClockworkController@updateData',
        'as' => 'generated::PhEjb6nhv17Z4LMW',
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
    'generated::kFIQrGP40HcufBOZ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '__clockwork/auth',
      'action' => 
      array (
        'uses' => 'Clockwork\\Support\\Laravel\\ClockworkController@authenticate',
        'controller' => 'Clockwork\\Support\\Laravel\\ClockworkController@authenticate',
        'as' => 'generated::kFIQrGP40HcufBOZ',
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
    'generated::YcBke6ysOHGa7txX' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'clockwork',
      'action' => 
      array (
        'uses' => 'Clockwork\\Support\\Laravel\\ClockworkController@webRedirect',
        'controller' => 'Clockwork\\Support\\Laravel\\ClockworkController@webRedirect',
        'as' => 'generated::YcBke6ysOHGa7txX',
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
    'generated::H951xtSrEYlX5ucJ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'clockwork/app',
      'action' => 
      array (
        'uses' => 'Clockwork\\Support\\Laravel\\ClockworkController@webIndex',
        'controller' => 'Clockwork\\Support\\Laravel\\ClockworkController@webIndex',
        'as' => 'generated::H951xtSrEYlX5ucJ',
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
    'generated::KzKlQKu2eqbshI65' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'clockwork/{path}',
      'action' => 
      array (
        'uses' => 'Clockwork\\Support\\Laravel\\ClockworkController@webAsset',
        'controller' => 'Clockwork\\Support\\Laravel\\ClockworkController@webAsset',
        'as' => 'generated::KzKlQKu2eqbshI65',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'path' => '.+',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::e7k8jlglnGwgEuIg' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '__clockwork',
      'action' => 
      array (
        'uses' => 'Clockwork\\Support\\Laravel\\ClockworkController@webRedirect',
        'controller' => 'Clockwork\\Support\\Laravel\\ClockworkController@webRedirect',
        'as' => 'generated::e7k8jlglnGwgEuIg',
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
    'generated::1KMKEFSyhJyMkyyN' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '__clockwork/app',
      'action' => 
      array (
        'uses' => 'Clockwork\\Support\\Laravel\\ClockworkController@webIndex',
        'controller' => 'Clockwork\\Support\\Laravel\\ClockworkController@webIndex',
        'as' => 'generated::1KMKEFSyhJyMkyyN',
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
    'generated::cBazJskukTh9Q7KH' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '__clockwork/{path}',
      'action' => 
      array (
        'uses' => 'Clockwork\\Support\\Laravel\\ClockworkController@webAsset',
        'controller' => 'Clockwork\\Support\\Laravel\\ClockworkController@webAsset',
        'as' => 'generated::cBazJskukTh9Q7KH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'path' => '.+',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'login',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest:web',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\AuthenticatedSessionController@create',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\AuthenticatedSessionController@create',
        'namespace' => 'Laravel\\Fortify\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'login',
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
    'generated::O1DcVeMmxKVWvoI7' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'login',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest:web',
          2 => 'throttle:login',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\AuthenticatedSessionController@store',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\AuthenticatedSessionController@store',
        'namespace' => 'Laravel\\Fortify\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::O1DcVeMmxKVWvoI7',
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
    'logout' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'logout',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\AuthenticatedSessionController@destroy',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\AuthenticatedSessionController@destroy',
        'namespace' => 'Laravel\\Fortify\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'logout',
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
    'password.request' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'forgot-password',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest:web',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\PasswordResetLinkController@create',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\PasswordResetLinkController@create',
        'namespace' => 'Laravel\\Fortify\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.request',
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
    'password.reset' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reset-password/{token}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest:web',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\NewPasswordController@create',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\NewPasswordController@create',
        'namespace' => 'Laravel\\Fortify\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.reset',
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
    'password.email' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'forgot-password',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest:web',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\PasswordResetLinkController@store',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\PasswordResetLinkController@store',
        'namespace' => 'Laravel\\Fortify\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.email',
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
    'password.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'reset-password',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest:web',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\NewPasswordController@store',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\NewPasswordController@store',
        'namespace' => 'Laravel\\Fortify\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.update',
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
    'register' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'register',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest:web',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\RegisteredUserController@create',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\RegisteredUserController@create',
        'namespace' => 'Laravel\\Fortify\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'register',
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
    'generated::4AEcDxEGKwjcavd6' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'register',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest:web',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\RegisteredUserController@store',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\RegisteredUserController@store',
        'namespace' => 'Laravel\\Fortify\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::4AEcDxEGKwjcavd6',
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
    'user-profile-information.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'user/profile-information',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\ProfileInformationController@update',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\ProfileInformationController@update',
        'namespace' => 'Laravel\\Fortify\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'user-profile-information.update',
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
    'user-password.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'user/password',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\PasswordController@update',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\PasswordController@update',
        'namespace' => 'Laravel\\Fortify\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'user-password.update',
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
    'generated::TiaplOJCf0WKaJ25' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/confirm-password',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\ConfirmablePasswordController@show',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\ConfirmablePasswordController@show',
        'namespace' => 'Laravel\\Fortify\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::TiaplOJCf0WKaJ25',
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
    'password.confirmation' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/confirmed-password-status',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\ConfirmedPasswordStatusController@show',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\ConfirmedPasswordStatusController@show',
        'namespace' => 'Laravel\\Fortify\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.confirmation',
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
    'password.confirm' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/confirm-password',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\ConfirmablePasswordController@store',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\ConfirmablePasswordController@store',
        'namespace' => 'Laravel\\Fortify\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.confirm',
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
    'two-factor.login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'two-factor-challenge',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest:web',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\TwoFactorAuthenticatedSessionController@create',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\TwoFactorAuthenticatedSessionController@create',
        'namespace' => 'Laravel\\Fortify\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'two-factor.login',
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
    'generated::hqwsHiGO0Ckfkr80' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'two-factor-challenge',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest:web',
          2 => 'throttle:two-factor',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\TwoFactorAuthenticatedSessionController@store',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\TwoFactorAuthenticatedSessionController@store',
        'namespace' => 'Laravel\\Fortify\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::hqwsHiGO0Ckfkr80',
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
    'two-factor.enable' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/two-factor-authentication',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
          2 => 'password.confirm',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\TwoFactorAuthenticationController@store',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\TwoFactorAuthenticationController@store',
        'namespace' => 'Laravel\\Fortify\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'two-factor.enable',
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
    'two-factor.confirm' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/confirmed-two-factor-authentication',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
          2 => 'password.confirm',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\ConfirmedTwoFactorAuthenticationController@store',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\ConfirmedTwoFactorAuthenticationController@store',
        'namespace' => 'Laravel\\Fortify\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'two-factor.confirm',
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
    'two-factor.disable' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'user/two-factor-authentication',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
          2 => 'password.confirm',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\TwoFactorAuthenticationController@destroy',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\TwoFactorAuthenticationController@destroy',
        'namespace' => 'Laravel\\Fortify\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'two-factor.disable',
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
    'two-factor.qr-code' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/two-factor-qr-code',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
          2 => 'password.confirm',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\TwoFactorQrCodeController@show',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\TwoFactorQrCodeController@show',
        'namespace' => 'Laravel\\Fortify\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'two-factor.qr-code',
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
    'two-factor.secret-key' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/two-factor-secret-key',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
          2 => 'password.confirm',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\TwoFactorSecretKeyController@show',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\TwoFactorSecretKeyController@show',
        'namespace' => 'Laravel\\Fortify\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'two-factor.secret-key',
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
    'two-factor.recovery-codes' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/two-factor-recovery-codes',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
          2 => 'password.confirm',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\RecoveryCodeController@index',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\RecoveryCodeController@index',
        'namespace' => 'Laravel\\Fortify\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'two-factor.recovery-codes',
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
    'generated::drp1OO9XNJiBq0QE' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/two-factor-recovery-codes',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
          2 => 'password.confirm',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\RecoveryCodeController@store',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\RecoveryCodeController@store',
        'namespace' => 'Laravel\\Fortify\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::drp1OO9XNJiBq0QE',
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
    'profile.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/profile',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
        ),
        'uses' => 'Laravel\\Jetstream\\Http\\Controllers\\Livewire\\UserProfileController@show',
        'controller' => 'Laravel\\Jetstream\\Http\\Controllers\\Livewire\\UserProfileController@show',
        'namespace' => 'Laravel\\Jetstream\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'profile.show',
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
    'teams.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'teams/create',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'verified',
        ),
        'uses' => 'Laravel\\Jetstream\\Http\\Controllers\\Livewire\\TeamController@create',
        'controller' => 'Laravel\\Jetstream\\Http\\Controllers\\Livewire\\TeamController@create',
        'namespace' => 'Laravel\\Jetstream\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'teams.create',
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
    'teams.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'teams/{team}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'verified',
        ),
        'uses' => 'Laravel\\Jetstream\\Http\\Controllers\\Livewire\\TeamController@show',
        'controller' => 'Laravel\\Jetstream\\Http\\Controllers\\Livewire\\TeamController@show',
        'namespace' => 'Laravel\\Jetstream\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'teams.show',
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
    'current-team.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'current-team',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'verified',
        ),
        'uses' => 'Laravel\\Jetstream\\Http\\Controllers\\CurrentTeamController@update',
        'controller' => 'Laravel\\Jetstream\\Http\\Controllers\\CurrentTeamController@update',
        'namespace' => 'Laravel\\Jetstream\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'current-team.update',
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
    'team-invitations.accept' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'team-invitations/{invitation}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'verified',
          3 => 'signed',
        ),
        'uses' => 'Laravel\\Jetstream\\Http\\Controllers\\TeamInvitationController@accept',
        'controller' => 'Laravel\\Jetstream\\Http\\Controllers\\TeamInvitationController@accept',
        'namespace' => 'Laravel\\Jetstream\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'team-invitations.accept',
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
    'generated::fz1xP6TyqbL7dW9i' => 
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
        'as' => 'generated::fz1xP6TyqbL7dW9i',
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
    'livewire.message' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'livewire/message/{name}',
      'action' => 
      array (
        'uses' => 'Livewire\\Controllers\\HttpConnectionHandler@__invoke',
        'controller' => 'Livewire\\Controllers\\HttpConnectionHandler',
        'as' => 'livewire.message',
        'middleware' => 
        array (
          0 => 'web',
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
    'livewire.upload-file' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'livewire/upload-file',
      'action' => 
      array (
        'uses' => 'Livewire\\Controllers\\FileUploadHandler@handle',
        'controller' => 'Livewire\\Controllers\\FileUploadHandler@handle',
        'as' => 'livewire.upload-file',
        'middleware' => 
        array (
          0 => 'web',
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
    'livewire.preview-file' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'livewire/preview-file/{filename}',
      'action' => 
      array (
        'uses' => 'Livewire\\Controllers\\FilePreviewHandler@handle',
        'controller' => 'Livewire\\Controllers\\FilePreviewHandler@handle',
        'as' => 'livewire.preview-file',
        'middleware' => 
        array (
          0 => 'web',
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
    'generated::TZ6gR3hHY6wMh39B' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'livewire/livewire.js',
      'action' => 
      array (
        'uses' => 'Livewire\\Controllers\\LivewireJavaScriptAssets@source',
        'controller' => 'Livewire\\Controllers\\LivewireJavaScriptAssets@source',
        'as' => 'generated::TZ6gR3hHY6wMh39B',
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
    'generated::xKSCpiRfEPuOpVAd' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'livewire/livewire.js.map',
      'action' => 
      array (
        'uses' => 'Livewire\\Controllers\\LivewireJavaScriptAssets@maps',
        'controller' => 'Livewire\\Controllers\\LivewireJavaScriptAssets@maps',
        'as' => 'generated::xKSCpiRfEPuOpVAd',
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
    'generated::xvm3otnpLk4e9lh3' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'broadcasting/auth',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => '\\Illuminate\\Broadcasting\\BroadcastController@authenticate',
        'controller' => '\\Illuminate\\Broadcasting\\BroadcastController@authenticate',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'excluded_middleware' => 
        array (
          0 => 'Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken',
        ),
        'as' => 'generated::xvm3otnpLk4e9lh3',
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
    'generated::HwasCkDmTayYRGkf' => 
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
          1 => 'jwt.verify',
          2 => 'verified',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\Test@test',
        'controller' => 'App\\Http\\Controllers\\Api\\Test@test',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::HwasCkDmTayYRGkf',
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
    'generated::T91c4FISiNpNedUt' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/myprofile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'jwt.verify',
          2 => 'verified',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\UsersAPI@getprofile',
        'controller' => 'App\\Http\\Controllers\\Api\\UsersAPI@getprofile',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::T91c4FISiNpNedUt',
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
    'generated::ZzUJRUJsY4xGQrWF' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/user/profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'jwt.verify',
          2 => 'verified',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\UsersAPI@updateProfile',
        'controller' => 'App\\Http\\Controllers\\Api\\UsersAPI@updateProfile',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::ZzUJRUJsY4xGQrWF',
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
    'generated::q3JDVPczVp7arfgF' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/user/photo',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'jwt.verify',
          2 => 'verified',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\UsersAPI@updatePhoto',
        'controller' => 'App\\Http\\Controllers\\Api\\UsersAPI@updatePhoto',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::q3JDVPczVp7arfgF',
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
    'generated::5lJy757ga9SHnCjV' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'jwt.verify',
          2 => 'verified',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\AuthAPI@logout',
        'controller' => 'App\\Http\\Controllers\\Api\\AuthAPI@logout',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::5lJy757ga9SHnCjV',
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
    'generated::MnK2jkjf3Z71f6jc' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/post/comment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'jwt.verify',
          2 => 'verified',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\CommentAPI@store',
        'controller' => 'App\\Http\\Controllers\\Api\\CommentAPI@store',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::MnK2jkjf3Z71f6jc',
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
    'generated::oy0AncfRsQcHlxW8' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/post/reply',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'jwt.verify',
          2 => 'verified',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\CommentAPI@reply',
        'controller' => 'App\\Http\\Controllers\\Api\\CommentAPI@reply',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::oy0AncfRsQcHlxW8',
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
    'generated::lf7RLVCLnDzTZEEN' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'jwt.verify',
          2 => 'verified',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\UsersAPI@index',
        'controller' => 'App\\Http\\Controllers\\Api\\UsersAPI@index',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::lf7RLVCLnDzTZEEN',
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
    'generated::vIjJRSGCw8MdMzt6' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/like',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'jwt.verify',
          2 => 'verified',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\ContentApi@likecontent',
        'controller' => 'App\\Http\\Controllers\\Api\\ContentApi@likecontent',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::vIjJRSGCw8MdMzt6',
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
    'generated::jbqUgWpsTC5K8NqW' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/post/commentcom',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'jwt.verify',
          2 => 'verified',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\CommentComAPI@store',
        'controller' => 'App\\Http\\Controllers\\Api\\CommentComAPI@store',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::jbqUgWpsTC5K8NqW',
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
    'generated::hm6Pgh0jECnsVNuG' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/post/replycom',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'jwt.verify',
          2 => 'verified',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\CommentComAPI@reply',
        'controller' => 'App\\Http\\Controllers\\Api\\CommentComAPI@reply',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::hm6Pgh0jECnsVNuG',
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
    'generated::AIbPSEPFq4KjXe9O' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/likecom',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'jwt.verify',
          2 => 'verified',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\CommunityNewsApi@likecontent',
        'controller' => 'App\\Http\\Controllers\\Api\\CommunityNewsApi@likecontent',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::AIbPSEPFq4KjXe9O',
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
    'generated::CEWpEUbEAYicDtw4' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/ceklike',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'jwt.verify',
          2 => 'verified',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\ContentApi@ceklike',
        'controller' => 'App\\Http\\Controllers\\Api\\ContentApi@ceklike',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::CEWpEUbEAYicDtw4',
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
    'generated::J9Y2ZzvH1nEQQGAr' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/ceklikecome',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'jwt.verify',
          2 => 'verified',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\CommunityNewsApi@ceklike',
        'controller' => 'App\\Http\\Controllers\\Api\\CommunityNewsApi@ceklike',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::J9Y2ZzvH1nEQQGAr',
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
    'generated::8oLx9ahjKWyK2I7k' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/categoriespremium',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'jwt.verify',
          2 => 'verified',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\PremiumContentAPI@categories',
        'controller' => 'App\\Http\\Controllers\\Api\\PremiumContentAPI@categories',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::8oLx9ahjKWyK2I7k',
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
    'generated::7E45KIYxTPLM2sHn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/premium-content',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'jwt.verify',
          2 => 'verified',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\PremiumContentAPI@all',
        'controller' => 'App\\Http\\Controllers\\Api\\PremiumContentAPI@all',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::7E45KIYxTPLM2sHn',
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
    'generated::gNJtzZoiP3oCRygl' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/today-premium',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'jwt.verify',
          2 => 'verified',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\PremiumContentAPI@newstoday',
        'controller' => 'App\\Http\\Controllers\\Api\\PremiumContentAPI@newstoday',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::gNJtzZoiP3oCRygl',
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
    'generated::PfJ2TnBlae11DehK' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/popularpremium',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'jwt.verify',
          2 => 'verified',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\PremiumContentAPI@popular',
        'controller' => 'App\\Http\\Controllers\\Api\\PremiumContentAPI@popular',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::PfJ2TnBlae11DehK',
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
    'generated::Kq2k4hSHymR6OBuj' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/popularcategorypremium',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'jwt.verify',
          2 => 'verified',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\PremiumContentAPI@popular_cat',
        'controller' => 'App\\Http\\Controllers\\Api\\PremiumContentAPI@popular_cat',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::Kq2k4hSHymR6OBuj',
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
    'generated::3Czxlj6CH1bQ01pj' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/article',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\ContentApi@article',
        'controller' => 'App\\Http\\Controllers\\Api\\ContentApi@article',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::3Czxlj6CH1bQ01pj',
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
    'generated::23S0JIWpCcCbOXEU' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/popularnews',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\ContentApi@popularnews',
        'controller' => 'App\\Http\\Controllers\\Api\\ContentApi@popularnews',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::23S0JIWpCcCbOXEU',
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
    'categoryprem.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/categoryprem',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'jwt.verify',
          2 => 'verified',
        ),
        'as' => 'categoryprem.index',
        'uses' => 'App\\Http\\Controllers\\Api\\CategoryPremiumAPI@index',
        'controller' => 'App\\Http\\Controllers\\Api\\CategoryPremiumAPI@index',
        'namespace' => NULL,
        'prefix' => 'api',
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
    'categoryprem.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/categoryprem/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'jwt.verify',
          2 => 'verified',
        ),
        'as' => 'categoryprem.create',
        'uses' => 'App\\Http\\Controllers\\Api\\CategoryPremiumAPI@create',
        'controller' => 'App\\Http\\Controllers\\Api\\CategoryPremiumAPI@create',
        'namespace' => NULL,
        'prefix' => 'api',
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
    'categoryprem.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/categoryprem',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'jwt.verify',
          2 => 'verified',
        ),
        'as' => 'categoryprem.store',
        'uses' => 'App\\Http\\Controllers\\Api\\CategoryPremiumAPI@store',
        'controller' => 'App\\Http\\Controllers\\Api\\CategoryPremiumAPI@store',
        'namespace' => NULL,
        'prefix' => 'api',
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
    'categoryprem.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/categoryprem/{categoryprem}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'jwt.verify',
          2 => 'verified',
        ),
        'as' => 'categoryprem.show',
        'uses' => 'App\\Http\\Controllers\\Api\\CategoryPremiumAPI@show',
        'controller' => 'App\\Http\\Controllers\\Api\\CategoryPremiumAPI@show',
        'namespace' => NULL,
        'prefix' => 'api',
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
    'categoryprem.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/categoryprem/{categoryprem}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'jwt.verify',
          2 => 'verified',
        ),
        'as' => 'categoryprem.edit',
        'uses' => 'App\\Http\\Controllers\\Api\\CategoryPremiumAPI@edit',
        'controller' => 'App\\Http\\Controllers\\Api\\CategoryPremiumAPI@edit',
        'namespace' => NULL,
        'prefix' => 'api',
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
    'categoryprem.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/categoryprem/{categoryprem}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'jwt.verify',
          2 => 'verified',
        ),
        'as' => 'categoryprem.update',
        'uses' => 'App\\Http\\Controllers\\Api\\CategoryPremiumAPI@update',
        'controller' => 'App\\Http\\Controllers\\Api\\CategoryPremiumAPI@update',
        'namespace' => NULL,
        'prefix' => 'api',
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
    'categoryprem.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/categoryprem/{categoryprem}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'jwt.verify',
          2 => 'verified',
        ),
        'as' => 'categoryprem.destroy',
        'uses' => 'App\\Http\\Controllers\\Api\\CategoryPremiumAPI@destroy',
        'controller' => 'App\\Http\\Controllers\\Api\\CategoryPremiumAPI@destroy',
        'namespace' => NULL,
        'prefix' => 'api',
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
    'generated::leMLeoeZkD9sIwBL' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/subcategoryprem',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'jwt.verify',
          2 => 'verified',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\CategoryPremiumAPI@subcategories',
        'controller' => 'App\\Http\\Controllers\\Api\\CategoryPremiumAPI@subcategories',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::leMLeoeZkD9sIwBL',
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
    'generated::eIrRvbTX317kLtCg' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/category-parent-prem',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'jwt.verify',
          2 => 'verified',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\CategoryPremiumAPI@categoryparent',
        'controller' => 'App\\Http\\Controllers\\Api\\CategoryPremiumAPI@categoryparent',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::eIrRvbTX317kLtCg',
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
    'generated::UJZpv87SyyGzau7C' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/notifications',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'jwt.verify',
          2 => 'verified',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\Notifications@getnotif',
        'controller' => 'App\\Http\\Controllers\\Api\\Notifications@getnotif',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::UJZpv87SyyGzau7C',
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
    'category.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'category.index',
        'uses' => 'App\\Http\\Controllers\\Api\\CategoryController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\CategoryController@index',
        'namespace' => NULL,
        'prefix' => 'api',
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
    'category.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/category/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'category.create',
        'uses' => 'App\\Http\\Controllers\\Api\\CategoryController@create',
        'controller' => 'App\\Http\\Controllers\\Api\\CategoryController@create',
        'namespace' => NULL,
        'prefix' => 'api',
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
    'category.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'category.store',
        'uses' => 'App\\Http\\Controllers\\Api\\CategoryController@store',
        'controller' => 'App\\Http\\Controllers\\Api\\CategoryController@store',
        'namespace' => NULL,
        'prefix' => 'api',
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
    'category.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/category/{category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'category.show',
        'uses' => 'App\\Http\\Controllers\\Api\\CategoryController@show',
        'controller' => 'App\\Http\\Controllers\\Api\\CategoryController@show',
        'namespace' => NULL,
        'prefix' => 'api',
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
    'category.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/category/{category}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'category.edit',
        'uses' => 'App\\Http\\Controllers\\Api\\CategoryController@edit',
        'controller' => 'App\\Http\\Controllers\\Api\\CategoryController@edit',
        'namespace' => NULL,
        'prefix' => 'api',
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
    'category.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/category/{category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'category.update',
        'uses' => 'App\\Http\\Controllers\\Api\\CategoryController@update',
        'controller' => 'App\\Http\\Controllers\\Api\\CategoryController@update',
        'namespace' => NULL,
        'prefix' => 'api',
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
    'category.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/category/{category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'category.destroy',
        'uses' => 'App\\Http\\Controllers\\Api\\CategoryController@destroy',
        'controller' => 'App\\Http\\Controllers\\Api\\CategoryController@destroy',
        'namespace' => NULL,
        'prefix' => 'api',
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
    'generated::QZUo66u4UmSotLkV' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/subcategory',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\ContentApi@subcategory',
        'controller' => 'App\\Http\\Controllers\\Api\\ContentApi@subcategory',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::QZUo66u4UmSotLkV',
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
    'generated::0hM9BfcAvrMCaw6X' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/category-parent',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\CategoryController@categoryparent',
        'controller' => 'App\\Http\\Controllers\\Api\\CategoryController@categoryparent',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::0hM9BfcAvrMCaw6X',
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
    'category-community.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/category-community',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'category-community.index',
        'uses' => 'App\\Http\\Controllers\\Api\\CategoryCommunity@index',
        'controller' => 'App\\Http\\Controllers\\Api\\CategoryCommunity@index',
        'namespace' => NULL,
        'prefix' => 'api',
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
    'category-community.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/category-community/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'category-community.create',
        'uses' => 'App\\Http\\Controllers\\Api\\CategoryCommunity@create',
        'controller' => 'App\\Http\\Controllers\\Api\\CategoryCommunity@create',
        'namespace' => NULL,
        'prefix' => 'api',
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
    'category-community.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/category-community',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'category-community.store',
        'uses' => 'App\\Http\\Controllers\\Api\\CategoryCommunity@store',
        'controller' => 'App\\Http\\Controllers\\Api\\CategoryCommunity@store',
        'namespace' => NULL,
        'prefix' => 'api',
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
    'category-community.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/category-community/{category_community}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'category-community.show',
        'uses' => 'App\\Http\\Controllers\\Api\\CategoryCommunity@show',
        'controller' => 'App\\Http\\Controllers\\Api\\CategoryCommunity@show',
        'namespace' => NULL,
        'prefix' => 'api',
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
    'category-community.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/category-community/{category_community}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'category-community.edit',
        'uses' => 'App\\Http\\Controllers\\Api\\CategoryCommunity@edit',
        'controller' => 'App\\Http\\Controllers\\Api\\CategoryCommunity@edit',
        'namespace' => NULL,
        'prefix' => 'api',
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
    'category-community.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/category-community/{category_community}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'category-community.update',
        'uses' => 'App\\Http\\Controllers\\Api\\CategoryCommunity@update',
        'controller' => 'App\\Http\\Controllers\\Api\\CategoryCommunity@update',
        'namespace' => NULL,
        'prefix' => 'api',
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
    'category-community.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/category-community/{category_community}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'category-community.destroy',
        'uses' => 'App\\Http\\Controllers\\Api\\CategoryCommunity@destroy',
        'controller' => 'App\\Http\\Controllers\\Api\\CategoryCommunity@destroy',
        'namespace' => NULL,
        'prefix' => 'api',
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
    'generated::4SZGZd0NjOkqZnqM' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/categories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\ContentApi@categories',
        'controller' => 'App\\Http\\Controllers\\Api\\ContentApi@categories',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::4SZGZd0NjOkqZnqM',
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
    'generated::yeNVR1AjEIZLgn45' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/content',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\ContentApi@all',
        'controller' => 'App\\Http\\Controllers\\Api\\ContentApi@all',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::yeNVR1AjEIZLgn45',
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
    'generated::QkTJdKZDYczCP3m8' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/today',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\ContentApi@newstoday',
        'controller' => 'App\\Http\\Controllers\\Api\\ContentApi@newstoday',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::QkTJdKZDYczCP3m8',
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
    'generated::VcznjVRublo4m2xl' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/populararticle',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\ContentApi@popular',
        'controller' => 'App\\Http\\Controllers\\Api\\ContentApi@popular',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::VcznjVRublo4m2xl',
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
    'generated::0QtkbDiu06R6KZeh' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/popularcategory',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\ContentApi@popular_category',
        'controller' => 'App\\Http\\Controllers\\Api\\ContentApi@popular_category',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::0QtkbDiu06R6KZeh',
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
    'generated::Qi55OFSNijXZbCge' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/community-news',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\CommunityNewsApi@all',
        'controller' => 'App\\Http\\Controllers\\Api\\CommunityNewsApi@all',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::Qi55OFSNijXZbCge',
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
    'generated::9gKuPqOPiJm1ZWoS' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/popularcommunity',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\CommunityNewsApi@popular',
        'controller' => 'App\\Http\\Controllers\\Api\\CommunityNewsApi@popular',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::9gKuPqOPiJm1ZWoS',
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
    'generated::0gsuj81DcVwpL87J' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/communities',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\CommunityNewsApi@communities',
        'controller' => 'App\\Http\\Controllers\\Api\\CommunityNewsApi@communities',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::0gsuj81DcVwpL87J',
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
    'generated::KupOJm359kXQSdlW' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/categoriescom',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\CommunityNewsApi@categories',
        'controller' => 'App\\Http\\Controllers\\Api\\CommunityNewsApi@categories',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::KupOJm359kXQSdlW',
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
    'generated::93oOvQTu8pfkd2GY' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/community-video',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\CommunityVideoApi@all',
        'controller' => 'App\\Http\\Controllers\\Api\\CommunityVideoApi@all',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::93oOvQTu8pfkd2GY',
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
    'generated::XWfwSeZ7ItWyxXV5' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/community-group',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\CommunityGroupAPI@all',
        'controller' => 'App\\Http\\Controllers\\Api\\CommunityGroupAPI@all',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::XWfwSeZ7ItWyxXV5',
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
    'generated::c7SUtuGjrRwHrSXc' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/poppular-community-video',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\CommunityVideoApi@popular',
        'controller' => 'App\\Http\\Controllers\\Api\\CommunityVideoApi@popular',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::c7SUtuGjrRwHrSXc',
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
    'generated::qQMZoqvIE63wjyA9' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/webinar',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\WebinarsApi@all',
        'controller' => 'App\\Http\\Controllers\\Api\\WebinarsApi@all',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::qQMZoqvIE63wjyA9',
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
    'generated::fOxqhzm1Xsvo61RH' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/video-article',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\VideoArticleAPI@all',
        'controller' => 'App\\Http\\Controllers\\Api\\VideoArticleAPI@all',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::fOxqhzm1Xsvo61RH',
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
    'generated::FqOLdlfiXd9KAhcW' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/popularvideoarticle',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\VideoArticleAPI@popular',
        'controller' => 'App\\Http\\Controllers\\Api\\VideoArticleAPI@popular',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::FqOLdlfiXd9KAhcW',
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
    'generated::Abk3O6X72GRcrfz7' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/image/{filename}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\PictureApi@image',
        'controller' => 'App\\Http\\Controllers\\PictureApi@image',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::Abk3O6X72GRcrfz7',
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
    'generated::YQ7dg3vW7PMBh38Q' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/imageuser/{filename}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\PictureApi@imageuser',
        'controller' => 'App\\Http\\Controllers\\PictureApi@imageuser',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::YQ7dg3vW7PMBh38Q',
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
    'generated::hq7ataSyjHWJb978' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/video/{filename}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\PictureApi@video',
        'controller' => 'App\\Http\\Controllers\\PictureApi@video',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::hq7ataSyjHWJb978',
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
    'generated::vPNptrwt0xs1fsKk' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/webinarsurveyquestion',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\SurveyQuestion@index',
        'controller' => 'App\\Http\\Controllers\\Api\\SurveyQuestion@index',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::vPNptrwt0xs1fsKk',
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
    'generated::MYWA5EitwxSrdFxC' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/webinarsurveyquestion/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\SurveyQuestion@question',
        'controller' => 'App\\Http\\Controllers\\Api\\SurveyQuestion@question',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::MYWA5EitwxSrdFxC',
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
    'generated::88HizdrlVojVhAog' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/register-webinar-answer',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\SurveyAnswers@index',
        'controller' => 'App\\Http\\Controllers\\Api\\SurveyAnswers@index',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::88HizdrlVojVhAog',
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
    'generated::bhXt53SNNt4Opjz1' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/register-webinar-answer',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\SurveyAnswers@registerWebinar',
        'controller' => 'App\\Http\\Controllers\\Api\\SurveyAnswers@registerWebinar',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::bhXt53SNNt4Opjz1',
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
    'generated::mM1U1NNbCCX029QT' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/tags',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\ContentApi@tags',
        'controller' => 'App\\Http\\Controllers\\Api\\ContentApi@tags',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::mM1U1NNbCCX029QT',
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
    'generated::Gjl6gc6DcPBuf29p' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/tagscommunity',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\CommunityGroupAPI@tagscommunity',
        'controller' => 'App\\Http\\Controllers\\Api\\CommunityGroupAPI@tagscommunity',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::Gjl6gc6DcPBuf29p',
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
    'generated::hXrdtLUJpVxNTplc' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/tagswebinar',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\WebinarsApi@tagswebinar',
        'controller' => 'App\\Http\\Controllers\\Api\\WebinarsApi@tagswebinar',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::hXrdtLUJpVxNTplc',
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
    'generated::9IZa2ooF9ipitkNi' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/getads',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\AdsApi@getads',
        'controller' => 'App\\Http\\Controllers\\Api\\AdsApi@getads',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::9IZa2ooF9ipitkNi',
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
    'generated::omTfuPWbkjB91Rug' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\AuthAPI@login',
        'controller' => 'App\\Http\\Controllers\\Api\\AuthAPI@login',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::omTfuPWbkjB91Rug',
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
    'generated::g9miwHHRfIcM8BJE' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\AuthAPI@register',
        'controller' => 'App\\Http\\Controllers\\Api\\AuthAPI@register',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::g9miwHHRfIcM8BJE',
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
    'generated::C2A0C4JBd6sa7QYY' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/email/verification-notification',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'jwt.verify',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\RegisterUserAPI@sendVerificationEmail',
        'controller' => 'App\\Http\\Controllers\\Api\\RegisterUserAPI@sendVerificationEmail',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::C2A0C4JBd6sa7QYY',
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
    'verification.verify' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/verify-email/{id}/{hash}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'jwt.verify',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\RegisterUserAPI@verify',
        'controller' => 'App\\Http\\Controllers\\Api\\RegisterUserAPI@verify',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'verification.verify',
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
    'generated::AHBoc31CppTWKcbi' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/auth/google',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\SocialAPI@redirectToGoogle',
        'controller' => 'App\\Http\\Controllers\\Api\\SocialAPI@redirectToGoogle',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::AHBoc31CppTWKcbi',
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
    'generated::CnpiggWJo7c3Uomz' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/auth/google/callback',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\SocialAPI@handleGoogleCallback',
        'controller' => 'App\\Http\\Controllers\\Api\\SocialAPI@handleGoogleCallback',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::CnpiggWJo7c3Uomz',
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
    'generated::JEkLpMsr34Xdi0Ca' => 
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
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:277:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:59:"function () {
    return \\redirect()->route(\'dashboard\');
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"0000000044fbb78d000000006097d35c";}";s:4:"hash";s:44:"91QqMR/D3xNtdTTIEfDh1c04gHHLkNRiJroJ3Ta5RIA=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::JEkLpMsr34Xdi0Ca',
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
    'generated::fmO0yq07DQV4OQp5' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'debug-sentry',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:285:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:67:"function () {
    throw new \\Exception(\'My first Sentry error!\');
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"0000000044fbb78f000000006097d35c";}";s:4:"hash";s:44:"Yq8+50PdAgWv58v/F7lSkTnjV8PZflebGiolLxtct/o=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::fmO0yq07DQV4OQp5',
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
    'generated::UGWZ9sTayOLCLtaI' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'auth/google',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\SocialAPI@redirectToGoogle',
        'controller' => 'App\\Http\\Controllers\\Api\\SocialAPI@redirectToGoogle',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::UGWZ9sTayOLCLtaI',
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
    'generated::7IEet0M4lFlMBvEN' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'auth/google/callback',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\SocialAPI@handleGoogleCallback',
        'controller' => 'App\\Http\\Controllers\\Api\\SocialAPI@handleGoogleCallback',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::7IEet0M4lFlMBvEN',
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
    'dashboard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'administrator',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DashboardController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\DashboardController@index',
        'namespace' => NULL,
        'prefix' => '/administrator',
        'where' => 
        array (
        ),
        'as' => 'dashboard',
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
    'generated::FGtniAdY5tx7OR9Z' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'administrator',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DashboardController@filtere',
        'controller' => 'App\\Http\\Controllers\\Admin\\DashboardController@filtere',
        'namespace' => NULL,
        'prefix' => '/administrator',
        'where' => 
        array (
        ),
        'as' => 'generated::FGtniAdY5tx7OR9Z',
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
    'generated::mCuul12ASzuRddBv' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'administrator/analytic',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Analytic@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\Analytic@index',
        'namespace' => NULL,
        'prefix' => '/administrator',
        'where' => 
        array (
        ),
        'as' => 'generated::mCuul12ASzuRddBv',
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
    'generated::TMUXbv2cTDGOFWmT' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'administrator/admin',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserController@admin',
        'controller' => 'App\\Http\\Controllers\\Admin\\UserController@admin',
        'namespace' => NULL,
        'prefix' => '/administrator',
        'where' => 
        array (
        ),
        'as' => 'generated::TMUXbv2cTDGOFWmT',
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
    'generated::Ah7kOuZOP1J5m1s9' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'administrator/admin/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserController@admincreate',
        'controller' => 'App\\Http\\Controllers\\Admin\\UserController@admincreate',
        'namespace' => NULL,
        'prefix' => '/administrator',
        'where' => 
        array (
        ),
        'as' => 'generated::Ah7kOuZOP1J5m1s9',
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
    'admin.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'administrator/admin',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'as' => 'admin.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminController@store',
        'namespace' => NULL,
        'prefix' => '/administrator',
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
    'admin.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'administrator/admin/{admin}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'as' => 'admin.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminController@show',
        'namespace' => NULL,
        'prefix' => '/administrator',
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
    'admin.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'administrator/admin/{admin}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'as' => 'admin.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminController@edit',
        'namespace' => NULL,
        'prefix' => '/administrator',
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
    'admin.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'administrator/admin/{admin}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'as' => 'admin.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminController@update',
        'namespace' => NULL,
        'prefix' => '/administrator',
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
    'admin.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'administrator/admin/{admin}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'as' => 'admin.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminController@destroy',
        'namespace' => NULL,
        'prefix' => '/administrator',
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
    'post.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'administrator/post',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'as' => 'post.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\ContentController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\ContentController@index',
        'namespace' => NULL,
        'prefix' => '/administrator',
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
    'post.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'administrator/post/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'as' => 'post.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\ContentController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\ContentController@create',
        'namespace' => NULL,
        'prefix' => '/administrator',
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
    'post.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'administrator/post',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'as' => 'post.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\ContentController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\ContentController@store',
        'namespace' => NULL,
        'prefix' => '/administrator',
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
    'post.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'administrator/post/{post}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'as' => 'post.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\ContentController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\ContentController@show',
        'namespace' => NULL,
        'prefix' => '/administrator',
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
    'post.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'administrator/post/{post}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'as' => 'post.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\ContentController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\ContentController@edit',
        'namespace' => NULL,
        'prefix' => '/administrator',
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
    'post.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'administrator/post/{post}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'as' => 'post.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\ContentController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\ContentController@update',
        'namespace' => NULL,
        'prefix' => '/administrator',
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
    'post.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'administrator/post/{post}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'as' => 'post.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\ContentController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\ContentController@destroy',
        'namespace' => NULL,
        'prefix' => '/administrator',
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
    'premiumcontent.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'administrator/premiumcontent',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'as' => 'premiumcontent.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\PremiumContentController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\PremiumContentController@index',
        'namespace' => NULL,
        'prefix' => '/administrator',
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
    'premiumcontent.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'administrator/premiumcontent/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'as' => 'premiumcontent.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\PremiumContentController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\PremiumContentController@create',
        'namespace' => NULL,
        'prefix' => '/administrator',
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
    'premiumcontent.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'administrator/premiumcontent',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'as' => 'premiumcontent.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\PremiumContentController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\PremiumContentController@store',
        'namespace' => NULL,
        'prefix' => '/administrator',
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
    'premiumcontent.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'administrator/premiumcontent/{premiumcontent}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'as' => 'premiumcontent.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\PremiumContentController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\PremiumContentController@show',
        'namespace' => NULL,
        'prefix' => '/administrator',
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
    'premiumcontent.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'administrator/premiumcontent/{premiumcontent}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'as' => 'premiumcontent.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\PremiumContentController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\PremiumContentController@edit',
        'namespace' => NULL,
        'prefix' => '/administrator',
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
    'premiumcontent.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'administrator/premiumcontent/{premiumcontent}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'as' => 'premiumcontent.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\PremiumContentController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\PremiumContentController@update',
        'namespace' => NULL,
        'prefix' => '/administrator',
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
    'premiumcontent.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'administrator/premiumcontent/{premiumcontent}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'as' => 'premiumcontent.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\PremiumContentController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\PremiumContentController@destroy',
        'namespace' => NULL,
        'prefix' => '/administrator',
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
    'video-article.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'administrator/video-article',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'as' => 'video-article.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\VideoArticleController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\VideoArticleController@index',
        'namespace' => NULL,
        'prefix' => '/administrator',
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
    'video-article.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'administrator/video-article/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'as' => 'video-article.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\VideoArticleController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\VideoArticleController@create',
        'namespace' => NULL,
        'prefix' => '/administrator',
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
    'video-article.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'administrator/video-article',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'as' => 'video-article.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\VideoArticleController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\VideoArticleController@store',
        'namespace' => NULL,
        'prefix' => '/administrator',
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
    'video-article.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'administrator/video-article/{video_article}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'as' => 'video-article.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\VideoArticleController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\VideoArticleController@show',
        'namespace' => NULL,
        'prefix' => '/administrator',
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
    'video-article.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'administrator/video-article/{video_article}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'as' => 'video-article.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\VideoArticleController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\VideoArticleController@edit',
        'namespace' => NULL,
        'prefix' => '/administrator',
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
    'video-article.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'administrator/video-article/{video_article}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'as' => 'video-article.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\VideoArticleController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\VideoArticleController@update',
        'namespace' => NULL,
        'prefix' => '/administrator',
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
    'video-article.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'administrator/video-article/{video_article}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'as' => 'video-article.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\VideoArticleController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\VideoArticleController@destroy',
        'namespace' => NULL,
        'prefix' => '/administrator',
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
    'webinars.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'administrator/webinars',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'as' => 'webinars.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\WebinarsControllers@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\WebinarsControllers@index',
        'namespace' => NULL,
        'prefix' => '/administrator',
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
    'webinars.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'administrator/webinars/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'as' => 'webinars.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\WebinarsControllers@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\WebinarsControllers@create',
        'namespace' => NULL,
        'prefix' => '/administrator',
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
    'webinars.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'administrator/webinars',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'as' => 'webinars.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\WebinarsControllers@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\WebinarsControllers@store',
        'namespace' => NULL,
        'prefix' => '/administrator',
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
    'webinars.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'administrator/webinars/{webinar}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'as' => 'webinars.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\WebinarsControllers@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\WebinarsControllers@show',
        'namespace' => NULL,
        'prefix' => '/administrator',
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
    'webinars.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'administrator/webinars/{webinar}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'as' => 'webinars.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\WebinarsControllers@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\WebinarsControllers@edit',
        'namespace' => NULL,
        'prefix' => '/administrator',
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
    'webinars.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'administrator/webinars/{webinar}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'as' => 'webinars.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\WebinarsControllers@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\WebinarsControllers@update',
        'namespace' => NULL,
        'prefix' => '/administrator',
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
    'webinars.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'administrator/webinars/{webinar}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'as' => 'webinars.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\WebinarsControllers@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\WebinarsControllers@destroy',
        'namespace' => NULL,
        'prefix' => '/administrator',
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
    'exportregisterwebinar' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'administrator/register-webinar-export/{webinar_slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\RegisterWebinarResult@registerWebinarExport',
        'controller' => 'App\\Http\\Controllers\\Admin\\RegisterWebinarResult@registerWebinarExport',
        'namespace' => NULL,
        'prefix' => '/administrator',
        'where' => 
        array (
        ),
        'as' => 'exportregisterwebinar',
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
    'generated::hmuRZgB7izo9Lp20' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'administrator/post/edittitle/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ContentController@edittitle',
        'controller' => 'App\\Http\\Controllers\\Admin\\ContentController@edittitle',
        'namespace' => NULL,
        'prefix' => '/administrator',
        'where' => 
        array (
        ),
        'as' => 'generated::hmuRZgB7izo9Lp20',
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
    'generated::KtpB8HdVNWY7lWlx' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'administrator/post/updatetitle',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ContentController@updatetitle',
        'controller' => 'App\\Http\\Controllers\\Admin\\ContentController@updatetitle',
        'namespace' => NULL,
        'prefix' => '/administrator',
        'where' => 
        array (
        ),
        'as' => 'generated::KtpB8HdVNWY7lWlx',
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
    'generated::5GdFooV51ahZuNOQ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'administrator/premiumcontent/edittitle/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PremiumContentController@edittitle',
        'controller' => 'App\\Http\\Controllers\\Admin\\PremiumContentController@edittitle',
        'namespace' => NULL,
        'prefix' => '/administrator',
        'where' => 
        array (
        ),
        'as' => 'generated::5GdFooV51ahZuNOQ',
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
    'category-article.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'administrator/category-article',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'as' => 'category-article.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoryArticle@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoryArticle@index',
        'namespace' => NULL,
        'prefix' => '/administrator',
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
    'category-article.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'administrator/category-article/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'as' => 'category-article.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoryArticle@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoryArticle@create',
        'namespace' => NULL,
        'prefix' => '/administrator',
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
    'category-article.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'administrator/category-article',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'as' => 'category-article.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoryArticle@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoryArticle@store',
        'namespace' => NULL,
        'prefix' => '/administrator',
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
    'category-article.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'administrator/category-article/{category_article}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'as' => 'category-article.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoryArticle@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoryArticle@show',
        'namespace' => NULL,
        'prefix' => '/administrator',
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
    'category-article.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'administrator/category-article/{category_article}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'as' => 'category-article.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoryArticle@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoryArticle@edit',
        'namespace' => NULL,
        'prefix' => '/administrator',
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
    'category-article.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'administrator/category-article/{category_article}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'as' => 'category-article.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoryArticle@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoryArticle@update',
        'namespace' => NULL,
        'prefix' => '/administrator',
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
    'category-article.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'administrator/category-article/{category_article}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'as' => 'category-article.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoryArticle@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoryArticle@destroy',
        'namespace' => NULL,
        'prefix' => '/administrator',
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
    'category-premium.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'administrator/category-premium',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'as' => 'category-premium.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\CatPremiumController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\CatPremiumController@index',
        'namespace' => NULL,
        'prefix' => '/administrator',
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
    'category-premium.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'administrator/category-premium/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'as' => 'category-premium.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\CatPremiumController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\CatPremiumController@create',
        'namespace' => NULL,
        'prefix' => '/administrator',
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
    'category-premium.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'administrator/category-premium',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'as' => 'category-premium.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\CatPremiumController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\CatPremiumController@store',
        'namespace' => NULL,
        'prefix' => '/administrator',
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
    'category-premium.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'administrator/category-premium/{category_premium}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'as' => 'category-premium.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\CatPremiumController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\CatPremiumController@show',
        'namespace' => NULL,
        'prefix' => '/administrator',
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
    'category-premium.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'administrator/category-premium/{category_premium}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'as' => 'category-premium.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\CatPremiumController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\CatPremiumController@edit',
        'namespace' => NULL,
        'prefix' => '/administrator',
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
    'category-premium.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'administrator/category-premium/{category_premium}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'as' => 'category-premium.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\CatPremiumController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\CatPremiumController@update',
        'namespace' => NULL,
        'prefix' => '/administrator',
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
    'category-premium.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'administrator/category-premium/{category_premium}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'as' => 'category-premium.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\CatPremiumController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\CatPremiumController@destroy',
        'namespace' => NULL,
        'prefix' => '/administrator',
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
    'category-webinars.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'administrator/category-webinars',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'as' => 'category-webinars.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoryWebinarController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoryWebinarController@index',
        'namespace' => NULL,
        'prefix' => '/administrator',
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
    'category-webinars.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'administrator/category-webinars/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'as' => 'category-webinars.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoryWebinarController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoryWebinarController@create',
        'namespace' => NULL,
        'prefix' => '/administrator',
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
    'category-webinars.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'administrator/category-webinars',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'as' => 'category-webinars.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoryWebinarController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoryWebinarController@store',
        'namespace' => NULL,
        'prefix' => '/administrator',
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
    'category-webinars.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'administrator/category-webinars/{category_webinar}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'as' => 'category-webinars.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoryWebinarController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoryWebinarController@show',
        'namespace' => NULL,
        'prefix' => '/administrator',
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
    'category-webinars.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'administrator/category-webinars/{category_webinar}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'as' => 'category-webinars.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoryWebinarController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoryWebinarController@edit',
        'namespace' => NULL,
        'prefix' => '/administrator',
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
    'category-webinars.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'administrator/category-webinars/{category_webinar}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'as' => 'category-webinars.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoryWebinarController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoryWebinarController@update',
        'namespace' => NULL,
        'prefix' => '/administrator',
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
    'category-webinars.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'administrator/category-webinars/{category_webinar}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'as' => 'category-webinars.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoryWebinarController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoryWebinarController@destroy',
        'namespace' => NULL,
        'prefix' => '/administrator',
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
    'categorycommunity.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'administrator/categorycommunity',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'as' => 'categorycommunity.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoryCommunity@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoryCommunity@index',
        'namespace' => NULL,
        'prefix' => '/administrator',
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
    'categorycommunity.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'administrator/categorycommunity/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'as' => 'categorycommunity.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoryCommunity@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoryCommunity@create',
        'namespace' => NULL,
        'prefix' => '/administrator',
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
    'categorycommunity.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'administrator/categorycommunity',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'as' => 'categorycommunity.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoryCommunity@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoryCommunity@store',
        'namespace' => NULL,
        'prefix' => '/administrator',
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
    'categorycommunity.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'administrator/categorycommunity/{categorycommunity}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'as' => 'categorycommunity.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoryCommunity@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoryCommunity@show',
        'namespace' => NULL,
        'prefix' => '/administrator',
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
    'categorycommunity.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'administrator/categorycommunity/{categorycommunity}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'as' => 'categorycommunity.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoryCommunity@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoryCommunity@edit',
        'namespace' => NULL,
        'prefix' => '/administrator',
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
    'categorycommunity.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'administrator/categorycommunity/{categorycommunity}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'as' => 'categorycommunity.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoryCommunity@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoryCommunity@update',
        'namespace' => NULL,
        'prefix' => '/administrator',
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
    'categorycommunity.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'administrator/categorycommunity/{categorycommunity}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'as' => 'categorycommunity.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoryCommunity@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoryCommunity@destroy',
        'namespace' => NULL,
        'prefix' => '/administrator',
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
    'tags.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'administrator/tags',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'as' => 'tags.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\TagsController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\TagsController@index',
        'namespace' => NULL,
        'prefix' => '/administrator',
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
    'tags.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'administrator/tags/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'as' => 'tags.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\TagsController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\TagsController@create',
        'namespace' => NULL,
        'prefix' => '/administrator',
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
    'tags.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'administrator/tags',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'as' => 'tags.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\TagsController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\TagsController@store',
        'namespace' => NULL,
        'prefix' => '/administrator',
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
    'tags.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'administrator/tags/{tag}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'as' => 'tags.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\TagsController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\TagsController@show',
        'namespace' => NULL,
        'prefix' => '/administrator',
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
    'tags.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'administrator/tags/{tag}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'as' => 'tags.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\TagsController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\TagsController@edit',
        'namespace' => NULL,
        'prefix' => '/administrator',
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
    'tags.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'administrator/tags/{tag}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'as' => 'tags.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\TagsController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\TagsController@update',
        'namespace' => NULL,
        'prefix' => '/administrator',
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
    'tags.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'administrator/tags/{tag}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'as' => 'tags.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\TagsController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\TagsController@destroy',
        'namespace' => NULL,
        'prefix' => '/administrator',
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
    'generated::g1xyKkrCsWqXyPL4' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'administrator/subcat',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoryArticle@subcat',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoryArticle@subcat',
        'namespace' => NULL,
        'prefix' => '/administrator',
        'where' => 
        array (
        ),
        'as' => 'generated::g1xyKkrCsWqXyPL4',
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
    'tagswebinars.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'administrator/tagswebinars',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'as' => 'tagswebinars.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\TagsWebinarsControllers@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\TagsWebinarsControllers@index',
        'namespace' => NULL,
        'prefix' => '/administrator',
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
    'tagswebinars.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'administrator/tagswebinars/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'as' => 'tagswebinars.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\TagsWebinarsControllers@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\TagsWebinarsControllers@create',
        'namespace' => NULL,
        'prefix' => '/administrator',
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
    'tagswebinars.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'administrator/tagswebinars',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'as' => 'tagswebinars.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\TagsWebinarsControllers@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\TagsWebinarsControllers@store',
        'namespace' => NULL,
        'prefix' => '/administrator',
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
    'tagswebinars.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'administrator/tagswebinars/{tagswebinar}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'as' => 'tagswebinars.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\TagsWebinarsControllers@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\TagsWebinarsControllers@show',
        'namespace' => NULL,
        'prefix' => '/administrator',
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
    'tagswebinars.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'administrator/tagswebinars/{tagswebinar}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'as' => 'tagswebinars.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\TagsWebinarsControllers@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\TagsWebinarsControllers@edit',
        'namespace' => NULL,
        'prefix' => '/administrator',
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
    'tagswebinars.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'administrator/tagswebinars/{tagswebinar}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'as' => 'tagswebinars.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\TagsWebinarsControllers@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\TagsWebinarsControllers@update',
        'namespace' => NULL,
        'prefix' => '/administrator',
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
    'tagswebinars.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'administrator/tagswebinars/{tagswebinar}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'as' => 'tagswebinars.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\TagsWebinarsControllers@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\TagsWebinarsControllers@destroy',
        'namespace' => NULL,
        'prefix' => '/administrator',
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
    'tagscommunity.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'administrator/tagscommunity',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'as' => 'tagscommunity.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\TagsCommunity@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\TagsCommunity@index',
        'namespace' => NULL,
        'prefix' => '/administrator',
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
    'tagscommunity.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'administrator/tagscommunity/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'as' => 'tagscommunity.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\TagsCommunity@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\TagsCommunity@create',
        'namespace' => NULL,
        'prefix' => '/administrator',
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
    'tagscommunity.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'administrator/tagscommunity',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'as' => 'tagscommunity.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\TagsCommunity@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\TagsCommunity@store',
        'namespace' => NULL,
        'prefix' => '/administrator',
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
    'tagscommunity.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'administrator/tagscommunity/{tagscommunity}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'as' => 'tagscommunity.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\TagsCommunity@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\TagsCommunity@show',
        'namespace' => NULL,
        'prefix' => '/administrator',
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
    'tagscommunity.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'administrator/tagscommunity/{tagscommunity}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'as' => 'tagscommunity.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\TagsCommunity@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\TagsCommunity@edit',
        'namespace' => NULL,
        'prefix' => '/administrator',
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
    'tagscommunity.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'administrator/tagscommunity/{tagscommunity}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'as' => 'tagscommunity.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\TagsCommunity@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\TagsCommunity@update',
        'namespace' => NULL,
        'prefix' => '/administrator',
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
    'tagscommunity.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'administrator/tagscommunity/{tagscommunity}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'as' => 'tagscommunity.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\TagsCommunity@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\TagsCommunity@destroy',
        'namespace' => NULL,
        'prefix' => '/administrator',
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
    'community-news.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'administrator/community-news',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'as' => 'community-news.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\CommunityNews@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\CommunityNews@index',
        'namespace' => NULL,
        'prefix' => '/administrator',
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
    'community-news.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'administrator/community-news/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'as' => 'community-news.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\CommunityNews@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\CommunityNews@create',
        'namespace' => NULL,
        'prefix' => '/administrator',
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
    'community-news.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'administrator/community-news',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'as' => 'community-news.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\CommunityNews@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\CommunityNews@store',
        'namespace' => NULL,
        'prefix' => '/administrator',
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
    'community-news.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'administrator/community-news/{community_news}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'as' => 'community-news.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\CommunityNews@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\CommunityNews@show',
        'namespace' => NULL,
        'prefix' => '/administrator',
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
    'community-news.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'administrator/community-news/{community_news}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'as' => 'community-news.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\CommunityNews@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\CommunityNews@edit',
        'namespace' => NULL,
        'prefix' => '/administrator',
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
    'community-news.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'administrator/community-news/{community_news}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'as' => 'community-news.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\CommunityNews@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\CommunityNews@update',
        'namespace' => NULL,
        'prefix' => '/administrator',
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
    'community-news.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'administrator/community-news/{community_news}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'as' => 'community-news.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\CommunityNews@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\CommunityNews@destroy',
        'namespace' => NULL,
        'prefix' => '/administrator',
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
    'generated::NGaBldE4qJHzjzH2' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'administrator/community-news/edittitle/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CommunityNews@edittitle',
        'controller' => 'App\\Http\\Controllers\\Admin\\CommunityNews@edittitle',
        'namespace' => NULL,
        'prefix' => '/administrator',
        'where' => 
        array (
        ),
        'as' => 'generated::NGaBldE4qJHzjzH2',
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
    'community-video.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'administrator/community-video',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'as' => 'community-video.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\CommunityVideoController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\CommunityVideoController@index',
        'namespace' => NULL,
        'prefix' => '/administrator',
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
    'community-video.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'administrator/community-video/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'as' => 'community-video.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\CommunityVideoController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\CommunityVideoController@create',
        'namespace' => NULL,
        'prefix' => '/administrator',
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
    'community-video.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'administrator/community-video',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'as' => 'community-video.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\CommunityVideoController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\CommunityVideoController@store',
        'namespace' => NULL,
        'prefix' => '/administrator',
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
    'community-video.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'administrator/community-video/{community_video}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'as' => 'community-video.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\CommunityVideoController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\CommunityVideoController@show',
        'namespace' => NULL,
        'prefix' => '/administrator',
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
    'community-video.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'administrator/community-video/{community_video}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'as' => 'community-video.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\CommunityVideoController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\CommunityVideoController@edit',
        'namespace' => NULL,
        'prefix' => '/administrator',
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
    'community-video.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'administrator/community-video/{community_video}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'as' => 'community-video.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\CommunityVideoController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\CommunityVideoController@update',
        'namespace' => NULL,
        'prefix' => '/administrator',
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
    'community-video.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'administrator/community-video/{community_video}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'as' => 'community-video.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\CommunityVideoController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\CommunityVideoController@destroy',
        'namespace' => NULL,
        'prefix' => '/administrator',
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
    'communitiesgroup.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'administrator/communitiesgroup',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'as' => 'communitiesgroup.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\CommunityGroupController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\CommunityGroupController@index',
        'namespace' => NULL,
        'prefix' => '/administrator',
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
    'communitiesgroup.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'administrator/communitiesgroup/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'as' => 'communitiesgroup.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\CommunityGroupController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\CommunityGroupController@create',
        'namespace' => NULL,
        'prefix' => '/administrator',
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
    'communitiesgroup.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'administrator/communitiesgroup',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'as' => 'communitiesgroup.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\CommunityGroupController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\CommunityGroupController@store',
        'namespace' => NULL,
        'prefix' => '/administrator',
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
    'communitiesgroup.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'administrator/communitiesgroup/{communitiesgroup}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'as' => 'communitiesgroup.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\CommunityGroupController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\CommunityGroupController@show',
        'namespace' => NULL,
        'prefix' => '/administrator',
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
    'communitiesgroup.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'administrator/communitiesgroup/{communitiesgroup}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'as' => 'communitiesgroup.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\CommunityGroupController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\CommunityGroupController@edit',
        'namespace' => NULL,
        'prefix' => '/administrator',
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
    'communitiesgroup.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'administrator/communitiesgroup/{communitiesgroup}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'as' => 'communitiesgroup.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\CommunityGroupController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\CommunityGroupController@update',
        'namespace' => NULL,
        'prefix' => '/administrator',
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
    'communitiesgroup.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'administrator/communitiesgroup/{communitiesgroup}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'as' => 'communitiesgroup.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\CommunityGroupController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\CommunityGroupController@destroy',
        'namespace' => NULL,
        'prefix' => '/administrator',
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
    'generated::pMbQJAVHf0RVphg6' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'administrator/media',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MediaController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\MediaController@index',
        'namespace' => NULL,
        'prefix' => '/administrator',
        'where' => 
        array (
        ),
        'as' => 'generated::pMbQJAVHf0RVphg6',
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
    'roles.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'administrator/roles',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'as' => 'roles.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\RoleController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\RoleController@index',
        'namespace' => NULL,
        'prefix' => '/administrator',
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
    'roles.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'administrator/roles/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'as' => 'roles.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\RoleController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\RoleController@create',
        'namespace' => NULL,
        'prefix' => '/administrator',
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
    'roles.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'administrator/roles',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'as' => 'roles.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\RoleController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\RoleController@store',
        'namespace' => NULL,
        'prefix' => '/administrator',
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
    'roles.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'administrator/roles/{role}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'as' => 'roles.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\RoleController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\RoleController@show',
        'namespace' => NULL,
        'prefix' => '/administrator',
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
    'roles.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'administrator/roles/{role}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'as' => 'roles.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\RoleController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\RoleController@edit',
        'namespace' => NULL,
        'prefix' => '/administrator',
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
    'roles.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'administrator/roles/{role}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'as' => 'roles.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\RoleController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\RoleController@update',
        'namespace' => NULL,
        'prefix' => '/administrator',
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
    'roles.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'administrator/roles/{role}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'as' => 'roles.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\RoleController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\RoleController@destroy',
        'namespace' => NULL,
        'prefix' => '/administrator',
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
    'users.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'administrator/users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'as' => 'users.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\UserController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\UserController@index',
        'namespace' => NULL,
        'prefix' => '/administrator',
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
    'users.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'administrator/users/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'as' => 'users.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\UserController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\UserController@create',
        'namespace' => NULL,
        'prefix' => '/administrator',
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
    'users.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'administrator/users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'as' => 'users.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\UserController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\UserController@store',
        'namespace' => NULL,
        'prefix' => '/administrator',
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
    'users.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'administrator/users/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'as' => 'users.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\UserController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\UserController@show',
        'namespace' => NULL,
        'prefix' => '/administrator',
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
    'users.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'administrator/users/{user}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'as' => 'users.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\UserController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\UserController@edit',
        'namespace' => NULL,
        'prefix' => '/administrator',
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
    'users.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'administrator/users/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'as' => 'users.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\UserController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\UserController@update',
        'namespace' => NULL,
        'prefix' => '/administrator',
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
    'users.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'administrator/users/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'as' => 'users.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\UserController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\UserController@destroy',
        'namespace' => NULL,
        'prefix' => '/administrator',
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
    'generated::rBUgZmxVe8JcW66b' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'administrator/author/export',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AuthorsExport@export',
        'controller' => 'App\\Http\\Controllers\\Admin\\AuthorsExport@export',
        'namespace' => NULL,
        'prefix' => '/administrator',
        'where' => 
        array (
        ),
        'as' => 'generated::rBUgZmxVe8JcW66b',
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
    'generated::Kx4K5oEdCZzIPHAo' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'administrator/content/export',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ContentExport@export',
        'controller' => 'App\\Http\\Controllers\\Admin\\ContentExport@export',
        'namespace' => NULL,
        'prefix' => '/administrator',
        'where' => 
        array (
        ),
        'as' => 'generated::Kx4K5oEdCZzIPHAo',
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
    'generated::RA7mCoz3IrPuXKrN' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'administrator/likes/export',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\LikesExport@export',
        'controller' => 'App\\Http\\Controllers\\Admin\\LikesExport@export',
        'namespace' => NULL,
        'prefix' => '/administrator',
        'where' => 
        array (
        ),
        'as' => 'generated::RA7mCoz3IrPuXKrN',
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
    'generated::7vlnsBQszCluIo4f' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'administrator/comments/export',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CommentsExport@export',
        'controller' => 'App\\Http\\Controllers\\Admin\\CommentsExport@export',
        'namespace' => NULL,
        'prefix' => '/administrator',
        'where' => 
        array (
        ),
        'as' => 'generated::7vlnsBQszCluIo4f',
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
    'generated::bYKcBv99zq5xeZlr' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'administrator/superadmin',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserController@superadmin',
        'controller' => 'App\\Http\\Controllers\\Admin\\UserController@superadmin',
        'namespace' => NULL,
        'prefix' => '/administrator',
        'where' => 
        array (
        ),
        'as' => 'generated::bYKcBv99zq5xeZlr',
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
    'generated::mlYYMdJnQbGOQOCK' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'administrator/admin/postadmin',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserController@postadmin',
        'controller' => 'App\\Http\\Controllers\\Admin\\UserController@postadmin',
        'namespace' => NULL,
        'prefix' => '/administrator',
        'where' => 
        array (
        ),
        'as' => 'generated::mlYYMdJnQbGOQOCK',
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
    'generated::XyUfCiakKxRiczt4' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'administrator/editor',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserController@editor',
        'controller' => 'App\\Http\\Controllers\\Admin\\UserController@editor',
        'namespace' => NULL,
        'prefix' => '/administrator',
        'where' => 
        array (
        ),
        'as' => 'generated::XyUfCiakKxRiczt4',
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
    'generated::C2rkt7DxcdnTpc8v' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'administrator/editor/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserController@editorcreate',
        'controller' => 'App\\Http\\Controllers\\Admin\\UserController@editorcreate',
        'namespace' => NULL,
        'prefix' => '/administrator',
        'where' => 
        array (
        ),
        'as' => 'generated::C2rkt7DxcdnTpc8v',
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
    'generated::rTKoLztVLkc3owW5' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'administrator/editor/posteditor',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserController@posteditor',
        'controller' => 'App\\Http\\Controllers\\Admin\\UserController@posteditor',
        'namespace' => NULL,
        'prefix' => '/administrator',
        'where' => 
        array (
        ),
        'as' => 'generated::rTKoLztVLkc3owW5',
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
    'generated::VM5XsNKO68j87FI4' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'administrator/contributor',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserController@contributor',
        'controller' => 'App\\Http\\Controllers\\Admin\\UserController@contributor',
        'namespace' => NULL,
        'prefix' => '/administrator',
        'where' => 
        array (
        ),
        'as' => 'generated::VM5XsNKO68j87FI4',
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
    'generated::xwcI2Yi54oll7rr2' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'administrator/subscriber',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserController@subscribes',
        'controller' => 'App\\Http\\Controllers\\Admin\\UserController@subscribes',
        'namespace' => NULL,
        'prefix' => '/administrator',
        'where' => 
        array (
        ),
        'as' => 'generated::xwcI2Yi54oll7rr2',
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
    'comment.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'administrator/comment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'as' => 'comment.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\CommentController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\CommentController@index',
        'namespace' => NULL,
        'prefix' => '/administrator',
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
    'comment.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'administrator/comment/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'as' => 'comment.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\CommentController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\CommentController@create',
        'namespace' => NULL,
        'prefix' => '/administrator',
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
    'comment.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'administrator/comment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'as' => 'comment.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\CommentController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\CommentController@store',
        'namespace' => NULL,
        'prefix' => '/administrator',
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
    'comment.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'administrator/comment/{comment}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'as' => 'comment.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\CommentController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\CommentController@show',
        'namespace' => NULL,
        'prefix' => '/administrator',
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
    'comment.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'administrator/comment/{comment}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'as' => 'comment.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\CommentController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\CommentController@edit',
        'namespace' => NULL,
        'prefix' => '/administrator',
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
    'comment.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'administrator/comment/{comment}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'as' => 'comment.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\CommentController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\CommentController@update',
        'namespace' => NULL,
        'prefix' => '/administrator',
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
    'comment.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'administrator/comment/{comment}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'as' => 'comment.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\CommentController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\CommentController@destroy',
        'namespace' => NULL,
        'prefix' => '/administrator',
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
    'commentcom.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'administrator/commentcom',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'as' => 'commentcom.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\CommentComController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\CommentComController@index',
        'namespace' => NULL,
        'prefix' => '/administrator',
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
    'commentcom.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'administrator/commentcom/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'as' => 'commentcom.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\CommentComController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\CommentComController@create',
        'namespace' => NULL,
        'prefix' => '/administrator',
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
    'commentcom.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'administrator/commentcom',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'as' => 'commentcom.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\CommentComController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\CommentComController@store',
        'namespace' => NULL,
        'prefix' => '/administrator',
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
    'commentcom.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'administrator/commentcom/{commentcom}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'as' => 'commentcom.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\CommentComController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\CommentComController@show',
        'namespace' => NULL,
        'prefix' => '/administrator',
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
    'commentcom.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'administrator/commentcom/{commentcom}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'as' => 'commentcom.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\CommentComController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\CommentComController@edit',
        'namespace' => NULL,
        'prefix' => '/administrator',
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
    'commentcom.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'administrator/commentcom/{commentcom}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'as' => 'commentcom.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\CommentComController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\CommentComController@update',
        'namespace' => NULL,
        'prefix' => '/administrator',
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
    'commentcom.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'administrator/commentcom/{commentcom}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'as' => 'commentcom.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\CommentComController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\CommentComController@destroy',
        'namespace' => NULL,
        'prefix' => '/administrator',
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
    'ads.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'administrator/ads',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'as' => 'ads.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\AdsController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdsController@index',
        'namespace' => NULL,
        'prefix' => '/administrator',
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
    'ads.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'administrator/ads/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'as' => 'ads.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\AdsController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdsController@create',
        'namespace' => NULL,
        'prefix' => '/administrator',
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
    'ads.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'administrator/ads',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'as' => 'ads.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\AdsController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdsController@store',
        'namespace' => NULL,
        'prefix' => '/administrator',
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
    'ads.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'administrator/ads/{ad}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'as' => 'ads.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\AdsController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdsController@show',
        'namespace' => NULL,
        'prefix' => '/administrator',
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
    'ads.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'administrator/ads/{ad}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'as' => 'ads.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\AdsController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdsController@edit',
        'namespace' => NULL,
        'prefix' => '/administrator',
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
    'ads.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'administrator/ads/{ad}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'as' => 'ads.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\AdsController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdsController@update',
        'namespace' => NULL,
        'prefix' => '/administrator',
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
    'ads.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'administrator/ads/{ad}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'admin',
        ),
        'as' => 'ads.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\AdsController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdsController@destroy',
        'namespace' => NULL,
        'prefix' => '/administrator',
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
