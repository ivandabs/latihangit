
<!DOCTYPE html>
<html>
<head>
	<title>Form Mahasiswa</title>
</head>
<body>
<h1>FORM MAHASISWA</h1>
	<form method="POST" action="{{asset('mahasiswa-save')}}">
  NIM<br>
  <input type="text" name="nim"><br>
  NAMA<br>
  <input type="text" name="nama">
<div class="col-md-6">
<button ><i  style="padding-bottom: 10px " class="btn btn-success">Tambah</i></button>

</div>
<input type="hidden" name="_token" value="{{csrf_token()}}">
</form>
</body>
</html>
