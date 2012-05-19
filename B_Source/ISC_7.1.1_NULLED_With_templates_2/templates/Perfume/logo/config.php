<?php
/**
 * Logo Configuration File
 *
 * This is a PHP file that sets up variables specific for a template.
 * It can also be used to run PHP code for a template.
 *
 */

class Perfume_logo extends LogoMaker
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
		$this->Text[0] = 'Fragrance';
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

		$textLeft = 2;
		$textSize = 32;

		// we need the height of the text box to position the image and then caculate the text position
		$this->Text[0] = strtoupper($this->Text[0]);
		$t_box = $this->TextBox($this->Text[0], 'SOVERG__.ttf', '000000', $textSize, 0, 0);

		// determine the y position for the text
		$y_pos = 8+(($imageHeight - $t_box['height'])/2);

		if(strlen($this->Text[0]) > 0) {
			// AddText() - text, font, fontcolor, fontSize (pt), x, y, center on this width
			$text_position = $this->AddText($this->Text[0]{0}, 'SOVERG__.ttf', '000000', $textSize, $textLeft, $y_pos);

			// Now add the other characters
			$remainingText = substr($this->Text[0], 1);
			$text_position = $this->AddText($remainingText, 'SOVERG__.ttf', '000000', $textSize-6, $text_position['top_right_x'], $y_pos+3);
		}

		if(strlen($this->Text[1]) > 0) {
			$this->Text[1] = strtoupper($this->Text[1]);
			// put in our second bit of text
			$text_position2 = $this->AddText($this->Text[1]{0}, 'SOVERG__.ttf', 'f71f04', $textSize, $text_position['top_right_x']+15, $y_pos);

			// Add the others
			$remainingText = substr($this->Text[1], 1);
			$text_position2 = $this->AddText($remainingText, 'SOVERG__.ttf', 'f71f04', $textSize-6, $text_position2['top_right_x'], $y_pos+3);

			$top_right = $text_position2['top_right_x'];
		}
		else {
			$top_right = '200';
		}

		$this->AddLine($top_right-1, 'ac7d01', 1, $imageHeight-1);

		$this->SetImageSize($top_right+20, $imageHeight);
		$this->CropImage = true;
		return $this->MakeLogo();
	}
}