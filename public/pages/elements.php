<?php

	$t = function ($value) { print $value; };
	$getTabs = function($uTabsAutomaticBuilder,$className = "") { ?><div data-element="utabs" class="<?php print $className ?>"><!--
			<?php 
				$i = 0;
				$uId = uniqid();
				foreach ($uTabsAutomaticBuilder as $title => $content):
				$i++;
			?>
				--><section id="tab-<?php print $uId; ?>-<?php print $i ?>" data-label="<?php print $title ?>"><?php print $content ?></section><!--
			<?php endforeach; ?>
		--></div><?php };
	
	$getAccordion = function($accordionAutomaticBuilder,$className = "") { ?><div data-element="accordion" class="<?php print $className ?>"><!--
			<?php 
				foreach ($accordionAutomaticBuilder as $title => $content):
			?>
				--><section <?php if ($title[0] == "*"): ?>data-opened="true" <?php endif; ?>data-label="<?php print $title[0] == "*"?substr($title,1):$title; ?>"><?php print $content ?></section><!--
			<?php endforeach; ?>
		--></div><?php };
?>
<header>
	<h1>Sambal</h1>
	<h2>A lightweight and modular front-end framework<br />combined with less for a cleaner html</h2>
</header>
<section class="introduction">
	<div>
		<h1>Features</h1>
		<section><!--
			--><div>
					<img src="/static/icon_less.svg" alt="LESS" height="140" width="200">
					<h2>LESS</h2>
					<p>Sambal is developed in <a href="http://lesscss.org">LESS</a> to write well-structured, extendable code which is easy to maintain.</p>
			</div><!--
			--><div>
					<img src="/static/icon_components.svg" alt="Components" height="140" width="200">
					<h2>Components</h2>
					<p>A collection of small, responsive components using consistent and conflict-free naming conventions.</p>
			</div><!--
			--><div>
					<img src="/static/icon_themes.svg" alt="Themes" height="140" width="200">
					<h2>Customizer</h2>
					<p>Sambal's very basic style can be extended with themes and is easy to customize to create your own look.</p>
			</div><!--
			--><div>
					<img src="/static/icon_responsive.svg" alt="Responsive" height="140" width="200">
					<h2>Responsive</h2>
					<p>With a mobile-first approach Sambal provides a consistent experience from phones and tablets to desktops.</p>
			</div><!--
		--></section>
	</div>
</section>
<div class="interlude" id="composition-ultra">
	<h1>Composition: fast prototyping elements</h1>
</div>
<h1 class="line-title">Composition Two One</h1>
<section class="composition-two-one content">
	<div>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut eu eros nec dui volutpat consequat in in lectus. Pellentesque interdum elementum volutpat. Donec volutpat purus quis massa interdum placerat. Proin dolor enim, congue nec pharetra mollis, pulvinar in eros. Vestibulum ultrices quam nec magna consequat elementum. Nulla nisl mi, sodales at dui varius, placerat pretium dui. Praesent eget ipsum consequat, imperdiet lorem vel, vulputate turpis. Aliquam turpis justo, consequat non mollis in, faucibus pharetra mauris. Fusce ac hendrerit mauris, eu feugiat lectus. Quisque tellus tellus, tincidunt ac pharetra eget, volutpat eget eros. Aliquam erat volutpat. Fusce sit amet sapien sapien. Vivamus quis malesuada ipsum. Proin mattis tellus pharetra, bibendum velit vitae, placerat leo.</p>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut eu eros nec dui volutpat consequat in in lectus. Pellentesque interdum elementum volutpat. Donec volutpat purus quis massa interdum placerat. Proin dolor enim, congue nec pharetra mollis, pulvinar in eros. Vestibulum ultrices quam nec magna consequat elementum. Nulla nisl mi, sodales at dui varius, placerat pretium dui. Praesent eget ipsum consequat, imperdiet lorem vel, vulputate turpis.</p>
	</div><!-- 
	--><div>
		<img src="/themes/sambal/static/office1.jpg" />
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut eu eros nec dui volutpat consequat in in lectus. Pellentesque interdum elementum volutpat.</p>
	</div>
