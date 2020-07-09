@extends('layouts.app')
@section('content')
<div class="container">
<h3>Edit Data Album</h3>
<form method="post" action="{{ url('/album/'.$row->artist_id) }}">
	<input type="hidden" name="_method" value="PATCH">
	@csrf
	<table>
		<tr>
			<th>NAMA ALBUM</th>
			<td><input type="text" name="nama_album" value="{{ $row->nama_album }}"></td>
		</tr>
		<tr>
			<th>NAMA ARTIST</th>
			<td>
				<select name="artist_id">
					@foreach($lst as $rows)
					<option value="{{ $rows->artist_id }}" >{{ $rows->nama_artist }}</option>
					@endforeach 
				</select>
			</td>
		</tr>
		<tr>
			<td></td>
			<td><input id="btn" type="submit" value="UPDATE"></td>
		</tr> 
	</table>
</form>
</div>
@endsection