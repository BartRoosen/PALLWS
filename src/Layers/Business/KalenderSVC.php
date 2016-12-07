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
		$kalender = KalenderDAO::getKalender();
		$arr = array();
		foreach ($kalender as $value) {
			$arr[$value['datum']][] = $value;
		}
		return $arr;
	}

	public function getFullKalender($year)
	{
		$kalender = KalenderDAO::getFullKalender($year);
		$arr = array();
		foreach ($kalender as $value) {
			$arr[$value['month']][$value['datestring']][] = $value;
		}
		return $arr;
	}

	public function getMonthKalender($year, $month)
	{
		$kalender = KalenderDAO::getMonthKalender($year, $month);
		$arr = array();
		foreach ($kalender as $value) {
			$arr[$value['month']][$value['datestring']][] = $value;
		}
		return $arr;
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

	public function mothsDutch()
	{
		return array(
				'1' => 'Januari',
				'2' => 'Februari',
				'3' => 'Maart',
				'4' => 'April',
				'5' => 'Mei',
				'6' => 'Juni',
				'7' => 'Juli',
				'8' => 'Augustus',
				'9' => 'September',
				'10' => 'Oktober',
				'11' => 'November',
				'12' => 'December',
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