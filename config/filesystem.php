<?php

use think\facade\Env;

return [
    // 默认磁盘
    'default' => Env::get('filesystem.driver', 'local'),
    // 磁盘列表
    'disks'   => [
        'local'  => [
            'type' => 'local',
            'root' => app()->getRuntimePath() . 'storage',
        ],
        'public' => [
            // 磁盘类型
            'type'       => 'local',
            // 磁盘路径
            'root'       => app()->getRootPath() . 'public/storage',
            // 磁盘路径对应的外部URL路径
            'url'        => '/storage',
            // 可见性
            'visibility' => 'public',
        ],
        // 更多的磁盘配置信息
    ],
    /**
     * @example aliyun 阿里云OSS对象存储
     * @example huaweicloud 华为云OBS对象存储
     * @example qcloud 腾讯云COS对象存储
     */
    'object_store' => Env::get('filesystem.object_store', 'qcloud')
];
