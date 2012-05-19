<?php
/**
 * Logo Configuration File
 *
 * This is a PHP file that sets up variables specific for a template.
 * It can also be used to run PHP code for a template.
 *
 */

class DarkShir_logo extends LogoMaker
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
		$this->Text[0] = 'DARK';
		$this->Text[1] = 'SHIR';
		$this->Text[2] = 'ON-LINE SHOP';
	}

	public function GenerateLogo()
	{
		$this->NewLogo($this->FileType); // defaults to png. can use jpg or gif as well
		$this->FontPath = dirname(__FILE__) . '/fonts/';
		$font = 'trebucbd.ttf';
		$colour1 = 'ffffff';
		$colour2 = 'feb836';
		$this->TransparentBackground = true;
		$this->TransparentBackgroundColor = array(0, 0, 0); // black text matte
		$this->displayBgImg = 'bg.gif';

		$this->Text[2] = str_split($this->Text[2]);
		$this->Text[2] = implode(' ', $this->Text[2]);

		$textSize1 = 25;
		$textSize2 = 11;

		$manualLeftOffset = 2; // pixels
		$manualTopOffset = 32; // pixels
		$text2LeftOffset = -1; // pixels
		$text2TopOffset = 10; // pixels

		$box1 = $this->AccurateImageTtfBbox($textSize1, 0, $font, 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz01234567890-=!@#$%^&*()_+[]\{}|;\':",./<>?');
		$box2 = $this->AccurateImageTtfBbox($textSize2, 0, $font, 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz01234567890-=!@#$%^&*()_+[]\{}|;\':",./<>?');

		// position and add text 0
		$textLeft = 0 - $box1[6] + $manualLeftOffset;
		$textTop = 0 - $box1[7] + $manualTopOffset;
		$previous = $this->AddText($this->Text[0], $font, $colour1, $textSize1, $textLeft, $textTop);
		$firstLineLeft = $previous['top_left_x'];

		// position and add text 1
		$textLeft += $previous['top_right_x'];
		$previous = $this->AddText($this->Text[1], $font, $colour2, $textSize1, $textLeft, $textTop);
		$firstLineRight = $previous['top_right_x'];

		// position and add text 2
		$textLeft = 0 - $box1[6] + $manualLeftOffset + $text2LeftOffset;
		$textTop = $previous['bottom_left_y'] + $text2TopOffset;
		$previous = $this->AddText($this->Text[2], $font, $colour1, $textSize2, $textLeft, $textTop, $firstLineRight - $firstLineLeft);

		// finalise
		$width = max($previous['top_right_x'], $firstLineRight);
		$height = $previous['bottom_right_y'];

		$this->SetImageSize($width, $height);
		$this->CropImage = true;

		return $this->MakeLogo();
	}
}