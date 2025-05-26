protected $routeMiddleware = [
    // ...
    'ceklogin' => \App\Http\Middleware\CekLogin::class,
];

'role' => \App\Http\Middleware\RoleMiddleware::class,


