<?php

namespace dudonsky\navcontrol;

/**
 * This is just an example.
 */
class NavControl extends \yii\base\Widget
{
    public function run()
    {
		NavControlAsset::register($this->getView());
    }
}
