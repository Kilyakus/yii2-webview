<?php
namespace kilyakus\webview;

use yii\web\AssetBundle;

class WebViewAsset extends AssetBundle
{
    public $sourcePath = '@vendor/kilyakus/yii2-webview/src/assets';

    public $css = [
        'css/webview.min.css',
        'css/scrollview.min.css',
        'css/dockview.min.css',
    ];

    public $js = [
        'js/webview.min.js',
        'js/scrollview.min.js',
        'js/dockview.min.js',
        'js/holdview.min.js',
    ];
}