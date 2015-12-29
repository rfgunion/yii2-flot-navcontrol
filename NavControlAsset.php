<?php

namespace dudonsky\navcontrol;

use yii\web\AssetBundle;

class NavControlAsset extends AssetBundle {
	
	public $sourcePath = 'dudonsky/navcontrol/assets';
	public $css = [];
	public $js = [
		'jquery.flot.navigationControl.js',
	];
}
