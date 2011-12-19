<?php 
class SSNivoSliderPage extends Page {

	static $db = array (
	'SliderWidth' => 'Text'
	,'SliderHeight' => 'Text'
		
	);
	
	static $has_many = array (
		'Sliders' => 'SSNivoSliderObject'
	);

	function getCMSFields()
	{

		$projectFields = parent::getCMSFields();

		$projectFields->addFieldToTab('Root.Content.Slider', new TextField('SliderWidth', 'SliderWidth'));
		$projectFields->addFieldToTab('Root.Content.Slider', new TextField('SliderHeight', 'SliderHeight'));
		$tablefield = new ComplexTableField(
		//$tablefield = new DataObjectManager(
			 $this,					// Controller
			 'Sliders',				// Source name
			 'SSNivoSliderObject',				// Source class
			 array(
			// 'ID' => 'ID',
	//		'Position' => 'Position',
			'SlideTitle' => 'Title',
	/*		'SlideDate' => 'Date',*/
			'ThumbnailLogo' => 'Thumbnail',
			'SlideLink' => 'Link'
		/*	'IsActive' => 'Status'*/
			 ),
			 'getRotatorCMSFields_forPopup'
		  );
		  
	//	$tablefield->removePermission("delete");
		$tablefield->setPermissions(array('show','edit','add')) ;
		$projectFields->addFieldToTab( 'Root.Content.Slider', $tablefield );
			
		
		return $projectFields;
	}

}

class SSNivoSliderPage_Controller extends Page_Controller {

	public function init() {
		parent::init();
		
		Requirements::javascript('https://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js'); 
		Requirements::javascript('SSNivoSlider/javascript/jquery.nivo.slider.pack.js'); 
		Requirements::css("SSNivoSlider/css/nivo-slider.css");
		Requirements::customScript('
		
		
		

$(window).load(function() {
	$("#slider").nivoSlider({
	animSpeed:600,	
	pauseTime:3500,
	keyboardNav:true,
	captionOpacity:0
	});
});




		
	');
	}
}