</section>
<section class="code">
	<h1>Html class</h1>
	<p>.composition-two-one</p>
	<h1>Less Mixin</h1>
	<p>.composition("two.one")</p>
</section>
<h1 class="line-title">Composition One Two</h1>
<section class="composition-one-two content">
	<div>
		<img src="/themes/sambal/static/office1.jpg" />
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut eu eros nec dui volutpat consequat in in lectus. Pellentesque interdum elementum volutpat.</p>
	</div><!--
	--><div>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut eu eros nec dui volutpat consequat in in lectus. Pellentesque interdum elementum volutpat. Donec volutpat purus quis massa interdum placerat. Proin dolor enim, congue nec pharetra mollis, pulvinar in eros. Vestibulum ultrices quam nec magna consequat elementum. Nulla nisl mi, sodales at dui varius, placerat pretium dui. Praesent eget ipsum consequat, imperdiet lorem vel, vulputate turpis. Aliquam turpis justo, consequat non mollis in, faucibus pharetra mauris. Fusce ac hendrerit mauris, eu feugiat lectus. Quisque tellus tellus, tincidunt ac pharetra eget, volutpat eget eros. Aliquam erat volutpat. Fusce sit amet sapien sapien. Vivamus quis malesuada ipsum. Proin mattis tellus pharetra, bibendum velit vitae, placerat leo.</p>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut eu eros nec dui volutpat consequat in in lectus. Pellentesque interdum elementum volutpat. Donec volutpat purus quis massa interdum placerat. Proin dolor enim, congue nec pharetra mollis, pulvinar in eros. Vestibulum ultrices quam nec magna consequat elementum. Nulla nisl mi, sodales at dui varius, placerat pretium dui. Praesent eget ipsum consequat, imperdiet lorem vel, vulputate turpis.</p>
	</div>
</section>
<section class="code">
	<h1>Html class</h1>
	<p>.composition-one-two</p>
	<h1>Less Mixin</h1>
	<p>.composition("one.two")</p>
</section>
<h1 class="line-title">Composition Three One</h1>
<section class="composition-three-one content">
	<div>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut eu eros nec dui volutpat consequat in in lectus. Pellentesque interdum elementum volutpat. Donec volutpat purus quis massa interdum placerat. Proin dolor enim, congue nec pharetra mollis, pulvinar in eros. Vestibulum ultrices quam nec magna consequat elementum. Nulla nisl mi, sodales at dui varius, placerat pretium dui. Praesent eget ipsum consequat, imperdiet lorem vel, vulputate turpis. Aliquam turpis justo, consequat non mollis in, faucibus pharetra mauris. Fusce ac hendrerit mauris, eu feugiat lectus. Quisque tellus tellus, tincidunt ac pharetra eget, volutpat eget eros. Aliquam erat volutpat. Fusce sit amet sapien sapien. Vivamus quis malesuada ipsum. Proin mattis tellus pharetra, bibendum velit vitae, placerat leo.</p>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut eu eros nec dui volutpat consequat in in lectus. Pellentesque interdum elementum volutpat. Donec volutpat purus quis massa interdum placerat. Proin dolor enim, congue nec pharetra mollis, pulvinar in eros. Vestibulum ultrices quam nec magna consequat elementum. Nulla nisl mi, sodales at dui varius, placerat pretium dui. Praesent eget ipsum consequat, imperdiet lorem vel, vulputate turpis.</p>
	</div><!-- 
	--><div>
		<img src="/themes/sambal/static/office1.jpg" />
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut eu eros nec dui volutpat consequat in in lectus. Pellentesque interdum elementum volutpat.</p>
	</div>
</section>
<section class="code">
	<h1>Html class</h1>
	<p>.composition-three-one</p>
	<h1>Less Mixin</h1>
	<p>.composition("three.one")</p>
