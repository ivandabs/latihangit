<head>
	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
</head>
<div class="col-md-6">
<a href="{{asset('mahasiswa-tambah')}}">Tambah</a>

</div>
<table border="1" width="100" > 
	<tbody>
		{{-- @foreach($mahasiswa as $row)
		{{$row->nama}}<br>
		@endforeach --}}
<tr>
	<td>No</td>
	<td>Nim</td>
	<td>Nama</td>
	<td>Aksi</td>
	
</tr>

@foreach($mahasiswa as $row)
<tr>


	<td>{{$row->id}}</td>
	<td>{{$row->nim}}</td>
	<td>{{$row->nama}}</td>
	<td>
		<a href="{{asset('mahasiswa-edit/'.Crypt::encrypt($row->id))}}"  class="btn btn-warning"> Edit</a>  
        <a href="{{asset('mahasiswa-hapus/'.Crypt::encrypt($row->id))}}"  onclick="return confirm('Are you Sure ?') ">Hapus</a>
	</td>
	

</tr>
@endforeach
	</tbody>
</table>
@if(Session::get('message') != '')
<script>
	alert('{{Session::get('message')}}');
</script>
@endif
<!-- DivTable.com -