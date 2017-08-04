<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace shoxabbos\apicrud\assets;

use yii\web\AssetBundle;


class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';

    public $css = [
        'http://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.11.0/styles/default.min.css',
    ];

    public $js = [
        'http://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.11.0/highlight.min.js'
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
