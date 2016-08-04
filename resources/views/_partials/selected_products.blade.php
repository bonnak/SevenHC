<div class="panel panel-default items-section">
	<div class="panel-heading heading">Selected Products</div>
	<div class="panel-body items">

		@foreach($products as $product)
		<div class="item-content clearfix">		
      <img src="{{ isset($product->photo_primary) ? $product->photo_primary->file_name : asset('assets/images/thumbnails/content.jpg') }}" alt="...">
      <p>{{ $product->description_en }}</p>
      <div class="more">
      	<a href="#" class="btn-more"><i class="fa fa-arrow-right"></i></a>
      </div>
    </div>
		@endforeach

	</div>
</div>