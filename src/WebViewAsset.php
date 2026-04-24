<?php
namespace kilyakus\webview;

use yii\web\AssetBundle;

class WebViewAsset extends AssetBundle
{
    public $sourcePath = '@vendor/kilyakus';

    public $css = [
        'js-webview/webview.min.css',
        'js-scrollview/scrollview.min.css',
        'js-dockview/dockview.min.css',
    ];

    public $js = [
        'js-webview/webview.min.js',
        'js-scrollview/scrollview.min.js',
        'js-dockview/dockview.min.js',
        'js-holdview/holdview.min.js',
    ];
}