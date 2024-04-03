<?php
return [
    'auth' => \Src\Auth\Auth::class,
    'identity'=>\Model\User::class,
    'routeMiddleware' => [
        'auth' => \Middlewares\AuthMiddleware::class,
        'admin' => \Middlewares\AdminMiddleware::class,
        'employee' => \Middlewares\EmployeeMiddleware::class
    ],
    'validators' => [
        'required' => Validator\Validators\RequireValidator::class,
        'unique' => Validator\Validators\UniqueValidator::class
    ],
    'routeAppMiddleware' => [
        'csrf' => \Middlewares\CSRFMiddleware::class,
        'trim' => \Middlewares\TrimMiddleware::class,
        'specialChars' => \Middlewares\SpecialCharsMiddleware::class,
        'json' => \Middlewares\JSONMiddleware::class,
    ],
    'providers' => [
      'kernel' => \Providers\KernelProvider::class,
      'route' => \Providers\RouteProvider::class,
      'db' => \Providers\DBProvider::class,
      'auth' => \Providers\AuthProvider::class,
    ],
];
