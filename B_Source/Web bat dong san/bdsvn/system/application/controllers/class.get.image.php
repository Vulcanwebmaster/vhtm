<?php 
/*
 -------------------------------------------------------------------------
 Credits: Bit Repository
 URL: http://www.bitrepository.com/web-programming/php/download-image.html
 -------------------------------------------------------------------------
 */
class GetImage {

    var $source;
    var $save_to;
    var $set_extension;
    var $quality;
    var $new_name;
    function download($method = 'curl') {
        $info = @GetImageSize($this->source);
        $mime = $info['mime'];
        
        if (!$mime){
        	//exit('Could not obtain mime-type information. Make sure that the remote file is actually a valid image.' . (DEBUG ? '. URL: '.$this->source : ''));
			Logger::error('Could not obtain mime-type information. Make sure that the remote file is actually a valid image.' . (LOG_ERROR ? ('. URL: '. $this->source) : ''));
			return $this->source;
        }
            
            
        // What sort of image?
        $type = substr(strrchr($mime, '/'), 1);
        $ext = $type;
        switch ($type) {
            case 'jpeg':
                $image_create_func = 'ImageCreateFromJPEG';
                $image_save_func = 'ImageJPEG';
                $new_image_ext = 'jpg';
                
                // Best Quality: 100
                $quality = isSet($this->quality) ? $this->quality: 100;
                break;
                    
            case 'png':
                $image_create_func = 'ImageCreateFromPNG';
                $image_save_func = 'ImagePNG';
                $new_image_ext = 'png';
                
                // Compression Level: from 0  (no compression) to 9
                $quality = isSet($this->quality) ? $this->quality: 0;
                break;
                        
            case 'bmp':
                $image_create_func = 'ImageCreateFromBMP';
                $image_save_func = 'ImageBMP';
                $new_image_ext = 'bmp';
                break;
                        
            case 'gif':
                $image_create_func = 'ImageCreateFromGIF';
                $image_save_func = 'ImageGIF';
                $new_image_ext = 'gif';
                break;
                        
            case 'vnd.wap.wbmp':
                $image_create_func = 'ImageCreateFromWBMP';
                $image_save_func = 'ImageWBMP';
                $new_image_ext = 'bmp';
                break;
                        
            case 'xbm':
                $image_create_func = 'ImageCreateFromXBM';
                $image_save_func = 'ImageXBM';
                $new_image_ext = 'xbm';
                break;
                        
            default:
                $image_create_func = 'ImageCreateFromJPEG';
                $image_save_func = 'ImageJPEG';
                $new_image_ext = 'jpg';
         }
                
        if (isSet($this->set_extension)) {
        	
            $ext = strrchr($this->source, ".");
            $strlen = strlen($ext);
            $new_name = basename(substr($this->source, 0, -$strlen)).'.'.$new_image_ext;
			
        } else {
            $new_name = basename($this->source);
        }
		$ext = strrchr($new_name, "=");
		if(strlen($ext) >0 ){
			$new_name = substr($ext, 1) . '.' . $new_image_ext;
		}
		$new_name = date('YmdHis').'_'.$new_name;
        $save_to = $this->save_to.$new_name;
        
        if ($method == 'curl') {
            $save_image = $this->LoadImageCURL($save_to);
        } elseif ($method == 'gd') {
            $img = $image_create_func($this->source);
            
            if (isSet($quality)) {
                $save_image = $image_save_func($img, $save_to, $quality);
            } else {
                $save_image = $image_save_func($img, $save_to);
            }
        }
        
        return $new_name;
    }
            
    function LoadImageCURL($save_to) {
        if(function_exists('curl_init')){
        	$ch = curl_init($this->source);
	        $fp = fopen($save_to, "wb");
	        
	        // set URL and other appropriate options
	        $options = array(CURLOPT_FILE=>$fp, CURLOPT_HEADER=>0, CURLOPT_FOLLOWLOCATION=>1, CURLOPT_TIMEOUT=>60); // 1 minute timeout (should be enough)
	        
	        curl_setopt_array($ch, $options);
	        
	        $save = curl_exec($ch);
	        curl_close($ch);
	        fclose($fp);	
        }else{
			$contents = file_get_contents($this->source);

			$fp = fopen($save_to, 'wb');
			$save = fwrite($fp, $contents);
			fclose($fp); 
        }
        return $save;
    }
}
?>