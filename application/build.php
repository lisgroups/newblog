<?php
return [
    // 定义test模块的自动生成
    'test' => [
        '__dir__' => ['controller', 'model', 'view'],
        'controller' => ['User', 'UserType'],
        'model' => ['User', 'UserType'],
        'view' => ['index/index', 'index/test'],
    ],
];