<?php
/**
 * Logo Configuration File
 *
 * This is a PHP file that sets up variables specific for a template.
 * It can also be used to run PHP code for a template.
 *
 */

class CognacShop_logo extends LogoMaker
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

	/**
	 * This defines a background image to be used when displaying the sample/preview logo in the control panel.
	 * i.e. If the text is white, grey or another light colour.
	 * The image path is relative to the directory this current PHP file is in. If the image is in the same directory, then use only the image name and no path information.
	 * @var string
	 */
	public $displayBgImg = 'back.jpg';

	public function __construct()
	{
		parent::__construct();
		$this->Text[0] = 'Coffee';
		$this->Text[1] = 'Shop';
	}

	public function GenerateLogo()
	{
		$this->NewLogo($this->FileType); // defaults to png. can use jpg or gif as well
		$this->TransparentBackground = true;

		$this->FontPath = dirname(__FILE__) . '/fonts/';

		$imageHeight = 100;
		$textLeft = 10;
		$textSize = 38;

		// we need the height of the text box to position the image and then caculate the text position
		$t_box = $this->TextBox($this->Text[0], 'Aquarelle.ttf', '8e1802', $textSize, 0, 0);

		// determine the y position for the text
		$y_pos = 0+(($imageHeight - $t_box['height'])/2);

		if(strlen($this->Text[0]) > 0) {
			// AddText() - text, font, fontcolor, fontSize (pt), x, y, center on this width
			$text_position = $this->AddText($this->Text[0], 'Aquarelle.ttf', 'FFFFFF', $textSize, $textLeft, $y_pos);
		}

		if(strlen($this->Text[1]) > 0) {
			// put in our second bit of text
			$text_position2 = $this->AddText($this->Text[1], 'trebuc.ttf', '000000', $textSize-10, $textLeft, $text_position['bottom_left_y']+30);
			$top_right = $text_position2['top_right_x'];
		}
		else {
			$top_right = '200';
		}

		$this->SetImageSize(max($top_right+20,$text_position['top_right_x']+2), $imageHeight+40);

		return $this->MakeLogo();
	}
}