</section>
<h1 class="line-title">Composition One Three</h1>
<section class="composition-one-three content">
	<div>
		<img src="/themes/sambal/static/office1.jpg" />
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut eu eros nec dui volutpat consequat in in lectus. Pellentesque interdum elementum volutpat.</p>
	</div><!--
	--><div>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut eu eros nec dui volutpat consequat in in lectus. Pellentesque interdum elementum volutpat. Donec volutpat purus quis massa interdum placerat. Proin dolor enim, congue nec pharetra mollis, pulvinar in eros. Vestibulum ultrices quam nec magna consequat elementum. Nulla nisl mi, sodales at dui varius, placerat pretium dui. Praesent eget ipsum consequat, imperdiet lorem vel, vulputate turpis. Aliquam turpis justo, consequat non mollis in, faucibus pharetra mauris. Fusce ac hendrerit mauris, eu feugiat lectus. Quisque tellus tellus, tincidunt ac pharetra eget, volutpat eget eros. Aliquam erat volutpat. Fusce sit amet sapien sapien. Vivamus quis malesuada ipsum. Proin mattis tellus pharetra, bibendum velit vitae, placerat leo.</p>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut eu eros nec dui volutpat consequat in in lectus. Pellentesque interdum elementum volutpat. Donec volutpat purus quis massa interdum placerat. Proin dolor enim, congue nec pharetra mollis, pulvinar in eros. Vestibulum ultrices quam nec magna consequat elementum. Nulla nisl mi, sodales at dui varius, placerat pretium dui. Praesent eget ipsum consequat, imperdiet lorem vel, vulputate turpis.</p>
	</div>
</section>
<section class="code">
	<h1>Html class</h1>
	<p>.composition-one-three</p>
	<h1>Less Mixin</h1>
	<p>.composition("one.three")</p>
</section>
<div class="interlude" id="composition-grid">
	<h1>Composition: same elements</h1>
</div>
<h1 class="line-title">Half Grid</h1>
<section class="composition-twins content">
	<div>
		<img src="/themes/sambal/static/office1.jpg" />
		<h4>ABOUT THIS THEME</h4>
		<p>Lorem ipsum dolor sit amet, feugiat delicata liberavisse id cum, no quo maiorum intellegebat, liber regione eu sit. Mea cu case ludus integre, vide viderer eleifend ex mea. His at soluta regione diceret, cum et atqui placerat petentium. Per amet nonumy periculis ei. Deleniti apeirian temporibus eam cu, ad mea ipsum sadipscing.</p>
	</div><!--
	--><div class="last">
		<img src="/themes/sambal/static/office2.jpg" />
		<ul>
			<li>100% RESPONSIVE LAYOUT</li>
			<li>HIGH CUSTOMISABLE THEME</li>
			<li>AMAZING FEATURES</li>
			<li>DESIGN AND ELEGANT</li>
			<li>SIMPLICITY</li>
		</ul>
	</div>
</section>
<section class="code">
	<h1>Html class</h1>
	<p>.composition-twins</p>
	<h1>Less Mixin</h1>
	<p>.composition("twins")</p>
