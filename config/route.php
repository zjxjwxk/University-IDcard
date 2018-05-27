<?php
return [
    Route::rule('/', 'index/index/index'),
    
    // User
    Route::post('/user/login','api/user/login'),
    Route::rule('/user/changePwd','api/user/changePwd'),
    Route::rule('/user/getInfo','api/user/getInfo'),
    
    // Admin
    Route::rule('/admin/findPwd','api/admin/findPwd'),
    Route::rule('/admin/register', 'api/admin/register'),
    
    // Book
    Route::rule('/book/searchBook', 'api/book/searchBook'),
    Route::rule('/book/searchBorrow', 'api/book/searchBorrow'),

    // Card
    Route::post('/card/charge', 'api/card/charge'),
    Route::post('/card/consume', 'api/card/consume'),
    Route::rule('/card/getInfo', 'api/card/getInfo'),
];