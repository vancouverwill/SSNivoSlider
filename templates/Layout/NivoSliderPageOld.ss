<h2>nivo slider page----------</h2>

<div id="HomePage">
	<div id="col1">&nbsp;
		<a href="#" title="Environmentally Responsible"><div id="environental">&nbsp;</div></a>
		<a href="#" title="Legacy"><div id="legacy">&nbsp;</div></a>
	</div>
	<div id="col2">
		<div id="wrapper">
		<div id="slider">
			<% control  Sliders %>
			<a href='$SlideLink' title="$SlideTitle"><img src="$SlideImage.URL" alt="$SlideTitle" /></a>
			<% end_control %>
		</div>
		</div>
	</div>
	<div id="col3">&nbsp;
		<a href="#" title="We support local produce"><div id="produce">&nbsp;</div></a>
		<a href="#" title="Our menus"><div id="menus">&nbsp;</div></a>
</div>
	<div id="bottom">&nbsp;
		<a href="#" title="Checkout our community"><div id="community">&nbsp;</div></a>
		<a href="#" title="How it all sorted"><div id="started">&nbsp;</div></a>
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