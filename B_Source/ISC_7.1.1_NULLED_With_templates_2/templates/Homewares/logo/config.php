<?php
/**
 * Logo Configuration File
 *
 * This is a PHP file that sets up variables specific for a template.
 * It can also be used to run PHP code for a template.
 *
 */

class Homewares_logo extends LogoMaker
{
	/**
	 * TextFieldCount
	 * If a logo uses a by-line or similar, this can come in handy
	*/
	public $TextFieldCount = 2;

	/**
	 * Name of the recommended template to use this logo for.
	*/
	public $FileType = 'png';

	public function __construct()
	{
		parent::__construct();
		$this->Text[0] = 'Designer';
		$this->Text[1] = 'Homewares Store';
	}

	public function GenerateLogo()
	{
		$this->NewLogo($this->FileType); // defaults to png. can use jpg or gif as well

		$this->FontPath = dirname(__FILE__) . '/fonts/';
		$this->SetBackgroundColor('FFFFFF');

		if(strlen($this->Text[0]) > 0) {
			// AddText() - text, font, fontcolor, fontSize (pt), x, y, center on this width
			$text_position = $this->AddText($this->Text[0], 'georgia.ttf', '2c1f16', 30, 10, 20);
		}
		else {
			$text_position['top_right_x'] = 0;
		}

		if(strlen($this->Text[1]) > 0) {
			// put in our second bit of text
			$text_position2 = $this->AddText($this->Text[1], 'georgia.ttf', '8C7E35', 16, 10, $text_position['bottom_right_y']+15);
			$top_right = max($text_position2['top_right_x'], $text_position['top_right_x']);
		}
		else {
			$top_right = $img_width;
		}
		$this->SetImageSize($top_right+20, 75);

		return $this->MakeLogo();
	}
}