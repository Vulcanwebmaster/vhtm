<?php
/**
 * Logo Configuration File
 *
 * This is a PHP file that sets up variables specific for a template.
 * It can also be used to run PHP code for a template.
 *
 */

class Cameras_logo extends LogoMaker
{
	/**
	 * TextFieldCount
	 * If a logo uses a by-line or similar, this can come in handy
	*/
	public $TextFieldCount = 1;

	/**
	 * Name of the recommended template to use this logo for.
	*/
	public $FileType = 'gif';

	public function __construct()
	{
		parent::__construct();
		$this->Text[0] = 'CameraStore';
	}

	public function GenerateLogo()
	{
		$this->NewLogo($this->FileType); // defaults to png. can use jpg or gif as well
		$this->TransparentBackground = true;

		$this->FontPath = dirname(__FILE__) . '/fonts/';
		$this->ImagePath = dirname(__FILE__) . '/images/';

		$colour = 'FFFFFF';
		$size = 41;
		$font = 'MyriadPro-BoldSemiCnIt.otf';

		$leftpadding = 15;
		$rightpadding = 15;
		$toppadding = 15;
		$bottompadding = 0;

		$xoffset = 85 + $leftpadding;
		$yoffset = 12 + $toppadding;

		// to account for a bug in the underlying logomaker code, adjust the y offset by the value returned by GetHeightText
		$yoffset -= $this->GetHeightText($size, 0, $this->FontPath . $font);

		$box = $this->AccurateImageTtfBbox($size, 0, $this->FontPath . $font, $this->Text[0]);

		$min_x = min(array($box[0], $box[2], $box[4], $box[6]));
		$max_x = max(array($box[0], $box[2], $box[4], $box[6]));
		$min_y = min(array($box[1], $box[3], $box[5], $box[7]));
		$max_y = max(array($box[1], $box[3], $box[5], $box[7]));

		$x = 0 - $min_x + $xoffset;
		$y = 0 - $min_y + $yoffset;

		$height = $max_y - $min_y;

		if (strlen($this->Text[0])) {
			$position = $this->AddText($this->Text[0], $font, $colour, $size, $x, $y);
			$x = $position['top_right_x'];
		}

		/*
		if (strlen($this->Text[1])) {
			$position = $this->AddText($this->Text[1], $font, $colour, $size, $x + 4, $y);
			$x = $position['top_right_x'];
		}
		*/

		$pos = $this->AddImage('bg.png', $leftpadding, $toppadding);
		$width = $pos['bottom_right_x'];
		$height = $pos['bottom_right_y'];

		$this->SetImageSize($width + $rightpadding, $height + $bottompadding);
		$this->CropImage = true;
		return $this->MakeLogo();
	}
}