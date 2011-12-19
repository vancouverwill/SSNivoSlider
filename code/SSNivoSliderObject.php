<?php 
class SSNivoSliderObject extends DataObject
{
	static $db = array (
		'Position' => "Enum('1, 2, 3, 4, 5, 6')"
		,'SlideTitle' => 'Text'
		//,'SlideDescription' => 'Text'
		//,'SlideDate' => 'Date'
		,'SlideLink' => 'Text'
		//, 'Status' => 'Text'
		 
	);
	
   
     static $has_one = array(
	 'SSNivoSliderPage' => 'SSNivoSliderPage'
		,'SlideImage' => 'Image'
   );
	
 	static $has_many = array(

	);

	

	
	public function getRotatorCMSFields_forPopup()
	{
		return new FieldSet(
	/*	new DropdownField('Position', 
				'Position', 
				Dataobject::get('HomePaNivoSliderPager', '', $default_sort = "ID ASC")
				->toDropdownMap("Position", "Position"))*/
	/*		new DropdownField('Position','Position',singleton('HomePageRotator')->dbObject('Position')->enumValues())		*/
			new TextField('SlideTitle', 'Slide Title')
			//,new TextareaField('SlideDescription', 'Slide Description')
			,new TextField('SlideLink', 'Slide Link')
	/*		,new DateField('SlideDate', 'Date')*/
			//, new ImageField('SlideThumb',  $title = "Upload the thumbnail",null, null, null,"homepage_rotator/")
			
			, new ImageField('SlideImage',  $title = "Upload the main image",null, null, null,"nivo_slider/")
			
		//, new FileUploadField('SlideImage',  $title = "Upload the main image",null, null, null,"nivo_slider/")
			
	/*		, new OptionsetField($name = "Status",
					   $title = "Status",
					   $source = array(
						  "active" => "Active",
						  "inactive" => "Inactive"
					   ),
					   "Status"
					)*/
		);
	}
	
		function ThumbnailLogo() {
		$Image = $this->SlideImage();
		if ( $Image ) {
			return $Image->CMSThumbnail();
		} else {
			return null;
		}
	}
	
   
 }
 
 /*class NivoSliderObject_Controller extends Controller	{


}*/

