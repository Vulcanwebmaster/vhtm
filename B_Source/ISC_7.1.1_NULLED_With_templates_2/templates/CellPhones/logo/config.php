<?php
/**
 * Logo Configuration File
 *
 * This is a PHP file that sets up variables specific for a template.
 * It can also be used to run PHP code for a template.
 *
 */

class CellPhones_logo extends LogoMaker
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
		$this->Text[0] = 'phone';
		$this->Text[1] = '2';
		$this->Text[2] = 'phone';
	}

	public function GenerateLogo()
	{
		$this->NewLogo($this->FileType); // defaults to png. can use jpg or gif as well
		$this->TransparentBackground = true;

		$this->FontPath = dirname(__FILE__) . '/fonts/';
		$this->ImagePath = dirname(__FILE__) . '/images/';

		$colour1 = '000000';
		$colour2 = 'FEFEFE';
		$size = 44;
		$font = 'Arial.ttf';

		$toppadding = 0;
		$leftpadding = 0;
		$bottompadding = 0;
		$rightpadding = 0;

		$imagesize = getimagesize($this->ImagePath . 'bg.png');

		// calulate height of all logo text
		$box = $this->AccurateImageTtfBbox($size, 0, $this->FontPath . $font, $this->Text[0] . $this->Text[1] . $this->Text[2]);

		$min_x = min(array($box[0], $box[2], $box[4], $box[6]));
		$max_x = max(array($box[0], $box[2], $box[4], $box[6]));
		$min_y = min(array($box[1], $box[3], $box[5], $box[7]));
		$max_y = max(array($box[1], $box[3], $box[5], $box[7]));

		$textheight = $max_y - $min_y;

		$xoffset = 0;
		$yoffset = 7;

		// adjust y offset to fit into image
		$yoffset += ($imagesize[1] / 2) - 28;

		// to account for a bug in the underlying logomaker code, adjust the y offset by the value returned by GetHeightText
		$yoffset -= $this->GetHeightText($size, 0, $this->FontPath . $font);

		$y = 0 - $min_y + $yoffset;
		$x = 0 - $min_x + $xoffset;

		if (strlen($this->Text[0])) {
			$position = $this->AddText($this->Text[0], $font, $colour1, $size, $x, $y);
			$x = $position['top_right_x'];
			//$this->AddRectangle($position['top_right_x'] - $position['top_left_x'], $position['bottom_left_y'] - $position['top_left_y'], '00FFFF', $position['top_left_x'], $position['top_left_y'], true);
			$x += 10;
		}

		if (strlen($this->Text[1])) {
			$image = $this->AddImage('bg.png', $x, 0);
			$middlebox = $this->AccurateImageTtfBbox($size, 0, $this->FontPath . $font, $this->Text[1]);
			$middleboxwidth = $middlebox[2] - $middlebox[0];
			$x += floor(($imagesize[0] / 2) - ($middleboxwidth / 2)) - 1;
			$position = $this->AddText($this->Text[1], $font, $colour2, $size, $x, $y);
			//$this->AddRectangle($position['top_right_x'] - $position['top_left_x'], $position['bottom_left_y'] - $position['top_left_y'], '00FFFF', $position['top_left_x'], $position['top_left_y'], true);
			$x = $position['top_right_x'];
			$x += ($imagesize[0] / 2) - ($middleboxwidth / 2);
			$x += 6;
		}

		if (strlen($this->Text[2])) {
			$position = $this->AddText($this->Text[2], $font, $colour1, $size, $x, $y);
			//$this->AddRectangle($position['top_right_x'] - $position['top_left_x'], $position['bottom_left_y'] - $position['top_left_y'], '00FFFF', $position['top_left_x'], $position['top_left_y'], true);
			$x = $position['top_right_x'];
		}

		$finalheight = max($imagesize[1], $yoffset + $textheight) + 10;
		$finalwidth = $x + 5;

		$this->SetImageSize($finalwidth, $finalheight);
		$this->CropImage = true;
		return $this->MakeLogo();
	}
}