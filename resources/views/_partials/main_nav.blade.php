<?php 
$nav_menu = simplexml_load_file(resource_path() . '/nav_menu.xml');
?>
<nav class="main-nav">
	<ul>
	@foreach($nav_menu as $menu)
		<li>
			<a href="{{$menu['link']}}"><i class="fa fa-plus"></i>{{ trans('menu.main_menu.' . strtolower($menu['title'])) }}</a>
			@if(isset($menu->sub_menu) && ($sub_menu = $menu->sub_menu))
				<ul>
				@foreach($sub_menu->children() as $menu)											
					<li><a href="{{ $menu['link'] }}">{{ html_entity_decode('&lt;sup&gt;+&lt;/sup&gt;') }}</a></li>					
				@endforeach
				</ul>
			@endif
		</li>
	@endforeach
	</ul>
</nav>