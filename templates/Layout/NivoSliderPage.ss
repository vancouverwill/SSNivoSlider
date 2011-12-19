<h2>nivo slider page----------</h2>

<div id="HomePage">
	
	<div id="col2">
		<div id="wrapper">
		<div id="slider">
			<% control  Sliders %>
			<a href='$SlideLink' title="$SlideTitle"><img src="$SlideImage.URL" alt="$SlideTitle" width="$Top.SliderWidth" height="$Top.SliderHeight"/></a>
			<% end_control %>
		</div>
		</div>
	</div>
	<div class="clear">&nbsp;</div>
</div>


<div class="typography">
	
	<% if Level(2) %>
	  	<% include BreadCrumbs %>
	<% end_if %>
		
		$Content
		$Form
		$PageComments
		
		<div id="leftContent">$leftContent</div>
		<div id="rightContent">$rightContent</div>
		<div class="clear">&nbsp;</div>
		<div id="bottomContent">$bottomContent</div>
</div>