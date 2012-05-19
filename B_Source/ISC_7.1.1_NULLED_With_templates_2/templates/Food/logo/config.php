<?php
/**
 * Logo Configuration File
 *
 * This is a PHP file that sets up variables specific for a template.
 * It can also be used to run PHP code for a template.
 *
 */

class Food_logo extends LogoMaker
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
		$this->Text[0] = 'Food & Drink';
		$this->Text[1] = 'Superstore';
	}

	public function GenerateLogo()
	{
		$this->NewLogo($this->FileType); // defaults to png. can use jpg or gif as well

		$this->FontPath = dirname(__FILE__) . '/fonts/';
		$this->ImagePath = dirname(__FILE__) . '/';

		$this->SetBackgroundColor('530f13');

		$imageHeight = 81;
		$textSize = 30;
		$textLeft = 15;

		// we need the height of the text box to position the image and then caculate the text position
		$t_box = $this->TextBox($this->Text[0], 'RotisSemiSansStd.otf', 'ffffff', $textSize, 0, 0);

		// determine the y position for the text
		$y_pos = (($imageHeight - $t_box['height'])/2);

		if(strlen($this->Text[0]) > 0) {
			// AddText() - text, font, fontcolor, fontSize (pt), x, y, center on this width
			$text_position = $this->AddText($this->Text[0], 'RotisSemiSansStd.otf', 'ffffff', $textSize, $textLeft, $y_pos);
		}

		if(strlen($this->Text[1]) > 0) {
			// put in our second bit of text
			$text_position2 = $this->AddText($this->Text[1], 'Scriptina.ttf', 'ead494', $textSize+3, $text_position['top_right_x']+15, $y_pos+25);

			$top_right = $text_position2['top_right_x'];
		}
		else {
			$top_right = '200';
		}

		$this->AddRectangle($top_right+5, 60, 'ffffff', 1, 1);
		$this->AddRectangle($top_right-2, 52, '7d4741', 5, 5);
		$this->SetImageSize($top_right+14, $imageHeight+10);
		return $this->MakeLogo();
	}
}