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
		'im_001' => 'Bilder Manager',
		'im_002' => 'iManager',
		'im_003' => 'Menu',
		'im_004' => 'Willkommen',
		'im_005' => 'Einf&uuml;gen',
		'im_006' => 'Abbrechen',
		'im_007' => 'Einf&uuml;gen',		
		'im_008' => 'Bild einf&uuml;gen/ &auml;ndern',
		'im_009' => 'Eigenschaften',
		'im_010' => 'Bild- Eigenschaften',
		'im_011' => 'Bilder Toolbox',
		'im_013' => 'Popup',
		'im_014' => 'Image popup',
		'im_015' => '&Uuml;ber iManager',
		'im_016' => 'Bereich',				
		'im_096' => 'Bitte warten Sie...',
		'im_097' => 'klicken um Farbe zu &auml;ndern',
		'im_098' =>	'Bereich &ouml;ffnen',
		'im_099' => 'Bereich schlie&szlig;en',
		//-------------------------------------------------------------------------
		// insert/change screen - in	
		'in_001' => 'Bild einf&uuml;gen/ &auml;ndern',
		'in_002' => 'Library',
		'in_003' => 'W&auml;hle Bilder- Library',
		'in_004' => 'Bilder',
		'in_005' => 'Vorschau',
		'in_006' => 'Bild l&ouml;schen',
		'in_007' => 'Klicke f&uuml;r gr&ouml;&szlig;ere Ansicht',
		'in_008' => 'Bitte Bereich &ouml;ffnen um Bild hochzuladen/umbennen oder zu l&ouml;schen.',	
		'in_009' => 'Information',
		'in_010' => 'Popup',
		'in_013' => 'Erstelle einen Link um Bild in einem neuen Fenster zu &ouml;ffnen.',
		'in_014' => 'PopUp- Link entfernen',	
		'in_015' => 'Datei',	
		'in_016' => 'Umbennenen',
		'in_017' => 'Bild umbennenen',
		'in_018' => 'hochladen',
		'in_019' => 'Bild hochladen',	
		'in_020' => 'Gr&ouml;&szlig;e(n)',
		'in_021' => '&Uuml;berpr&uuml;fen Sie die gew&uuml;nschte(n) Gr&ouml;&szlig;e(n) die beim hochladen erstellt werden sollen',
		'in_022' => 'Original',
		'in_023' => 'Bild wird zugeschnitten',
		'in_024' => 'L&ouml;schen',
		'in_025' => 'Ordner',
		'in_026' => 'klicken um Ordner zu erstellen',
		'in_027' => 'Erstelle einen Ordner',
		'in_028' => 'Breite',
		'in_029' => 'H&ouml;he',
		'in_030' => 'Typ',
		'in_031' => 'Gr&ouml;&szlig;e',
		'in_032' => 'Name',
		'in_033' => 'Erstellt',
		'in_034' => 'ge&auml;ndert',
		'in_035' => 'Bild info',
		'in_036' => 'klicke auf Bild um Fenster zu schlie&szlig;en',	
		'in_037' => 'Klicke um Bilderansicht zu &auml;ndern',		
		'in_099' => 'default',	
		//-------------------------------------------------------------------------
		// properties, attributes - at
		'at_001' => 'Bildattribute',
		'at_002' => 'Quelle',
		'at_003' => 'Titel',
		'at_004' => 'TITEL - zeigt Bildbeschreibung beim &uuml;berfahren mit der Mouse',
		'at_005' => 'Beschreibung',
		'at_006' => 'ALT -  Textbeschreibung, ersetzt das Bild, wenn es nicht angezeigt werden kann',
		'at_007' => 'Style',
		'at_008' => 'Bitte versichern Sie sich, da&szlig; das gew&auml;hlte Stlye in ihrem Stylesheet existiert!',
		'at_009' => 'CSS-Style',	
		'at_010' => 'Attribute',
		'at_011' => 'Das \'align\', \'border\', \'hspace\', and \'vspace\' Attribut des Bild- Elementes wird in XHTML 1.0 Strict DTD nicht unterst&uuml;tzt. Bitte benutzen Sie CSS-Styles stattdessen.',
		'at_012' => 'Align',	
		'at_013' => 'Vorgabe',
		'at_014' => 'links',
		'at_015' => 'rechts',
		'at_016' => 'oben',
		'at_017' => 'mitte',
		'at_018' => 'unten',
		'at_019' => 'absmiddle',
		'at_020' => 'texttop',
		'at_021' => 'baseline',		
		'at_022' => 'Gr&ouml;&szlig;e',
		'at_023' => 'Breite',
		'at_024' => 'H&ouml;he',
		'at_025' => 'Rahmen',
		'at_026' => 'V-space',
		'at_027' => 'H-space',
		'at_028' => 'Vorschau',	
		'at_029' => 'Sonderzeichen in Textfeld einf&uuml;gen',
		'at_030' => 'Sonderzeichen in Beschreibungsfeld einf&uuml;gen',
		'at_031' => 'Bilderdimensionen auf vorgegebene Werte zur&uuml;cksetzen',
		'at_032' => 'Beschriftung',
		'at_033' => 'angew&auml;hlt: Setze Beschriftung / abgew&auml;hlt: Keine Beschriftung oder entferne Beschriftung',
		'at_034' => 'Setze Bildbeschriftung',
		'at_099' => 'Standard',	
		//-------------------------------------------------------------------------
		// toolbox - tb
		'tb_001' => 'Ausgabe',
		'tb_002' => 'Gr&ouml;&szlig;e &auml;ndern',
		'tb_003' => 'Zuschneiden',
		'tb_004' => 'Orientierung',
		'tb_005' => 'Filter',
		//'tb_006' => 'Dynamic text',
		'tb_007' => 'Wasserzeichen',
		'tb_008' => 'Maske',
		'tb_009' => 'Wizard',
		'tb_010' => 'Aktuelle Einstellungen anzeigen',	
		'tb_011' => 'Quelle',
		'tb_012' => 'Information',
		'tb_013' => 'Ziel',
		'tb_014' => 'Datei',
		'tb_015' => 'Wenn angew&auml;hlt (vorgegebene Einstellung), wird das Thumbnail in die Datei geschrieben. Ansonsten wird es dynamisch erstellt.',
		'tb_016' => '&Uuml;berschreiben',		
		'tb_017' => 'Wenn angew&auml;hlt, werden Toolbox&auml;nderungen in das Bild geschrieben - Originalbild wird &uuml;berschrieben! Wenn abgew&auml;hlt, werden die &Aumlnderungen in einem neuen Bild gespeichert.',
		'tb_018' => 'Format',
		'tb_019' => 'Bitte Bildformat w&auml;hlen - (standard: jpeg)',
		'tb_020' => 'Qualit&auml;t',
		'tb_021' => 'Thumbnail',
		'tb_022' => 'Wenn angew&auml;hlt, wird vorhandenes Thumbnail aktualiSiert. Ansonsten wird ein neues Thumbnail erstellt!',
		'tb_023' => 'aktualiSieren',
		'tb_024' => 'Vorschau',
		'tb_025' => 'Klicke um eine Vollansicht zu bekommen',
		'tb_026' => '�berlappung/Unterlage',
		'tb_096' => 'Wende &Auml;nderungen auf Bild an - aktualiSiere Vorschau',
		'tb_097' => 'SSpeichere Toolbox&auml;nderungen - aktualiSiere Bilddatei',	
		'tb_098' => 'aktualiSiere',
		'tb_099' => 'Akkzeptieren',	
		//-------------------------------------------------------------------------
		// resize - rs
		'rs_001' => 'Gr&ouml;&szlig;e &auml;ndern',
		'rs_002' => 'Gr&ouml;&szlig;e &auml;ndern',	
		'rs_003' => 'Breite',
		'rs_004' => 'H&ouml;he',
		'rs_005' => 'Dimensionen wieder herstellen',
		'rs_006' => 'Dimensionen',
		'rs_007' => 'Beibehalten',
		'rs_008' => 'Behalte Seitenverh&auml;ltnis bei - Bildproportionen werden NICHT ge&auml;ndert.',
		'rs_009' => 'Behalte Seitenverh&auml;ltnis bei',
		'rs_010' => 'Ignoriere',
		'rs_011' => 'Ignoriere Proportionen - Strecke Bild auf gew&uuml;schte H&ouml;he/Breite - Dies kann zu einer Verzerrung des Bildes f&uuml;hren.',
		'rs_012' => 'Seitenverh&auml;ltnis ignorieren',
		'rs_013' => 'erzwinge',
		'rs_014' => 'erzwinge Seitenverh&auml;ltnis',
		'rs_015' => 'erzwinge Seitenverh&auml;ltnis - beh&auml;lt Proportionen bei und erstell ein angepasstes Thumbnail!',
		'rs_016' => 'Farbe',	
		'rs_017' => 'Zuschneiden',
		'rs_018' => 'Auf neue Dimensionen zuschneiden',
		'rs_019' => 'Zuschneiden - Schneidet gr&ouml;&szlig;ere Bereiche ab',
		'rs_020' => 'Vergr&ouml;&szlig;ern',
		'rs_021' => 'vergr&ouml;&szligern erlauben',
		'rs_022' => 'vergr&ouml;&szligern von Bildern erlauben - dies kann das Bild verzerren!',
		'rs_099' => 'standard',
		//-------------------------------------------------------------------------
		// crop interface - ci
		'ci_001' => 'Interface verkleinern',
		'ci_002' => 'Benutze \'shift\' oder \'ctrl\' um den Bereich zu beschneiden',
		'ci_003' => 'Interface wieder herstellen',
		'ci_004' => 'Voransicht des Beschnittenen Bereichs',
		'ci_005' => 'Interface schlie&szlig;en',		
		//-------------------------------------------------------------------------
		// crop - cr
		'cr_001' => 'Zuschneiden',
		'cr_002' => 'Zuschneiden',
		'cr_003' => '&Ouml;ffne Beschneidungsinterface',
		'cr_004' => 'schlie&szlig;e Beschneidungsinterface',
		'cr_005' => '&Ouml;ffne Beschneidungsinterface - Entweder geben Sie die Werte per Hand ein oder benutzen die voreingestelten Werte.Wenn Sie mit dem Beschneidungsinterface arbeiten, benutzen Sie \'shift\' oder \'ctrl\' um die Gr&ouml;&szlig;e des Beschneidungsinterface zu &auml;ndern',
		'cr_006' => 'Breite',	
		'cr_007' => 'H&ouml;he',	
		'cr_008' => 'Anfang',	
		'cr_009' => 'Links',	
		'cr_010' => 'Verh&auml;ltnis',
		'cr_011' => 'Setze Beschneidungsbereichsverh&auml;ltnis (standard: 4 : 3)',
		'cr_012' => 'kein',	
		'cr_099' => 'standard',
		//-------------------------------------------------------------------------
		// orientation - or
		'or_001' => 'Orientierung',
		'or_002' => 'Orientierung',
		'or_003' => 'Benutze \'spiegeln\' oder \'drehen\' um die Bildorientierung zu &Auml;ndern',	
		'or_004' => 'Spiegeln',
		'or_005' => 'Horizontal',
		'or_006' => 'Vertical',
		'or_007' => 'beides',
		'or_008' => 'drehen',
		'or_009' => 'Wenn vorhanden in  \'EXIF\', wird die Orientierung der Camera genutzt',
		'or_010' => 'Winkel',
		'or_011' => 'Drehen um Winkel: Drehung des Winkels in Grad; Positiv = gegen den Uhrzeigersinn, negative = mit dem Uhrzeigersinn',	
		'or_012' => 'Auto',
		'or_013' => 'Auto drehen: Wenn vorhanden in  \'EXIF\', wird die Orientierung der Camera genutzt. Kann auch auf +180&deg; oder -180&deg; f&uuml;r Landschaften, oder +90&deg; oder -90&deg; f&uuml;r Portraits gesetzt werden. Positive Werte = gegen den Uhrzeigersinn, negative = mit dem Uhrzeigersinn.',
		'or_014' => '+ 90&deg;',	
		'or_015' => '- 90&deg;',	
		'or_016' => '+ 180&deg;',	
		'or_017' => '- 180&deg;',	
		'or_018' => 'exif info',	
		'or_019' => 'Farbe',
		'or_020' => 'Portrait',	
		'or_021' => 'Landschaft',
		'or_022' => 'Camera',		
		'or_099' => 'standard',	
		//-------------------------------------------------------------------------
		// colorize - co
		'co_001' => 'Filter',
		'co_002' => 'Filter',
		'co_003' => 'Filter - Filter auf Bild anwenden',
		'co_004' => 'Effekte',
		'co_005' => 'Effekte - Farben auf Bild anwenden',
		'co_006' => 'Ausbessern',
		'co_007' => 'Ausbessern - Bildqualit&auml;t verbessern',
		//-------------------------------------------------------------------------
		// effects - ef
		'ef_001' => 'Effekte',
		'ef_002' => 'Effekte',
		'ef_003' => 'Graustufen',
		'ef_099' => 'standard',
		'ef_004' => 'Negativ',
		'ef_005' => 'S&amp;W',
		'ef_006' => 'Sepia',
		'ef_007' => 'Sepia - Sepiaf&auml;rbung wird von Photographen verwendet um eine w&auml;rmere T&ouml;nung zu erhalten. Sepiaf&auml;rbung gibt dem Bild ein gealtertes Aussehen.',	
		'ef_008' => 'Intensit&auml;t',		
		'ef_009' => 'Farbe',
		'ef_010' => 'Farbe - Bild einf&auml;rben',	
		'ef_011' => 'Intensit&auml;t',	
		//-------------------------------------------------------------------------
		// touchup - to
		'to_001' => 'Ausbessern',
		'to_002' => 'Ausbessern',	
		'to_003' => 'Gamma',	
		'to_004' => 'S&auml;ttigung',	
		'to_005' => 'Maske',
		'to_006' => 'Sch&auml;rfungsfilter verst&auml;rken die Kanten, oder den Unterschied zwischen benachtbarten hellen und dunklen Punkten in einem Bild. Der Unsch&auml;rfefilter hat Einstellungen die nur die Kanten beeinflu&uuml;ene, und die kontrastarmen Bereiche ausschlie&szlig;t.',
		'to_007' => 'Unsch&auml;rfe Maske',
		'to_008' => 'Radius',	
		'to_009' => 'Radius kontrolliert wie weit die Eckenkanten werden, Radius = 1.0 ist ein guter Standardwert, Werte zwischen 0.6 und 2.0 sind oft n�tzlich.',
		'to_010' => 'Menge',	
		'to_011' => 'Menge ist wie eine Lautst&auml;rkeregelung, wenn Sie die Kantendifferenz erh&ouml;hen (um wieviel heller/ dunkler die Kantenumrandung wird). Menge  im Grad der Sch&auml;rfung, aber es beeinflusst nicht die Breite der Kante. Menge hat einen gro&szlig;en Effekt, und Werte von 80 bis 120 sind normalerweise gebr&auml;uchlich, wenn der Radius nicht zu gro&szlig; ist.',
		'to_012' => 'Schwellenwert',	
		'to_013' => 'Der Schwellenwert bestimmt wie weit benachbarte Farbwerte auseinander liegen m�ssen (Werte von 0 bis 255) bevor der Filter etwas an den Kanten &auml;ndert. Niedrige Werte sollen mehr sch&auml;rfen, weil weniger Bereiche ausgeschlossen werden. H&ouml;here Werte schlie&szlig;en Bereiche mit geringem Kontrast aus.',
		'to_014' => 'Level',
		'to_015' => 'Auto Kontrast',
		'to_016' => 'Level - Diese Funktion ist &auml;hnlich zu der Auto- Kontrast Funktion in Adobe Photoshop',
		'to_017' => 'Kanal',
		//'to_018' => '',
		'to_019' => 'alle',
		'to_020' => 'Rot',
		'to_021' => 'Gr&uuml;n',
		'to_022' => 'Blau',
		'to_023' => 'Min.',
		//'to_024' => '',
		'to_025' => 'Max.',
		//'to_026' => '',
		'to_027' => 'auto',
		'to_028' => 'Verwischen',
		'to_029' => 'Verwischen macht den Focus des Bildes weicher.',
		'to_030' => 'Balance',
		'to_031' => 'Wei&szlig; balance',
		'to_032' => 'Balance - Der Filter versucht die Helligkeit beizubehalten, so da&szlig; theoretisch jeder Grauton verwendet werden kann.',
		'to_098' => 'Hintergrund - nur bei jpeg',
		'to_099' => 'standard',	
		//-------------------------------------------------------------------------
		// watermark - wm
		'wm_001' => 'Wasserzeichen',
		'wm_002' => 'Wasserzeichen',
		'wm_003' => 'F&uuml;ge \'Text\' oder \'ein Bild\' ins Bild ein',
		'wm_004' => 'Typ',
		'wm_005' => 'Text',
		'wm_006' => 'Bild',
		'wm_007' => 'W&auml;hlen Sie den Typ des Wasserzeichens der auf das Bild angewendet wird',
		'wm_008' => 'Text',
		'wm_009' => 'Geben Sie den Wasserzeichentext ein, der auf das Bild angewendet wird',
		'wm_010' => 'Klicken um Sonderzeichen in das Textfeld einzuf&uuml;gen',
		'wm_011' => 'Farbe',	
		'wm_012' => 'Schriftart',
		'wm_013' => 'System',
		'wm_014' => 'true type',
		'wm_015' => 'W&auml;hlen Sie entweder eine vorinstallierte Systemschrift oder eine true type Schrift f&uuml;r mehr Schriftvariationen',
		'wm_016' => 'Schrift',
		'wm_017' => 'Schriftgr&ouml;&szlig',
		'wm_018' => 'Winkel',
		'wm_019' => 'Deckkraft',
		'wm_020' => 'Abstand',
		'wm_021' => 'Ausrichtung',
		'wm_022' => 'oben-links',
		'wm_023' => 'oben',
		'wm_024' => 'oben- rechts',
		'wm_025' => 'links',
		'wm_026' => 'rechts',
		'wm_027' => 'unten- links',
		'wm_028' => 'unten',
		'wm_029' => 'unten- rechts',
		'wm_030' => 'kacheln',
		'wm_031' => 'Textfarbe',	
		'wm_032' => 'Schriftart',
		'wm_099' => 'standard',
		//-------------------------------------------------------------------------
		// overlay - ov
		'ov_001' => '�berlappung',
		'ov_002' => '�berlappung',
		'ov_003' => 'Overlay - overlays an image on the thumbnail, or overlays the thumbnail on another image.',
		'ov_004' => 'Arrangieren',
		'ov_005' => 'Nach vorne bringen',
		'ov_006' => 'nach hinten senden',
		'ov_007' => 'Arrange - If set to \'bring to front\', overlay image will be set on top of your image (default). If set to \'send to back\', your image will be set on top of the overlay image.',
		'ov_008' => 'Deckkraft',
		'ov_009' => 'Abstand',
		'ov_010' => 'Library',	
		'ov_099' => 'standard',	
		//-------------------------------------------------------------------------
		// mask - ms
		'ms_001' => 'Maske',
		'ms_002' => 'Bildmaske',
		'ms_003' => 'Mit den unteren Masken kann man fantastische Bilder erzeugen',
		'ms_004' => 'Farbe',
		'ms_099' => 'Standard',	
		//-------------------------------------------------------------------------
		// image wizard - wz
		'wz_001' => 'Wizard',
		'wz_002' => 'Bilder wizard',
		'wz_003' => 'Bilder wizard - erlaubt das hinzuf&uuml;gen einiger Effekte wie Bevel, Rahmen, Schlagschatten, Rahmen, gekr&uuml;te Ecken, und Ellipsen',
		'wz_004' => 'Bevel',
		'wz_005' => 'Bevel - um einen leicht erhabenen oder abgesenkten Effekt zum Bild hinzuzuf&uuml;gen. Die Breite des Bevels ist variabel wie die Farben f�r den Schatten oben- links bzw. unten rechts.',
		'wz_006' => 'Rahmen',
		'wz_007' => 'Rahmen - ein einfacher, einfarbiger Rahmen wird um das Bild gezeichnet und bekommt den Effekt von einer helleren und einer dunkleren Kante erh&ouml;ht zu werden. Mit Variablen f�r Lichtfarbe, dunkle Farbe und Rahmenbreite.',
		'wz_008' => 'Schatten',
		'wz_009' => 'Schlagschatten - Ein Schatteneffekt, der von zwei Kanten des Bildes aus verblasst.',
		'wz_010' => 'Umrahmung',
		'wz_011' => 'Abgerundete Umrahmung. Variablen werden benutzt f�r den Kantenradius, die Hintergrundfarbe und Umrandungsdicke.',
		'wz_012' => 'Ecken',
		'wz_013' => 'Runde Ecken - Nimmt die H&auml;rte aus einem rechteckingen Bild. Variablen sind f�r den Kantenradius, die Hintergrundfarbe und die Anti- Alias Breite.',
		'wz_014' => 'Ellipse',
		'wz_015' => 'Ellipse - schneidet die &auml;u&szlig;ere Umrandung in die Form einer Ellipse. Besonders gut f�r Seiten mit einem runden Design. Im Moment wird nur die Variabel f�r die Hintergrundfarbe unterst�tzt.',
		'wz_099' => 'default',
		//-------------------------------------------------------------------------
		// bevel - be
		'be_001' => 'Bevel',
		'be_002' => 'Bevel',
		'be_003' => 'Breite',	
		'be_004' => 'Licht',
		'be_005' => 'oben, links',
		'be_006' => 'Dunkel',
		'be_007' => 'unten, rechts',
		//-------------------------------------------------------------------------
		// frame - fr
		'fr_001' => 'Rahmen',
		'fr_002' => 'Rahmen',
		'fr_003' => 'Umrandung',	
		'fr_004' => 'Umrandungsbreite',
		'fr_005' => 'Bevel',
		'fr_006' => 'Bevelbreite',
		'fr_007' => 'Haupt',
		'fr_008' => 'Hauptrahmen',
		'fr_009' => 'Bevel',
		'fr_010' => 'hervorgehobener Bevel',
		'fr_011' => 'Schatten',
		'fr_012' => 'Schattenbevel',
		//-------------------------------------------------------------------------
		// drop shadow - ds
		'sh_001' => 'Schatten',
		'sh_002' => 'Schlagschatten',
		'sh_003' => 'Breite',	
		'sh_004' => 'Abstand',
		'sh_005' => 'Winkel',
		'sh_006' => 'Verblassen',
		'sh_007' => 'Farbe',
		'sh_008' => 'Schattenfarbe',
		//-------------------------------------------------------------------------
		// round edges - re
		'br_001' => 'Umrandung',
		'br_002' => 'Abgerundete Umrahmung',
		'br_003' => 'Breite',	
		'br_004' => 'X-Radius',
		'br_005' => 'Y-Radius',
		'br_006' => 'Eckenfarbe',
		'br_007' => 'wenn Breite  &gt; 0',
		'br_008' => 'Farbe',	
		//-------------------------------------------------------------------------
		// round corners - rc
		'rc_001' => 'Ecken',
		'rc_002' => 'runde Ecken',		
		'rc_003' => 'X-radius',
		'rc_004' => 'Y-radius',	
		'rc_005' => 'Farbe',	
		//-------------------------------------------------------------------------
		// ellipse - el
		'el_001' => 'Ellipse',
		'el_002' => 'Ellipse',
		'el_003' => 'Farbe',	
		//-------------------------------------------------------------------------
		// toolbox settings - se
		'se_001' => 'Toolbox Einstellungen',
		'se_002' => 'Toolbox Einstellung',
		'se_099' => 'Zum Bereich wechseln',	
		//-------------------------------------------------------------------------
		// error messages - er
		'er_001' => 'Fehler',
		'er_002' => 'Kein Bild gew�hlt - bitte w�hlen Sie ein Bild aus',
		'er_003' => 'Breite ist keine Zahl',
		'er_004' => 'H&ouml;he ist keine Zahl',
		'er_005' => 'Umrandung ist keine Zahl',
		'er_006' => 'horizontaler Abstand ist keine Zahl',
		'er_007' => 'verticaler Abstand ist keine Zahl',
		'er_008' => 'Klicke OK um Bild zu l&ouml;schen',
		'er_009' => 'Umbennenen von Thumbnails ist nicht erlaubt! Bitte bennenen Sie das Hauptbild um, um das Thumbnail umzubenennen.',
		'er_010' => 'Klicke OK um Bild umzubennenen in',
		'er_011' => 'Neuer Name ist leer oder nicht ge&auml;ndert!',
		'er_012' => 'Bild vergr��ern ist nicht erlaubt! Bitte w�hlen Sie VERGR��ERN aus um es zu erlauben.',
		'er_013' => 'ung�ltiger Farbcode',
		'er_014' => 'Bitte neuen Dateinamen eingeben!',
		'er_015' => 'Bitte g�ltigen Dateinamen eingeben!',
		'er_016' => 'Thumbnailerstellung nicht verf�gbar! Bitte setzen Sie die Thumbnailgr��e in der Konfigurationsdatei um die Thumbnailerstellung zu aktivieren.',
		'er_017' => 'Es wurde kein Wasserzeichen- Bild ausgew�hlt!',
		'er_018' => 'Es wurde keine Maske ausgew�hlt!',
		'er_020' => 'Es wurde keine Toolbox- Aktion gew�hlt! Bitte versuchen Sie es erneut...',
		'er_021' => 'Bitte klicken Sie OK um Bild(er) hochzuladen.',
		'er_022' => 'Bild wird hochgeladen - bitte warten Sie...',
		'er_023' => 'Es wurde kein Bild oder Dategr&ouml;&szlig;e ausgew�hlt.',
		'er_024' => 'Datei',
		'er_025' => 'schon vorhanden! Bitte klicken Sie OK um die Datei zu �berschreiben...',
		'er_026' => 'Bitte geben Sie einen neuen Dateinamen ein!',
		'er_027' => 'Ordner existiert nicht',
		'er_028' => 'Ein Fehler trat beim Upload auf. Bitte versuchen Sie es erneut.',
		'er_029' => 'Falscher Bildtyp',
		'er_030' => 'L�schung fehlgeschlagen! Bitte versuchen Sie es erneut.',
		'er_031' => '�berschreiben',
		'er_032' => 'Filtereinstellungen nicht gefunden',
		'er_033' => 'Toolboxeinstellungen nicht gefunden',
		'er_034' => 'Oberer Wert ist nicht m�glich! Max. Wert ist',
		'er_035' => 'Linker Wert ist nicht m�glich! Max. Wert ist',
		'er_036' => 'Beschneidungsdimensionen sind gr��er als die Quelldimensionen',
		'er_037' => 'Bereich ist im \"STANDALONE\" mode nicht verf�gbar!',
		'er_038' => 'Vorschau in Vollgr��e funktioniert nur mit Bildern die gr��er als die Vorschaugr��e sind!',
		'er_040' => 'Kein �berlagerungsbild wurde gew&�hlt!',
		'er_041' => 'Umbenennen fehlgeschlagen! Bitte versuchen Sie es erneut.',
		'er_042' => 'Ordner erstellen fehlgeschlagen! Bitte versuchen Sie es erneut.',
		'er_043' => 'Vergr��ern ist nicht erlaubt!',
		'er_044' => 'Fehler beim erstellen der Bilderliste!',
		//'er_099' => '',
	  ),
	  //-------------------------------------------------------------------------
	  // color picker
		'colorpicker'	=> array (
		'title' 		=> 'Farbw&auml;hler',
		'ok' 			=> 'OK',
		'cancel' 		=> 'Abbrechen',
	  ),
	  //-------------------------------------------------------------------------
	  // symbols
		'symbols'		=> array (
		'title' 		=> 'Symbole',
		'ok' 			=> 'OK',
		'cancel' 		=> 'Abbrechen',
	  ),
	  //-------------------------------------------------------------------------
	  // examples
		'examples'		=> array (
		'ex_001' 		=> 'Beispiele',
		'ex_002' 		=> 'iManager Beispiele',
		'ex_003' 		=> 'schlie&szlig;en',    
	  ),
	)
?>