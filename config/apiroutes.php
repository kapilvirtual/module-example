<?php

Route::group(
    ['prefix' => '/api/v1/', 'namespace' => 'ModuleExample'],
    function () {
        Route::get('visit/{page_name}', 'HelloWorld\\Controller\\HelloWorldApiController@visit');
    }
);
