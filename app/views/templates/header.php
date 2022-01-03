<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Halaman <?=$data['judul']; ?></title>
	<link href="<?=BASEURL;?>/css/bootstrap.css" rel="stylesheet">
</head>
<body>

<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?=BASEURL;?>">DEVELOP PHP MVC</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <a class="nav-link active" aria-current="page" href="<?=BASEURL;?>/home">Home</a>
        <a class="nav-link" href="<?=BASEURL;?>/bagian">Data Bagian</a>
        <a class="nav-link" href="<?=BASEURL;?>/karyawan">Data Karyawan</a>
        <a class="nav-link" href="<?=BASEURL;?>/absensi">Data Absensi</a>
        <a class="nav-link" href="<?=BASEURL;?>/penggajian">Data Penggajian</a>
        <a class="nav-link" href="<?=BASEURL;?>/login/logOut">Log Out</a>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
