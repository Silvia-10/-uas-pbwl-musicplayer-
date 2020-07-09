@extends('layouts.app')
@section('content')
<div class="container">
<form action="{{ url('/artist') }}">
	@csrf
	<h3>Daftar Artist<a id="tbh" href="{{ url('artist/create') }}">Tambah</a></h3>
	<table>
		<tr>
			<th>ID</th>
			<th>NAMA ARTIST</th>
			<th>EDIT</th>
			<th>HAPUS</th>
		</tr>
		@foreach($rows as $row)
		<tr>
			<td>{{ $row->artist_id }}</td>
			<td>{{ $row->nama_artist }}</td>
			<td><a id="btn"  href="{{ url('artist/'.$row->artist_id.'/edit') }}">Edit</a></td>
			<td><form action="{{ url('/artist/'.$row->artist_id) }}" method="post">
				<input  type="hidden" name="_method" value="DELETE">
				@csrf
				<button id="btn">Hapus</button>
			</form></td>
		</tr>
		@endforeach 
	</table>
</div>
@endsection