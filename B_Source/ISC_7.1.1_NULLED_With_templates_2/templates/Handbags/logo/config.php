<?php
/**
 * Logo Configuration File
 *
 * This is a PHP file that sets up variables specific for a template.
 * It can also be used to run PHP code for a template.
 *
 */

class Handbags_logo extends LogoMaker
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
		$this->Text[1] = 'Boutique';
		$this->Text[2] = 'Handbag';

	}

	public function GenerateLogo()
	{
		$this->NewLogo($this->FileType); // defaults to png. can use jpg or gif as well

		$this->FontPath = dirname(__FILE__) . '/fonts/';
		$this->ImagePath = dirname(__FILE__) . '/';

		$size = getimagesize(dirname(__FILE__)."/left.png");
		$imageHeight = $size['1'];
		$leftWidth = $size['2'];

		$imageRight = 0;

		if(strlen($this->Text[0]) > 0) {
			// AddText() - text, font, fontcolor, fontSize (pt), x, y, center on this width
			$text_position = $this->AddText($this->Text[0], 'Bauhaus.otf', 'ffffff', 15, 80, 20);
			$imageRight = $text_position['top_right_x'];
		}

		if(strlen($this->Text[1]) > 0) {
			// put in our second bit of text
			$text_position = $this->AddText($this->Text[1], 'Bauhaus.otf', '200e00', 35, 50, 40);
			$imageRight = max($imageRight, $text_position['top_right_x']);
		}

		if(strlen($this->Text[2]) > 0) {
			// put in our second bit of text
			$text_position = $this->AddText($this->Text[2], 'Bauhaus.otf', 'ffffff', 20, 150, 80);
			$imageRight = max($imageRight, $text_position['top_right_x']);
		}


		$img_position = $this->AddImage('left.png', 0, 0);
		$imageRight = max($imageRight, $img_position['top_right_x']);

		$imageRight -= 80;
		if($imageRight > $img_position['top_right_x']) {
			// Work out what we need to repeat
			$repeatCount = ceil(($imageRight-$img_position['top_right_x'])/3);
			$where = $img_position['top_right_x'];
			for($i = 0; $i < $repeatCount; ++$i) {
				$this->AddImage('fill.png', $where, -1);
				$where += 3;
			}
		}

		$img_position = $this->AddImage('right.png', $imageRight, 0);

		$this->SetImageSize($img_position['top_right_x'], 112);
		return $this->MakeLogo();
	}
}