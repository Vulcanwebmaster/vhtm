<?php
/**
 * Logo Configuration File
 *
 * This is a PHP file that sets up variables specific for a template.
 * It can also be used to run PHP code for a template.
 *
 */

class Hobbies_logo extends LogoMaker
{
	/**
	 * TextFieldCount
	 * If a logo uses a by-line or similar, this can come in handy
	*/
	public $TextFieldCount = 3;

	/**
	 * Name of the recommended template to use this logo for.
	*/
	public $FileType = 'gif';

	public function __construct()
	{
		parent::__construct();
		$this->Text[0] = 'The';
		$this->Text[1] = 'Hobby';
		$this->Text[2] = 'Shop';

	}

	public function GenerateLogo()
	{
		$this->NewLogo($this->FileType); // defaults to png. can use jpg or gif as well

		$this->FontPath = dirname(__FILE__) . '/fonts/';
		$this->ImagePath = dirname(__FILE__) . '/';

		// we need the height of the text box to position the image and then caculate the text position
		$t_box = $this->TextBox($this->Text[0], 'MALCS.TTF', '', 80, 0, 0);

		// determine the y position for the text
		$y_pos = 10+((52 - $t_box['height'])/2);

		$top_right = 12;
		if(strlen($this->Text[0]) > 0) {
			// AddText() - text, font, fontcolor, fontSize (pt), x, y, center on this width
			$text_position = $this->AddText($this->Text[0], 'MALCS.TTF', 'b4ad93', 34, $top_right, $y_pos+10,false, 5);
			$top_right = $text_position['top_right_x'];
		}

		if(strlen($this->Text[1]) > 0) {
			// put in our second bit of text
			$text_position2 = $this->AddText($this->Text[1], 'MALCS.TTF', '', 40, $top_right+7, $y_pos+20,false, 5);
			$top_right = $text_position2['top_right_x'];
		}

		if(strlen($this->Text[2]) > 0) {
			// put in our second bit of text
			$text_position3 = $this->AddText($this->Text[2], 'MALCS.TTF', '', 40, $top_right+7, $y_pos+30,false, 5);
			$top_right = $text_position3['top_right_x'];
		}


		$this->SetImageSize($top_right+20, 80);
//		$logoImage = $this->MakeLogo();



		return $this->MakeLogo();
	}
}