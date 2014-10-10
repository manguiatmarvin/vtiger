<?php
require_once (dirname ( dirname ( dirname ( __FILE__ ) ) ) . '/config.inc.php');


class SmtpServer {
	
	public function SmtpServer() {
	}
	
	public function getSysConfig() {
		global $dbconfig;
		return $dbconfig;
	}
}

