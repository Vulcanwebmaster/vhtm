<?php
/**
 * Logo Configuration File
 *
 * This is a PHP file that sets up variables specific for a template.
 * It can also be used to run PHP code for a template.
 *
 */

class GardenFurniture_logo extends LogoMaker
{
	/**
	 * TextFieldCount
	 * If a logo uses a by-line or similar, this can come in handy
	*/
	public $TextFieldCount = 2;

	/**
	 * Name of the recommended template to use this logo for.
	*/
	public $FileType = 'gif';

	public function __construct()
	{
		parent::__construct();
		$this->Text[0] = 'GARDEN';
		$this->Text[1] = 'FURNITURE';
	}

	public function GenerateLogo()
	{
		$this->NewLogo($this->FileType); // defaults to png. can use jpg or gif as well
		$this->TransparentBackground = true;

		$this->FontPath = dirname(__FILE__) . '/fonts/';
		$this->ImagePath = dirname(__FILE__) . '/images/';

		$colour1 = '749c30';
		$colour2 = '000000';
		$size = 32;
		$font = 'trebucbd.ttf';

		$xoffset = 0;
		$yoffset = 10;

		$text1 = $this->AddText($this->Text[0], $font, $colour1, $size, $xoffset, $yoffset);
		$text2 = $this->AddText($this->Text[1], $font, $colour2, $size, $xoffset, $yoffset + 42);

		$finalwidth = max($text1['top_right_x'], $text2['top_right_x']) + 10;
		$finalheight = 100;

		$this->SetImageSize($finalwidth, $finalheight);
		$this->CropImage = true;
		return $this->MakeLogo();
	}
}