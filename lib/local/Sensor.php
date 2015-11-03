<?php
/**
 * @link http://canis.io
 *
 * @copyright Copyright (c) 2015 Canis
 * @license http://canis.io/license/
 */

namespace canis\sensors\local;

use Yii;

abstract class Sensor extends \canis\sensors\base\Sensor
{
	public function getCheckInterval()
	{
		return false;
	}

	public function getDefaultCheckRetries()
	{
		return 0;
	}

	public function onInstantiation($sensorInstance)
	{
		return $sensorInstance->check();
	}
}