<?php
/**
 * Logo Configuration File
 *
 * This is a PHP file that sets up variables specific for a template.
 * It can also be used to run PHP code for a template.
 *
 */

class Cosmetics_logo extends LogoMaker
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
		$this->Text[0] = 'Glamour';
		$this->Text[1] = 'Online';
	}

	public function GenerateLogo()
	{
		$this->NewLogo($this->FileType); // defaults to png. can use jpg or gif as well

		$this->FontPath = dirname(__FILE__) . '/fonts/';

		$this->ImagePath = dirname(__FILE__) . '/';
		$this->SetBackgroundColor('fdea1e');
		$this->SetBackgroundImage('back.png');
		$size = getimagesize(dirname(__FILE__)."/back.png");
		$imageHeight = $size['1'];

		$textLeft = 20;
		$textSize = 40;

		// we need the height of the text box to position the image and then caculate the text position
		$t_box = $this->TextBox($this->Text[0], 'neue.otf', '000000', $textSize, 0, 0);

		// determine the y position for the text
		$y_pos = 8+(($imageHeight - $t_box['height'])/2);

		if(strlen($this->Text[0]) > 0) {
			// AddText() - text, font, fontcolor, fontSize (pt), x, y, center on this width
			$text_position = $this->AddText($this->Text[0], 'neue.otf', '242a26', $textSize, $textLeft, $y_pos);
		}

		if(strlen($this->Text[1]) > 0) {
			// Add the others
			$this->Text[1] = strtoupper($this->Text[1]);
			$newText = '';
			for($i = 0; $i < strlen($this->Text[1]); ++$i) {
				$newText .= $this->Text[1]{$i}.' ';
			}
			$this->Text[1] = trim($newText, ' ');
			$t_box = $this->TextBox($this->Text[1], 'neue2.otf', '000000', 12, 0, 0);

			$text_position2 = $this->AddText($this->Text[1], 'neue2.otf', '6b7e78', 12, $text_position['top_right_x']-$t_box['width'], $text_position['bottom_left_y']+10);

			$top_right = $text_position2['top_right_x'];
		}
		else {
			$top_right = $text_position['top_right_x'];
		}

		$top_right = max($top_right, $text_position['top_right_x']);

		$this->SetImageSize($top_right+20, $imageHeight);
		$this->CropImage = true;
		return $this->MakeLogo();
	}
}