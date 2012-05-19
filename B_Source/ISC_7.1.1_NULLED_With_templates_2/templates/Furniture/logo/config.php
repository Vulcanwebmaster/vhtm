<?php
/**
 * Logo Configuration File
 *
 * This is a PHP file that sets up variables specific for a template.
 * It can also be used to run PHP code for a template.
 *
 */

class Furniture_logo extends LogoMaker
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
		$this->Text[0] = 'Furniture';
		$this->Text[1] = 'Plus';
	}

	public function GenerateLogo()
	{
		$this->NewLogo($this->FileType); // defaults to png. can use jpg or gif as well

		$this->FontPath = dirname(__FILE__) . '/fonts/';

		$imageHeight = 50;
		$textLeft = 0;
		$textSize = 28;

		// we need the height of the text box to position the image and then caculate the text position
		$t_box = $this->TextBox($this->Text[0], 'ITCAvantGardeStd-Bold.otf', '4e4e42', $textSize, 0, 0);

		// determine the y position for the text
		$y_pos = 8+(($imageHeight - $t_box['height'])/2);

		if(strlen($this->Text[0]) > 0) {
			// AddText() - text, font, fontcolor, fontSize (pt), x, y, center on this width
			$this->Text[0] = isc_strtoupper($this->Text[0]);
			$text_position = $this->AddText($this->Text[0], 'ITCAvantGardeStd-Bold.otf', 'ffffff', $textSize, $textLeft-1, $y_pos-1);
			$text_position = $this->AddText($this->Text[0], 'ITCAvantGardeStd-Bold.otf', 'ffffff', $textSize, $textLeft-1, $y_pos+1);
			$text_position = $this->AddText($this->Text[0], 'ITCAvantGardeStd-Bold.otf', 'ffffff', $textSize, $textLeft+1, $y_pos-1);
			$text_position = $this->AddText($this->Text[0], 'ITCAvantGardeStd-Bold.otf', 'ffffff', $textSize, $textLeft+1, $y_pos+1);

			$text_position = $this->AddText($this->Text[0], 'ITCAvantGardeStd-Bold.otf', '4e4e42', $textSize, $textLeft, $y_pos);

		}

		if(strlen($this->Text[1]) > 0) {
			$this->Text[1] = isc_strtoupper($this->Text[1]);

			// put in our second bit of text
			$left = $text_position['top_right_x']+10;
			$text_position2 = $this->AddText($this->Text[1], 'ITCAvantGardeStd-Bold.otf', 'ffffff', $textSize, $left-1, $y_pos-1);
			$text_position2 = $this->AddText($this->Text[1], 'ITCAvantGardeStd-Bold.otf', 'ffffff', $textSize, $left-1, $y_pos+1);
			$text_position2 = $this->AddText($this->Text[1], 'ITCAvantGardeStd-Bold.otf', 'ffffff', $textSize, $left+1, $y_pos-1);
			$text_position2 = $this->AddText($this->Text[1], 'ITCAvantGardeStd-Bold.otf', 'ffffff', $textSize, $left+1, $y_pos+1);

			$text_position2 = $this->AddText($this->Text[1], 'ITCAvantGardeStd-Bold.otf', 'a88b67', $textSize, $left, $y_pos);
			$top_right = $text_position2['top_right_x'];
		}
		else {
			$top_right = $text_position['top_right_x'];
		}

		$this->TransparentBackground = true;
		$this->SetImageSize($top_right+20, $imageHeight);
		$this->CropImage = true;
		return $this->MakeLogo();
	}
}