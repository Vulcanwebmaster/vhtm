<?php
/**
 * Logo Configuration File
 *
 * This is a PHP file that sets up variables specific for a template.
 * It can also be used to run PHP code for a template.
 *
 */

class Toys_logo extends LogoMaker
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
		$this->Text[0] = 'The';
		$this->Text[1] = 'Toy';
		$this->Text[2] = 'Store';
	}

	public function GenerateLogo()
	{
		$this->NewLogo($this->FileType); // defaults to png. can use jpg or gif as well

		$this->FontPath = dirname(__FILE__) . '/fonts/';

		$this->ImagePath = dirname(__FILE__) . '/';
		$backgroundImage = 'back.png';
		$this->SetBackgroundImage($backgroundImage);
		$size = getimagesize(dirname(__FILE__)."/".$backgroundImage);

		$imageHeight = $size['1'];
		$textLeft = 75;
		$textSize = 35;

		$this->ImagePath = dirname(__FILE__) . '/';
		$this->SetBackgroundImage('back.png');

		$fields = array();
		for($i = 0; $i <= $this->TextFieldCount-1; ++$i) {
			if(strlen(trim($this->Text[$i])) > 0) {
				$fields[] = $this->Text[$i];
			}
		}

		$top_right = 0;

		if(count($fields) == 3) {
				$t_box = $this->TextBox($fields[1], 'jellybelly.ttf', '0485e3', 55, 0, 0);
				$t_box2 = $this->TextBox($fields[1], 'jellybelly.ttf', '0485e3', 28, 0, 0);

				$text_position = $this->AddText($fields[2], 'jellybelly.ttf', 'ffffff', 55, $t_box['width'], 59);
				$text_position = $this->AddText($fields[2], 'jellybelly.ttf', 'ffffff', 55, $t_box['width'], 61);
				$text_position = $this->AddText($fields[2], 'jellybelly.ttf', 'ffffff', 55, $t_box['width'], 59);
				$text_position = $this->AddText($fields[2], 'jellybelly.ttf', 'ffffff', 55, $t_box['width'], 61);
				$text_position = $this->AddText($fields[2], 'jellybelly.ttf', 'ff8900', 55, $t_box['width'], 60);

				$top_right = $text_position['top_right_x'];

				$text_position = $this->AddText($fields[1], 'jellybelly.ttf', 'ffffff', 55, 24, 24);
				$text_position = $this->AddText($fields[1], 'jellybelly.ttf', 'ffffff', 55, 25, 26);
				$text_position = $this->AddText($fields[1], 'jellybelly.ttf', 'ffffff', 55, 26, 24);
				$text_position = $this->AddText($fields[1], 'jellybelly.ttf', 'ffffff', 55, 26, 26);
				$text_position = $this->AddText($fields[1], 'jellybelly.ttf', 'e6156e', 55, 25, 25);
				$top_right = max($text_position['top_right_x'], $top_right);

				$text_position = $this->AddText($fields[0], 'jellybelly.ttf', 'ffffff', 28, 0, 7);
				$text_position = $this->AddText($fields[0], 'jellybelly.ttf', 'ffffff', 28, 2, 7);
				$text_position = $this->AddText($fields[0], 'jellybelly.ttf', 'ffffff', 28, 0, 9);
				$text_position = $this->AddText($fields[0], 'jellybelly.ttf', 'ffffff', 28, 2, 9);
				$text_position = $this->AddText($fields[0], 'jellybelly.ttf', '0485e3', 28, 1, 8);
				$top_right = max($text_position['top_right_x'], $top_right);
		}
		else if(count($fields) == 2) {
			$text_position = $this->AddText($fields[1], 'jellybelly.ttf', 'ffffff', 55, 59, 59);
			$text_position = $this->AddText($fields[1], 'jellybelly.ttf', 'ffffff', 55, 59, 61);
			$text_position = $this->AddText($fields[1], 'jellybelly.ttf', 'ffffff', 55, 61, 59);
			$text_position = $this->AddText($fields[1], 'jellybelly.ttf', 'ffffff', 55, 61, 61);
			$text_position = $this->AddText($fields[1], 'jellybelly.ttf', 'e6156e', 55, 60, 60);
			$top_right = max($text_position['top_right_x'], $top_right);

			$text_position = $this->AddText($fields[0], 'jellybelly.ttf', 'ffffff', 45, 0, 26);
			$text_position = $this->AddText($fields[0], 'jellybelly.ttf', 'ffffff', 45, 2, 26);
			$text_position = $this->AddText($fields[0], 'jellybelly.ttf', 'ffffff', 45, 0, 24);
			$text_position = $this->AddText($fields[0], 'jellybelly.ttf', 'ffffff', 45, 2, 24);
			$text_position = $this->AddText($fields[0], 'jellybelly.ttf', 'ff8900', 45, 1, 25);
			$top_right = max($text_position['top_right_x'], $top_right);
		}
		else {
			$text_position = $this->AddText($fields[0], 'jellybelly.ttf', 'ffffff', 55, 0, 37);
			$text_position = $this->AddText($fields[0], 'jellybelly.ttf', 'ffffff', 55, 2, 37);
			$text_position = $this->AddText($fields[0], 'jellybelly.ttf', 'ffffff', 55, 0, 39);
			$text_position = $this->AddText($fields[0], 'jellybelly.ttf', 'ffffff', 55, 2, 39);
			$text_position = $this->AddText($fields[0], 'jellybelly.ttf', 'ff8900', 55, 1, 38);
			$top_right = max($text_position['top_right_x'], $top_right);
		}
		$this->SetImageSize(300, $imageHeight);
		$this->SetImageSize($top_right+40, $imageHeight);
		$this->CropImage = true;
		return $this->MakeLogo();
	}
}