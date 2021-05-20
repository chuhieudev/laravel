<ul>
	@foreach($Categories as $category)
	<li style="display: inline-block; padding-right: 40px; padding-left: 20px" >
		<a href="/projectdemo/public/category/{{$category->slug}}"title='{{$category->name}}'>
			{{$category->name}}
		</a>
	</li>
	@endforeach
</ul>