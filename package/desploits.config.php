<?php
/**
 * @Author: Desploits Developers
 * @Date:   2016-11-10 20:01:39
 * @Last Modified by:   Eka Syahwan
 * @Last Modified time: 2016-11-18 17:49:39
*/
error_reporting(0);
class DesploitsConfig
{
	public function load($load){
		$config = array(
			'version' => '1.0.3', 
		);
		return $config[$load];
	}
}