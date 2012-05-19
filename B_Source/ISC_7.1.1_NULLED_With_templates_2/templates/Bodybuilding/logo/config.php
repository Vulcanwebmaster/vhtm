<?php
/**
 * Logo Configuration File
 *
 * This is a PHP file that sets up variables specific for a template.
 * It can also be used to run PHP code for a template.
 *
 */

class Bodybuilding_logo extends LogoMaker
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
		$this->Text[0] = 'Body Power';
		$this->Text[1] = 'Supplies';
	}

	public function GenerateLogo()
	{
		$this->NewLogo($this->FileType); // defaults to png. can use jpg or gif as well

		$this->FontPath = dirname(__FILE__) . '/fonts/';
		$this->ImagePath = dirname(__FILE__) . '/';
		$logoBack = 'back.png';
		$this->SetBackgroundImage($logoBack, LOGOMAKER_REPEAT_X);

		list($imgWidth, $imgHeight) = getimagesize($this->ImagePath . $logoBack);

		// we need the height of the text box to position the image and then caculate the text position
		$tBox = $this->TextBox($this->Text[0], 'CITYB.ttf', 'ee8851', 42, 0, 0);

		// determine the y position for the text
		$yPos = (($imgHeight - $tBox['height'])/2);

		$imageRight = 0;

		if(strlen($this->Text[0]) > 0) {
			// AddText() - text, font, fontcolor, fontSize (pt), x, y, center on this width
			$text_position = $this->AddText($this->Text[0], 'CITYB.ttf', 'c35418', 42, 16, $yPos-4);
			$text_position = $this->AddText($this->Text[0], 'CITYB.ttf', 'c35418', 42, 24, $yPos+4);
			$text_position = $this->AddText($this->Text[0], 'CITYB.ttf', 'c35418', 42, 24, $yPos-4);
			$text_position = $this->AddText($this->Text[0], 'CITYB.ttf', 'c35418', 42, 16, $yPos+4);

			$text_position = $this->AddText($this->Text[0], 'CITYB.ttf', 'ffffff', 42, 17, $yPos-3);
			$text_position = $this->AddText($this->Text[0], 'CITYB.ttf', 'ffffff', 42, 23, $yPos+3);
			$text_position = $this->AddText($this->Text[0], 'CITYB.ttf', 'ffffff', 42, 23, $yPos-3);
			$text_position = $this->AddText($this->Text[0], 'CITYB.ttf', 'ffffff', 42, 17, $yPos+3);

			$text_position = $this->AddText($this->Text[0], 'CITYB.ttf', 'e65100', 42, 20, $yPos);
			$imageRight = $text_position['top_right_x'];
		}

		if(strlen($this->Text[1]) > 0) {
			// put in our second bit of text
			$text_position = $this->AddText($this->Text[1], 'CITYB.ttf', 'c35418', 42, $imageRight+16, $yPos-4);
			$text_position = $this->AddText($this->Text[1], 'CITYB.ttf', 'c35418', 42, $imageRight+24, $yPos+4);
			$text_position = $this->AddText($this->Text[1], 'CITYB.ttf', 'c35418', 42, $imageRight+24, $yPos-4);
			$text_position = $this->AddText($this->Text[1], 'CITYB.ttf', 'c35418', 42, $imageRight+16, $yPos+4);

			$text_position = $this->AddText($this->Text[1], 'CITYB.ttf', 'ffffff', 42, $imageRight+17, $yPos-3);
			$text_position = $this->AddText($this->Text[1], 'CITYB.ttf', 'ffffff', 42, $imageRight+23, $yPos+3);
			$text_position = $this->AddText($this->Text[1], 'CITYB.ttf', 'ffffff', 42, $imageRight+23, $yPos-3);
			$text_position = $this->AddText($this->Text[1], 'CITYB.ttf', 'ffffff', 42, $imageRight+17, $yPos+3);

			$text_position = $this->AddText($this->Text[1], 'CITYB.ttf', '000000', 42, $imageRight+20, $yPos);
			$imageRight = max($imageRight, $text_position['top_right_x']);
		}

		$this->SetImageSize($imageRight+20, 90);

		return $this->MakeLogo();
	}
}