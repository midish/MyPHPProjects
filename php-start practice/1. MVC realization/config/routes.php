<?php

return array(
//  ЗАПРОС => строка где обрабатывается ЗАПРОС
    // 'news/77' => 'news/view',


    //'news/([0-9]+)' => 'news/view',

    //'news/([a-z]+)/([0-9]+)' => 'news/view/$1/$2',

    //'news' => 'news/index', // actionIndex in NewsController
    //'products' => 'product/list', // actionList in ProductController

    'news/([0-9]+)' => 'news/view/$1', // actionView в NewsController
    'news' => 'news/index' // actionIndex в NewsController
);