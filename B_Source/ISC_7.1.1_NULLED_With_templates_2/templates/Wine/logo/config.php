<?php
/**
 * Logo Configuration File
 *
 * This is a PHP file that sets up variables specific for a template.
 * It can also be used to run PHP code for a template.
 *
 */

class Wine_logo extends LogoMaker
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
		$this->Text[0] = 'The';
		$this->Text[1] = 'Wine Cellar';
	}

	public function GenerateLogo()
	{
		$this->NewLogo($this->FileType); // defaults to png. can use jpg or gif as well

		$this->FontPath = dirname(__FILE__) . '/fonts/';

		$this->ImagePath = dirname(__FILE__) . '/';

		$textLeft = 2;
		$textSize = 41;
		$imageHeight = 100;

		// we need the height of the text box to position the image and then caculate the text position
		$t_box = $this->TextBox($this->Text[0], 'RotisSerifStd.otf', '000000', $textSize, 0, 0);

		// determine the y position for the text
		$y_pos = 8+(($imageHeight - $t_box['height'])/2);

		if(strlen($this->Text[0]) > 0) {
			// AddText() - text, font, fontcolor, fontSize (pt), x, y, center on this width
			$text_position = $this->AddText($this->Text[0], 'RotisSerifStd.otf', 'a4976b', 20, $textLeft, 15);
		}

		if(strlen($this->Text[1]) > 0) {
			// put in our second bit of text
			$text_position2 = $this->AddText($this->Text[1], 'RotisSerifStd.otf', '5d0803', $textSize, $textLeft, $y_pos);

			$top_right = $text_position2['top_right_x'];
		}
		else {
			$top_right = '200';
		}
		$this->TransparentBackground = true;
		$this->SetImageSize($top_right+20, $imageHeight);
		//$this->CropImage = true;
		return $this->MakeLogo();
	}
}