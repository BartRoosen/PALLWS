<?php
//src/Layers/Business/SomeSVC_template.php

namespace Layers\Business;


class DocumentsSVC{
	
	public function docList($folder)
	{
		$path = $folder . "/";
		$arr = scandir($path);
		$list = array();
		foreach ($arr as $file) {
			if($file != "." && $file != "..") {
				$list[] = $file;
			}
		}
		return $list;
	}
}