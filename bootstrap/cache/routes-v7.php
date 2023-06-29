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
            '_route' => 'generated::48oJjfO7NatSKcXq',
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
            '_route' => 'generated::5Q8wgsQW42ltuS5o',
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
            '_route' => 'generated::vnXRBo2TaDBZgBqd',
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
            '_route' => 'generated::ZtrQUOdebLXqBf17',
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
      '/login/2fa' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'login.2fa',
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
            '_route' => 'login.2fa.store',
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
      '/verify-email' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'verification.notice',
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
      '/email/verification-notification' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'verification.send',
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
      '/confirm-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.confirm',
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
            '_route' => 'generated::pHHTWpAj3yOjvAv0',
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
      '/' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::eWyGJyxn8iNu9J9u',
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
      '/contact' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'contact',
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
      '/terms-and-conditions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'terms',
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
      '/privacy-policy' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'privacy',
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
      '/webhooks/stripe' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'stripe.webhook',
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
      '/webhooks/paypal' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::VRXsOS8YufpDumMP',
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
      '/webhooks/paystack' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::SRuMFS8r4KlVMIyr',
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
      '/webhooks/razorpay' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::u0KpwCjGGSKur433',
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
      '/webhooks/mollie' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'mollie.webhook',
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
      '/webhooks/coinbase' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::K4xpI6cKbVWz6uuR',
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
      '/install' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'install',
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
      '/install/requirements' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'install.requirements',
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
      '/install/permissions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'install.permissions',
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
      '/install/database' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'install.database',
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
            '_route' => 'install.database.store',
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
      '/install/activation' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'install.activation',
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
            '_route' => 'install.activation.activate',
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
      '/update/now' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::AuHoruY042kGf13j',
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
      '/admin/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.dashboard',
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
      '/admin/davinci/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.davinci.dashboard',
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
      '/admin/davinci/templates' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.davinci.templates',
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
      '/admin/davinci/templates/template/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lVS2IXkoeuUnDSFm',
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
      '/admin/davinci/templates/template/activate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::e7E85cI3ToRJXBt1',
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
      '/admin/davinci/templates/template/deactivate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9hdAyiP4aRIUKprQ',
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
      '/admin/davinci/templates/template/changepackage' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::OUFZnzM9Vx1JPBKy',
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
      '/admin/davinci/templates/template/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Dn8DlAmUwBoM0w3N',
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
      '/admin/davinci/templates/activate/all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::v4PcRgtGk6Fl0Mpv',
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
      '/admin/davinci/templates/deactivate/all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mJOAILDYt7LW9C6q',
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
      '/admin/davinci/configs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.davinci.configs',
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
            '_route' => 'admin.davinci.configs.store',
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
      '/admin/davinci/configs/keys' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.davinci.configs.keys',
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
      '/admin/davinci/configs/keys/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.davinci.configs.keys.create',
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
      '/admin/davinci/configs/keys/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.davinci.configs.keys.store',
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
      '/admin/davinci/configs/keys/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::opgAVtMqMd4WAZCL',
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
      '/admin/davinci/configs/keys/activate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::aD758MpHOuFOhCZ4',
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
      '/admin/davinci/configs/keys/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::76e99IMQDG6UfqtI',
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
      '/admin/davinci/custom' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.davinci.custom',
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
            '_route' => 'admin.davinci.custom.store',
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
      '/admin/davinci/custom/category' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.davinci.custom.category',
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
      '/admin/davinci/custom/category/change' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fu650EeS91bxWQtB',
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
      '/admin/davinci/custom/category/description' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HrrC2jyFhbnUQBJm',
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
      '/admin/davinci/custom/category/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hQ4lQcGWf2X8jJXm',
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
      '/admin/davinci/custom/category/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kcXNFq4zEDR95QGm',
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
      '/admin/text-to-speech/voices' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.davinci.voices',
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
      '/admin/text-to-speech/voices/avatar/upload' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZRcvOsDeV9sCp5vH',
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
      '/admin/text-to-speech/voice/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kr4qIWUaVDp6ASJI',
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
      '/admin/text-to-speech/voices/voice/activate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::c18StUaSrm7kf0JX',
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
      '/admin/text-to-speech/voices/voice/deactivate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8Tk8cIIs2qKcn8Jl',
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
      '/admin/text-to-speech/voices/activate/all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QwvMrAnipDOoM3he',
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
      '/admin/text-to-speech/voices/deactivate/all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HtzQd825GQbQnp4u',
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
      '/admin/chats' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.davinci.chats',
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
      '/admin/chats/avatar/upload' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::IEYTTWdb75vjeoJY',
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
      '/admin/chats/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CeljuG6MylQSRUVX',
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
      '/admin/chats/chat/activate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9fOzzmsBX7QqNlK6',
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
      '/admin/chats/chat/deactivate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NIahZ2oFYoevy4Zo',
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
      '/admin/chats/chat/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.davinci.chat.create',
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
      '/admin/chats/chat/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.davinci.chat.store',
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
      '/admin/users/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user.dashboard',
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
      '/admin/users/activity' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user.activity',
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
      '/admin/users/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user.list',
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
      '/admin/users' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user.store',
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
      '/admin/users/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user.create',
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
      '/admin/finance/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.finance.dashboard',
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
      '/admin/finance/transactions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.finance.transactions',
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
      '/admin/finance/transaction/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::KtGWK4otrT32EQAE',
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
      '/admin/finance/subscriptions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.finance.subscriptions',
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
      '/admin/finance/subscriptions/cancel' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Ghmgn9arE67Ffv0g',
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
      '/admin/finance/plans' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.finance.plans',
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
            '_route' => 'admin.finance.plan.store',
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
      '/admin/finance/plan/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.finance.plan.create',
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
      '/admin/finance/prepaid' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.finance.prepaid',
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
            '_route' => 'admin.finance.prepaid.store',
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
      '/admin/finance/prepaid/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.finance.prepaid.create',
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
      '/admin/finance/promocodes' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.finance.promocodes',
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
            '_route' => 'admin.finance.promocodes.store',
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
      '/admin/finance/promocodes/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.finance.promocodes.create',
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
      '/admin/referral/settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.referral.settings',
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
            '_route' => 'admin.referral.settings.store',
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
      '/admin/referral/payouts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.referral.payouts',
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
      '/admin/referral/top' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.referral.top',
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
      '/admin/settings/invoice' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.invoice',
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
            '_route' => 'admin.settings.invoice.store',
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
      '/admin/finance/settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.finance.settings',
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
            '_route' => 'admin.finance.settings.store',
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
      '/admin/support' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.support',
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
      '/admin/support/response' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.support.response',
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
      '/admin/support/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jMssMTwlPmFBFIOc',
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
      '/admin/notifications' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.notifications',
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
            '_route' => 'admin.notifications.store',
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
      '/admin/notifications/sytem' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.notifications.system',
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
      '/admin/notifications/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.notifications.create',
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
      '/admin/notifications/mark-all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.notifications.markAllRead',
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
      '/admin/notifications/delete-all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.notifications.deleteAll',
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
      '/admin/notifications/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6bMkL6lbjsfryzh4',
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
      '/admin/settings/global' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.global',
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
            '_route' => 'admin.settings.global.store',
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
      '/admin/settings/backup' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.backup',
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
      '/admin/settings/backup/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.backup.create',
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
      '/admin/settings/smtp/test' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.smtp.test',
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
      '/admin/settings/smtp' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.smtp',
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
            '_route' => 'admin.settings.smtp.store',
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
      '/admin/settings/registration' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.registration',
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
            '_route' => 'admin.settings.registration.store',
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
      '/admin/settings/oauth' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.oauth',
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
            '_route' => 'admin.settings.oauth.store',
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
      '/admin/settings/activation' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.activation',
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
            '_route' => 'admin.settings.activation.store',
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
      '/admin/settings/activation/remove' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.activation.remove',
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
      '/admin/settings/activation/destroy' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.activation.destroy',
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
      '/admin/settings/activation/manual' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.activation.manual',
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
            '_route' => 'admin.settings.activation.manual.store',
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
      '/admin/settings/appearance' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.appearance',
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
            '_route' => 'admin.settings.appearance.store',
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
      '/admin/settings/frontend' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.frontend',
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
            '_route' => 'admin.settings.frontend.store',
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
      '/admin/settings/blog' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.blog',
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
            '_route' => 'admin.settings.blog.store',
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
      '/admin/settings/blog/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.blog.create',
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
      '/admin/settings/blog/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::tcQseIf5Uu7ri3vF',
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
      '/admin/settings/faq' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.faq',
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
            '_route' => 'admin.settings.faq.store',
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
      '/admin/settings/faq/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.faq.create',
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
      '/admin/settings/faq/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::BKvmyr2iYn3UDQId',
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
      '/admin/settings/review' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.review',
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
            '_route' => 'admin.settings.review.store',
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
      '/admin/settings/review/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.review.create',
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
      '/admin/settings/review/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::WCApBezKMjm7fbjc',
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
      '/admin/settings/adsense' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.adsense',
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
      '/admin/settings/terms' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.terms',
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
            '_route' => 'admin.settings.terms.store',
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
      '/admin/settings/upgrade' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.upgrade',
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
            '_route' => 'admin.settings.upgrade.start',
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
      '/admin/settings/clear' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.clear',
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
      '/admin/settings/clear/clear' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.clear.cache',
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
      '/admin/settings/clear/symlink' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.clear.symlink',
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
      '/user/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.dashboard',
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
      '/user/dashboard/favorite' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::VTwTMujW9eB1QMKJ',
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
      '/user/dashboard/favoritecustom' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::IRqzDm5bFkccrW0V',
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
      '/user/templates' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.templates',
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
      '/user/templates/process' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5jgmqCpX0upqOZAe',
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
      '/user/templates/custom-template/process' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::nmsMhBj6IKeb67uJ',
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
      '/user/templates/save' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::eG1uN7cekQnZUoIu',
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
      '/user/templates/favorite' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Kw1hnEKbI4cW0Gol',
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
      '/user/templates/favoritecustom' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::RpdeINxnmltKhwUG',
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
      '/user/templates/custom-template/favorite' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mpbTpFTIwhcYX8as',
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
      '/user/templates/article-generator' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MdKfuf4ZFxJdBXpe',
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
      '/user/templates/paragraph-generator' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZqWjShxZLlXSryXP',
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
      '/user/templates/pros-and-cons' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::t7nXkGvnuDlPbYcy',
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
      '/user/templates/talking-points' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pDHluRFdvKhbkIiC',
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
      '/user/templates/summarize-text' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9fmkQJeJtLh2SXPn',
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
      '/user/templates/product-description' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::qYrDJTtf8F15MFQv',
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
      '/user/templates/startup-name-generator' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::upxt1rheRW9dvo1q',
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
      '/user/templates/product-name-generator' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dWViZDoapxzDtSNZ',
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
      '/user/templates/meta-description' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gKCFcddaDRd8n5Y2',
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
      '/user/templates/faqs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::aHkk87tGLrVBW3zH',
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
      '/user/templates/faq-answers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::nT4h1GiScpbXlAkS',
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
      '/user/templates/testimonials' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vGp1Z3DRHnO7ivuX',
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
      '/user/templates/blog-titles' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Sk2V4Pv5wNcip1vW',
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
      '/user/templates/blog-section' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4purrXGOkq9MViNS',
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
      '/user/templates/blog-ideas' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5D0kiXvNuR4GZHz4',
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
      '/user/templates/blog-intros' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::AJ48GA1UvX16QUgo',
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
      '/user/templates/blog-conclusion' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7oRWKEofOky3Cz6X',
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
      '/user/templates/content-rewriter' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8WBqCeKaXPwaDbeo',
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
      '/user/templates/facebook-ads' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4PTuum9ErmSWJhxF',
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
      '/user/templates/video-descriptions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5QVVUJiygN5CAcvF',
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
      '/user/templates/video-titles' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jb0gE3NrSuLTVgJk',
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
      '/user/templates/youtube-tags-generator' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8jAowDPIXCum7xjT',
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
      '/user/templates/instagram-captions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vt9YmtgqnfHDKPRF',
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
      '/user/templates/instagram-hashtags' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0gNz2KcSDNdXAGb7',
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
      '/user/templates/social-post-personal' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::eSBJYQNiqwn8vipm',
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
      '/user/templates/social-post-business' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::d1NZBm8cHjdDnZCJ',
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
      '/user/templates/facebook-headlines' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::M0b7bBJoUi9ZJB8D',
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
      '/user/templates/google-headlines' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DApruj43AVKCBbgf',
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
      '/user/templates/google-ads' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::iqCJnleKL2dFExeD',
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
      '/user/templates/problem-agitate-solution' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZKkeTguT6cZy12Bf',
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
      '/user/templates/academic-essay' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::YRUUbY3TTH4FqreA',
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
      '/user/templates/email-welcome' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hj0xGi59r1PZNO7P',
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
      '/user/templates/email-cold' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::r5iqapeWxc5srPgq',
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
      '/user/templates/email-follow-up' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::IiahbkCedlNVnOHl',
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
      '/user/templates/creative-stories' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::04g9otw4WalP08s8',
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
      '/user/templates/grammar-checker' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::uTlEOrURwbI6qkSA',
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
      '/user/templates/cv-generator' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DFwEmLXaWBoiNhAk',
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
      '/user/templates/cover-letter' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7i7kLSNfwC47mHSY',
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
      '/user/templates/2nd-grader' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZneVTQkpfIHfQsnS',
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
      '/user/templates/video-scripts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7TV0aYZz1Gnqe3ES',
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
      '/user/templates/amazon-product' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mfZYFtR670OYT09n',
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
      '/user/images' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.images',
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
      '/user/images/process' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9EBLq9gbbn9ZVB6Q',
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
      '/user/images/view' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hcrd5TXajDJzQx7Q',
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
      '/user/images/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::YUTyFof26qIWoKpc',
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
      '/user/code' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.codex',
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
      '/user/code/process' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::VlZ8eLLYyAv28miH',
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
      '/user/code/save' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7qhxytscN4joWFDu',
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
      '/user/code/view' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9vntJH1g4VJVnlA6',
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
      '/user/code/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wC8p7ZA8upo2fvPv',
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
      '/user/chat' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.chat',
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
      '/user/chat/process' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5ivmgJjE0rNYEdsJ',
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
      '/user/chat/clear' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::08nWmstvGzGnerJA',
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
      '/user/chat/favorite' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DsamEcxtAXD8psn2',
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
      '/user/chat/generate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3od0n0ZFgwJibdU6',
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
      '/user/chat/messages' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::sBb2MRHoI9neRRyD',
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
      '/user/chat/rename' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::q3NUqkIsDQT18F3v',
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
      '/user/chat/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::WLxssYaIdTuaTaJr',
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
      '/user/speech-to-text' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.transcribe',
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
      '/user/speech-to-text/process' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::nwQnSgzakpcZ0U9k',
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
      '/user/speech-to-text/save' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::R6ZpO3B85ET1mwte',
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
      '/user/speech-to-text/view' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wROhaNCrdtnJfXad',
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
      '/user/speech-to-text/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::AJggS4vErnk1blWg',
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
      '/user/text-to-speech' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.voiceover',
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
      '/user/text-to-speech/synthesize' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.voiceover.synthesize',
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
      '/user/text-to-speech/listen' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.voiceover.listen',
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
      '/user/text-to-speech/listen-row' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NiFT1TSD1Jh6OKpj',
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
      '/user/text-to-speech/audio' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::AAkRaxE87fAyRJ0H',
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
      '/user/text-to-speech/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hCFQuDS2DcmrMx0t',
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
      '/user/text-to-speech/config' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::WvznWGrwhN1XuSvb',
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
      '/user/document' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.documents',
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
            '_route' => 'generated::aySY6Juk3wnM5ofJ',
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
      '/user/document/images' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.documents.images',
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
      '/user/document/codes' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.documents.codes',
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
      '/user/document/voiceovers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.documents.voiceovers',
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
      '/user/document/transcripts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.documents.transcripts',
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
      '/user/document/result/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::d4IqSzq0KwXMwhg0',
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
      '/user/document/result/code/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FwrbtmG6gRp8rFHS',
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
      '/user/document/result/voiceover/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::TNFnlh2BNEvDNCoP',
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
      '/user/document/result/transcript/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::oNbQj2a2zjfDmBpz',
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
      '/user/workbook' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.workbooks',
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
            '_route' => 'generated::00tT4OhqegYEzAp6',
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
        2 => 
        array (
          0 => 
          array (
            '_route' => 'user.workbooks.update',
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
        3 => 
        array (
          0 => 
          array (
            '_route' => 'user.workbooks.delete',
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
      '/user/workbook/result/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::sUDt5hjrKuiNCFZd',
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
      '/user/workbook/change' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.workbooks.change',
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
      '/user/profile/security' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.security',
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
      '/user/profile/security/2fa' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.security.2fa',
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
      '/user/profile/security/2fa/activate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.security.2fa.activate',
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
      '/user/profile/security/2fa/deactivate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.security.2fa.deactivate',
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
            '_route' => 'user.profile',
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
      '/user/profile/edit/defaults' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.profile.defaults',
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
      '/user/profile/edit/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.profile.delete',
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
      '/user/purchases/subscriptions/cancel' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wN4nJzSiM8uALgH7',
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
      '/user/purchases' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.purchases',
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
      '/user/purchases/subscriptions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.purchases.subscriptions',
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
      '/user/pricing/plans' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.plans',
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
      '/user/pricing/plan/one-time' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.prepaid.checkout',
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
      '/user/payments/approved/razorpay' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.payments.approved.razorpay',
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
      '/user/payments/success/braintree' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.payments.approved.braintree',
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
      '/user/payments/approved' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.payments.approved',
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
      '/user/payments/cancelled' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.payments.cancelled',
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
      '/user/payments/subscription/razorpay' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.payments.subscription.razorpay',
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
      '/user/payments/subscription/approved' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.payments.subscription.approved',
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
      '/user/payments/subscription/cancelled' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.payments.subscription.cancelled',
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
      '/user/referral' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.referral',
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
      '/user/referral/settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.referral.store',
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
      '/user/referral/gateway' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.referral.gateway',
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
            '_route' => 'user.referral.gateway.store',
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
      '/user/referral/payouts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.referral.payout',
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
      '/user/referral/email' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.referral.email',
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
      '/user/referral/payouts/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.referral.payout.create',
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
      '/user/referral/payouts/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.referral.payout.store',
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
      '/user/referral/all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.referral.referrals',
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
      '/user/support' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.support',
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
            '_route' => 'user.support.store',
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
      '/user/support/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cwsbFgYTvWGowC4A',
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
      '/user/support/response' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.support.response',
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
      '/user/support/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.support.create',
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
      '/user/notification' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.notifications',
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
      '/user/notification/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1LBAehQHco1LVkwd',
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
      '/user/notifications/mark-all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.notifications.markAllRead',
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
      '/user/notifications/delete-all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.notifications.deleteAll',
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
      '/user/notifications/mark-as-read' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.notifications.mark',
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
      '/user/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'search',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
            'POST' => 2,
            'PUT' => 3,
            'PATCH' => 4,
            'DELETE' => 5,
            'OPTIONS' => 6,
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
      0 => '{^(?|/reset\\-password/([^/]++)(*:32)|/verify\\-email/([^/]++)/([^/]++)(*:71)|/a(?|uth/(?|redirect/([^/]++)(*:107)|callback/([^/]++)(*:132))|dmin/(?|davinci/custom/([^/]++)/(?|show(*:180)|update(*:194))|chats/chat/([^/]++)/(?|edit(*:230)|update(*:244))|users/(?|([^/]++)(?|/(?|show(*:281)|edit(*:293)|credit(*:307)|increase(*:323)|update(*:337))|(*:346))|delete(*:361))|finance/(?|transaction/([^/]++)/(?|update(*:411)|show(*:423)|edit(*:435))|p(?|lan/(?|([^/]++)(?|/(?|show(*:474)|edit(*:486))|(*:495))|delete(*:510))|r(?|epaid/(?|([^/]++)(?|/(?|show(*:551)|edit(*:563))|(*:572))|delete(*:587))|omocodes/([^/]++)(?|/(?|show(*:624)|edit(*:636))|(*:645)))))|referral/(?|([^/]++)/show(*:682)|payouts/([^/]++)/(?|s(?|how(*:717)|tore(*:729))|cancel(*:744)|decline(*:759)))|s(?|upport/([^/]++)/show(*:793)|ettings/(?|b(?|ackup/([^/]++)(?|(*:833)|/delete(*:848))|logs/([^/]++)(?|(*:873)|/edit(*:886)))|faqs/([^/]++)(?|(*:912)|/edit(*:925))|reviews/([^/]++)(?|(*:953)|/edit(*:966))|adsense/([^/]++)(?|(*:994)|/edit(*:1007))))|notifications/(?|([^/]++)/show(*:1049)|system/([^/]++)/show(*:1078))))|/blog/([^/]++)(*:1104)|/locale/([^/]++)(*:1129)|/user/(?|su(?|bscription/stop/([^/]++)(*:1176)|pport/([^/]++)/show(*:1204))|te(?|mplates/custom\\-template/([^/]++)(*:1252)|xt\\-to\\-speech/([^/]++)/show(*:1289))|chats/([^/]++)(*:1313)|document/result/(?|([^/]++)/show(*:1354)|code/([^/]++)/show(*:1381)|voiceover/([^/]++)/show(*:1413)|transcript/([^/]++)/show(*:1446))|workbook/result/([^/]++)/show(*:1485)|p(?|r(?|ofile/(?|security/password/([^/]++)(*:1537)|([^/]++)(*:1554)|project(*:1570)|edit(?|(*:1586)|/delete/([^/]++)(*:1611))|update/defaults/([^/]++)(*:1645))|icing/plan/subscription/([^/]++)(*:1687))|urchases/show/([^/]++)(*:1719)|ayments/(?|pay/(?|([^/]++)(*:1754)|one\\-time/([^/]++)/([^/]++)(*:1790)|promocode/(?|prepaid/([^/]++)(*:1828)|subscription/([^/]++)(*:1858)))|invoice/([^/]++)/(?|generate(*:1897)|show(*:1910)|transfer(*:1927))))|referral/payouts/([^/]++)/(?|show(*:1972)|cancel(*:1987)|decline(*:2003))|notification/([^/]++)/show(*:2039)))/?$}sDu',
    ),
    3 => 
    array (
      32 => 
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
      71 => 
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
      107 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::UpczlcW6LvWhDMYs',
          ),
          1 => 
          array (
            0 => 'driver',
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
      132 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::toda4xCbEKu9zEZd',
          ),
          1 => 
          array (
            0 => 'driver',
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
      180 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.davinci.custom.show',
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
      194 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.davinci.custom.update',
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
          5 => false,
          6 => NULL,
        ),
      ),
      230 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.davinci.chat.edit',
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
      244 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.davinci.chat.update',
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
          5 => false,
          6 => NULL,
        ),
      ),
      281 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user.show',
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
      293 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user.edit',
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
      307 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user.credit',
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
      323 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user.increase',
          ),
          1 => 
          array (
            0 => 'user',
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
      337 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user.update',
          ),
          1 => 
          array (
            0 => 'user',
          ),
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
      346 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user.change',
          ),
          1 => 
          array (
            0 => 'user',
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
      361 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::zZWmnSBIPVEdtCJH',
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
      411 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.finance.transaction.update',
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
          5 => false,
          6 => NULL,
        ),
      ),
      423 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.finance.transaction.show',
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
      435 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.finance.transaction.edit',
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
      474 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.finance.plan.show',
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
      486 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.finance.plan.edit',
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
      495 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.finance.plan.update',
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
      510 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::JnNa3yyMAmusUald',
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
      551 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.finance.prepaid.show',
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
      563 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.finance.prepaid.edit',
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
      572 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.finance.prepaid.update',
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
      587 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6wyp9f8gO13GcOty',
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
      624 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.finance.promocodes.show',
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
      636 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.finance.promocodes.edit',
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
      645 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.finance.promocodes.update',
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
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.finance.promocodes.destroy',
          ),
          1 => 
          array (
            0 => 'id',
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
          0 => 
          array (
            '_route' => 'admin.finance.promocodes.delete',
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
      682 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.referral.show',
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
          5 => false,
          6 => NULL,
        ),
      ),
      717 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.referral.payouts.show',
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
      729 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.referral.payouts.update',
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
          5 => false,
          6 => NULL,
        ),
      ),
      744 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.referral.payouts.cancel',
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
      759 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.referral.payouts.decline',
          ),
          1 => 
          array (
            0 => 'id',
          ),
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
      793 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.support.show',
          ),
          1 => 
          array (
            0 => 'ticket_id',
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
      833 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.backup.download',
          ),
          1 => 
          array (
            0 => 'file_name',
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
      848 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.backup.delete',
          ),
          1 => 
          array (
            0 => 'file_name',
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
      873 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.blog.update',
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
      886 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.blog.edit',
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
      912 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.faq.update',
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
      925 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.faq.edit',
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
      953 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.review.update',
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
      966 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.review.edit',
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
      994 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.adsense.update',
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
      1007 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.adsense.edit',
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
      1049 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.notifications.show',
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
      1078 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.notifications.systemShow',
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
      1104 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'blogs.show',
          ),
          1 => 
          array (
            0 => 'slug',
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
      1129 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'locale',
          ),
          1 => 
          array (
            0 => 'lang',
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
            '_route' => 'generated::6JbmOtkHftiriBrO',
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
      1204 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.support.show',
          ),
          1 => 
          array (
            0 => 'ticket_id',
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
      1252 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ay7PQ5cfNIQBmgcd',
          ),
          1 => 
          array (
            0 => 'code',
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
      1289 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.voiceover.show',
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
      1313 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::BPF9eqWdWnfIuDbD',
          ),
          1 => 
          array (
            0 => 'code',
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
      1354 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.documents.show',
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
      1381 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.documents.code.show',
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
      1413 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.documents.voiceover.show',
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
      1446 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.documents.transcript.show',
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
      1485 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.workbooks.show',
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
      1537 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.security.password',
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
      1554 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.profile.update',
          ),
          1 => 
          array (
            0 => 'user',
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
      1570 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.profile.project',
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
      1586 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.profile.edit',
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
      1611 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.profile.delete.account',
          ),
          1 => 
          array (
            0 => 'user',
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
      1645 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.profile.update.defaults',
          ),
          1 => 
          array (
            0 => 'user',
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
      1687 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.plan.subscribe',
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
      1719 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.purchases.show',
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
      1754 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.payments.pay',
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
      1790 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.payments.pay.prepaid',
          ),
          1 => 
          array (
            0 => 'type',
            1 => 'id',
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
      1828 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.payments.promocodes.prepaid',
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
      1858 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.payments.promocodes.subscription',
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
      1897 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.payments.invoice',
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
          5 => false,
          6 => NULL,
        ),
      ),
      1910 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.payments.invoice.show',
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
      1927 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.payments.invoice.transfer',
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
          5 => false,
          6 => NULL,
        ),
      ),
      1972 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.referral.payout.show',
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
      1987 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.referral.payout.cancel',
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
      2003 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.referral.payout.decline',
          ),
          1 => 
          array (
            0 => 'id',
          ),
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
      2039 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.notifications.show',
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
        1 => 
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
    'generated::48oJjfO7NatSKcXq' => 
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
        'as' => 'generated::48oJjfO7NatSKcXq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
    'generated::5Q8wgsQW42ltuS5o' => 
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
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:295:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:77:"function (\\Illuminate\\Http\\Request $request) {
    return $request->user();
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000005a50000000000000000";}";s:4:"hash";s:44:"hI7gP7qVLAzwTwjvUWfokvwjlvIUxYzLKBC0sGZ++IE=";}}',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::5Q8wgsQW42ltuS5o',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'PreventBackHistory',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\RegisteredUserController@create',
        'controller' => 'App\\Http\\Controllers\\Auth\\RegisteredUserController@create',
        'namespace' => NULL,
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
    'generated::vnXRBo2TaDBZgBqd' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'PreventBackHistory',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\RegisteredUserController@store',
        'controller' => 'App\\Http\\Controllers\\Auth\\RegisteredUserController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::vnXRBo2TaDBZgBqd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
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
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\AuthenticatedSessionController@create',
        'controller' => 'App\\Http\\Controllers\\Auth\\AuthenticatedSessionController@create',
        'namespace' => NULL,
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
    'generated::ZtrQUOdebLXqBf17' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\AuthenticatedSessionController@store',
        'controller' => 'App\\Http\\Controllers\\Auth\\AuthenticatedSessionController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::ZtrQUOdebLXqBf17',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'login.2fa' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'login/2fa',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\AuthenticatedSessionController@twoFactorAuthentication',
        'controller' => 'App\\Http\\Controllers\\Auth\\AuthenticatedSessionController@twoFactorAuthentication',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'login.2fa',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'login.2fa.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'login/2fa',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\AuthenticatedSessionController@twoFactorAuthenticationStore',
        'controller' => 'App\\Http\\Controllers\\Auth\\AuthenticatedSessionController@twoFactorAuthenticationStore',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'login.2fa.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'PreventBackHistory',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\PasswordResetLinkController@create',
        'controller' => 'App\\Http\\Controllers\\Auth\\PasswordResetLinkController@create',
        'namespace' => NULL,
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
    'password.email' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'forgot-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'PreventBackHistory',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\PasswordResetLinkController@store',
        'controller' => 'App\\Http\\Controllers\\Auth\\PasswordResetLinkController@store',
        'namespace' => NULL,
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
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'PreventBackHistory',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\NewPasswordController@create',
        'controller' => 'App\\Http\\Controllers\\Auth\\NewPasswordController@create',
        'namespace' => NULL,
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
    'password.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'reset-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'PreventBackHistory',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\NewPasswordController@store',
        'controller' => 'App\\Http\\Controllers\\Auth\\NewPasswordController@store',
        'namespace' => NULL,
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
    'verification.notice' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'verify-email',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'PreventBackHistory',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\EmailVerificationPromptController@__invoke',
        'controller' => 'App\\Http\\Controllers\\Auth\\EmailVerificationPromptController@__invoke',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'verification.notice',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
      'uri' => 'verify-email/{id}/{hash}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'PreventBackHistory',
          1 => 'auth',
          2 => 'signed',
          3 => 'throttle:6,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\VerifyEmailController@__invoke',
        'controller' => 'App\\Http\\Controllers\\Auth\\VerifyEmailController@__invoke',
        'namespace' => NULL,
        'prefix' => '',
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
    'verification.send' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'email/verification-notification',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'PreventBackHistory',
          1 => 'auth',
          2 => 'throttle:6,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\EmailVerificationNotificationController@store',
        'controller' => 'App\\Http\\Controllers\\Auth\\EmailVerificationNotificationController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'verification.send',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'confirm-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'PreventBackHistory',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ConfirmablePasswordController@show',
        'controller' => 'App\\Http\\Controllers\\Auth\\ConfirmablePasswordController@show',
        'namespace' => NULL,
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
    'generated::pHHTWpAj3yOjvAv0' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'confirm-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'PreventBackHistory',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ConfirmablePasswordController@store',
        'controller' => 'App\\Http\\Controllers\\Auth\\ConfirmablePasswordController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::pHHTWpAj3yOjvAv0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'PreventBackHistory',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\AuthenticatedSessionController@destroy',
        'controller' => 'App\\Http\\Controllers\\Auth\\AuthenticatedSessionController@destroy',
        'namespace' => NULL,
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
    'generated::UpczlcW6LvWhDMYs' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'auth/redirect/{driver}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\SocialAuthController@redirectToProvider',
        'controller' => 'App\\Http\\Controllers\\Auth\\SocialAuthController@redirectToProvider',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::UpczlcW6LvWhDMYs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::toda4xCbEKu9zEZd' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'auth/callback/{driver}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\SocialAuthController@handleProviderCallback',
        'controller' => 'App\\Http\\Controllers\\Auth\\SocialAuthController@handleProviderCallback',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::toda4xCbEKu9zEZd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::eWyGJyxn8iNu9J9u' => 
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
        'uses' => 'App\\Http\\Controllers\\HomeController@index',
        'controller' => 'App\\Http\\Controllers\\HomeController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::eWyGJyxn8iNu9J9u',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'blogs.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'blog/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@blogShow',
        'controller' => 'App\\Http\\Controllers\\HomeController@blogShow',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'blogs.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'contact' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'contact',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@contact',
        'controller' => 'App\\Http\\Controllers\\HomeController@contact',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'contact',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'terms' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'terms-and-conditions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@termsAndConditions',
        'controller' => 'App\\Http\\Controllers\\HomeController@termsAndConditions',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'terms',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'privacy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'privacy-policy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@privacyPolicy',
        'controller' => 'App\\Http\\Controllers\\HomeController@privacyPolicy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'privacy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'stripe.webhook' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'webhooks/stripe',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Webhooks\\StripeWebhookController@handleStripe',
        'controller' => 'App\\Http\\Controllers\\Admin\\Webhooks\\StripeWebhookController@handleStripe',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'stripe.webhook',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::VRXsOS8YufpDumMP' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'webhooks/paypal',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Webhooks\\PaypalWebhookController@handlePaypal',
        'controller' => 'App\\Http\\Controllers\\Admin\\Webhooks\\PaypalWebhookController@handlePaypal',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::VRXsOS8YufpDumMP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::SRuMFS8r4KlVMIyr' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'webhooks/paystack',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Webhooks\\PaystackWebhookController@handlePaystack',
        'controller' => 'App\\Http\\Controllers\\Admin\\Webhooks\\PaystackWebhookController@handlePaystack',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::SRuMFS8r4KlVMIyr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::u0KpwCjGGSKur433' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'webhooks/razorpay',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Webhooks\\RazorpayWebhookController@handleRazorpay',
        'controller' => 'App\\Http\\Controllers\\Admin\\Webhooks\\RazorpayWebhookController@handleRazorpay',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::u0KpwCjGGSKur433',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'mollie.webhook' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'webhooks/mollie',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Webhooks\\MollieWebhookController@handleMollie',
        'controller' => 'App\\Http\\Controllers\\Admin\\Webhooks\\MollieWebhookController@handleMollie',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'mollie.webhook',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::K4xpI6cKbVWz6uuR' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'webhooks/coinbase',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Webhooks\\CoinbaseWebhookController@handleCoinbase',
        'controller' => 'App\\Http\\Controllers\\Admin\\Webhooks\\CoinbaseWebhookController@handleCoinbase',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::K4xpI6cKbVWz6uuR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'install' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'install',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'install',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\InstallController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\InstallController@index',
        'namespace' => NULL,
        'prefix' => '/install',
        'where' => 
        array (
        ),
        'as' => 'install',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'install.requirements' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'install/requirements',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'install',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\InstallController@requirements',
        'controller' => 'App\\Http\\Controllers\\Admin\\InstallController@requirements',
        'namespace' => NULL,
        'prefix' => '/install',
        'where' => 
        array (
        ),
        'as' => 'install.requirements',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'install.permissions' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'install/permissions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'install',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\InstallController@permissions',
        'controller' => 'App\\Http\\Controllers\\Admin\\InstallController@permissions',
        'namespace' => NULL,
        'prefix' => '/install',
        'where' => 
        array (
        ),
        'as' => 'install.permissions',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'install.database' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'install/database',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'install',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\InstallController@database',
        'controller' => 'App\\Http\\Controllers\\Admin\\InstallController@database',
        'namespace' => NULL,
        'prefix' => '/install',
        'where' => 
        array (
        ),
        'as' => 'install.database',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'install.database.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'install/database',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'install',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\InstallController@storeDatabaseCredentials',
        'controller' => 'App\\Http\\Controllers\\Admin\\InstallController@storeDatabaseCredentials',
        'namespace' => NULL,
        'prefix' => '/install',
        'where' => 
        array (
        ),
        'as' => 'install.database.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'install.activation' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'install/activation',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'install',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\InstallController@activation',
        'controller' => 'App\\Http\\Controllers\\Admin\\InstallController@activation',
        'namespace' => NULL,
        'prefix' => '/install',
        'where' => 
        array (
        ),
        'as' => 'install.activation',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'install.activation.activate' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'install/activation',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'install',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\InstallController@activateApplication',
        'controller' => 'App\\Http\\Controllers\\Admin\\InstallController@activateApplication',
        'namespace' => NULL,
        'prefix' => '/install',
        'where' => 
        array (
        ),
        'as' => 'install.activation.activate',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'locale' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'locale/{lang}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\LocaleController@language',
        'controller' => 'App\\Http\\Controllers\\LocaleController@language',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'locale',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::AuHoruY042kGf13j' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'update/now',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UpdateController@updateDatabase',
        'controller' => 'App\\Http\\Controllers\\Admin\\UpdateController@updateDatabase',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::AuHoruY042kGf13j',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.dashboard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.dashboard',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.davinci.dashboard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/davinci/dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminDavinciController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminDavinciController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.davinci.dashboard',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.davinci.templates' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/davinci/templates',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminDavinciController@templates',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminDavinciController@templates',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.davinci.templates',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::lVS2IXkoeuUnDSFm' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/davinci/templates/template/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminDavinciController@descriptionUpdate',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminDavinciController@descriptionUpdate',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::lVS2IXkoeuUnDSFm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::e7E85cI3ToRJXBt1' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/davinci/templates/template/activate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminDavinciController@templateActivate',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminDavinciController@templateActivate',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::e7E85cI3ToRJXBt1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9hdAyiP4aRIUKprQ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/davinci/templates/template/deactivate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminDavinciController@templateDeactivate',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminDavinciController@templateDeactivate',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::9hdAyiP4aRIUKprQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::OUFZnzM9Vx1JPBKy' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/davinci/templates/template/changepackage',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminDavinciController@assignPackage',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminDavinciController@assignPackage',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::OUFZnzM9Vx1JPBKy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Dn8DlAmUwBoM0w3N' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/davinci/templates/template/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminDavinciController@deleteTemplate',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminDavinciController@deleteTemplate',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::Dn8DlAmUwBoM0w3N',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::v4PcRgtGk6Fl0Mpv' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/davinci/templates/activate/all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminDavinciController@templateActivateAll',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminDavinciController@templateActivateAll',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::v4PcRgtGk6Fl0Mpv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mJOAILDYt7LW9C6q' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/davinci/templates/deactivate/all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminDavinciController@templateDeactivateAll',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminDavinciController@templateDeactivateAll',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::mJOAILDYt7LW9C6q',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.davinci.configs' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/davinci/configs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DavinciConfigController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\DavinciConfigController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.davinci.configs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.davinci.configs.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/davinci/configs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DavinciConfigController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\DavinciConfigController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.davinci.configs.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.davinci.configs.keys' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/davinci/configs/keys',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DavinciConfigController@showKeys',
        'controller' => 'App\\Http\\Controllers\\Admin\\DavinciConfigController@showKeys',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.davinci.configs.keys',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.davinci.configs.keys.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/davinci/configs/keys/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DavinciConfigController@createKeys',
        'controller' => 'App\\Http\\Controllers\\Admin\\DavinciConfigController@createKeys',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.davinci.configs.keys.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.davinci.configs.keys.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/davinci/configs/keys/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DavinciConfigController@storeKeys',
        'controller' => 'App\\Http\\Controllers\\Admin\\DavinciConfigController@storeKeys',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.davinci.configs.keys.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::opgAVtMqMd4WAZCL' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/davinci/configs/keys/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DavinciConfigController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\DavinciConfigController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::opgAVtMqMd4WAZCL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::aD758MpHOuFOhCZ4' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/davinci/configs/keys/activate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DavinciConfigController@activate',
        'controller' => 'App\\Http\\Controllers\\Admin\\DavinciConfigController@activate',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::aD758MpHOuFOhCZ4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::76e99IMQDG6UfqtI' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/davinci/configs/keys/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DavinciConfigController@delete',
        'controller' => 'App\\Http\\Controllers\\Admin\\DavinciConfigController@delete',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::76e99IMQDG6UfqtI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.davinci.custom' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/davinci/custom',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CustomTemplateController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\CustomTemplateController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.davinci.custom',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.davinci.custom.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/davinci/custom',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CustomTemplateController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\CustomTemplateController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.davinci.custom.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.davinci.custom.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/davinci/custom/{id}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CustomTemplateController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\CustomTemplateController@show',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.davinci.custom.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.davinci.custom.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/davinci/custom/{id}/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CustomTemplateController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\CustomTemplateController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.davinci.custom.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.davinci.custom.category' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/davinci/custom/category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CustomTemplateController@category',
        'controller' => 'App\\Http\\Controllers\\Admin\\CustomTemplateController@category',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.davinci.custom.category',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fu650EeS91bxWQtB' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/davinci/custom/category/change',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CustomTemplateController@change',
        'controller' => 'App\\Http\\Controllers\\Admin\\CustomTemplateController@change',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::fu650EeS91bxWQtB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HrrC2jyFhbnUQBJm' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/davinci/custom/category/description',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CustomTemplateController@description',
        'controller' => 'App\\Http\\Controllers\\Admin\\CustomTemplateController@description',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::HrrC2jyFhbnUQBJm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::hQ4lQcGWf2X8jJXm' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/davinci/custom/category/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CustomTemplateController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\CustomTemplateController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::hQ4lQcGWf2X8jJXm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kcXNFq4zEDR95QGm' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/davinci/custom/category/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CustomTemplateController@delete',
        'controller' => 'App\\Http\\Controllers\\Admin\\CustomTemplateController@delete',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::kcXNFq4zEDR95QGm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.davinci.voices' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/text-to-speech/voices',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\VoiceCustomizationController@voices',
        'controller' => 'App\\Http\\Controllers\\Admin\\VoiceCustomizationController@voices',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.davinci.voices',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZRcvOsDeV9sCp5vH' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/text-to-speech/voices/avatar/upload',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\VoiceCustomizationController@changeAvatar',
        'controller' => 'App\\Http\\Controllers\\Admin\\VoiceCustomizationController@changeAvatar',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::ZRcvOsDeV9sCp5vH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kr4qIWUaVDp6ASJI' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/text-to-speech/voice/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\VoiceCustomizationController@voiceUpdate',
        'controller' => 'App\\Http\\Controllers\\Admin\\VoiceCustomizationController@voiceUpdate',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::kr4qIWUaVDp6ASJI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::c18StUaSrm7kf0JX' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/text-to-speech/voices/voice/activate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\VoiceCustomizationController@voiceActivate',
        'controller' => 'App\\Http\\Controllers\\Admin\\VoiceCustomizationController@voiceActivate',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::c18StUaSrm7kf0JX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8Tk8cIIs2qKcn8Jl' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/text-to-speech/voices/voice/deactivate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\VoiceCustomizationController@voiceDeactivate',
        'controller' => 'App\\Http\\Controllers\\Admin\\VoiceCustomizationController@voiceDeactivate',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::8Tk8cIIs2qKcn8Jl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QwvMrAnipDOoM3he' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/text-to-speech/voices/activate/all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\VoiceCustomizationController@voicesActivateAll',
        'controller' => 'App\\Http\\Controllers\\Admin\\VoiceCustomizationController@voicesActivateAll',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::QwvMrAnipDOoM3he',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HtzQd825GQbQnp4u' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/text-to-speech/voices/deactivate/all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\VoiceCustomizationController@voicesDeactivateAll',
        'controller' => 'App\\Http\\Controllers\\Admin\\VoiceCustomizationController@voicesDeactivateAll',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::HtzQd825GQbQnp4u',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.davinci.chats' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/chats',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ChatCustomizationController@chats',
        'controller' => 'App\\Http\\Controllers\\Admin\\ChatCustomizationController@chats',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.davinci.chats',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IEYTTWdb75vjeoJY' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/chats/avatar/upload',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ChatCustomizationController@changeAvatar',
        'controller' => 'App\\Http\\Controllers\\Admin\\ChatCustomizationController@changeAvatar',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::IEYTTWdb75vjeoJY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CeljuG6MylQSRUVX' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/chats/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ChatCustomizationController@chatUpdate',
        'controller' => 'App\\Http\\Controllers\\Admin\\ChatCustomizationController@chatUpdate',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::CeljuG6MylQSRUVX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9fOzzmsBX7QqNlK6' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/chats/chat/activate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ChatCustomizationController@chatActivate',
        'controller' => 'App\\Http\\Controllers\\Admin\\ChatCustomizationController@chatActivate',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::9fOzzmsBX7QqNlK6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NIahZ2oFYoevy4Zo' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/chats/chat/deactivate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ChatCustomizationController@chatDeactivate',
        'controller' => 'App\\Http\\Controllers\\Admin\\ChatCustomizationController@chatDeactivate',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::NIahZ2oFYoevy4Zo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.davinci.chat.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/chats/chat/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ChatCustomizationController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\ChatCustomizationController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.davinci.chat.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.davinci.chat.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/chats/chat/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ChatCustomizationController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\ChatCustomizationController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.davinci.chat.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.davinci.chat.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/chats/chat/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ChatCustomizationController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\ChatCustomizationController@edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.davinci.chat.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.davinci.chat.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/chats/chat/{id}/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ChatCustomizationController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\ChatCustomizationController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.davinci.chat.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.user.dashboard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/users/dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminUserController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminUserController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.user.dashboard',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.user.activity' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/users/activity',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminUserController@activity',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminUserController@activity',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.user.activity',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.user.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/users/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminUserController@listUsers',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminUserController@listUsers',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.user.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.user.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminUserController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminUserController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.user.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.user.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/users/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminUserController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminUserController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.user.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.user.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/users/{user}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminUserController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminUserController@show',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.user.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.user.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/users/{user}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminUserController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminUserController@edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.user.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.user.credit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/users/{user}/credit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminUserController@credit',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminUserController@credit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.user.credit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.user.increase' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/users/{user}/increase',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminUserController@increase',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminUserController@increase',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.user.increase',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.user.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/users/{user}/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminUserController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminUserController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.user.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.user.change' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/users/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminUserController@change',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminUserController@change',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.user.change',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zZWmnSBIPVEdtCJH' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/users/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminUserController@delete',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminUserController@delete',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::zZWmnSBIPVEdtCJH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.finance.dashboard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/finance/dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FinanceController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\FinanceController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.finance.dashboard',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.finance.transactions' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/finance/transactions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FinanceController@listTransactions',
        'controller' => 'App\\Http\\Controllers\\Admin\\FinanceController@listTransactions',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.finance.transactions',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.finance.transaction.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/finance/transaction/{id}/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FinanceController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\FinanceController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.finance.transaction.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.finance.transaction.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/finance/transaction/{id}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FinanceController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\FinanceController@show',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.finance.transaction.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.finance.transaction.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/finance/transaction/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FinanceController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\FinanceController@edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.finance.transaction.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KtGWK4otrT32EQAE' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/finance/transaction/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FinanceController@delete',
        'controller' => 'App\\Http\\Controllers\\Admin\\FinanceController@delete',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::KtGWK4otrT32EQAE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.finance.subscriptions' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/finance/subscriptions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FinanceController@listSubscriptions',
        'controller' => 'App\\Http\\Controllers\\Admin\\FinanceController@listSubscriptions',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.finance.subscriptions',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Ghmgn9arE67Ffv0g' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/finance/subscriptions/cancel',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\PaymentController@stopSubscription',
        'controller' => 'App\\Http\\Controllers\\User\\PaymentController@stopSubscription',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::Ghmgn9arE67Ffv0g',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.finance.plans' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/finance/plans',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FinanceSubscriptionPlanController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\FinanceSubscriptionPlanController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.finance.plans',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.finance.plan.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/finance/plans',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FinanceSubscriptionPlanController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\FinanceSubscriptionPlanController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.finance.plan.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.finance.plan.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/finance/plan/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FinanceSubscriptionPlanController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\FinanceSubscriptionPlanController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.finance.plan.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.finance.plan.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/finance/plan/{id}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FinanceSubscriptionPlanController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\FinanceSubscriptionPlanController@show',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.finance.plan.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.finance.plan.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/finance/plan/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FinanceSubscriptionPlanController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\FinanceSubscriptionPlanController@edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.finance.plan.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.finance.plan.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/finance/plan/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FinanceSubscriptionPlanController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\FinanceSubscriptionPlanController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.finance.plan.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JnNa3yyMAmusUald' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/finance/plan/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FinanceSubscriptionPlanController@delete',
        'controller' => 'App\\Http\\Controllers\\Admin\\FinanceSubscriptionPlanController@delete',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::JnNa3yyMAmusUald',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.finance.prepaid' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/finance/prepaid',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FinancePrepaidPlanController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\FinancePrepaidPlanController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.finance.prepaid',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.finance.prepaid.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/finance/prepaid',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FinancePrepaidPlanController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\FinancePrepaidPlanController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.finance.prepaid.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.finance.prepaid.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/finance/prepaid/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FinancePrepaidPlanController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\FinancePrepaidPlanController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.finance.prepaid.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.finance.prepaid.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/finance/prepaid/{id}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FinancePrepaidPlanController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\FinancePrepaidPlanController@show',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.finance.prepaid.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.finance.prepaid.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/finance/prepaid/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FinancePrepaidPlanController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\FinancePrepaidPlanController@edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.finance.prepaid.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.finance.prepaid.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/finance/prepaid/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FinancePrepaidPlanController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\FinancePrepaidPlanController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.finance.prepaid.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6wyp9f8gO13GcOty' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/finance/prepaid/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FinancePrepaidPlanController@delete',
        'controller' => 'App\\Http\\Controllers\\Admin\\FinancePrepaidPlanController@delete',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::6wyp9f8gO13GcOty',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.finance.promocodes' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/finance/promocodes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FinancePromocodeController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\FinancePromocodeController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.finance.promocodes',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.finance.promocodes.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/finance/promocodes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FinancePromocodeController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\FinancePromocodeController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.finance.promocodes.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.finance.promocodes.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/finance/promocodes/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FinancePromocodeController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\FinancePromocodeController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.finance.promocodes.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.finance.promocodes.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/finance/promocodes/{id}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FinancePromocodeController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\FinancePromocodeController@show',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.finance.promocodes.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.finance.promocodes.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/finance/promocodes/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FinancePromocodeController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\FinancePromocodeController@edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.finance.promocodes.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.finance.promocodes.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/finance/promocodes/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FinancePromocodeController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\FinancePromocodeController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.finance.promocodes.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.finance.promocodes.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/finance/promocodes/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FinancePromocodeController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\FinancePromocodeController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.finance.promocodes.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.finance.promocodes.delete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/finance/promocodes/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FinancePromocodeController@delete',
        'controller' => 'App\\Http\\Controllers\\Admin\\FinancePromocodeController@delete',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.finance.promocodes.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.referral.settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/referral/settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ReferralSystemController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReferralSystemController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.referral.settings',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.referral.settings.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/referral/settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ReferralSystemController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReferralSystemController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.referral.settings.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.referral.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/referral/{order_id}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ReferralSystemController@paymentShow',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReferralSystemController@paymentShow',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.referral.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.referral.payouts' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/referral/payouts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ReferralSystemController@payouts',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReferralSystemController@payouts',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.referral.payouts',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.referral.payouts.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/referral/payouts/{id}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ReferralSystemController@payoutsShow',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReferralSystemController@payoutsShow',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.referral.payouts.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.referral.payouts.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/referral/payouts/{id}/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ReferralSystemController@payoutsUpdate',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReferralSystemController@payoutsUpdate',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.referral.payouts.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.referral.payouts.cancel' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/referral/payouts/{id}/cancel',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ReferralSystemController@payoutsCancel',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReferralSystemController@payoutsCancel',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.referral.payouts.cancel',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.referral.payouts.decline' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/referral/payouts/{id}/decline',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ReferralSystemController@payoutsDecline',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReferralSystemController@payoutsDecline',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.referral.payouts.decline',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.referral.top' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/referral/top',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ReferralSystemController@topReferrers',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReferralSystemController@topReferrers',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.referral.top',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.invoice' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/invoice',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\InvoiceController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\InvoiceController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.invoice',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.invoice.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/invoice',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\InvoiceController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\InvoiceController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.invoice.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.finance.settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/finance/settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FinanceSettingController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\FinanceSettingController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.finance.settings',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.finance.settings.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/finance/settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FinanceSettingController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\FinanceSettingController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.finance.settings.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.support' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/support',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SupportController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\SupportController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.support',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.support.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/support/{ticket_id}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SupportController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\SupportController@show',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.support.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.support.response' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/support/response',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SupportController@response',
        'controller' => 'App\\Http\\Controllers\\Admin\\SupportController@response',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.support.response',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jMssMTwlPmFBFIOc' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/support/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SupportController@delete',
        'controller' => 'App\\Http\\Controllers\\Admin\\SupportController@delete',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::jMssMTwlPmFBFIOc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.notifications' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/notifications',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\NotificationController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\NotificationController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.notifications',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.notifications.system' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/notifications/sytem',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\NotificationController@system',
        'controller' => 'App\\Http\\Controllers\\Admin\\NotificationController@system',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.notifications.system',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.notifications.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/notifications/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\NotificationController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\NotificationController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.notifications.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.notifications.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/notifications',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\NotificationController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\NotificationController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.notifications.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.notifications.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/notifications/{id}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\NotificationController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\NotificationController@show',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.notifications.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.notifications.systemShow' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/notifications/system/{id}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\NotificationController@systemShow',
        'controller' => 'App\\Http\\Controllers\\Admin\\NotificationController@systemShow',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.notifications.systemShow',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.notifications.markAllRead' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/notifications/mark-all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\NotificationController@markAllRead',
        'controller' => 'App\\Http\\Controllers\\Admin\\NotificationController@markAllRead',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.notifications.markAllRead',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.notifications.deleteAll' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/notifications/delete-all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\NotificationController@deleteAll',
        'controller' => 'App\\Http\\Controllers\\Admin\\NotificationController@deleteAll',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.notifications.deleteAll',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6bMkL6lbjsfryzh4' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/notifications/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\NotificationController@delete',
        'controller' => 'App\\Http\\Controllers\\Admin\\NotificationController@delete',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::6bMkL6lbjsfryzh4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.global' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/global',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Settings\\GlobalController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\Settings\\GlobalController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.global',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.global.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/global',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Settings\\GlobalController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\Settings\\GlobalController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.global.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.backup' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/backup',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Settings\\BackupController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\Settings\\BackupController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.backup',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.backup.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/backup/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Settings\\BackupController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\Settings\\BackupController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.backup.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.backup.download' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/backup/{file_name}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Settings\\BackupController@download',
        'controller' => 'App\\Http\\Controllers\\Admin\\Settings\\BackupController@download',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.backup.download',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.backup.delete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/backup/{file_name}/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Settings\\BackupController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\Settings\\BackupController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.backup.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.smtp.test' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/smtp/test',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Settings\\SMTPController@test',
        'controller' => 'App\\Http\\Controllers\\Admin\\Settings\\SMTPController@test',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.smtp.test',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.smtp' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/smtp',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Settings\\SMTPController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\Settings\\SMTPController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.smtp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.smtp.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/smtp',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Settings\\SMTPController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\Settings\\SMTPController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.smtp.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.registration' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/registration',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Settings\\RegistrationController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\Settings\\RegistrationController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.registration',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.registration.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/registration',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Settings\\RegistrationController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\Settings\\RegistrationController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.registration.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.oauth' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/oauth',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Settings\\OAuthController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\Settings\\OAuthController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.oauth',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.oauth.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/oauth',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Settings\\OAuthController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\Settings\\OAuthController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.oauth.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.activation' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/activation',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Settings\\ActivationController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\Settings\\ActivationController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.activation',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.activation.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/activation',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Settings\\ActivationController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\Settings\\ActivationController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.activation.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.activation.remove' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/activation/remove',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Settings\\ActivationController@remove',
        'controller' => 'App\\Http\\Controllers\\Admin\\Settings\\ActivationController@remove',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.activation.remove',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.activation.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/settings/activation/destroy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Settings\\ActivationController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\Settings\\ActivationController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.activation.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.activation.manual' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/activation/manual',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Settings\\ActivationController@showManualActivation',
        'controller' => 'App\\Http\\Controllers\\Admin\\Settings\\ActivationController@showManualActivation',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.activation.manual',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.activation.manual.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/activation/manual',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Settings\\ActivationController@storeManualActivation',
        'controller' => 'App\\Http\\Controllers\\Admin\\Settings\\ActivationController@storeManualActivation',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.activation.manual.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.appearance' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/appearance',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontend\\AppearanceController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontend\\AppearanceController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.appearance',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.appearance.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/appearance',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontend\\AppearanceController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontend\\AppearanceController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.appearance.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.frontend' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/frontend',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontend\\FrontendController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontend\\FrontendController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.frontend',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.frontend.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/frontend',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontend\\FrontendController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontend\\FrontendController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.frontend.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.blog' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/blog',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontend\\BlogController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontend\\BlogController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.blog',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.blog.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/blog/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontend\\BlogController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontend\\BlogController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.blog.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.blog.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/blog',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontend\\BlogController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontend\\BlogController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.blog.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.blog.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/settings/blogs/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontend\\BlogController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontend\\BlogController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.blog.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.blog.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/blogs/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontend\\BlogController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontend\\BlogController@edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.blog.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::tcQseIf5Uu7ri3vF' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/blog/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontend\\BlogController@delete',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontend\\BlogController@delete',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::tcQseIf5Uu7ri3vF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.faq' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/faq',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontend\\FAQController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontend\\FAQController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.faq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.faq.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/faq/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontend\\FAQController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontend\\FAQController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.faq.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.faq.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/faq',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontend\\FAQController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontend\\FAQController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.faq.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.faq.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/settings/faqs/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontend\\FAQController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontend\\FAQController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.faq.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.faq.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/faqs/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontend\\FAQController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontend\\FAQController@edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.faq.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BKvmyr2iYn3UDQId' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/faq/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontend\\FAQController@delete',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontend\\FAQController@delete',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::BKvmyr2iYn3UDQId',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.review' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/review',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontend\\ReviewController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontend\\ReviewController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.review',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.review.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/review/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontend\\ReviewController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontend\\ReviewController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.review.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.review.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/review',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontend\\ReviewController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontend\\ReviewController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.review.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.review.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/settings/reviews/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontend\\ReviewController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontend\\ReviewController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.review.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.review.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/reviews/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontend\\ReviewController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontend\\ReviewController@edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.review.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::WCApBezKMjm7fbjc' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/review/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontend\\ReviewController@delete',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontend\\ReviewController@delete',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::WCApBezKMjm7fbjc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.adsense' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/adsense',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontend\\AdsenseController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontend\\AdsenseController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.adsense',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.adsense.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/settings/adsense/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontend\\AdsenseController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontend\\AdsenseController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.adsense.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.adsense.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/adsense/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontend\\AdsenseController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontend\\AdsenseController@edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.adsense.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.terms' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/terms',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontend\\PageController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontend\\PageController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.terms',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.terms.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/terms',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontend\\PageController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontend\\PageController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.terms.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.upgrade' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/upgrade',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Settings\\UpgradeController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\Settings\\UpgradeController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.upgrade',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.upgrade.start' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/upgrade',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Settings\\UpgradeController@upgrade',
        'controller' => 'App\\Http\\Controllers\\Admin\\Settings\\UpgradeController@upgrade',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.upgrade.start',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.clear' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/clear',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Settings\\ClearCacheController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\Settings\\ClearCacheController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.clear',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.clear.cache' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/clear/clear',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Settings\\ClearCacheController@cache',
        'controller' => 'App\\Http\\Controllers\\Admin\\Settings\\ClearCacheController@cache',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.clear.cache',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.clear.symlink' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/clear/symlink',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Settings\\ClearCacheController@symlink',
        'controller' => 'App\\Http\\Controllers\\Admin\\Settings\\ClearCacheController@symlink',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.clear.symlink',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.dashboard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserDashboardController@index',
        'controller' => 'App\\Http\\Controllers\\User\\UserDashboardController@index',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.dashboard',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::VTwTMujW9eB1QMKJ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/dashboard/favorite',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserDashboardController@favorite',
        'controller' => 'App\\Http\\Controllers\\User\\UserDashboardController@favorite',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::VTwTMujW9eB1QMKJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IRqzDm5bFkccrW0V' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/dashboard/favoritecustom',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserDashboardController@favoriteCustom',
        'controller' => 'App\\Http\\Controllers\\User\\UserDashboardController@favoriteCustom',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::IRqzDm5bFkccrW0V',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6JbmOtkHftiriBrO' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/subscription/stop/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\PaymentController@stopSubscription',
        'controller' => 'App\\Http\\Controllers\\User\\PaymentController@stopSubscription',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::6JbmOtkHftiriBrO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.templates' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/templates',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TemplateController@index',
        'controller' => 'App\\Http\\Controllers\\User\\TemplateController@index',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.templates',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5jgmqCpX0upqOZAe' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/templates/process',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TemplateController@process',
        'controller' => 'App\\Http\\Controllers\\User\\TemplateController@process',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::5jgmqCpX0upqOZAe',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::nmsMhBj6IKeb67uJ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/templates/custom-template/process',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TemplateController@processCustom',
        'controller' => 'App\\Http\\Controllers\\User\\TemplateController@processCustom',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::nmsMhBj6IKeb67uJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::eG1uN7cekQnZUoIu' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/templates/save',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TemplateController@save',
        'controller' => 'App\\Http\\Controllers\\User\\TemplateController@save',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::eG1uN7cekQnZUoIu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Kw1hnEKbI4cW0Gol' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/templates/favorite',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TemplateController@favorite',
        'controller' => 'App\\Http\\Controllers\\User\\TemplateController@favorite',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::Kw1hnEKbI4cW0Gol',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::RpdeINxnmltKhwUG' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/templates/favoritecustom',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TemplateController@favoriteCustom',
        'controller' => 'App\\Http\\Controllers\\User\\TemplateController@favoriteCustom',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::RpdeINxnmltKhwUG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mpbTpFTIwhcYX8as' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/templates/custom-template/favorite',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TemplateController@favoriteCustom',
        'controller' => 'App\\Http\\Controllers\\User\\TemplateController@favoriteCustom',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::mpbTpFTIwhcYX8as',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MdKfuf4ZFxJdBXpe' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/templates/article-generator',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TemplateController@viewArticleGenerator',
        'controller' => 'App\\Http\\Controllers\\User\\TemplateController@viewArticleGenerator',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::MdKfuf4ZFxJdBXpe',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZqWjShxZLlXSryXP' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/templates/paragraph-generator',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TemplateController@viewParagraphGenerator',
        'controller' => 'App\\Http\\Controllers\\User\\TemplateController@viewParagraphGenerator',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::ZqWjShxZLlXSryXP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::t7nXkGvnuDlPbYcy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/templates/pros-and-cons',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TemplateController@viewProsAndCons',
        'controller' => 'App\\Http\\Controllers\\User\\TemplateController@viewProsAndCons',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::t7nXkGvnuDlPbYcy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pDHluRFdvKhbkIiC' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/templates/talking-points',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TemplateController@viewTalkingPoints',
        'controller' => 'App\\Http\\Controllers\\User\\TemplateController@viewTalkingPoints',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::pDHluRFdvKhbkIiC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9fmkQJeJtLh2SXPn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/templates/summarize-text',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TemplateController@viewSummarizeText',
        'controller' => 'App\\Http\\Controllers\\User\\TemplateController@viewSummarizeText',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::9fmkQJeJtLh2SXPn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qYrDJTtf8F15MFQv' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/templates/product-description',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TemplateController@viewProductDescription',
        'controller' => 'App\\Http\\Controllers\\User\\TemplateController@viewProductDescription',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::qYrDJTtf8F15MFQv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::upxt1rheRW9dvo1q' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/templates/startup-name-generator',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TemplateController@viewStartupNameGenerator',
        'controller' => 'App\\Http\\Controllers\\User\\TemplateController@viewStartupNameGenerator',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::upxt1rheRW9dvo1q',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dWViZDoapxzDtSNZ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/templates/product-name-generator',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TemplateController@viewProductNameGenerator',
        'controller' => 'App\\Http\\Controllers\\User\\TemplateController@viewProductNameGenerator',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::dWViZDoapxzDtSNZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gKCFcddaDRd8n5Y2' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/templates/meta-description',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TemplateController@viewMetaDescription',
        'controller' => 'App\\Http\\Controllers\\User\\TemplateController@viewMetaDescription',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::gKCFcddaDRd8n5Y2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::aHkk87tGLrVBW3zH' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/templates/faqs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TemplateController@viewFAQs',
        'controller' => 'App\\Http\\Controllers\\User\\TemplateController@viewFAQs',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::aHkk87tGLrVBW3zH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::nT4h1GiScpbXlAkS' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/templates/faq-answers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TemplateController@viewFAQAnswers',
        'controller' => 'App\\Http\\Controllers\\User\\TemplateController@viewFAQAnswers',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::nT4h1GiScpbXlAkS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::vGp1Z3DRHnO7ivuX' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/templates/testimonials',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TemplateController@viewTestimonials',
        'controller' => 'App\\Http\\Controllers\\User\\TemplateController@viewTestimonials',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::vGp1Z3DRHnO7ivuX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Sk2V4Pv5wNcip1vW' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/templates/blog-titles',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TemplateController@viewBlogTitles',
        'controller' => 'App\\Http\\Controllers\\User\\TemplateController@viewBlogTitles',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::Sk2V4Pv5wNcip1vW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4purrXGOkq9MViNS' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/templates/blog-section',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TemplateController@viewBlogSection',
        'controller' => 'App\\Http\\Controllers\\User\\TemplateController@viewBlogSection',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::4purrXGOkq9MViNS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5D0kiXvNuR4GZHz4' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/templates/blog-ideas',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TemplateController@viewBlogIdeas',
        'controller' => 'App\\Http\\Controllers\\User\\TemplateController@viewBlogIdeas',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::5D0kiXvNuR4GZHz4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::AJ48GA1UvX16QUgo' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/templates/blog-intros',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TemplateController@viewBlogIntros',
        'controller' => 'App\\Http\\Controllers\\User\\TemplateController@viewBlogIntros',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::AJ48GA1UvX16QUgo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7oRWKEofOky3Cz6X' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/templates/blog-conclusion',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TemplateController@viewBlogConclusion',
        'controller' => 'App\\Http\\Controllers\\User\\TemplateController@viewBlogConclusion',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::7oRWKEofOky3Cz6X',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8WBqCeKaXPwaDbeo' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/templates/content-rewriter',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TemplateController@viewContentRewriter',
        'controller' => 'App\\Http\\Controllers\\User\\TemplateController@viewContentRewriter',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::8WBqCeKaXPwaDbeo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4PTuum9ErmSWJhxF' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/templates/facebook-ads',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TemplateController@viewFacebookAds',
        'controller' => 'App\\Http\\Controllers\\User\\TemplateController@viewFacebookAds',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::4PTuum9ErmSWJhxF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5QVVUJiygN5CAcvF' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/templates/video-descriptions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TemplateController@viewVideoDescriptions',
        'controller' => 'App\\Http\\Controllers\\User\\TemplateController@viewVideoDescriptions',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::5QVVUJiygN5CAcvF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jb0gE3NrSuLTVgJk' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/templates/video-titles',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TemplateController@viewVideoTitles',
        'controller' => 'App\\Http\\Controllers\\User\\TemplateController@viewVideoTitles',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::jb0gE3NrSuLTVgJk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8jAowDPIXCum7xjT' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/templates/youtube-tags-generator',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TemplateController@viewYoutubeTagsGenerator',
        'controller' => 'App\\Http\\Controllers\\User\\TemplateController@viewYoutubeTagsGenerator',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::8jAowDPIXCum7xjT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::vt9YmtgqnfHDKPRF' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/templates/instagram-captions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TemplateController@viewInstagramCaptions',
        'controller' => 'App\\Http\\Controllers\\User\\TemplateController@viewInstagramCaptions',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::vt9YmtgqnfHDKPRF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0gNz2KcSDNdXAGb7' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/templates/instagram-hashtags',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TemplateController@viewInstagramHashtagsGenerator',
        'controller' => 'App\\Http\\Controllers\\User\\TemplateController@viewInstagramHashtagsGenerator',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::0gNz2KcSDNdXAGb7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::eSBJYQNiqwn8vipm' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/templates/social-post-personal',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TemplateController@viewSocialPostPersonal',
        'controller' => 'App\\Http\\Controllers\\User\\TemplateController@viewSocialPostPersonal',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::eSBJYQNiqwn8vipm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::d1NZBm8cHjdDnZCJ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/templates/social-post-business',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TemplateController@viewSocialPostBusiness',
        'controller' => 'App\\Http\\Controllers\\User\\TemplateController@viewSocialPostBusiness',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::d1NZBm8cHjdDnZCJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::M0b7bBJoUi9ZJB8D' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/templates/facebook-headlines',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TemplateController@viewFacebookHeadlines',
        'controller' => 'App\\Http\\Controllers\\User\\TemplateController@viewFacebookHeadlines',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::M0b7bBJoUi9ZJB8D',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DApruj43AVKCBbgf' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/templates/google-headlines',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TemplateController@viewGoogleAdsHeadlines',
        'controller' => 'App\\Http\\Controllers\\User\\TemplateController@viewGoogleAdsHeadlines',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::DApruj43AVKCBbgf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::iqCJnleKL2dFExeD' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/templates/google-ads',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TemplateController@viewGoogleAdsDescription',
        'controller' => 'App\\Http\\Controllers\\User\\TemplateController@viewGoogleAdsDescription',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::iqCJnleKL2dFExeD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZKkeTguT6cZy12Bf' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/templates/problem-agitate-solution',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TemplateController@viewPAS',
        'controller' => 'App\\Http\\Controllers\\User\\TemplateController@viewPAS',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::ZKkeTguT6cZy12Bf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YRUUbY3TTH4FqreA' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/templates/academic-essay',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TemplateController@viewAcademicEssay',
        'controller' => 'App\\Http\\Controllers\\User\\TemplateController@viewAcademicEssay',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::YRUUbY3TTH4FqreA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::hj0xGi59r1PZNO7P' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/templates/email-welcome',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TemplateController@viewWelcomeEmail',
        'controller' => 'App\\Http\\Controllers\\User\\TemplateController@viewWelcomeEmail',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::hj0xGi59r1PZNO7P',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::r5iqapeWxc5srPgq' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/templates/email-cold',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TemplateController@viewColdEmail',
        'controller' => 'App\\Http\\Controllers\\User\\TemplateController@viewColdEmail',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::r5iqapeWxc5srPgq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IiahbkCedlNVnOHl' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/templates/email-follow-up',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TemplateController@viewFollowUpEmail',
        'controller' => 'App\\Http\\Controllers\\User\\TemplateController@viewFollowUpEmail',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::IiahbkCedlNVnOHl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::04g9otw4WalP08s8' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/templates/creative-stories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TemplateController@viewCreativeStories',
        'controller' => 'App\\Http\\Controllers\\User\\TemplateController@viewCreativeStories',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::04g9otw4WalP08s8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::uTlEOrURwbI6qkSA' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/templates/grammar-checker',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TemplateController@viewGrammarChecker',
        'controller' => 'App\\Http\\Controllers\\User\\TemplateController@viewGrammarChecker',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::uTlEOrURwbI6qkSA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DFwEmLXaWBoiNhAk' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/templates/cv-generator',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TemplateController@viewCVGenerator',
        'controller' => 'App\\Http\\Controllers\\User\\TemplateController@viewCVGenerator',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::DFwEmLXaWBoiNhAk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7i7kLSNfwC47mHSY' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/templates/cover-letter',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TemplateController@viewCoverLetter',
        'controller' => 'App\\Http\\Controllers\\User\\TemplateController@viewCoverLetter',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::7i7kLSNfwC47mHSY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZneVTQkpfIHfQsnS' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/templates/2nd-grader',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TemplateController@viewSummarize2ndGrader',
        'controller' => 'App\\Http\\Controllers\\User\\TemplateController@viewSummarize2ndGrader',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::ZneVTQkpfIHfQsnS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7TV0aYZz1Gnqe3ES' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/templates/video-scripts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TemplateController@viewVideoScripts',
        'controller' => 'App\\Http\\Controllers\\User\\TemplateController@viewVideoScripts',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::7TV0aYZz1Gnqe3ES',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mfZYFtR670OYT09n' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/templates/amazon-product',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TemplateController@viewAmazonProduct',
        'controller' => 'App\\Http\\Controllers\\User\\TemplateController@viewAmazonProduct',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::mfZYFtR670OYT09n',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ay7PQ5cfNIQBmgcd' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/templates/custom-template/{code}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TemplateController@viewCustomTemplate',
        'controller' => 'App\\Http\\Controllers\\User\\TemplateController@viewCustomTemplate',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::ay7PQ5cfNIQBmgcd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.images' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/images',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ImageController@index',
        'controller' => 'App\\Http\\Controllers\\User\\ImageController@index',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.images',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9EBLq9gbbn9ZVB6Q' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/images/process',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ImageController@process',
        'controller' => 'App\\Http\\Controllers\\User\\ImageController@process',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::9EBLq9gbbn9ZVB6Q',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::hcrd5TXajDJzQx7Q' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/images/view',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ImageController@view',
        'controller' => 'App\\Http\\Controllers\\User\\ImageController@view',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::hcrd5TXajDJzQx7Q',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YUTyFof26qIWoKpc' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/images/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ImageController@delete',
        'controller' => 'App\\Http\\Controllers\\User\\ImageController@delete',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::YUTyFof26qIWoKpc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.codex' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/code',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\CodeController@index',
        'controller' => 'App\\Http\\Controllers\\User\\CodeController@index',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.codex',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::VlZ8eLLYyAv28miH' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/code/process',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\CodeController@process',
        'controller' => 'App\\Http\\Controllers\\User\\CodeController@process',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::VlZ8eLLYyAv28miH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7qhxytscN4joWFDu' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/code/save',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\CodeController@save',
        'controller' => 'App\\Http\\Controllers\\User\\CodeController@save',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::7qhxytscN4joWFDu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9vntJH1g4VJVnlA6' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/code/view',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\CodeController@view',
        'controller' => 'App\\Http\\Controllers\\User\\CodeController@view',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::9vntJH1g4VJVnlA6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wC8p7ZA8upo2fvPv' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/code/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\CodeController@delete',
        'controller' => 'App\\Http\\Controllers\\User\\CodeController@delete',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::wC8p7ZA8upo2fvPv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.chat' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/chat',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ChatController@index',
        'controller' => 'App\\Http\\Controllers\\User\\ChatController@index',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.chat',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5ivmgJjE0rNYEdsJ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/chat/process',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ChatController@process',
        'controller' => 'App\\Http\\Controllers\\User\\ChatController@process',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::5ivmgJjE0rNYEdsJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::08nWmstvGzGnerJA' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/chat/clear',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ChatController@clear',
        'controller' => 'App\\Http\\Controllers\\User\\ChatController@clear',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::08nWmstvGzGnerJA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DsamEcxtAXD8psn2' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/chat/favorite',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ChatController@favorite',
        'controller' => 'App\\Http\\Controllers\\User\\ChatController@favorite',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::DsamEcxtAXD8psn2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3od0n0ZFgwJibdU6' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/chat/generate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ChatController@generateChat',
        'controller' => 'App\\Http\\Controllers\\User\\ChatController@generateChat',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::3od0n0ZFgwJibdU6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::sBb2MRHoI9neRRyD' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/chat/messages',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ChatController@messages',
        'controller' => 'App\\Http\\Controllers\\User\\ChatController@messages',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::sBb2MRHoI9neRRyD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::q3NUqkIsDQT18F3v' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/chat/rename',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ChatController@rename',
        'controller' => 'App\\Http\\Controllers\\User\\ChatController@rename',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::q3NUqkIsDQT18F3v',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::WLxssYaIdTuaTaJr' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/chat/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ChatController@delete',
        'controller' => 'App\\Http\\Controllers\\User\\ChatController@delete',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::WLxssYaIdTuaTaJr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BPF9eqWdWnfIuDbD' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/chats/{code}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ChatController@view',
        'controller' => 'App\\Http\\Controllers\\User\\ChatController@view',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::BPF9eqWdWnfIuDbD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.transcribe' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/speech-to-text',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TranscribeController@index',
        'controller' => 'App\\Http\\Controllers\\User\\TranscribeController@index',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.transcribe',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::nwQnSgzakpcZ0U9k' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/speech-to-text/process',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TranscribeController@process',
        'controller' => 'App\\Http\\Controllers\\User\\TranscribeController@process',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::nwQnSgzakpcZ0U9k',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::R6ZpO3B85ET1mwte' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/speech-to-text/save',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TranscribeController@save',
        'controller' => 'App\\Http\\Controllers\\User\\TranscribeController@save',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::R6ZpO3B85ET1mwte',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wROhaNCrdtnJfXad' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/speech-to-text/view',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TranscribeController@view',
        'controller' => 'App\\Http\\Controllers\\User\\TranscribeController@view',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::wROhaNCrdtnJfXad',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::AJggS4vErnk1blWg' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/speech-to-text/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TranscribeController@delete',
        'controller' => 'App\\Http\\Controllers\\User\\TranscribeController@delete',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::AJggS4vErnk1blWg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.voiceover' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/text-to-speech',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\VoiceoverController@index',
        'controller' => 'App\\Http\\Controllers\\User\\VoiceoverController@index',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.voiceover',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.voiceover.synthesize' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/text-to-speech/synthesize',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\VoiceoverController@synthesize',
        'controller' => 'App\\Http\\Controllers\\User\\VoiceoverController@synthesize',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.voiceover.synthesize',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.voiceover.listen' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/text-to-speech/listen',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\VoiceoverController@listen',
        'controller' => 'App\\Http\\Controllers\\User\\VoiceoverController@listen',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.voiceover.listen',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NiFT1TSD1Jh6OKpj' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/text-to-speech/listen-row',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\VoiceoverController@listenRow',
        'controller' => 'App\\Http\\Controllers\\User\\VoiceoverController@listenRow',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::NiFT1TSD1Jh6OKpj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.voiceover.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/text-to-speech/{id}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\VoiceoverController@show',
        'controller' => 'App\\Http\\Controllers\\User\\VoiceoverController@show',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.voiceover.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::AAkRaxE87fAyRJ0H' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/text-to-speech/audio',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\VoiceoverController@audio',
        'controller' => 'App\\Http\\Controllers\\User\\VoiceoverController@audio',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::AAkRaxE87fAyRJ0H',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::hCFQuDS2DcmrMx0t' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/text-to-speech/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\VoiceoverController@delete',
        'controller' => 'App\\Http\\Controllers\\User\\VoiceoverController@delete',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::hCFQuDS2DcmrMx0t',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::WvznWGrwhN1XuSvb' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/text-to-speech/config',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\VoiceoverController@config',
        'controller' => 'App\\Http\\Controllers\\User\\VoiceoverController@config',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::WvznWGrwhN1XuSvb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.documents' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/document',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\DocumentController@index',
        'controller' => 'App\\Http\\Controllers\\User\\DocumentController@index',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.documents',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::aySY6Juk3wnM5ofJ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/document',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\DocumentController@store',
        'controller' => 'App\\Http\\Controllers\\User\\DocumentController@store',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::aySY6Juk3wnM5ofJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.documents.images' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/document/images',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\DocumentController@images',
        'controller' => 'App\\Http\\Controllers\\User\\DocumentController@images',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.documents.images',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.documents.codes' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/document/codes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\DocumentController@codes',
        'controller' => 'App\\Http\\Controllers\\User\\DocumentController@codes',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.documents.codes',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.documents.voiceovers' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/document/voiceovers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\DocumentController@voiceovers',
        'controller' => 'App\\Http\\Controllers\\User\\DocumentController@voiceovers',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.documents.voiceovers',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.documents.transcripts' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/document/transcripts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\DocumentController@transcripts',
        'controller' => 'App\\Http\\Controllers\\User\\DocumentController@transcripts',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.documents.transcripts',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::d4IqSzq0KwXMwhg0' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/document/result/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\DocumentController@delete',
        'controller' => 'App\\Http\\Controllers\\User\\DocumentController@delete',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::d4IqSzq0KwXMwhg0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FwrbtmG6gRp8rFHS' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/document/result/code/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\DocumentController@deleteCode',
        'controller' => 'App\\Http\\Controllers\\User\\DocumentController@deleteCode',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::FwrbtmG6gRp8rFHS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::TNFnlh2BNEvDNCoP' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/document/result/voiceover/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\DocumentController@deleteVoiceover',
        'controller' => 'App\\Http\\Controllers\\User\\DocumentController@deleteVoiceover',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::TNFnlh2BNEvDNCoP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::oNbQj2a2zjfDmBpz' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/document/result/transcript/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\DocumentController@deleteTranscript',
        'controller' => 'App\\Http\\Controllers\\User\\DocumentController@deleteTranscript',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::oNbQj2a2zjfDmBpz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.documents.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/document/result/{id}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\DocumentController@show',
        'controller' => 'App\\Http\\Controllers\\User\\DocumentController@show',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.documents.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.documents.code.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/document/result/code/{id}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\DocumentController@showCode',
        'controller' => 'App\\Http\\Controllers\\User\\DocumentController@showCode',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.documents.code.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.documents.voiceover.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/document/result/voiceover/{id}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\DocumentController@showVoiceover',
        'controller' => 'App\\Http\\Controllers\\User\\DocumentController@showVoiceover',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.documents.voiceover.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.documents.transcript.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/document/result/transcript/{id}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\DocumentController@showTranscript',
        'controller' => 'App\\Http\\Controllers\\User\\DocumentController@showTranscript',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.documents.transcript.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.workbooks' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/workbook',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\WorkbookController@index',
        'controller' => 'App\\Http\\Controllers\\User\\WorkbookController@index',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.workbooks',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::00tT4OhqegYEzAp6' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/workbook',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\WorkbookController@store',
        'controller' => 'App\\Http\\Controllers\\User\\WorkbookController@store',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::00tT4OhqegYEzAp6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::sUDt5hjrKuiNCFZd' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/workbook/result/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\WorkbookController@delete',
        'controller' => 'App\\Http\\Controllers\\User\\WorkbookController@delete',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::sUDt5hjrKuiNCFZd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.workbooks.change' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/workbook/change',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\WorkbookController@change',
        'controller' => 'App\\Http\\Controllers\\User\\WorkbookController@change',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.workbooks.change',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.workbooks.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/workbook/result/{id}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\WorkbookController@show',
        'controller' => 'App\\Http\\Controllers\\User\\WorkbookController@show',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.workbooks.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.workbooks.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'user/workbook',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\WorkbookController@update',
        'controller' => 'App\\Http\\Controllers\\User\\WorkbookController@update',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.workbooks.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.workbooks.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'user/workbook',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\WorkbookController@destroy',
        'controller' => 'App\\Http\\Controllers\\User\\WorkbookController@destroy',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.workbooks.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.security' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/profile/security',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserPasswordController@index',
        'controller' => 'App\\Http\\Controllers\\User\\UserPasswordController@index',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.security',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.security.password' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/profile/security/password/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserPasswordController@update',
        'controller' => 'App\\Http\\Controllers\\User\\UserPasswordController@update',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.security.password',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.security.2fa' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/profile/security/2fa',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserPasswordController@google',
        'controller' => 'App\\Http\\Controllers\\User\\UserPasswordController@google',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.security.2fa',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.security.2fa.activate' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/profile/security/2fa/activate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserPasswordController@activate2FA',
        'controller' => 'App\\Http\\Controllers\\User\\UserPasswordController@activate2FA',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.security.2fa.activate',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.security.2fa.deactivate' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/profile/security/2fa/deactivate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserPasswordController@deactivate2FA',
        'controller' => 'App\\Http\\Controllers\\User\\UserPasswordController@deactivate2FA',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.security.2fa.deactivate',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.profile' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserController@index',
        'controller' => 'App\\Http\\Controllers\\User\\UserController@index',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.profile',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.profile.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'user/profile/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserController@update',
        'controller' => 'App\\Http\\Controllers\\User\\UserController@update',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.profile.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.profile.project' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/profile/project',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserController@updateProject',
        'controller' => 'App\\Http\\Controllers\\User\\UserController@updateProject',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.profile.project',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.profile.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/profile/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserController@edit',
        'controller' => 'App\\Http\\Controllers\\User\\UserController@edit',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.profile.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.profile.defaults' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/profile/edit/defaults',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserController@editDefaults',
        'controller' => 'App\\Http\\Controllers\\User\\UserController@editDefaults',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.profile.defaults',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.profile.delete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/profile/edit/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserController@showDelete',
        'controller' => 'App\\Http\\Controllers\\User\\UserController@showDelete',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.profile.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.profile.delete.account' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/profile/edit/delete/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserController@accountDelete',
        'controller' => 'App\\Http\\Controllers\\User\\UserController@accountDelete',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.profile.delete.account',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.profile.update.defaults' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'user/profile/update/defaults/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserController@updateDefaults',
        'controller' => 'App\\Http\\Controllers\\User\\UserController@updateDefaults',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.profile.update.defaults',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wN4nJzSiM8uALgH7' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/purchases/subscriptions/cancel',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\PaymentController@stopSubscription',
        'controller' => 'App\\Http\\Controllers\\User\\PaymentController@stopSubscription',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::wN4nJzSiM8uALgH7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.purchases' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/purchases',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\PurchaseHistoryController@index',
        'controller' => 'App\\Http\\Controllers\\User\\PurchaseHistoryController@index',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.purchases',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.purchases.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/purchases/show/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\PurchaseHistoryController@show',
        'controller' => 'App\\Http\\Controllers\\User\\PurchaseHistoryController@show',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.purchases.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.purchases.subscriptions' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/purchases/subscriptions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\PurchaseHistoryController@subscriptions',
        'controller' => 'App\\Http\\Controllers\\User\\PurchaseHistoryController@subscriptions',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.purchases.subscriptions',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.plans' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/pricing/plans',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\PlanController@index',
        'controller' => 'App\\Http\\Controllers\\User\\PlanController@index',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.plans',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.plan.subscribe' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/pricing/plan/subscription/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
          5 => 'unsubscribed',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\PlanController@subscribe',
        'controller' => 'App\\Http\\Controllers\\User\\PlanController@subscribe',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.plan.subscribe',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.prepaid.checkout' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/pricing/plan/one-time',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\PlanController@checkout',
        'controller' => 'App\\Http\\Controllers\\User\\PlanController@checkout',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.prepaid.checkout',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.payments.pay' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/payments/pay/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
          5 => 'unsubscribed',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\PaymentController@pay',
        'controller' => 'App\\Http\\Controllers\\User\\PaymentController@pay',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.payments.pay',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.payments.pay.prepaid' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/payments/pay/one-time/{type}/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\PaymentController@payPrePaid',
        'controller' => 'App\\Http\\Controllers\\User\\PaymentController@payPrePaid',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.payments.pay.prepaid',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.payments.approved.razorpay' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/payments/approved/razorpay',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\PaymentController@approvedRazorpayPrepaid',
        'controller' => 'App\\Http\\Controllers\\User\\PaymentController@approvedRazorpayPrepaid',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.payments.approved.razorpay',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.payments.approved.braintree' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/payments/success/braintree',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\PaymentController@braintreeSuccess',
        'controller' => 'App\\Http\\Controllers\\User\\PaymentController@braintreeSuccess',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.payments.approved.braintree',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.payments.approved' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/payments/approved',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\PaymentController@approved',
        'controller' => 'App\\Http\\Controllers\\User\\PaymentController@approved',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.payments.approved',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.payments.cancelled' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/payments/cancelled',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\PaymentController@cancelled',
        'controller' => 'App\\Http\\Controllers\\User\\PaymentController@cancelled',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.payments.cancelled',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.payments.subscription.razorpay' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/payments/subscription/razorpay',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\PaymentController@approvedRazorpaySubscription',
        'controller' => 'App\\Http\\Controllers\\User\\PaymentController@approvedRazorpaySubscription',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.payments.subscription.razorpay',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.payments.subscription.approved' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/payments/subscription/approved',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\PaymentController@approvedSubscription',
        'controller' => 'App\\Http\\Controllers\\User\\PaymentController@approvedSubscription',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.payments.subscription.approved',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.payments.subscription.cancelled' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/payments/subscription/cancelled',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
          5 => 'unsubscribed',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\PaymentController@cancelledSubscription',
        'controller' => 'App\\Http\\Controllers\\User\\PaymentController@cancelledSubscription',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.payments.subscription.cancelled',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.payments.promocodes.prepaid' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/payments/pay/promocode/prepaid/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\PromocodeController@applyPromocodesPrepaid',
        'controller' => 'App\\Http\\Controllers\\User\\PromocodeController@applyPromocodesPrepaid',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.payments.promocodes.prepaid',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.payments.promocodes.subscription' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/payments/pay/promocode/subscription/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\PromocodeController@applyPromocodesSubscription',
        'controller' => 'App\\Http\\Controllers\\User\\PromocodeController@applyPromocodesSubscription',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.payments.promocodes.subscription',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.referral' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/referral',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ReferralController@index',
        'controller' => 'App\\Http\\Controllers\\User\\ReferralController@index',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.referral',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.referral.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/referral/settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ReferralController@store',
        'controller' => 'App\\Http\\Controllers\\User\\ReferralController@store',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.referral.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.referral.gateway' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/referral/gateway',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ReferralController@gateway',
        'controller' => 'App\\Http\\Controllers\\User\\ReferralController@gateway',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.referral.gateway',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.referral.gateway.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/referral/gateway',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ReferralController@gatewayStore',
        'controller' => 'App\\Http\\Controllers\\User\\ReferralController@gatewayStore',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.referral.gateway.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.referral.payout' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/referral/payouts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ReferralController@payouts',
        'controller' => 'App\\Http\\Controllers\\User\\ReferralController@payouts',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.referral.payout',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.referral.email' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/referral/email',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ReferralController@email',
        'controller' => 'App\\Http\\Controllers\\User\\ReferralController@email',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.referral.email',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.referral.payout.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/referral/payouts/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ReferralController@payoutsCreate',
        'controller' => 'App\\Http\\Controllers\\User\\ReferralController@payoutsCreate',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.referral.payout.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.referral.payout.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/referral/payouts/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ReferralController@payoutsStore',
        'controller' => 'App\\Http\\Controllers\\User\\ReferralController@payoutsStore',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.referral.payout.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.referral.referrals' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/referral/all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ReferralController@referrals',
        'controller' => 'App\\Http\\Controllers\\User\\ReferralController@referrals',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.referral.referrals',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.referral.payout.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/referral/payouts/{id}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ReferralController@payoutsShow',
        'controller' => 'App\\Http\\Controllers\\User\\ReferralController@payoutsShow',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.referral.payout.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.referral.payout.cancel' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/referral/payouts/{id}/cancel',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ReferralController@payoutsCancel',
        'controller' => 'App\\Http\\Controllers\\User\\ReferralController@payoutsCancel',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.referral.payout.cancel',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.referral.payout.decline' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'user/referral/payouts/{id}/decline',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ReferralController@payoutsDecline',
        'controller' => 'App\\Http\\Controllers\\User\\ReferralController@payoutsDecline',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.referral.payout.decline',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.payments.invoice' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/payments/invoice/{order_id}/generate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\PaymentController@generatePaymentInvoice',
        'controller' => 'App\\Http\\Controllers\\User\\PaymentController@generatePaymentInvoice',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.payments.invoice',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.payments.invoice.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/payments/invoice/{id}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\PaymentController@showPaymentInvoice',
        'controller' => 'App\\Http\\Controllers\\User\\PaymentController@showPaymentInvoice',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.payments.invoice.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.payments.invoice.transfer' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/payments/invoice/{order_id}/transfer',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\PaymentController@bankTransferPaymentInvoice',
        'controller' => 'App\\Http\\Controllers\\User\\PaymentController@bankTransferPaymentInvoice',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.payments.invoice.transfer',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.support' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/support',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserSupportController@index',
        'controller' => 'App\\Http\\Controllers\\User\\UserSupportController@index',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.support',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.support.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/support',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserSupportController@store',
        'controller' => 'App\\Http\\Controllers\\User\\UserSupportController@store',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.support.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cwsbFgYTvWGowC4A' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/support/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserSupportController@delete',
        'controller' => 'App\\Http\\Controllers\\User\\UserSupportController@delete',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::cwsbFgYTvWGowC4A',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.support.response' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/support/response',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserSupportController@response',
        'controller' => 'App\\Http\\Controllers\\User\\UserSupportController@response',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.support.response',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.support.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/support/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserSupportController@create',
        'controller' => 'App\\Http\\Controllers\\User\\UserSupportController@create',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.support.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.support.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/support/{ticket_id}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserSupportController@show',
        'controller' => 'App\\Http\\Controllers\\User\\UserSupportController@show',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.support.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.notifications' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/notification',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserNotificationController@index',
        'controller' => 'App\\Http\\Controllers\\User\\UserNotificationController@index',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.notifications',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.notifications.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/notification/{id}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserNotificationController@show',
        'controller' => 'App\\Http\\Controllers\\User\\UserNotificationController@show',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.notifications.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1LBAehQHco1LVkwd' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/notification/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserNotificationController@delete',
        'controller' => 'App\\Http\\Controllers\\User\\UserNotificationController@delete',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::1LBAehQHco1LVkwd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.notifications.markAllRead' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/notifications/mark-all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserNotificationController@markAllRead',
        'controller' => 'App\\Http\\Controllers\\User\\UserNotificationController@markAllRead',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.notifications.markAllRead',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.notifications.deleteAll' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/notifications/delete-all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserNotificationController@deleteAll',
        'controller' => 'App\\Http\\Controllers\\User\\UserNotificationController@deleteAll',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.notifications.deleteAll',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.notifications.mark' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/notifications/mark-as-read',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserNotificationController@markNotification',
        'controller' => 'App\\Http\\Controllers\\User\\UserNotificationController@markNotification',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.notifications.mark',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'search' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
        2 => 'POST',
        3 => 'PUT',
        4 => 'PATCH',
        5 => 'DELETE',
        6 => 'OPTIONS',
      ),
      'uri' => 'user/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\SearchController@index',
        'controller' => 'App\\Http\\Controllers\\User\\SearchController@index',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'search',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
