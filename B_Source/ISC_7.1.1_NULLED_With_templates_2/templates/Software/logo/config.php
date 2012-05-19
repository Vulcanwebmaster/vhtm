<?php
/**
 * Logo Configuration File
 *
 * This is a PHP file that sets up variables specific for a template.
 * It can also be used to run PHP code for a template.
 *
 */
class Software_logo extends LogoMaker
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
		'Software',
		'Store'
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
		$this->SetBackgroundColor('ffffff');
		$imageHeight = 52;
		$imageWidth = 0;

		if(strlen($this->Text[0])) {
			$textPosition = $this->AddText($this->Text[0], 'Kautiva Pro.otf', 'fe9306', 35, 0, 20);
			$imageWidth = max($imageWidth, $textPosition['top_right_x']);
		}

		if(strlen($this->Text[1])) {
			$textPosition = $this->AddText($this->Text[1], 'Kautiva Pro.otf', '1963a8', 35, $imageWidth+5, 20);
			$imageWidth = max($imageWidth, $textPosition['top_right_x']);
		}

		// Add in the silhoutette
		$imagePosition = $this->AddImage('icon.png', $imageWidth+15, 0);
		$imageWidth = max($imageWidth, $imagePosition['top_right_x']);

		$this->SetImageSize($imageWidth+20, $imageHeight);
		$this->CropImage = true;
		return $this->MakeLogo();
	}
}