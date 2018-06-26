<?php 

/**
 * summary
 */
class Uploadresize_helper
{
    function uploadImage($source_image,$width,$height,$new_image){

		$resize=array(

				'image_library'=>'gd2',
				'source_image'=>$source_image,
				'create_thumb'=>FALSE,
				'maintain_ratio'=>FALSE,
				'width'=>$width,
				'height'=>$height,
				'new_image'=>$new_image
			);

			$this->load->library('image_lib', $resize);
			$this->image_lib->resize();
			$nm_file = $source_image['file_name'];
			return $nm_file;
	}
   
}
	
?>