</section>
<h1 class="line-title">Third Grid</h1>
<section class="composition-triplets content">
<div>
		<img src="/themes/sambal/static/block1.jpg" />
		<h4>What about three columns?</h4>
		<p>Lorem ipsum dolor sit amet, feugiat delicata liberavisse id cum, no quo maiorum intellegebat, liber regione eu sit. Mea cu case ludus integre, vide viderer eleifend ex mea. His at soluta regione diceret, cum et atqui placerat petentium. Per amet nonumy periculis ei. Deleniti apeirian temporibus eam cu, ad mea ipsum sadipscing.</p>
	</div><!--
	--><div>
		<img src="/themes/sambal/static/block2.jpg" />
		<h4>No quo maiorum intellegebat</h4>
		<p>Lorem ipsum dolor sit amet, feugiat delicata liberavisse id cum, no quo maiorum intellegebat, liber regione eu sit. Mea cu case ludus integre, vide viderer eleifend ex mea. His at soluta regione diceret, cum et atqui placerat petentium. Per amet nonumy periculis ei. Deleniti apeirian temporibus eam cu, ad mea ipsum sadipscing.</p>
	</div><!--
	--><div class="last">
		<img src="/themes/sambal/static/block3.jpg" />
		<h4>No quo maiorum intellegebat</h4>
		<ul>
			<li>100% RESPONSIVE LAYOUT</li>
			<li>HIGH CUSTOMISABLE THEME</li>
			<li>AMAZING FEATURES</li>
			<li>DESIGN AND ELEGANT</li>
			<li>SIMPLICITY</li>
		</ul>
	</div>
</section>
<section class="code">
	<h1>Html class</h1>
	<p>.composition-triplets</p>
	<h1>Less Mixin</h1>
	<p>.composition("triplets")</p>
</section>
<h1 class="line-title">Fourth Grid</h1>
<section class="grid-4 content">
	<div>
		<img src="/themes/sambal/static/block2.jpg" />
		<h4>No quo maiorum intellegebat</h4>
		<p>Lorem ipsum dolor sit amet, feugiat delicata liberavisse id cum, no quo maiorum intellegebat, liber regione eu sit. Mea cu case ludus integre, vide viderer eleifend ex mea. His at soluta regione diceret, cum et atqui placerat petentium. Per amet nonumy periculis ei. Deleniti apeirian temporibus eam cu, ad mea ipsum sadipscing.</p>
	</div><!--
	--><div>
		<img src="/themes/sambal/static/block2.jpg" />
		<h4>No quo maiorum intellegebat</h4>
		<p>Lorem ipsum dolor sit amet, feugiat delicata liberavisse id cum, no quo maiorum intellegebat, liber regione eu sit. Mea cu case ludus integre, vide viderer eleifend ex mea. His at soluta regione diceret, cum et atqui placerat petentium. Per amet nonumy periculis ei. Deleniti apeirian temporibus eam cu, ad mea ipsum sadipscing.</p>
	</div><!--
	--><div>
		<img src="/themes/sambal/static/block2.jpg" />
		<h4>No quo maiorum intellegebat</h4>
		<p>Lorem ipsum dolor sit amet, feugiat delicata liberavisse id cum, no quo maiorum intellegebat, liber regione eu sit. Mea cu case ludus integre, vide viderer eleifend ex mea. His at soluta regione diceret, cum et atqui placerat petentium. Per amet nonumy periculis ei. Deleniti apeirian temporibus eam cu, ad mea ipsum sadipscing.</p>
	</div><!--
	--><div>
		<img src="/themes/sambal/static/block2.jpg" />
		<h4>No quo maiorum intellegebat</h4>
		<p>Lorem ipsum dolor sit amet, feugiat delicata liberavisse id cum, no quo maiorum intellegebat, liber regione eu sit. Mea cu case ludus integre, vide viderer eleifend ex mea. His at soluta regione diceret, cum et atqui placerat petentium. Per amet nonumy periculis ei. Deleniti apeirian temporibus eam cu, ad mea ipsum sadipscing.</p>
	</div>
</section>
<section class="code">
	<h1>Html class</h1>
	<p>.composition-quadruplets</p>
	<h1>Less Mixin</h1>
	<p>.composition("quadruplets")</p>
</section>
<div class="interlude" id="various">
	<h1>Various elements: Tabulations, accordion, breadcrums, etc.</h1>
