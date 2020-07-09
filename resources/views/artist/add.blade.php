@extends('layouts.app')
@section('content')
<div class="container">
<h3>Tambah Data Artist</h3>
<form method="post" action="{{ url('/artist') }}">
	@csrf
	<table>
		<tr>
			<th>NAMA ARTIST</th>
			<td><input type="text" name="nama_artist"></td>
		</tr>
		<tr>
			<th></th>
			<td><input id="btn" type="submit" value="SIMPAN"></td>
		</tr> 
	</table>
</form>
</div>
@endsection