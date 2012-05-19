<?php
/**
 * Logo Configuration File
 *
 * This is a PHP file that sets up variables specific for a template.
 * It can also be used to run PHP code for a template.
 *
 */

class GiftsShop_logo extends LogoMaker
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
		$this->Text[0] = 'Gifts';
		$this->Text[1] = 'SHOP';
	}

	public function GenerateLogo()
	{
		$this->NewLogo($this->FileType); // defaults to png. can use jpg or gif as well
		$this->TransparentBackground = true;

		$this->FontPath = dirname(__FILE__) . '/fonts/';
		$this->ImagePath = dirname(dirname(__FILE__)) . '/images/beige/';

		$image = $this->AddImage('logo.gif', 0, 0);

		$colour = '8e4584';
		$size = 34;
		$font = 'Annabelle.ttf';

		$xoffset = 0;
		$yoffset = 20;

		$x = $xoffset + $image['top_right_x'];

		$text1 = $this->AddText($this->Text[0], $font, $colour, $size, $x, $yoffset);
		$x = $text1['top_right_x'];

		$colour = '000000';
		$size = 30;
		$font = 'trebuc.ttf';

		$yoffset = 22;
		$x += -2;

		$text2 = $this->AddText($this->Text[1], $font, $colour, $size, $x, $yoffset);

		$finalwidth = $text2['top_right_x'] + 10;
		$finalheight = 68;

		$this->SetImageSize($finalwidth, $finalheight);
		$this->CropImage = true;
		return $this->MakeLogo();
	}
}