<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>
@i(elements/header.php)

	<div class="container">
		
		<div class="row">
			<div class="col-md-12 prev-next">	
				@t(linkPrev)
				<div class="pull-right">@t(linkNext)</div>		
			</div>
			<div class="col-md-12">
				@x(carousel {
					files: @p(carousel_files),
					width: 1200,
					height: 675
				})
			</div>
			<div id="title" class="col-md-12">
				<h1>@p(title)</h1>
				<h2>@p(subtitle)</h2>
			</div>
			<div class="col-md-12">
				@t(filterParentByTags)
			</div>
			<div class="col-md-6">
				@p(text)
			</div>
			<div class="col-md-6">
				@p(text_2)
			</div>	
		</div>		
		
		<hr>
			
		<div class="row">
			@t(listConfig {type: "related" })
			@t(listPages {
				variables: "title, subtitle",
				crop: true,
				class: "text-only col-xs-6 col-sm-6 col-md-4 col-lg-3"
			}) 
		</div>	

	</div>		
	
@i(elements/footer.php)