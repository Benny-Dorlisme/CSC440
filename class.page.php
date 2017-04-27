<?php
require_once 'class.basepage.php';
abstract class Page extends BasePage{

	abstract function setPageBodyHeader();
	abstract function setPageBodyBody();
	abstract function setPageBodyFooter();
}
