<?php
namespace kilyakus\webview;

use yii\web\AssetBundle;

class WebViewAsset extends AssetBundle
{
    public $sourcePath = '@vendor/kilyakus';

    public $css = [
        'assets/css/webview.min.css',
        'assets/css/scrollview.min.css',
        'assets/css/dockview.min.css',
    ];

    public $js = [
        'assets/js/webview.min.js',
        'assets/js/scrollview.min.js',
        'assets/js/dockview.min.js',
        'assets/js/holdview.min.js',
    ];
}