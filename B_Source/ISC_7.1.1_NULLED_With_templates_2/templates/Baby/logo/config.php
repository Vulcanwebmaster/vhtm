<?php
/**
 * Logo Configuration File
 *
 * This is a PHP file that sets up variables specific for a template.
 * It can also be used to run PHP code for a template.
 *
 */

class Baby_logo extends LogoMaker
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
		$this->Text[0] = 'Baby';
		$this->Text[1] = '&';
		$this->Text[2] = 'Parent';
	}

	public function GenerateLogo()
	{
		$this->NewLogo($this->FileType); // defaults to png. can use jpg or gif as well

		$this->FontPath = dirname(__FILE__) . '/fonts/';

		$imageHeight = 60;
		$textLeft = 0;
		$textSize = 38;

		// we need the height of the text box to position the image and then caculate the text position
		$t_box = $this->TextBox($this->Text[0], 'GoudyBookletter1911.otf', '08448c', $textSize, 0, 0);

		// determine the y position for the text
		$y_pos = 8+(($imageHeight - $t_box['height'])/2);

		if(strlen($this->Text[0]) > 0) {
			// AddText() - text, font, fontcolor, fontSize (pt), x, y, center on this width
			$text_position = $this->AddText($this->Text[0], 'GoudyBookletter1911.otf', '08448c', $textSize, $textLeft, $y_pos);

		}

		if(strlen($this->Text[1]) > 0) {
			// put in our second bit of text
			$left = $text_position['top_right_x']+10;
			$text_position = $this->AddText($this->Text[1], 'GoudyBookletter1911.otf', '00b1fb', $textSize, $left, $y_pos);
		}

		$top_right = $text_position['top_right_x'];

		if(strlen($this->Text[2]) > 0) {
			// put in our third bit of text
			$left = $text_position['top_right_x']+10;
			$text_position = $this->AddText($this->Text[2], 'GoudyBookletter1911.otf', 'fd4bab', $textSize, $left, $y_pos);
		}
		$top_right = $text_position['top_right_x'];

		$this->SetBackgroundColor('ffffff');
		$this->SetImageSize($top_right+20, $imageHeight);

		return $this->MakeLogo();
	}
}