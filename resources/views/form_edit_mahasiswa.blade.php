
<!DOCTYPE html>
<html>
<head>
	<title>Form Mahasiswa</title>
</head>
<body>
<h1>FORM  EDIT MAHASISWA</h1>
	<form method="POST" action="{{asset('mahasiswa-update/'.Crypt::encrypt($mahasiswa->id))}}">
  NIM<br>
  <input type="text" name="nim" value="{{$mahasiswa->nim}}"><br>
  NAMA<br>
  <input type="text" name="nama" value="{{$mahasiswa->nama}}">
<div class="col-md-6">
<button href="{{-- {{asset('mahasiswa-tambah')}} --}}"><i  style="padding-bottom: 10px " class="btn btn-success">Update</i></button>

</div>
<input type="hidden" name="_token" value="{{csrf_token()}}">
</form>
</body>
</html>
