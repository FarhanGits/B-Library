<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Buku</title>
    <link rel="stylesheet" href="{{ asset('style/style-admin/styleWidgetBuku.css') }}">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script src="https://kit.fontawesome.com/e9e26f3697.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">

        <!-- Side Navbar -->
        <div class="navside">
            <ul>
                <li class="webname">
                    <a href="/dashboard">
                        <span class="icon"><img src="{{asset('img/img-admin/Logo_Kabupaten_Bojonegoro 2.png')}}" alt=""></span>
                        <span class="title">B-Library Admin</span>
                    </a>
                </li>
                <li class="navDashboard">
                    <a href="/dashboard">
                        <span class="icon"><ion-icon name="grid-outline"></ion-icon></span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>
                <li class="navMember">
                    <a href="/dfanggota">
                        <span class="icon"><ion-icon name="people"></ion-icon></span>
                        <span class="title">Anggota</span>
                    </a>
                </li>
                <li class="navAdd">
                    <a href="/dfbuku">
                        <span class="icon"><ion-icon name="add-circle"></ion-icon></span>
                        <span class="title">Tambah Buku</span>
                    </a>
                </li>
                <li class="navReturn">
                    <a href="/pengembalianbuku">
                        <span class="icon"><i class="fa-solid fa-rotate-left"></i></span>
                        <span class="title">Pengembalian Buku</span>
                    </a>
                </li>
                <li class="navDue">
                    <a href="/keterlambatan">
                        <span class="icon"><ion-icon name="hourglass"></ion-icon></span>
                        <span class="title">Keterlambatan</span>
                    </a>
                </li>
                <li class="navAccount">
                    <a href="/akun">
                        <span class="icon"><ion-icon name="person-sharp"></ion-icon></span>
                        <span class="title">Akun Admin</span>
                    </a>
                </li>
                <div class="devider">
                    <span></span>
                </div>
                <li class="navOut">
                    <a href="/logout-admin">
                        <span class="icon"><i class="fa-solid fa-arrow-right-from-bracket"></i></span>
                        <span class="title">Sign-Out</span>
                    </a>
                </li>
            </ul>
        </div>

        <div class="content">

            <!-- Top Navbar -->
            <div class="navtop">
                <div class="toggle">
                    <ion-icon name="list"></ion-icon>
                </div>

                <!-- Search Box -->
                <div class="search">
                    <label for="">
                        <input type="text" placeholder="Cari">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div>

                <!-- Admin Image -->
                <div class="admins">
                    <img src="{{asset('img/img-admin/Logo_Kabupaten_Bojonegoro 2.png')}}" alt="">
                </div>
            </div>

            <!-- Highlight in Cards -->
            
            <!-- Table Section  -->
            <div class="contentBook">
                <div class="bookItem">
                    <div class="title">
                        <h1>Edit Informasi Buku</h1>
                    </div>
                    <div class="card-body">
                        <form class="formBook" action="/editdata/{{$data->id}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Judul Buku</label>
                                <input type="text" name="judulBuku" value="{{$data->judulBuku}}" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Pengarang</label>
                                <input type="text" name="namaPengarang" value="{{$data->namaPengarang}}" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Keterangan Buku</label>
                                <textarea class="form-control" name="keteranganBuku" required>{{$data->keteranganBuku}}</textarea>
                            </div>
                            <div class="form-group">
                                <label>Tahun Terbit</label>
                                <input type="number" name="tahunTerbit" value="{{$data->tahunTerbit}}" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Genre</label>
                                <input type="text" name="genre" value="{{$data->genre}}" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Masukkan Gambar Buku</label>
                                <input type="file" name="images" value="{{$data->images}}" class="form-control" {{$data->images}} required>
                            </div>
                            <div class="button">
                                <button class="saveAction" type="submit">Simpan</button>
                                <button class="cancelAction"><a href="/dfbuku">Batal</a></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{asset('script/scriptDA.js')}}"></script>
</body>
</html>