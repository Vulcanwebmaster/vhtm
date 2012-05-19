<?php
/**
 * Logo Configuration File
 *
 * This is a PHP file that sets up variables specific for a template.
 * It can also be used to run PHP code for a template.
 *
 */

class Books_logo extends LogoMaker
{
	/**
	 * TextFieldCount
	 * If a logo uses a by-line or similar, this can come in handy
	*/
	public $TextFieldCount = 3;

	/**
	 * Name of the recommended template to use this logo for.
	*/
	public $FileType = 'png';

	public function __construct()
	{
		parent::__construct();
		$this->Text[0] = 'books';
		$this->Text[1] = 'books';
		$this->Text[2] = 'books';
	}

	public function GenerateLogo()
	{
		$this->NewLogo($this->FileType); // defaults to png. can use jpg or gif as well

		$this->FontPath = dirname(__FILE__) . '/fonts/';

		$imageHeight = 50;
		$textLeft = 2;
		$textSize = 28;

		// we need the height of the text box to position the image and then caculate the text position
		$t_box = $this->TextBox($this->Text[0], 'verdanai.ttf', '8e1802', $textSize, 0, 0);

		// determine the y position for the text
		$y_pos = 8+(($imageHeight - $t_box['height'])/2);

		if(strlen($this->Text[0]) > 0) {
			// AddText() - text, font, fontcolor, fontSize (pt), x, y, center on this width
			$text_position = $this->AddText($this->Text[0], 'verdanai.ttf', '8e1802', $textSize, $textLeft, $y_pos);
		}

		if(strlen($this->Text[1]) > 0) {
			// put in our second bit of text
			$text_position2 = $this->AddText($this->Text[1], 'verdanaz.ttf', 'c77d41', $textSize, $text_position['top_right_x']+4, $y_pos);
			$top_right = $text_position2['top_right_x'];
		}
		else {
			$top_right = '200';
		}

		if(strlen($this->Text[2]) > 0) {
			// put in our third bit of text
			$text_position3 = $this->AddText($this->Text[2], 'verdanai.ttf', '4989aa', $textSize, $text_position2['top_right_x']+4, $y_pos);
			$top_right = $text_position3['top_right_x'];
		}
		$this->SetBackgroundColor('ffffff');
		$this->SetImageSize($top_right+20, $imageHeight);

		return $this->MakeLogo();
	}
}