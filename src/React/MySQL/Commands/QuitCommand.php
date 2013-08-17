<?php

namespace React\MySQL\Commands;

use React\MySQL\Command;
use React\MySQL\Protocal\Constants;

class QuitCommand extends Command {
	
	public function getId() {
		return self::QUIT;
	}
	
	public function buildPacket() {
		
	}
	
	public function getSql() {
		return '';
	}
}
