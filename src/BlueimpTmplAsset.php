<?php
/**
 * @link https://github.com/2amigos/yii2-file-upload-widget
 * @copyright Copyright (c) 2013-2017 2amigOS! Consulting Group LLC
 * @license http://opensource.org/licenses/BSD-3-Clause
 */

namespace dosamigos\fileupload;

use yii\web\AssetBundle;

/**
 * FileUploadUIAsset
 *
 * @author Antonio Ramirez <hola@2amigos.us>
 */
class BlueimpTmplAsset extends AssetBundle
{
    public $sourcePath = '@bower/blueimp-tmpl';
    public $js = [
        'js/tmpl.min.js',
    ];
}
