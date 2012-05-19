<?php
/**
 * Logo Configuration File
 *
 * This is a PHP file that sets up variables specific for a template.
 * It can also be used to run PHP code for a template.
 *
 */

class Pets_logo extends LogoMaker
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
		$this->Text[0] = 'Pet';
		$this->Text[1] = 'Land';
	}

	public function GenerateLogo()
	{
		$this->NewLogo($this->FileType); // defaults to png. can use jpg or gif as well

		$this->FontPath = dirname(__FILE__) . '/fonts/';

		$textLeft = 10;
		$textSize = 40;

		// we need the height of the text box to position the image and then caculate the text position
		$t_box = $this->TextBox($this->Text[0], 'CooperBlackStd.otf', 'FC8216', $textSize, 0, 0);

		$imageHeight = 105;

		$this->ImagePath = dirname(__FILE__) . '/';

		// determine the y position for the text
		$y_pos = ($imageHeight - $t_box['height']) / 2 + 5;

		if(strlen($this->Text[0]) > 0) {
			// AddText() - text, font, fontcolor, fontSize (pt), x, y, center on this width
			$text_position = $this->AddText($this->Text[0], 'CooperBlackStd.otf', 'ffffff', $textSize, $textLeft, $y_pos - 4);
			$text_position = $this->AddText($this->Text[0], 'CooperBlackStd.otf', 'ffffff', $textSize, $textLeft - 4, $y_pos - 4);
			$text_position = $this->AddText($this->Text[0], 'CooperBlackStd.otf', 'ffffff', $textSize, $textLeft - 2, $y_pos - 4);
			$text_position = $this->AddText($this->Text[0], 'CooperBlackStd.otf', 'ffffff', $textSize, $textLeft + 4, $y_pos - 4);
			$text_position = $this->AddText($this->Text[0], 'CooperBlackStd.otf', 'ffffff', $textSize, $textLeft + 2, $y_pos - 4);

			$text_position = $this->AddText($this->Text[0], 'CooperBlackStd.otf', 'ffffff', $textSize, $textLeft, $y_pos + 4);
			$text_position = $this->AddText($this->Text[0], 'CooperBlackStd.otf', 'ffffff', $textSize, $textLeft - 4, $y_pos + 4);
			$text_position = $this->AddText($this->Text[0], 'CooperBlackStd.otf', 'ffffff', $textSize, $textLeft - 2, $y_pos + 4);
			$text_position = $this->AddText($this->Text[0], 'CooperBlackStd.otf', 'ffffff', $textSize, $textLeft + 4, $y_pos + 4);
			$text_position = $this->AddText($this->Text[0], 'CooperBlackStd.otf', 'ffffff', $textSize, $textLeft + 2, $y_pos + 4);

			$text_position = $this->AddText($this->Text[0], 'CooperBlackStd.otf', 'ffffff', $textSize, $textLeft - 6, $y_pos - 4);
			$text_position = $this->AddText($this->Text[0], 'CooperBlackStd.otf', 'ffffff', $textSize, $textLeft - 6, $y_pos - 3);
			$text_position = $this->AddText($this->Text[0], 'CooperBlackStd.otf', 'ffffff', $textSize, $textLeft - 6, $y_pos - 2);
			$text_position = $this->AddText($this->Text[0], 'CooperBlackStd.otf', 'ffffff', $textSize, $textLeft - 6, $y_pos);
			$text_position = $this->AddText($this->Text[0], 'CooperBlackStd.otf', 'ffffff', $textSize, $textLeft - 6, $y_pos + 2);
			$text_position = $this->AddText($this->Text[0], 'CooperBlackStd.otf', 'ffffff', $textSize, $textLeft - 6, $y_pos + 4);

			$text_position = $this->AddText($this->Text[0], 'CooperBlackStd.otf', 'ffffff', $textSize, $textLeft + 6, $y_pos - 4);
			$text_position = $this->AddText($this->Text[0], 'CooperBlackStd.otf', 'ffffff', $textSize, $textLeft + 6, $y_pos - 3);
			$text_position = $this->AddText($this->Text[0], 'CooperBlackStd.otf', 'ffffff', $textSize, $textLeft + 6, $y_pos - 2);
			$text_position = $this->AddText($this->Text[0], 'CooperBlackStd.otf', 'ffffff', $textSize, $textLeft + 6, $y_pos);
			$text_position = $this->AddText($this->Text[0], 'CooperBlackStd.otf', 'ffffff', $textSize, $textLeft + 6, $y_pos + 2);
			$text_position = $this->AddText($this->Text[0], 'CooperBlackStd.otf', 'ffffff', $textSize, $textLeft + 6, $y_pos + 4);


			$text_position = $this->AddText($this->Text[0], 'CooperBlackStd.otf', 'FC8216', $textSize, $textLeft, $y_pos);
		}

		if(strlen($this->Text[1]) > 0) {
			// put in our second bit of text
			$textLeft = $text_position['top_right_x'] + 5;

			$text_position = $this->AddText($this->Text[1], 'CooperBlackStd.otf', 'ffffff', $textSize, $textLeft, $y_pos - 4);
			$text_position = $this->AddText($this->Text[1], 'CooperBlackStd.otf', 'ffffff', $textSize, $textLeft - 4, $y_pos - 4);
			$text_position = $this->AddText($this->Text[1], 'CooperBlackStd.otf', 'ffffff', $textSize, $textLeft - 2, $y_pos - 4);
			$text_position = $this->AddText($this->Text[1], 'CooperBlackStd.otf', 'ffffff', $textSize, $textLeft + 4, $y_pos - 4);
			$text_position = $this->AddText($this->Text[1], 'CooperBlackStd.otf', 'ffffff', $textSize, $textLeft + 2, $y_pos - 4);

			$text_position = $this->AddText($this->Text[1], 'CooperBlackStd.otf', 'ffffff', $textSize, $textLeft, $y_pos + 4);
			$text_position = $this->AddText($this->Text[1], 'CooperBlackStd.otf', 'ffffff', $textSize, $textLeft - 4, $y_pos + 4);
			$text_position = $this->AddText($this->Text[1], 'CooperBlackStd.otf', 'ffffff', $textSize, $textLeft - 2, $y_pos + 4);
			$text_position = $this->AddText($this->Text[1], 'CooperBlackStd.otf', 'ffffff', $textSize, $textLeft + 4, $y_pos + 4);
			$text_position = $this->AddText($this->Text[1], 'CooperBlackStd.otf', 'ffffff', $textSize, $textLeft + 2, $y_pos + 4);

			$text_position = $this->AddText($this->Text[1], 'CooperBlackStd.otf', 'ffffff', $textSize, $textLeft - 6, $y_pos - 4);
			$text_position = $this->AddText($this->Text[1], 'CooperBlackStd.otf', 'ffffff', $textSize, $textLeft - 6, $y_pos - 3);
			$text_position = $this->AddText($this->Text[1], 'CooperBlackStd.otf', 'ffffff', $textSize, $textLeft - 6, $y_pos - 2);
			$text_position = $this->AddText($this->Text[1], 'CooperBlackStd.otf', 'ffffff', $textSize, $textLeft - 6, $y_pos);
			$text_position = $this->AddText($this->Text[1], 'CooperBlackStd.otf', 'ffffff', $textSize, $textLeft - 6, $y_pos + 2);
			$text_position = $this->AddText($this->Text[1], 'CooperBlackStd.otf', 'ffffff', $textSize, $textLeft - 6, $y_pos + 4);

			$text_position = $this->AddText($this->Text[1], 'CooperBlackStd.otf', 'ffffff', $textSize, $textLeft + 6, $y_pos - 4);
			$text_position = $this->AddText($this->Text[1], 'CooperBlackStd.otf', 'ffffff', $textSize, $textLeft + 6, $y_pos - 3);
			$text_position = $this->AddText($this->Text[1], 'CooperBlackStd.otf', 'ffffff', $textSize, $textLeft + 6, $y_pos - 2);
			$text_position = $this->AddText($this->Text[1], 'CooperBlackStd.otf', 'ffffff', $textSize, $textLeft + 6, $y_pos);
			$text_position = $this->AddText($this->Text[1], 'CooperBlackStd.otf', 'ffffff', $textSize, $textLeft + 6, $y_pos + 2);
			$text_position = $this->AddText($this->Text[1], 'CooperBlackStd.otf', 'ffffff', $textSize, $textLeft + 6, $y_pos + 4);


			$text_position2 = $this->AddText($this->Text[1], 'CooperBlackStd.otf', '006C9B', $textSize, $textLeft, $y_pos);
			$top_right = $text_position2['top_right_x'];
		}
		else {
			$top_right = '200';
		}


		//$this->TransparentBackground = true;
		$this->SetBackgroundImage('back.png');
		$this->SetImageSize($top_right+10, $imageHeight);

		$this->CropImage = true;

		return $this->MakeLogo();
	}
}
