<?php

namespace dudonsky\navcontrol;

use yii\web\AssetBundle;

class NavControlAsset extends AssetBundle {
	
	public function init() {
		\Yii::setAlias('@navcontrol', __DIR__);
		return parent::init();
	}

	public $sourcePath = '@navcontrol/assets';
	public $css = [];
	public $js = [
		'jquery.flot.navigationControl.js',
	];
}
