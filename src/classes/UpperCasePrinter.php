<?php
require_once 'TextPrinter.php';
class UpperCasePrinter extends TextPrinter
{
	public function print(): void
	{
		echo strtoupper($this->text);
	}

}