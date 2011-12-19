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

		if (class_exists('DataObjectManager'))$a='DataObjectManager'; else $a='ComplexTableField';
		$tablefield = new $a(

		$this,					// Controller
			 'Sliders',				// Source name
			 'SSNivoSliderObject',				// Source class
		array(
			'SlideTitle' => 'Title',
			'ThumbnailLogo' => 'Thumbnail',
			'SlideLink' => 'Link'
		),
			 'getRotatorCMSFields_forPopup'
		);

		//	$tablefield->removePermission("delete");  //you might need this depending on the setup
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
