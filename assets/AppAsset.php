<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
            "/web/public/css/font-awesome.min.css",
            "/web/public/css/ionicons.min.css",
            "/web/public/css/linearicons.css",
            "/web/public/css/nice-select.css",
            "/web/public/css/jquery.fancybox.css",
            "/web/public/css/jquery-ui.min.css",
            "/web/public/css/meanmenu.min.css",
            "/web/public/css/nivo-slider.css",
            "/web/public/css/owl.carousel.min.css",
            "/web/public/css/bootstrap.min.css",
            "/web/public/css/default.css",
            "/web/public/css/style.css",
            "/web/public/css/responsive.css",
//            '/web/css/site.css',
    ];
    public $js = [
            "/web/public/js/vendor/modernizr-3.5.0.min.js",
            "/web/public/js/vendor/jquery-3.2.1.min.js",
            "/web/public/js/jquery.countdown.min.js",
            "/web/public/js/jquery.meanmenu.min.js",
            "/web/public/js/jquery.scrollUp.js",
            "/web/public/js/jquery.nivo.slider.js",
            "/web/public/js/jquery.fancybox.min.js",
            "/web/public/js/jquery.nice-select.min.js",
            "/web/public/js/jquery-ui.min.js",
            "/web/public/js/owl.carousel.min.js",
            "/web/public/js/popper.min.js",
            "/web/public/js/bootstrap.min.js",
            "/web/public/js/plugins.js",
            '/web/public/js/jquery.accordion.js',
            '/web/public/js/jquery.cookie.js',
            "/web/public/js/main.js",
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
