<?php

Route::group(
    ['prefix' => '/helloworld', 'namespace' => 'ModuleExample'],
    function () {
        Route::get('/', 'HelloWorld\\Controller\\HelloWorldController@index');
    }
);
