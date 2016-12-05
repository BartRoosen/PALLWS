<?php
//src/Layers/Business/SomeSVC_template.php

namespace Layers\Business;

use Layers\Data\EventsDAO;

class EventsSVC{
	
	public function getActiveEvents()
	{
		return EventsDAO::getActiveEvents();
	}
}