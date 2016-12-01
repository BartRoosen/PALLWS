<?php
/*
	This sessionhandler controls the session in order to somewhat prevent a session hijack.
	By no means this is hijack proof, it only makes it a little more difficult for the 
	hacker to get hold of the correct sessionid.
	Mind you, if for a peroid of time no action has been done on the session
	the id is up for grabs during that period. The same goes for closing the
	site without loging off for this will leave the session and it's values
	saved on the server.
*/

namespace Layers\Business;

//use Layers\G\SessionHandler;

class SessionHandler{
	public function start()
	{
		session_start();
		session_regenerate_id(true);
	}

	public function setValue($arr)
	{
		foreach ($arr as $key => $value) {
			$_SESSION[$key] = $value;
		}
	}

	public function unsetValue($arr)
	{
		self::start();
		foreach ($arr as $value) {
			unset($_SESSION[$value]);
		}
	}

	public function stop()
	{
		self::start();
		session_destroy();
	}
}