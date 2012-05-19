<?php
/**
 * Logo Configuration File
 *
 * This is a PHP file that sets up variables specific for a template.
 * It can also be used to run PHP code for a template.
 *
 */

class Flowers_logo extends LogoMaker
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
		$this->Text[0] = 'Flowers';
		$this->Text[1] = 'from...';
	}

	public function GenerateLogo()
	{
		$this->NewLogo($this->FileType); // defaults to png. can use jpg or gif as well

		$this->FontPath = dirname(__FILE__) . '/fonts/';

		$this->ImagePath = dirname(__FILE__) . '/';
		$this->SetBackgroundImage('back.png', LOGOMAKER_REPEAT_X);
		$size = getimagesize(dirname(__FILE__)."/back.png");
		$imageHeight = $size['1'];

		$textLeft = 80;
		$textSize = 45;

		$this->AddImage('flower.png', 10, 12);

		// we need the height of the text box to position the image and then caculate the text position
		$t_box = $this->TextBox($this->Text[0], 'blackfort.otf', '000000', $textSize, 0, 0);

		// determine the y position for the text
		$y_pos = 30+(($imageHeight - $t_box['height'])/2);

		if(strlen($this->Text[0]) > 0) {
			$text_position = $this->AddText($this->Text[0], 'blackfort.otf', 'a12f6a', $textSize, 90, $y_pos);
		}

		if(strlen($this->Text[1]) > 0) {
			// put in our second bit of text
			$text_position2 = $this->AddText($this->Text[1], 'blackfort.otf', '627a40', $textSize, $text_position['top_right_x']+15, $y_pos);
			$top_right = $text_position2['top_right_x'];
		}
		else {
			$top_right = '200';
		}

		$this->AddLine($top_right-1, '626a40', 10, $imageHeight-1);

		$this->SetImageSize($top_right+20, $imageHeight);
		$this->CropImage = true;
		return $this->MakeLogo();
	}
}