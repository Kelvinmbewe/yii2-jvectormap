<?php

/**
* This file is part of the CJTTERABYTESOFT yii2-widgets
*
* (c) CJT TERABYTE LLC yii2-extension <https://github.com/cjtterabytesoft/yii2-jvectormap>
* For the full copyright and license information, please view the LICENSE.md
* file that was distributed with this source code
*
* @link: https://github.com/cjtterabytesoft/yii2-jvectormap
* @author: Wilmer Arámbula <cjtterabytellc@gmail.com>
* @copyright: (c) CJT TERABYTE LLC
* @Widget: [yii2-jvectormap]
* @Assets: [MapAsset]
* @since: 0.0.1-dev
**/

namespace cjtterabytesoft\widget\jvectormap\assets;

use yii\web\AssetBundle;

class MapAsset extends AssetBundle
{
    
    public $sourcePath = "@cjtterabytesoft/widget/jvectormap/assets/maps/js";

    public function registerAssetFiles($view)     {
        parent::registerAssetFiles($view);
    }

}