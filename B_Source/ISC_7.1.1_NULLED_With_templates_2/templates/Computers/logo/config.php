<?php
/**
 * Logo Configuration File
 *
 * This is a PHP file that sets up variables specific for a template.
 * It can also be used to run PHP code for a template.
 *
 */

class Computers_logo extends LogoMaker
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
		$this->Text[0] = 'Compu';
		$this->Text[1] = 'Store';
	}

	public function GenerateLogo()
	{
		$this->NewLogo($this->FileType); // defaults to png. can use jpg or gif as well

		$this->FontPath = dirname(__FILE__) . '/fonts/';

		$imageHeight = 55;
		$textLeft = 0;
		$textSize = 35;

		// we need the height of the text box to position the image and then caculate the text position
		$t_box = $this->TextBox($this->Text[0], 'VAGRoundedStd-Bold.otf', '9bc823', $textSize, 0, 0);

		// determine the y position for the text
		$y_pos = ($imageHeight - $t_box['height'])/2;

		if(strlen($this->Text[0]) > 0) {
			// AddText() - text, font, fontcolor, fontSize (pt), x, y, center on this width
			$text_position = $this->AddText($this->Text[0], 'VAGRoundedStd-Bold.otf', '9bc823', $textSize, $textLeft, $y_pos);
		}

		if(strlen($this->Text[1]) > 0) {
			// put in our second bit of text
			// AddText() - text, font, fontcolor, fontSize (pt), x, y, center on this width
			$text_position2 = $this->AddText($this->Text[1], 'VAGRoundedStd-Thin.otf', '9a53b2', $textSize, $text_position['top_right_x']+5, $y_pos);
			$top_right = $text_position2['top_right_x'];
		}
		else {
			$top_right = '200';
		}

		$this->SetBackgroundColor('ffffff');
		$this->SetImageSize($top_right+20, $imageHeight);

		return $this->MakeLogo();
	}
}