</div>
<h1 class="line-title">Tabulation & Accordion</h1>
<section class="grid-2 content">
	<?php 
		print $getTabs([
			"Feugiat delicata FF test" => "His at soluta regione diceret, cum et atqui placerat petentium. Per amet nonumy periculis ei.",
			"Liber regione" => "Ut eu eros nec dui volutpat consequat in in lectus. Pellentesque interdum elementum volutpat. Donec volutpat purus quis massa interdum placerat. Proin dolor enim, congue nec pharetra mollis, pulvinar in eros. Vestibulum ultrices quam nec magna consequat elementum. Nulla nisl mi, sodales at dui varius, placerat pretium dui. Praesent eget ipsum consequat, imperdiet lorem vel, vulputate turpis.",
			"Ludus integre" => "Mea cu case ludus integre, vide viderer eleifend ex mea. His at soluta regione diceret, cum et atqui placerat petentium. Per amet nonumy periculis ei.",
		]); 
	?><!--
	--><?php 
		print $getAccordion([
			"*Feugiat delicata" => "His at soluta regione diceret, cum et atqui placerat petentium. Per amet nonumy periculis ei.",
			"Liber regione" => "Ut eu eros nec dui volutpat consequat in in lectus. Pellentesque interdum elementum volutpat. Donec volutpat purus quis massa interdum placerat. Proin dolor enim, congue nec pharetra mollis, pulvinar in eros. Vestibulum ultrices quam nec magna consequat elementum. Nulla nisl mi, sodales at dui varius, placerat pretium dui. Praesent eget ipsum consequat, imperdiet lorem vel, vulputate turpis.",
			"Ludus integre" => "Mea cu case ludus integre, vide viderer eleifend ex mea. His at soluta regione diceret, cum et atqui placerat petentium. Per amet nonumy periculis ei.",
		]); 
	?>
</section>
<h1 class="line-title">Breadcrums</h1>
<section class="content">
	<ul class="breadcrumbs">
	  <li><a href="#">Home</a></li>
	  <li><a href="#">Features</a></li>
	  <li class="unavailable"><a href="#">Unavailable Item</a></li>
	  <li class="current"><a href="#">Current Item</a></li>
	</ul>
</section>
<h1 class="line-title">Messaging Element</h1>
<section class="content">
	<div class="msg-flash success">Success</div>
	<div class="msg-flash error">Error</div>
	<div class="msg-flash information">Information</div>
	<div class="msg-flash warning">Warning</div>
</section>
<section class="code">
	<h1>Html class</h1>
	<p>.msg-flash (options) success|error|information|warning</p>
	<h1>Less Mixin</h1>
	<p>.message("success|error|information|warning");</p>
</section>
<h1 class="line-title">Buttons Element</h1>
<section class="content">
	<h3>Buttons</h3>
	<a href="#" class="button">Button</a> <a href="#" class="button inverted">Button Inverted</a> <a href="#" class="button error">Button Error</a> <a href="#" class="button next">Button Next</a> 
	<h3>Button Group</h3>
	<ul class="button-group">
		<li><a href="#">Button 1</a></li><!--
		--><li><a href="#">Button 2</a></li><!--
		--><li class="last"><a href="#" class="last">Button 3</a></li>
	</ul>
	<h3>Button Bar</h3>
	<div class="button-bar">
		<ul>
			<li><a href="#">His at</a></li><!--
			--><li><a href="#">soluta</a></li><!--
			--><li class="last"><a href="#" class="last">regione</a></li>
		</ul><!--
		--><ul>
			<li><a href="#">diceret</a></li><!--
			--><li><a href="#">cum et</a></li><!--
			--><li class="last"><a href="#" class="last">atqui</a></li>
		</ul><!--
		--><ul>
			<li><a href="#">placerat</a></li><!--
			--><li><a href="#">petentium</a></li><!--
			--><li class="last"><a href="#">viderer</a></li>
		</ul>
	</div>
	<h3>Dropdown</h3>
	<div class="dropdown">
	   <span>Dropdown Button</span>
	  <ul>
		<li><a href="#">Dropdown Item</a></li><!--
		--><li><a href="#">Another Dropdown Item box</a></li><!--
		--><li><a href="#">Another Dropdown Item box</a></li><!--
		--><li><a href="#">Another Dropdown Item box</a></li><!--
		--><li class="divider">&nbsp;</li><!--
		--><li><a href="#">Last Item</a></li>
	  </ul>
	</div>
