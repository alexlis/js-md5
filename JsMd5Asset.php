<?php
/**
* @file JsMd5Asset.php
*
* @author mengzhonghua - mengzhonghua12@gmail.com
* @version
* @date 2016-06-30
 */

namespace alexlis\jsmd5;

use yii\web\AssetBundle;

class JsMd5Asset extends AssetBundle
{
    public $sourcePath = '@vendor/bower/spark-md5';

    public $depends = [
        'yii\web\JqueryAsset',
    ];

    public function init()
    {
         $this->js[] = YII_DEBUG ? 'spark-md5.js' : 'spark-md5.min.js';
    }
}
