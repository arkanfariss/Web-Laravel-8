{!! Form::open(['method'=>'GET','url'=>$url,'class'=>'navbar-form navbarleft','role'=>'search']) !!}
<div class="custom-search-form">
	<a href="{{ url($link.'/create') }}" class="btn btn-primary btnsm"><span class="glyphicon glyphicon-plus"></span> Tambah</a>
		<input type="text" class="form-control" name="search" placeholder="Search...">
		<button class="btn btn-default-sm" type="submit">
		Cari
	</span>
</div>
{!! Form::close() !!}