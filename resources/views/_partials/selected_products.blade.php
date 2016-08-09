<div class="panel panel-default items-section">
	<div class="panel-heading heading">Selected Products</div>
	<div class="panel-body items">

		@foreach($products as $product)
		<div class="item-content clearfix">	
			<div class="thumnail">	
				<a href="#">
		      <img src="{{ isset($product->photo_primary) ? 
		      							asset('assets/images/products/' . $product->photo_primary->file_name) : 
		      							asset('assets/images/thumbnails/content.jpg') }}" alt="...">
	      </a>
      </div>
      <p>{{ str_limit($product->description_en, 400) }}</p>

      <div class="more">
      	<a href="#" class="btn-more">Read more</a>
      </div>
    </div>
		@endforeach

	</div>
</div>