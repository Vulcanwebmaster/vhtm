<?php
/**
 * Logo Configuration File
 *
 * This is a PHP file that sets up variables specific for a template.
 * It can also be used to run PHP code for a template.
 *
 */

class SmallAppliances_logo extends LogoMaker
{
	/**
	 * TextFieldCount
	 * If a logo uses a by-line or similar, this can come in handy
	*/
	public $TextFieldCount = 1;

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
	public $displayBgImg = '';

	public function __construct()
	{
		parent::__construct();
		$this->Text[0] = 'Small Appliances';
	}

	public function GenerateLogo()
	{
		$this->NewLogo($this->FileType); // defaults to png. can use jpg or gif as well
		$this->TransparentBackground = true;

		$this->FontPath = dirname(__FILE__) . '/fonts/';

		$imageHeight = 40;
		$textLeft = 10;
		$textSize = 28;

		// we need the height of the text box to position the image and then caculate the text position
		$t_box = $this->TextBox($this->Text[0], 'GillSansStd.otf', '2F2F2F', $textSize, 0, 0);

		// determine the y position for the text
		$y_pos = 0+(($imageHeight - $t_box['height'])/2);

		if(strlen($this->Text[0]) > 0) {
			// AddText() - text, font, fontcolor, fontSize (pt), x, y, center on this width
			$text_position = $this->AddText($this->Text[0], 'GillSansStd.otf', '2F2F2F', $textSize, $textLeft, $y_pos);
		}


		$this->SetImageSize($text_position['top_right_x'], $imageHeight);

		return $this->MakeLogo();
	}
}