</section>
<h1 class="line-title">Various Element</h1>
<section class="content">
	<h3>Pagination</h3>
	<ul class="pagination">
	  <li class="disabled"><a href="#">&laquo;</a></li><!--
	  --><li class="current"><a href="#">1</a></li><!--
	  --><li><a href="#">2</a></li><!--
	  --><li><a href="#">3</a></li><!--
	  --><li><a href="#">4</a></li><!--
	  --><li><a href="#">5</a></li><!--
	  --><li><a href="#">&raquo;</a></li>
	</ul>
</section>
<section class="content">
	<h3>Blockquote</h3>
	<blockquote>
		<p>aliquip ex ea commodo consequat. Duis aute irure dolor inreprehenderit in voluptate velit esse cillum dolore eu fugiat nullapariatur. Excepteur sint occaecat cupidatat non proident, sunt inculpa qui officia deserunt mollit anim id est laborum.</p>
	</blockquote>
	<h3>Tooltip</h3>
	<p>Lorem ipsum dolor sit amet, <span data-element="tooltip" data-original-title="Classic tooltip">feugiat delicata</span> liberavisse id cum, no quo maiorum intellegebat, liber regione eu sit. Mea cu case ludus integre, vide viderer eleifend ex mea. His at soluta regione diceret, cum et atqui placerat petentium. Per amet nonumy periculis ei. <span class="blue"><span class="tooltip-dotted" data-element="tooltip" data-original-title="Dotted blue tooltip">Deleniti apeirian temporibus eam cu</span></span>, ad mea ipsum sadipscing.</p>
	<h3>Table</h3>
	<table class="full-width bordered hovered stated">
		<thead>
			<tr>
				<th>Head1</th>
				<th>Head2</th>
				<th>Head3</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Body column 1</td>
				<td>Body column 2</td>
				<td>Body column 3</td>
			</tr>
			<tr>
				<td>Body column 1</td>
				<td>Body column 2</td>
				<td>Body column 3</td>
			</tr>
			<tr>
				<td>Body column 1</td>
				<td>Body column 2</td>
				<td>Body column 3</td>
			</tr>
			<tr>
				<td>Body column 1</td>
				<td>Body column 2</td>
				<td>Body column 3</td>
			</tr>
		</tbody>
	</table>
	<h3>form</h3>
	<form action="" method="post">
		<fieldset>
			<legend>Identity (fieldset Example)</legend>
			<div class="element"><label for="form-ContactForm-name">Your name</label><!----><div class="input"><!--
			--><input
				id="form-ContactForm-name"
				type="text"
				name="ContactForm[name]"
				value="" /><!--
			--></div></div>
			<div class="element"><label for="form-ContactForm-email">Your e-mail address</label><!----><div class="input"><!--
				--><input
					id="form-ContactForm-email"
					type="text"
					name="ContactForm[email]"
					value="" /><!--
			--></div></div>
			<div class="element"><label for="form-ContactForm-phone">Your phone number</label><!----><div class="input"><!--
			--><input
				id="form-ContactForm-phone"
				type="text"
				name="ContactForm[phone]"
				value="" /><!--
			--></div></div>
		</fieldset>
		<div class="element"><label for="form-ContactForm-email">Subject</label><!----><div class="input"><!--
			--><input
				id="form-ContactForm-email"
				type="text"
				name="ContactForm[email]"
				value="" /><!--
		--></div></div>
		<div class="element">
			<label for="form-ContactForm-message">Message</label><!--
			--><div class="input"><!--
				--><textarea
					rows="2"
					cols="50"
					id="form-ContactForm-message"
					name="ContactForm[message]"
				></textarea><!--
			--></div>
		</div>
		<div class="element"><input type="submit" value="Send" /></div>
	</form>
</section>
