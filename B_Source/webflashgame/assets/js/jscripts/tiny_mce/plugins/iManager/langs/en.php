<?php
	// ================================================
	// PHP image manager - iManager 
	// ================================================
	// iManager English dialog
	// ================================================
	// Developed: net4visions.com
	// Copyright: net4visions.com
	// License: LGPL - see license.txt
	// (c)2005 All rights reserved.
	// ================================================
	// Revision: 1.0                   Date: 05/06/2005
	// ================================================
	
	//-------------------------------------------------------------------------
	// charset to be used in dialogs
	$lang_charset = 'iso-8859-1';
	// text direction for the current language to be used in dialogs
	$lang_direction = 'ltr';
	//-------------------------------------------------------------------------
	
	// language text data array
	// first dimension - block, second - exact phrase
	//-------------------------------------------------------------------------
	// iManager
	$lang_data = array (  
		'imanager' => array (
		//-------------------------------------------------------------------------
		// common - im
		'im_001' => 'Image manager',
		'im_002' => 'iManager',
		'im_003' => 'Menu',
		'im_004' => 'Welcome',
		'im_005' => 'Insert',
		'im_006' => 'Cancel',
		'im_007' => 'Insert',		
		'im_008' => 'Insert/change image',
		'im_009' => 'Properties',
		'im_010' => 'Image properties',
		'im_011' => 'Toolbox',
		'im_012' => 'Image toolbox',
		'im_013' => 'Popup',
		'im_014' => 'Image popup',
		'im_015' => 'About iManager',
		'im_016' => 'Section',				
		'im_096' => 'Please wait while loading...',
		'im_097' => 'Click to change color',
		'im_098' =>	'Open section',
		'im_099' => 'Close section',
		//-------------------------------------------------------------------------
		// insert/change screen - in	
		'in_001' => 'Insert/change image',
		'in_002' => 'Library',
		'in_003' => 'Select an image library',
		'in_004' => 'Images',
		'in_005' => 'Preview',
		'in_006' => 'Delete image',
		'in_007' => 'Click for a larger view of picture',
		'in_008' => 'Please open section to upload/rename or delete image.',	
		'in_009' => 'Information',
		'in_010' => 'Popup',
		'in_013' => 'Create a link to an image to be opened in a new window.',
		'in_014' => 'Remove popup link',	
		'in_015' => 'File',	
		'in_016' => 'Rename',
		'in_017' => 'Rename image',
		'in_018' => 'Upload',
		'in_019' => 'Upload image',	
		'in_020' => 'Size(s)',
		'in_021' => 'Check the desired size(s) to be created while uploading image(s)',
		'in_022' => 'Original',
		'in_023' => 'Image will be cropped',
		'in_024' => 'Delete',
		'in_025' => 'Directory',
		'in_026' => 'Click to create a directory',
		'in_027' => 'Create a directory',
		'in_028' => 'Width',
		'in_029' => 'Height',
		'in_030' => 'Type',
		'in_031' => 'Size',
		'in_032' => 'Name',
		'in_033' => 'Created',
		'in_034' => 'Modified',
		'in_035' => 'Image info',
		'in_036' => 'Click on image to close window',	
		'in_037' => 'Click to switch image selection view',		
		'in_099' => 'default',	
		//-------------------------------------------------------------------------
		// properties, attributes - at
		'at_001' => 'Image attributes',
		'at_002' => 'Source',
		'at_003' => 'Title',
		'at_004' => 'TITLE - displays image description onmouseover',
		'at_005' => 'Description',
		'at_006' => 'ALT -  textual replacement for the image, to be displayed or otherwise used in place of the image',
		'at_007' => 'Style',
		'at_008' => 'Please make sure that the selected style exists in your stylesheet!',
		'at_009' => 'CSS-style',	
		'at_010' => 'Attributes',
		'at_011' => 'The \'align\', \'border\', \'hspace\', and \'vspace\' attributes of the image element are not supported in XHTML 1.0 Strict DTD. Please use the CSS-style instead.',
		'at_012' => 'Align',	
		'at_013' => 'default',
		'at_014' => 'left',
		'at_015' => 'right',
		'at_016' => 'top',
		'at_017' => 'middle',
		'at_018' => 'bottom',
		'at_019' => 'absmiddle',
		'at_020' => 'texttop',
		'at_021' => 'baseline',		
		'at_022' => 'Size',
		'at_023' => 'Width',
		'at_024' => 'Height',
		'at_025' => 'Border',
		'at_026' => 'V-space',
		'at_027' => 'H-space',
		'at_028' => 'Preview',	
		'at_029' => 'Click to enter special character into title field',
		'at_030' => 'Click to enter special character into description field',
		'at_031' => 'Reset image dimensions to default values',
		'at_032' => 'Caption',
		'at_033' => 'checked: set image caption / unchecked: no image caption set or remove image caption',
		'at_034' => 'set image caption',
		'at_099' => 'default',	
		//-------------------------------------------------------------------------
		// toolbox - tb
		'tb_001' => 'Output',
		'tb_002' => 'Resize',
		'tb_003' => 'Crop',
		'tb_004' => 'Orientation',
		'tb_005' => 'Filters',
		//'tb_006' => 'Dynamic text',
		'tb_007' => 'Watermark',
		'tb_008' => 'Mask',
		'tb_009' => 'Wizard',
		'tb_010' => 'View current settings',	
		'tb_011' => 'Source',
		'tb_012' => 'Information',
		'tb_013' => 'Destination',
		'tb_014' => 'File',
		'tb_015' => 'If checked (default setting), then thumbnail (modified image) will be rendered to file. Otherwise thumbnail will be created dynamically.',
		'tb_016' => 'Overwrite',		
		'tb_017' => 'If checked, toolbox changes will be applied to existing image - original image will be overwritten! If unchecked, toolbox changes will be applied and saved to new image file.',
		'tb_018' => 'Format',
		'tb_019' => 'Please select desired image format - (default: jpeg)',
		'tb_020' => 'Quality',
		'tb_021' => 'Thumbnail',
		'tb_022' => 'If checked, existing thumbnail image will be updated. Otherwise, a new thumbnail will be created!',
		'tb_023' => 'update',
		'tb_024' => 'Preview',
		'tb_025' => 'Click for full view for pictures larger than preview size',
		'tb_026' => 'Overlay/underlay',
		'tb_096' => 'Apply toolbox changes to image - update preview window',
		'tb_097' => 'Save toolbox changes - update image file',	
		'tb_098' => 'Refresh',
		'tb_099' => 'Accept',	
		//-------------------------------------------------------------------------
		// resize - rs
		'rs_001' => 'Resize',
		'rs_002' => 'Resize',	
		'rs_003' => 'Width',
		'rs_004' => 'Height',
		'rs_005' => 'Click to reset dimensions',
		'rs_006' => 'Dimensions',
		'rs_007' => 'Keep',
		'rs_008' => 'Keep aspect ratio - image proportions are NOT changed.',
		'rs_009' => 'keep aspect ratio',
		'rs_010' => 'Ignore',
		'rs_011' => 'Ignore proportions - disable proportional resizing and stretch image to fit width and height values - this may lead to distortion of image.',
		'rs_012' => 'ignore aspect ratio',
		'rs_013' => 'Force',
		'rs_014' => 'force aspect ratio',
		'rs_015' => 'Force aspect ratio - keeps proportions of the image and creates a fixed size thumbnail!',
		'rs_016' => 'Color',	
		'rs_017' => 'Crop',
		'rs_018' => 'zoom crop to new dimensions',
		'rs_019' => 'Zoom crop - this will auto-crop the larger dimension so that the image will fill the smaller dimension.',
		'rs_020' => 'Enlarge',
		'rs_021' => 'allow enlargement',
		'rs_022' => 'Allow enlargment of image - this may lead to distortion of image!',
		'rs_099' => 'default',
		//-------------------------------------------------------------------------
		// crop interface - ci
		'ci_001' => 'Crop interface',
		'ci_002' => 'Use the \'shift\' or \'ctrl\' button to resize the crop area',
		'ci_003' => 'Reset interface',
		'ci_004' => 'Preview cropped area',
		'ci_005' => 'Close interface',		
		//-------------------------------------------------------------------------
		// crop - cr
		'cr_001' => 'Crop',
		'cr_002' => 'Crop',
		'cr_003' => 'Open crop interface',
		'cr_004' => 'Close crop interface',
		'cr_005' => 'Crop interface - either enter your values manually or use the provided crop interface.If you are working with the crop interface, use either the \'shift\' or \'ctrl\' button to resize the crop area',
		'cr_006' => 'Width',	
		'cr_007' => 'Height',	
		'cr_008' => 'Top',	
		'cr_009' => 'Left',	
		'cr_010' => 'Ratio',
		'cr_011' => 'Set crop area ratio (default: 4 : 3)',
		'cr_012' => 'none',	
		'cr_099' => 'default',
		//-------------------------------------------------------------------------
		// orientation - or
		'or_001' => 'Orientation',
		'or_002' => 'Orientation',
		'or_003' => 'User either \'flip\' or \'rotate\' to change the image orientation',	
		'or_004' => 'Flip',
		'or_005' => 'Horizontal',
		'or_006' => 'Vertical',
		'or_007' => 'Both',
		'or_008' => 'Rotate',
		'or_009' => 'If set to \'EXIF\', orientation stored by camera is used',
		'or_010' => 'Angle',
		'or_011' => 'Rotate by angle: angle of rotation in degrees; positive = counterclockwise, negative = clockwise',	
		'or_012' => 'Auto',
		'or_013' => 'Auto rotate: set to exif info, to use EXIF orientation stored by camera. Can also be set to +180&deg; or -180&deg; for landscape, or +90&deg; or -90&deg; for portrait. Positive values for clockwise and negative values for counterclockwise.',
		'or_014' => '+ 90&deg;',	
		'or_015' => '- 90&deg;',	
		'or_016' => '+ 180&deg;',	
		'or_017' => '- 180&deg;',	
		'or_018' => 'exif info',	
		'or_019' => 'Color',
		'or_020' => 'portrait',	
		'or_021' => 'landscape',
		'or_022' => 'camera',		
		'or_099' => 'default',	
		//-------------------------------------------------------------------------
		// colorize - co
		'co_001' => 'Filters',
		'co_002' => 'Filters',
		'co_003' => 'Filters - apply filters to image',
		'co_004' => 'Effects',
		'co_005' => 'Effects - apply colors to image',
		'co_006' => 'Touchup',
		'co_007' => 'Touchup - enhance image quality',
		//-------------------------------------------------------------------------
		// effects - ef
		'ef_001' => 'Effects',
		'ef_002' => 'Effects',
		'ef_003' => 'Grayscale',
		'ef_099' => 'default',
		'ef_004' => 'Negative',
		'ef_005' => 'B&amp;W',
		'ef_006' => 'Sepia',
		'ef_007' => 'Sepia - Sepia toning is used by photographers to create a warmer print tone. Sepia-toning gives your image an antique feel.',	
		'ef_008' => 'Intensity',		
		'ef_009' => 'Color',
		'ef_010' => 'Color - colorize image',	
		'ef_011' => 'Intensity',	
		//-------------------------------------------------------------------------
		// touchup - to
		'to_001' => 'Touchup',
		'to_002' => 'Touchup',	
		'to_003' => 'Gamma',	
		'to_004' => 'Saturation',	
		'to_005' => 'Mask',
		'to_006' => 'Sharpening filters emphasize the edges, or the differences between adjacent light and dark sample points in an image. The Unsharp Mask filter has parameters that allow it to affect only the edges in the image, and to exclude the smoother low-contrast areas.',
		'to_007' => 'unsharp mask',
		'to_008' => 'Radius',	
		'to_009' => 'Radius controls how wide the edge rims become, and Radius = 1.0 is about the right ballpark, with 0.6 to 2.0 often being useful.',
		'to_010' => 'Amount',	
		'to_011' => 'Amount is like a volume control, exaggerating the edge differences (how much darker and how much lighter the edge borders become). Amount interacts with Radius as to degree of sharpening, but it does not affect the width of the edge rims. Amount has a large effect, and values of 80 to 120 are normally usable if the Radius isn\'t too large.',
		'to_012' => 'Threshold',	
		'to_013' => 'Threshold specifies how far apart adjacent tonal values have to be (values of 0..255) before the filter does anything to the edges, before it is judged to be an edge at all. Low values should sharpen more because fewer areas are excluded. Higher threshold values exclude areas of lower contrast.',
		'to_014' => 'Level',
		'to_015' => 'auto contrast',
		'to_016' => 'Level - this function is similar to the auto contrast function in Adobe Photoshop',
		'to_017' => 'Channel',
		//'to_018' => '',
		'to_019' => 'all',
		'to_020' => 'red',
		'to_021' => 'green',
		'to_022' => 'blue',
		'to_023' => 'Min.',
		//'to_024' => '',
		'to_025' => 'Max.',
		//'to_026' => '',
		'to_027' => 'auto',
		'to_028' => 'Blur',
		'to_029' => 'Blur softens the focus of selected image.',
		'to_030' => 'Balance',
		'to_031' => 'white balance',
		'to_032' => 'Balance - the filter attempts to maintain brightness so any gray color can theoretically be used.',
		'to_098' => 'background - only if jpeg',
		'to_099' => 'default',	
		//-------------------------------------------------------------------------
		// watermark - wm
		'wm_001' => 'Watermark',
		'wm_002' => 'Watermark',
		'wm_003' => 'Add either \'text\' or \'picture\' watermark to image',
		'wm_004' => 'Type',
		'wm_005' => 'text',
		'wm_006' => 'image',
		'wm_007' => 'Select type of watermark to be applied to image',
		'wm_008' => 'Text',
		'wm_009' => 'Enter watermark text to be applied to image',
		'wm_010' => 'Click to enter special character into text field',
		'wm_011' => 'Color',	
		'wm_012' => 'Font type',
		'wm_013' => 'system',
		'wm_014' => 'true type',
		'wm_015' => 'Select either pre-installed system font or true type font for more font variations',
		'wm_016' => 'Font',
		'wm_017' => 'Size',
		'wm_018' => 'Angle',
		'wm_019' => 'Opacity',
		'wm_020' => 'Margin',
		'wm_021' => 'Alignment',
		'wm_022' => 'top-left',
		'wm_023' => 'top',
		'wm_024' => 'top-right',
		'wm_025' => 'left',
		'wm_026' => 'right',
		'wm_027' => 'bottom-left',
		'wm_028' => 'bottom',
		'wm_029' => 'bottom-right',
		'wm_030' => 'tile',
		'wm_031' => 'text color',	
		'wm_032' => 'Font',
		'wm_099' => 'default',
		//-------------------------------------------------------------------------
		// overlay - ov
		'ov_001' => 'Overlay',
		'ov_002' => 'Overlay',
		'ov_003' => 'Overlay - overlays an image on the thumbnail, or overlays the thumbnail on another image.',
		'ov_004' => 'Arrange',
		'ov_005' => 'bring to front',
		'ov_006' => 'send to back',
		'ov_007' => 'Arrange - If set to \'bring to front\', overlay image will be set on top of your image (default). If set to \'send to back\', your image will be set on top of the overlay image.',
		'ov_008' => 'Opacity',
		'ov_009' => 'Margin',
		'ov_010' => 'Library',	
		'ov_099' => 'default',	
		//-------------------------------------------------------------------------
		// mask - ms
		'ms_001' => 'Mask',
		'ms_002' => 'Image mask',
		'ms_003' => 'Using the masks below you can created some really fantastic looking images',
		'ms_004' => 'Color',
		'ms_099' => 'default',	
		//-------------------------------------------------------------------------
		// image wizard - wz
		'wz_001' => 'Wizard',
		'wz_002' => 'Image wizard',
		'wz_003' => 'Image wizard - allows you to add some special effects like bevel, frames, drop shadow, borders, curved corners, and ellipse',
		'wz_004' => 'Bevel',
		'wz_005' => 'Bevel - to add a slightly raised or sunken effect to the image. The width of bevel is variable as are the colors for both the top+left and base+right shading.',
		'wz_006' => 'Frame',
		'wz_007' => 'Frame - a quite simple single color picture frame is drawn around the image and given the effect of being raised by a lighter and darker edge. With variables for light color, dark color and frame width.',
		'wz_008' => 'Shadow',
		'wz_009' => 'Drop Shadow - a shadow effect fades from two edges of the image.',
		'wz_010' => 'Border',
		'wz_011' => 'Curved border corner. Variables are used for the edge radius, the background color and border width.',
		'wz_012' => 'Corner',
		'wz_013' => 'Round corner - used to take the harshness away from simple rectangular image. Variables are used for the edge radius, the background color and the anti-alias width.',
		'wz_014' => 'Ellipse',
		'wz_015' => 'Ellipse - carving away the outer borders into the shape of an ellipse can work especially well on sites which use a more rounded design. Currently used one variable for background color.',
		'wz_099' => 'default',
		//-------------------------------------------------------------------------
		// bevel - be
		'be_001' => 'Bevel',
		'be_002' => 'Bevel',
		'be_003' => 'Width',	
		'be_004' => 'Light',
		'be_005' => 'top, left',
		'be_006' => 'Dark',
		'be_007' => 'bottom, right',
		//-------------------------------------------------------------------------
		// frame - fr
		'fr_001' => 'Frame',
		'fr_002' => 'Frame',
		'fr_003' => 'Border',	
		'fr_004' => 'border width',
		'fr_005' => 'Bevel',
		'fr_006' => 'bevel width',
		'fr_007' => 'Main',
		'fr_008' => 'main frame',
		'fr_009' => 'Bevel',
		'fr_010' => 'highlighted bevel',
		'fr_011' => 'Shadow',
		'fr_012' => 'shadow bevel',
		//-------------------------------------------------------------------------
		// drop shadow - ds
		'sh_001' => 'Shadow',
		'sh_002' => 'Drop shadow',
		'sh_003' => 'Width',	
		'sh_004' => 'Margin',
		'sh_005' => 'Angle',
		'sh_006' => 'Fade',
		'sh_007' => 'Color',
		'sh_008' => 'shadow color',
		//-------------------------------------------------------------------------
		// round edges - re
		'br_001' => 'Border',
		'br_002' => 'Rounded border',
		'br_003' => 'Width',	
		'br_004' => 'X-radius',
		'br_005' => 'Y-radius',
		'br_006' => 'Edge color',
		'br_007' => 'if width &gt; 0',
		'br_008' => 'Color',	
		//-------------------------------------------------------------------------
		// round corners - rc
		'rc_001' => 'Corner',
		'rc_002' => 'Rounded corner',		
		'rc_003' => 'X-radius',
		'rc_004' => 'Y-radius',	
		'rc_005' => 'Color',	
		//-------------------------------------------------------------------------
		// ellipse - el
		'el_001' => 'Ellipse',
		'el_002' => 'Ellipse',
		'el_003' => 'Color',	
		//-------------------------------------------------------------------------
		// toolbox settings - se
		'se_001' => 'Toolbox settings',
		'se_002' => 'Toolbox settings',
		'se_099' => 'Switch to section',	
		//-------------------------------------------------------------------------
		// error messages - er
		'er_001' => 'Error',
		'er_002' => 'No image selected - please select an image',
		'er_003' => 'Width is not a number',
		'er_004' => 'Height is not a number',
		'er_005' => 'Border is not a number',
		'er_006' => 'Horizontal space is not a number',
		'er_007' => 'Vertical space is not a number',
		'er_008' => 'Click OK to delete image',
		'er_009' => 'Renaming of thumbnails is not allowed! Please rename the main image if you like to rename the thumbnail image.',
		'er_010' => 'Click OK to rename image to',
		'er_011' => 'New name is either empty or has not changed!',
		'er_012' => 'Enlarging image is not allowed! Please check ENLARGE to allow enlargment of image.',
		'er_013' => 'invalid color code',
		'er_014' => 'Please enter new file name!',
		'er_015' => 'Please enter valid file name!',
		'er_016' => 'Thumbnailing not available! Please set thumbnail size in config file in order to enable thumbnailing.',
		'er_017' => 'No watermark image has been selected!',
		'er_018' => 'No mask has been selected!',
		'er_020' => 'No toolbox action was selected! Please try again...',
		'er_021' => 'Please click OK to upload image(s).',
		'er_022' => 'Uploading image - please wait...',
		'er_023' => 'No image has been selected or no file size has been checked.',
		'er_024' => 'File',
		'er_025' => 'already exists! Please click OK to overwrite file...',
		'er_026' => 'Please enter new file name!',
		'er_027' => 'Directory doesn\'t physically exist',
		'er_028' => 'An error occured while handling file upload. Please try again.',
		'er_029' => 'Wrong image file type',
		'er_030' => 'Delete failed! Please try again.',
		'er_031' => 'Overwrite',
		'er_032' => 'Filter setting not found',
		'er_033' => 'Toolbox setting not found',
		'er_034' => 'Top value is not possible! Max. value is',
		'er_035' => 'Left value is not possible! Max. value is',
		'er_036' => 'Crop dimension is larger than source dimension',
		'er_037' => 'Section not available in \"STANDALONE\" mode!',
		'er_038' => 'Full size preview only works for pictures larger than the preview size!',
		'er_040' => 'No overlay image has been selected!',
		'er_041' => 'Rename failed! Please try again.',
		'er_042' => 'Create directory failed! Please try again.',
		'er_043' => 'Enlarging is not allowed!',
		'er_044' => 'Error building image list!',
		//'er_099' => '',
	  ),
	  //-------------------------------------------------------------------------
	  // color picker
		'colorpicker'	=> array (
		'title' 		=> 'Color picker',
		'ok' 			=> 'OK',
		'cancel' 		=> 'Cancel',
	  ),
	  //-------------------------------------------------------------------------
	  // symbols
		'symbols'		=> array (
		'title' 		=> 'Symbols',
		'ok' 			=> 'OK',
		'cancel' 		=> 'Cancel',
	  ),
	  //-------------------------------------------------------------------------
	  // examples
		'examples'		=> array (
		'ex_001' 		=> 'Examples',
		'ex_002' 		=> 'iManager examples',
		'ex_003' 		=> 'Close',    
	  ),
	)
?>