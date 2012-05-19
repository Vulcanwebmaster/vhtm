<?php
/**
 * Logo Configuration File
 *
 * This is a PHP file that sets up variables specific for a template.
 * It can also be used to run PHP code for a template.
 *
 */

class Jewellery_logo extends LogoMaker
{
	/**
	 * TextFieldCount
	 * If a logo uses a by-line or similar, this can come in handy
	*/
	public $TextFieldCount = 1;

	/**
	 * Name of the recommended template to use this logo for.
	*/
	public $FileType = 'png';

	public function __construct()
	{
		parent::__construct();
		$this->Text[0] = 'Jewellery';
	}

	public function GenerateLogo()
	{
		$this->NewLogo($this->FileType); // defaults to png. can use jpg or gif as well

		$this->FontPath = dirname(__FILE__) . '/fonts/';
		$this->ImagePath = dirname(__FILE__) . '/';
		$logoImage = 'back.png';
		$this->SetBackgroundImage($logoImage, LOGOMAKER_REPEAT_X);

		list($imgWidth, $imgHeight) = getimagesize($this->ImagePath . $logoImage);

		// we need the height of the text box to position the image and then caculate the text position
		$tBox = $this->TextBox($this->Text[0], 'trajanpro.otf', 'FFFFFF', 35, 0, 0);

		// determine the y position for the text
		$yPos = ($imgHeight - $tBox['height'])/2;

		$imageRight = 0;
		if(strlen($this->Text[0]) <= 0) {
			$this->Text[0] = 'Jewellery';
		}

		// AddText() - text, font, fontcolor, fontSize (pt), x, y, center on this width
		$text_position = $this->AddText($this->Text[0], 'trajanpro.otf', 'FFFFFF', 35, 20, $yPos);
		$imageRight = max($text_position['top_right_x'], $imageRight)+20;

		// Find the middle
		$imageMiddle = $imageRight/2;

		list($crownWidth, $crownHeight) = getimagesize($this->ImagePath.'crown.png');
		$crownLeft = $imageMiddle-($crownWidth/2);
		$this->AddImage('crown.png', $crownLeft, 10);

		list($sigWidth, $sigHeight) = getimagesize($this->ImagePath.'sig.png');
		$sigLeft = $imageMiddle-($sigWidth/2);
		$this->AddImage('sig.png', $sigLeft, 80);

		$imageRight = max($imageRight, 500);
		$this->SetImageSize($imageRight, $imgHeight);

		return $this->MakeLogo();
	}
}