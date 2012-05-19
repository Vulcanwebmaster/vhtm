<?php
/**
 * Logo Configuration File
 *
 * This is a PHP file that sets up variables specific for a template.
 * It can also be used to run PHP code for a template.
 *
 */

class Fashion_logo extends LogoMaker
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
		$this->Text[0] = 'The';
		$this->Text[1] = 'Fashion';
		$this->Text[2] = 'Store';
	}

	public function GenerateLogo()
	{
		$this->NewLogo($this->FileType); // defaults to png. can use jpg or gif as well

		$this->FontPath = dirname(__FILE__) . '/fonts/';
		$this->ImagePath = dirname(__FILE__) . '/';
		$this->SetBackgroundImage('logo.png');
		$size = getimagesize(dirname(__FILE__)."/logo.png");
		$imageHeight = $size['1'];

		if(strlen($this->Text[0]) > 0) {
			// AddText() - text, font, fontcolor, fontSize (pt), x, y, center on this width
			$text_position = $this->AddText($this->Text[0], 'Fontin_Sans_R_45b.otf', 'ffffff', 9, 40, 36);
		}

		if(strlen($this->Text[1]) > 0) {
			// put in our second bit of text
			$text_position2 = $this->AddText($this->Text[1], 'Fontin_Sans_B_45b.otf', 'f67f00', 35, 5, 56);
			$top_right = $text_position2['top_right_x'];
		}
		else {
			$top_right = '56';
		}

		// Add in the silhoutette
		$image = 'silhouette.png';
		$img_position = $this->AddImage($image, $top_right+15, 23);


		if(strlen($this->Text[2]) > 0) {
			// put in our third bit of text
			$text_position3 = $this->AddText($this->Text[2], 'Fontin_Sans_B_45b.otf', 'ffffff', 35, $img_position['top_right_x']+10, 56);
			$top_right = $text_position3['top_right_x'];
		}
		$this->SetImageSize($top_right+20, $imageHeight);
		$this->CropImage = true;

		return $this->MakeLogo();
	}
}