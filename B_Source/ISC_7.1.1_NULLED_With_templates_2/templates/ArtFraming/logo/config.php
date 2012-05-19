<?php
/**
 * Logo Configuration File
 *
 * This is a PHP file that sets up variables specific for a template.
 * It can also be used to run PHP code for a template.
 *
 */

class ArtFraming_logo extends LogoMaker
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
		$this->Text[0] = 'Art';
		$this->Text[1] = '&';
		$this->Text[2] = 'Framing';
	}

	public function GenerateLogo()
	{
		$this->NewLogo($this->FileType); // defaults to png. can use jpg or gif as well

		$this->FontPath = dirname(__FILE__) . '/fonts/';

		$imageHeight = 55;
		$textLeft = 0;
		$textSize = 40;

		// we need the height of the text box to position the image and then caculate the text position
		$t_box = $this->TextBox($this->Text[0], 'times.ttf', 'BFE80E', $textSize, 0, 0);

		$this->ImagePath = dirname(__FILE__) . '/';

		// determine the y position for the text
		$y_pos = ($imageHeight - $t_box['height'])/2;

		if(strlen($this->Text[0]) > 0) {
			// AddText() - text, font, fontcolor, fontSize (pt), x, y, center on this width
			$text_position = $this->AddText($this->Text[0], 'times.ttf', 'BFE80E', $textSize, $textLeft, $y_pos);
		}

		if(strlen($this->Text[1]) > 0) {
			// put in our second bit of text
			// AddText() - text, font, fontcolor, fontSize (pt), x, y, center on this width
			$text_position2 = $this->AddText($this->Text[1], 'times.ttf', '000000', $textSize, $text_position['top_right_x']+5, $y_pos);
			$top_right = $text_position2['top_right_x'];
		}
		else {
			$top_right = '200';
		}

		if(isset($this->Text[2]) && strlen($this->Text[2]) > 0) {
			// put in our second bit of text
			// AddText() - text, font, fontcolor, fontSize (pt), x, y, center on this width
			$text_position3 = $this->AddText($this->Text[2], 'times.ttf', 'BFE80E', $textSize, $text_position2['top_right_x']+5, $y_pos);
			$top_right = $text_position3['top_right_x'];
		}
		else {
			$top_right = '200';
		}

		$this->SetBackgroundColor('ffffff');
		$this->SetImageSize($top_right+20, $imageHeight);

		return $this->MakeLogo();
	}
}
