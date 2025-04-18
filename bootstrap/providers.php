<?php
var_dump("Third Step => <h6 class='text-danger'>" . realpath(__DIR__) . '\\' . basename(__FILE__) . "</h6>   ||| ");


return [
    App\Providers\AppServiceProvider::class,
    App\Providers\FortifyServiceProvider::class,
    App\Providers\TelescopeServiceProvider::class,
];
