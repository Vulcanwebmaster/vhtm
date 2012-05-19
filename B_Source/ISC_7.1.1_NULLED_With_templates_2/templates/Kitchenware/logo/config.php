<?php
/**
 * Logo Configuration File
 *
 * This is a PHP file that sets up variables specific for a template.
 * It can also be used to run PHP code for a template.
 *
 */
class Kitchenware_logo extends LogoMaker
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
		'Cooks',
		'Kitchen'
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
		$this->SetBackgroundImage('back.png');
		$this->SetBackgroundColor('ffffff');
		$size = getimagesize(dirname(__FILE__)."/back.png");
		$imageHeight = $size['1'];
		$imageWidth = 0;

		if(strlen($this->Text[0])) {
			$textPosition = $this->AddText($this->Text[0], 'DiotimaLTStd-Roman.otf', '2c1f16', 40, 100, 55);
			$imageWidth = max($imageWidth, $textPosition['top_right_x']);
		}

		if(strlen($this->Text[1])) {
			$textPosition = $this->AddText($this->Text[1], 'DiotimaLTStd-Roman.otf', '7d644a', 40, $imageWidth+20, 55);
			$imageWidth = max($imageWidth, $textPosition['top_right_x']);
		}

		$this->SetImageSize($imageWidth+20, $imageHeight);
		$this->CropImage = true;
		return $this->MakeLogo();
	}
}