<?php
/**
 * Logo Configuration File
 *
 * This is a PHP file that sets up variables specific for a template.
 * It can also be used to run PHP code for a template.
 *
 */
class Luggage_logo extends LogoMaker
{
	/**
	 * @var int The number of configurable text fields this logo has.
	 */
	public $TextFieldCount = 2;

	/**
	 * @var string The type of file (extention) the logo maker should use. gif, png or jpg
	 */
	public $FileType = 'png';

	/**
	 * @var array Array of text fields for this logo.
	 */
	public $Text = array(
		'Luggage',
		'Lounge'
	);

	/**
	 * Generate a logo.
	 *
	 * @return string The generated logo.
	 */
	public function GenerateLogo()
	{
		$this->FontPath = dirname(__FILE__) . '/fonts/';
		$this->ImagePath = dirname(__FILE__) . '/';
		$this->SetBackgroundColor('501c4d');
		$imageHeight = 60;
		$imageWidth = 0;

		// Add in the silhoutette
		$imagePosition = $this->AddImage('icon.png', $imageWidth, 0);
		$imageWidth = max($imageWidth, $imagePosition['top_right_x']);

		if(strlen($this->Text[0])) {
			$textPosition = $this->AddText($this->Text[0], 'ITCAvantGardeStd-Bk.otf', 'ffffff', 28, $imageWidth+10, 15);
			$imageWidth = max($imageWidth, $textPosition['top_right_x']);
		}

		if(strlen($this->Text[1])) {
			$textPosition = $this->AddText($this->Text[1], 'ITCAvantGardeStd-XLt.otf', 'f9d53a', 28, $imageWidth+10, 15);
			$imageWidth = max($imageWidth, $textPosition['top_right_x']);
		}

		$this->SetImageSize($imageWidth+20, $imageHeight);
		$this->CropImage = true;
		return $this->MakeLogo();
	}
}