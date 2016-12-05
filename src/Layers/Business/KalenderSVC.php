<?php
//src/Layers/Business/SomeSVC_template.php

namespace Layers\Business;

use Layers\Data\KalenderDAO;

class KalenderSVC{
	
	public function getAll($year)
	{
		return KalenderDAO::getAll($year);
	}

	public function add($arr)
	{
		KalenderDAO::add($arr);
	}

	public function delete($id)
	{
		KalenderDAO::delete($id);
	}

	public function getEventById($id)
	{
		return KalenderDAO::getEventById($id);
	}

	public function update($arr)
	{
		KalenderDAO::update($arr);
	}

	public function getKalender()
	{
		return KalenderDAO::getKalender();
	}

	public function daysDutch()
	{
		return array(
				'Monday' => 'Maandag',
				'Tuesday' => 'Dinsdag',
				'Wednesday' => 'Woensdag',
				'Thursday' => 'Donderdag',
				'Friday' => 'Vrijdag',
				'Saturday' => 'Zaterdag',
				'Sunday' => 'Zondag',
			);
	}

	public function yearsDropDown()
	{
		$currentyear = date('Y');
		return array(
				$currentyear +1,
				$currentyear,
				$currentyear -1,
				$currentyear -2,
				$currentyear -3,
				$currentyear -4,
			);
	}
}