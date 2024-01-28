<?php

class TextPrinter
{
	protected string $text = "some text";
	public function print(): void
	{
		echo ucfirst($this->text);
	}
}