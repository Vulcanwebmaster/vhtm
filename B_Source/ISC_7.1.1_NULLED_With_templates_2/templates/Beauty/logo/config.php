<?php
/**
 * Logo Configuration File
 *
 * This is a PHP file that sets up variables specific for a template.
 * It can also be used to run PHP code for a template.
 *
 */

class Beauty_logo extends LogoMaker
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
		$this->Text[0] = 'Beauty';
		$this->Text[1] = 'Online';
	}

	public function GenerateLogo()
	{
		$this->NewLogo($this->FileType); // defaults to png. can use jpg or gif as well

		$this->FontPath = dirname(__FILE__) . '/fonts/';

		$this->ImagePath = dirname(__FILE__) . '/';
		if(getConfig('SiteColor') == 'pink') {
			$backgroundImage = 'pinkBack.png';
		}
		else {
			$backgroundImage = 'turquoiseBack.png';
		}
		$this->SetBackgroundImage($backgroundImage);
		$size = getimagesize(dirname(__FILE__)."/".$backgroundImage);
		$imageHeight = $size['1'];

		$textLeft = 100;
		$textSize = 38;

		// we need the height of the text box to position the image and then caculate the text position
		$t_box = $this->TextBox($this->Text[0], 'HelveticaNeueLTStd-UltLt.otf', '002b4f', $textSize, 0, 0);

		// determine the y position for the text
		$y_pos = 8+(($imageHeight - $t_box['height'])/2);

		if(strlen($this->Text[0]) > 0) {
			// AddText() - text, font, fontcolor, fontSize (pt), x, y, center on this width
			$text_position = $this->AddText($this->Text[0], 'HelveticaNeueLTStd-UltLt.otf', '002b4f', $textSize, $textLeft, $y_pos);

		}

		if(strlen($this->Text[1]) > 0) {
			// put in our second bit of text
			$left = $text_position['top_right_x']+10;
			$text_position = $this->AddText($this->Text[1], 'MrSandsfort.otf', 'ffffff', $textSize-10, $left+10, $y_pos+5, false, 8);
		}
		$top_right = $text_position['top_right_x'];

		$this->SetImageSize($top_right+20, $imageHeight);
		$this->CropImage = true;
		return $this->MakeLogo();
	}
}