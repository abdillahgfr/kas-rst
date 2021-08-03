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
        'css/site.css',
        'vendor/node-waves/waves.css',
        'vendor/animate-css/animate.css',
        'plugins/morrisjs/morris.css',
        'css/style.css',
        'css/themes/all-themes.css',
    ];
    public $js = [
        'plugins/bootstrap-select/js/bootstrap-select.js',
        'plugins/jquery-slimscroll/jquery.slimscroll.js',
        'vendor/jquery-validation/jquery.validate.js',
        'plugins/node-waves/waves.js',
        'plugins/jquery-countto/jquery.countTo.js',
        'plugins/raphael/raphael.min.js',
        'plugins/morrisjs/morris.js',
        'plugins/chartjs/Chart.bundle.js',
        'plugins/flot-charts/jquery.flot.js',
        'plugins/flot-charts/jquery.flot.resize.js',
        'plugins/flot-charts/jquery.flot.pie.js',
        'plugins/flot-charts/jquery.flot.categories.js',
        'plugins/flot-charts/jquery.flot.time.js',
        'plugins/jquery-sparkline/jquery.sparkline.js',
        'js/admin.js',
        'js/pages/index.js',
        'js/demo.js',
        'js/pages/examples/sign-up.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}
