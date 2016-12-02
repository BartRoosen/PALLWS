<?php
//src/Layers/Business/SomeSVC_template.php

namespace Layers\Business;

class Filegetter{
	
	public function getAll($folder){
		$arr_files = scandir($folder);
		$list = array();
		foreach ($arr_files as $value) {
			if($value != "." && $value != ".."){
				$parts = explode(".", $value);
				$list[] = array(
						'name' => $parts[0],
						'fullname' => $value,
						'path' => $folder . '/' . $value, 
					);
			}
		}
		return $list;
	}
}


















