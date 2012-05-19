<?php
/**
 * Logo Configuration File
 *
 * This is a PHP file that sets up variables specific for a template.
 * It can also be used to run PHP code for a template.
 *
 */

class Adventure_logo extends LogoMaker
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
		$this->Text[0] = 'Adventure';
		$this->Text[1] = 'Online';
	}

	public function GenerateLogo()
	{
		$this->NewLogo($this->FileType); // defaults to png. can use jpg or gif as well

		$this->FontPath = dirname(__FILE__) . '/fonts/';
		$this->ImagePath = dirname(__FILE__) . '/';

		$this->SetBackgroundImage('back.png');
		$size = getimagesize(dirname(__FILE__)."/back.png");
		$imageHeight = $size['1'];

		$imageRight = 0;

		if(strlen($this->Text[0]) > 0) {
			// AddText() - text, font, fontcolor, fontSize (pt), x, y, center on this width
			$text_position = $this->AddText($this->Text[0], 'Fontin_Sans_R_45b.otf', '031E45', 30, $imageRight, 20);
			$imageRight = $text_position['top_right_x']+10;
		}

		if(strlen($this->Text[1]) > 0) {
			// put in our second bit of text
			$text_position = $this->AddText($this->Text[1], 'Fontin_Sans_B_45b.otf', 'F40C5F', 30, $imageRight, 20);
			$imageRight = $text_position['top_right_x']+10;
		}


		$this->AddRectangle($imageRight+10, $imageHeight, 'ffffff', 0, 0, true);

		// Add in the silhoutette
		$image = 'corner.png';
		$img_position = $this->AddImage($image, $imageRight+10, 0);

		$imageWidth = max($img_position['top_right_x']+10, 350);
		$this->SetImageSize($imageWidth, $imageHeight);
		$this->CropImage = true;
		return $this->MakeLogo();
	}
}