<?php
/**
 * Logo Configuration File
 *
 * This is a PHP file that sets up variables specific for a template.
 * It can also be used to run PHP code for a template.
 *
 */

class Sport_logo extends LogoMaker
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
		$this->Text[0] = 'your';
		$this->Text[1] = 'sports';
	}

	public function GenerateLogo()
	{
		$this->NewLogo($this->FileType); // defaults to png. can use jpg or gif as well

		$this->FontPath = dirname(__FILE__) . '/fonts/';

		$this->TransparentBackground = true;

		// we need the height of the text box to position the image and then caculate the text position
		$t_box = $this->TextBox($this->Text[0], 'SERPNTBI.TTF', 'ffffff', 16, 0, 0);

		if(strlen($this->Text[0]) > 0) {
			$text_position = $this->AddText($this->Text[0], 'SERPNTBI.TTF', 'ffffff', 16, 4, 4);

		}

		if(strlen($this->Text[1]) > 0) {
			// AddText() - text, font, fontcolor, fontSize (pt), x, y, center on this width
			$text_position2 = $this->AddText($this->Text[1], 'SERPNTBI.TTF', 'ff2222', 22, 40, $text_position['bottom_right_y']+10);
			$imageHeight = $text_position2['bottom_left_x']+10;
			$imageWidth = max($text_position['top_right_x'], $text_position2['top_right_x']);
		}
		else {
			$imageHeight = '44';
			$imageWidth = $text_position['top_right_x'];
		}
		$this->SetImageSize($imageWidth, $imageHeight);

		return $this->MakeLogo();
	}
}