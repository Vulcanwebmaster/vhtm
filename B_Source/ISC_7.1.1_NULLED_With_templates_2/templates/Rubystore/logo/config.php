<?php
/**
 * Logo Configuration File
 *
 * This is a PHP file that sets up variables specific for a template.
 * It can also be used to run PHP code for a template.
 *
 */

class Rubystore_logo extends LogoMaker
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

	/**
	 * This defines a background image to be used when displaying the sample/preview logo in the control panel.
	 * i.e. If the text is white, grey or another light colour.
	 * The image path is relative to the directory this current PHP file is in. If the image is in the same directory, then use only the image name and no path information.
	 * @var string
	 */
	public $displayBgImg = 'back.jpg';

	public function __construct()
	{
		parent::__construct();
		$this->Text[0] = 'RubyStore';
	}

	public function GenerateLogo()
	{
		$this->NewLogo($this->FileType); // defaults to png. can use jpg or gif as well

		$this->FontPath = dirname(__FILE__) . '/fonts/';

		$this->ImagePath = dirname(__FILE__) . '/';
		$this->AddImage('logo.gif', 10, 15);

		$textLeft = 50;
		$textSize = 41;
		$imageHeight = 65;

		// we need the height of the text box to position the image and then caculate the text position
		$t_box = $this->TextBox($this->Text[0], 'Fontin_Sans_B_45b.otf', '000103', $textSize, 0, 0);

		// determine the y position for the text
		$y_pos = 8+(($imageHeight - $t_box['height'])/2);

		if(isset($this->Text[0]) && strlen($this->Text[0]) > 0) {
			// AddText() - text, font, fontcolor, fontSize (pt), x, y, center on this width
			$text_position = $this->AddText($this->Text[0], 'Fontin_Sans_B_45b.otf', 'FFFFFF',$textSize, $textLeft, 20);
			$top_right = $text_position['top_right_x'];
		}

		if(isset($this->Text[1]) && strlen($this->Text[1]) > 0) {
			// AddText() - text, font, fontcolor, fontSize (pt), x, y, center on this width
			$text_position2 = $this->AddText($this->Text[1], 'Fontin_Sans_B_45b.otf', '000103',$textSize, ($text_position['top_right_x']), 20);
			$top_right = $text_position2['top_right_x'];
		}

		$this->TransparentBackground = true;
		$this->SetImageSize($top_right+20, $imageHeight);
		//$this->CropImage = true;
		return $this->MakeLogo();
	}
}