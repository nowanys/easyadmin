<?php
// +----------------------------------------------------------------------
// | 控制台配置
// +----------------------------------------------------------------------
return [
    // 指令定义
    'commands' => [
        'node'      => 'app\admin\command\Node',
        'OssStatic' => 'app\admin\command\OssStatic',
//        'alioss'    => 'addons\alioss\command\Alioss',
    ],
];
