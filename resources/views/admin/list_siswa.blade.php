<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <script src="https://kit.fontawesome.com/83685fdc33.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="/admin/assets/img/icons/logo.png">
    <title>
        Hummarules
    </title>
    @include('template-admin.head')
</head>
<body class="g-sidenav-show bg-gray-100">
    @if (session()->has('success'))
        <script>
            Swal.fire(
                'Berhasil!',
                "{{ session('success') }}",
                'success'
            )
        </script>
    @endif
    @if (session()->has('error'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: "{{ session('error') }}",
            })
        </script>
    @endif
    {{-- Modal Tambah --}}
    <div class="modal modal-lg fade" id="tambahSiswa" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah siswa</h5>
                </div>
                <div class="modal-body">
                    <form action="{{ route('admin.siswa.create') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label" style="font-size:14px;">Nama
                                siswa</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder=""
                                name="name" value="{{ old('name') }}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label" style="font-size:14px;">NISN</label>
                            <input type="number" class="form-control" id="exampleFormControlInput1" placeholder=""
                                name="nisn" value="{{ old('nisn') }}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label" style="font-size:14px;">Email
                                siswa</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder=""
                                name="email" value="{{ old('email') }}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label" style="font-size:14px;">Asal
                                sekolah</label>
                                <select class="form-select" aria-label="Default select example" name="sekolah_id">
                                    <option selected disabled>Pilih sekolah</option>
                                    @foreach ($sekolah as $s)
                                    <option value="{{ $s->id }}">{{ $s->name }}</option>
                                    @endforeach
                                </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label" style="font-size:14px;">Role
                                siswa</label>
                            <select class="form-select" aria-label="Default select example" name="role">
                                <option value="siswa" {{ old('role') == 'siswa' ? "selected" : "" }}>Siswa magang</option>
                                <option value="ketua" {{ old('role') == 'ketua' ? "selected" : "" }}>Ketua magang</option>
                            </select>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label" style="font-size:14px;">Awal
                                        PKL</label>
                                    <input type="date" class="form-control" id="exampleFormControlInput1"
                                        placeholder="" name="awal_pkl" value="{{ old('awal_pkl') }}">
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label"
                                        style="font-size:14px;">Akhir PKL</label>
                                    <input type="date" class="form-control" id="exampleFormControlInput1"
                                        placeholder="" name="akhir_pkl" value="{{ old('akhir_pkl') }}">
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label" style="font-size:14px;">Foto siswa</label>
                            <input class="form-control" type="file" id="formFile" name="foto_siswa">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary">Tambah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- End Modal --}}

    <div class="min-height-300 bg-primary position-absolute w-100"></div>
    <aside
        class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 "
        id="sidenav-main">
        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
                aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand m-0" href="#"
                target="_blank">
                <img src="/admin/assets/img/hummarules-removebg-icikiwr.png" class="navbar-brand-img h-100"
                    alt="main_logo">
            </a>
        </div>
        <hr class="horizontal dark mt-0">
        <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
            <ul class="navbar-nav">
                <a class="nav-link" href="{{ route('admin.dashboard') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i><img src="/admin/assets/img/icons/sidebar/business-report 1.png" alt="" /></i>
                    </div>
                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('admin.listsiswa') }}">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <img src="/admin/assets/img/icons/sidebar/add-group 1.png" alt="" />
                        </div>
                        <span class="nav-link-text ms-1">List siswa</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.guru.index') }}">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <img src="/admin/assets/img/icons/sidebar/icons-guru.png" alt="" />
                        </div>
                        <span class="nav-link-text ms-1">List guru</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.izinsiswa') }}">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <img src="/admin/assets/img/icons/sidebar/email 1.png" alt="" />
                        </div>
                        <span class="nav-link-text ms-1">Laporan izin siswa</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.laporanketua') }}">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <img src="/admin/assets/img/icons/sidebar/ketua.png" alt="" />
                        </div>
                        <span class="nav-link-text ms-1">Laporan ketua magang</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.laporanhariansiswa') }}">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <img src="/admin/assets/img/icons/sidebar/calendar 1.png" alt="" />
                        </div>
                        <span class="nav-link-text ms-1">Laporan harian siswa</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.jurnal') }}">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <img src="/admin/assets/img/icons/sidebar/book 1.png" alt="" />
                        </div>
                        <span class="nav-link-text ms-1">Laporan jurnal siswa</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.riwayatizin') }}">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <img src="/admin/assets/img/icons/sidebar/riwayat.png" alt="" />
                        </div>
                        <span class="nav-link-text ms-1">Riwayat izin siswa</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.feedback') }}">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <img src="/admin/assets/img/icons/sidebar/icons8-feedback-48 1.png" alt="" />
                        </div>
                        <span class="nav-link-text ms-1">Feedback</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.pegumuman') }}">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <img src="/admin/assets/img/icons/sidebar/🦆 icon _announcement_.png" alt="" />
                        </div>
                        <span class="nav-link-text ms-1">Pengumuman</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.kontak') }}">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <img src="/admin/assets/img/icons/sidebar/kontak.png" alt="" />
                        </div>
                        <span class="nav-link-text ms-1">Kontak</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.absen') }}">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <img src="/admin/assets/img/icons/sidebar/jam.png" alt="" />
                        </div>
                        <span class="nav-link-text ms-1">Laporan absen siswa</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>
    <main class="main-content position-relative border-radius-lg ">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur"
            data-scroll="false">
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white"
                                href="javascript:;">Pages</a></li>
                        <li class="breadcrumb-item text-sm text-white active" aria-current="page"><a href="{{ route('admin.listsiswa') }}" class="text-white">List siswa</a></li>
                    </ol>
                    <h6 class="font-weight-bolder tex t-white mb-0" style="color: #fff;">List siswa</h6>
                </nav>
                <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                    <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                    </div>
                    <ul class="navbar-nav  justify-content-end">
                        <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
                                <div class="sidenav-toggler-inner">
                                    <i class="sidenav-toggler-line bg-white"></i>
                                    <i class="sidenav-toggler-line bg-white"></i>
                                    <i class="sidenav-toggler-line bg-white"></i>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item px-2 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-white p-0">
                                <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
                            </a>
                        </li>
                        <li class="nav-item dropdown px-2 pe-2 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-white p-0" id="dropdownMenuButton"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-bell cursor-pointer"></i>
                            </a>
                            @if (count($notifikasi) != 0)
                            <span class="badge badge-danger badge-counter" style="background: red; font-size:10px; padding:3px; margin-top: -4px; margin-left: 2px;">{{ count($notifikasi) }}</span>
                            @endif
                            <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4"
                                aria-labelledby="dropdownMenuButton">
                                @if (count($notifikasi) == 0)
                                <li class="mb-2">
                                    <a class="dropdown-item border-radius-md" href="#">
                                        <div class="d-flex py-1">
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="text-sm font-weight-normal mb-1">
                                                    <span class="font-weight-bold">Tidak ada notifikasi</span>
                                                </h6>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                @else
                                <style>
                                    .aku:hover {
                                        text-decoration: underline;
                                    }
                                </style><li class="mb-2 text-center">
                                    <a href="{{ route('sudahdibaca') }}"><h6 class="text-sm font-weight-normal mb-1 aku" style="color: blue;">Sudah dibaca</h6></a>
                                </li>
                                @foreach ($notifikasi as $notif)

                                <li class="mb-2">
                                    <a class="dropdown-item border-radius-md" href="{{ route('notif', ['notifikasi' => $notif->id]) }}">
                                        <div class="d-flex py-1">
                                            <div class="my-auto">
                                                <img src="/img/{{ $notif->user->foto_siswa }}"
                                                    class="avatar avatar-sm  me-3 ">
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="text-sm font-weight-normal mb-1">
                                                    <span class="font-weight-bold">{{ $notif->judul }}</span> dari {{ $notif->user->name }}
                                                </h6>
                                                <p class="text-xs text-secondary mb-0">
                                                    <i class="fa fa-clock me-1"></i>
                                                    {{ $notif->created_at }}
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                @endforeach
                                @endif
                            </ul>
                        </li>
                        <li class="nav-item px-2 pe-2 d-flex align-items-center">
                            <a class="nav-link text-white p-0" href="javascript:logout()"><i
                                    class="fa-solid fa-right-from-bracket" style="color: #ffffff;"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
        @php
        use Carbon\Carbon;
        @endphp
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            <p style="font-size: 24px; font-weight: bold;">List siswa
                                <form action="">
                                <input type="search" placeholder="Cari disini..." aria-label="Search" style="float: right; border: 1px solid #b8b8b8; border-radius: 10px; font-size: 14px; max-width: 240px; height: 46px;box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2); padding:16px; margin-top: -54px;" name="cari" value="{{ request('cari') }}">
                                </form>
                            </p>
                            <button class="btn btn-primary" data-toggle="modal" data-target="#tambahSiswa"><i
                                    class="fa-solid fa-plus"></i> Tambah data</button>
                            <button type="button" class="btn dropdown-toggle"
                                style="box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                Pilih sekolah
                            </button>
                            <div class="dropdown-menu" style="box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);">
                                @foreach ($sekolah as $s)
                                <a class="dropdown-item" href="{{ route('admin.siswa.tampilkanberdasarkansekolah', ['sekolah' => $s->id]) }}">{{ $s->name }}</a>
                                @endforeach
                            </div>
                        </div>
                        <div class="card-body px-0 pt-0 pb-2">
                            <div class="table-responsive p-0">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr>
                                            <th class="text-uppercase text-secondary"
                                                style="font-style: normal; font-weight: 700; font-size: 14px; line-height: 17px;">
                                                NAMA</th>
                                            <th class="text-uppercase text-secondary font-weight-bolder ps-2"
                                                style="font-style: normal; font-weight: 700; font-size: 14px; line-height: 17px;">
                                                NISN</th>
                                            <th class="text-uppercase text-secondary font-weight-bolder ps-2"
                                                style="font-style: normal; font-weight: 700; font-size: 14px; line-height: 17px;">
                                                ASAL SEKOLAH</th>
                                            <th class="text-uppercase text-secondary font-weight-bolder ps-2"
                                                style="font-style: normal; font-weight: 700; font-size: 14px; line-height: 17px;">
                                                ROLE</th>
                                            <th class="text-uppercase text-secondary font-weight-bolder ps-2"
                                                style="font-style: normal; font-weight: 700; font-size: 14px; line-height: 17px;">
                                                MASA PKL</th>
                                            <th class="text-uppercase text-secondary font-weight-bolder ps-2"
                                                style="font-style: normal; font-weight: 700; font-size: 14px; line-height: 17px;"
                                                colspan="2">
                                                AKSI</th>
                                        </tr>
                                    </thead>
                                    <script>
                                        function konfirmHapus(event, id) {
                                            event.preventDefault();

                                            Swal.fire({
                                                title: 'HAPUS ?',
                                                text: 'Anda yakin ingin menghapus siswa ini?',
                                                icon: 'warning',
                                                showCancelButton: true,
                                                confirmButtonColor: '#3085d6',
                                                cancelButtonColor: '#d33',
                                                confirmButtonText: 'Ya, hapus!',
                                                cancelButtonText: 'Batal'
                                            }).then((result) => {
                                                if (result.isConfirmed) {
                                                    // Kode untuk melakukan penghapusan data di sini
                                                    document.getElementById("myForm-" + id).submit(); // Melanjutkan submit form setelah konfirmasi
                                                }
                                            });
                                        }
                                    </script>
                                    <tbody>
                                    @if (count($users) > 0)
                                        @php
                                            $i = 0;
                                        @endphp
                                        @foreach ($users as $user)
                                        @php
                                            $i++;
                                        @endphp
                                        <tr>
                                            {{-- Modal profil --}}
                                                {{-- Modal Edit --}}
                                            <div class="modal modal-lg fade" id="editSiswa{{ $user->id }}" tabindex="-1" role="dialog">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Edit siswa</h5>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="{{ route('admin.siswa.update') }}" method="post" enctype="multipart/form-data">
                                                                @csrf
                                                                @method('PUT')
                                                                <div class="mb-3">
                                                                    <input type="hidden" name="user_id" value="{{ $user->id }}">
                                                                    <label for="exampleFormControlInput1" class="form-label" style="font-size:14px;">Nama
                                                                        siswa</label>
                                                                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder=""
                                                                        name="name" value="{{ $user->name }}">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="exampleFormControlInput1" class="form-label" style="font-size:14px;">NISN</label>
                                                                    <input type="number" class="form-control" id="exampleFormControlInput1" placeholder=""
                                                                        name="nisn" value="{{ $user->nisn }}">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="exampleFormControlInput1" class="form-label" style="font-size:14px;">Email
                                                                        siswa</label>
                                                                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder=""
                                                                        name="email" value="{{ $user->email }}">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="exampleFormControlInput1" class="form-label" style="font-size:14px;">Asal
                                                                        sekolah</label>
                                                                        <select class="form-select" aria-label="Default select example" name="sekolah_id">
                                                                            <option disabled {{ ($user->sekolah_id === null) ? "selected" : "" }}>Pilih sekolah</option>
                                                                            @foreach ($sekolah as $s)
                                                                            <option value="{{ $s->id }}" {{ ($s->id == $user->sekolah_id) ? "selected" : "" }} >{{ $s->name }}</option>
                                                                            @endforeach
                                                                        </select>
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="exampleFormControlInput1" class="form-label" style="font-size:14px;">Role
                                                                        siswa</label>
                                                                    <select class="form-select" aria-label="Default select example" name="role">
                                                                        <option value="siswa" {{ $user->role == 'siswa' ? "selected" : "" }}>Siswa magang</option>
                                                                        <option value="ketua" {{ $user->role == 'ketua' ? "selected" : "" }}>Ketua magang</option>
                                                                    </select>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="mb-3">
                                                                            <label for="exampleFormControlInput1" class="form-label" style="font-size:14px;">Awal
                                                                                PKL</label>
                                                                            <input type="date" class="form-control" id="exampleFormControlInput1"
                                                                                placeholder="" name="awal_pkl" value="{{ $user->awal_pkl }}">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md">
                                                                        <div class="mb-3">
                                                                            <label for="exampleFormControlInput1" class="form-label"
                                                                                style="font-size:14px;">Akhir PKL</label>
                                                                            <input type="date" class="form-control" id="exampleFormControlInput1"
                                                                                placeholder="" name="akhir_pkl" value="{{ $user->akhir_pkl }}">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="formFile" class="form-label" style="font-size:14px;">Foto siswa</label>
                                                                    <br>
                                                                    <img src="/img/{{ $user->foto_siswa }}" alt="" width="80" height="80"
                                                                        style="border-radius: 8px;" srcset="">
                                                                    <input class="form-control" type="file" id="formFile" name="foto_siswa">
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- End Modal --}}
                                            <div class="modal fade" id="profilModal-{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                {{-- <div class="modal-content">
                                                    <div class="modal-body"> --}}
                                                        <div class="card card-profile">
                                                            <img src="/admin/assets/img/bg-profile.jpg" alt="Image placeholder" class="card-img-top">
                                                            <div class="row justify-content-center">
                                                            <div class="col-4 col-lg-4 order-lg-2">
                                                                <div class="mt-n4 mt-lg-n6 mb-4 mb-lg-0">
                                                                <a href="javascript:;">
                                                                    <img src="/img/{{ $user->foto_siswa }}" style="width: 147px; height: 147px;" class="rounded-circle img-fluid border border-2 border-white">
                                                                </a>
                                                                </div>
                                                            </div>
                                                            </div>
                                                            <div class="card-header text-center border-0 pt-0 pt-lg-2 pb-4 pb-lg-3">
                                                            <div class="d-flex justify-content-between">
                                                                <a href="javascript:;"></a>
                                                                <a href="javascript:;"></a>
                                                            </div>
                                                            </div>
                                                            <div class="card-body pt-0">
                                                            <div class="row">
                                                                <div class="col">
                                                                <div class="d-flex justify-content-center">
                                                                    <div class="d-grid text-center">
                                                                    <span class="text-lg font-weight-bolder">{{ (isset($user->sakit) ? $user->sakit : "0") }}</span>
                                                                    <span class="text-sm opacity-8">Sakit</span>
                                                                    </div>
                                                                    <div class="d-grid text-center mx-4">
                                                                    <span class="text-lg font-weight-bolder">{{ (isset($user->acara_keluarga) ? $user->acara_keluarga : "0") }}</span>
                                                                    <span class="text-sm opacity-8">Acara keluarga</span>
                                                                    </div>
                                                                    <div class="d-grid text-center">
                                                                    <span class="text-lg font-weight-bolder">{{ (isset($user->darurat) ? $user->darurat : "0") }}</span>
                                                                    <span class="text-sm opacity-8">Hal darurat</span>
                                                                    </div>
                                                                </div>
                                                                </div>
                                                            </div>
                                                            <div class="text-center mt-4">
                                                                <h5>
                                                                {{ $user->name }}<span class="font-weight-light">, ({{ $user->role }})</span>
                                                                </h5>
                                                                <div class="h6 font-weight-300">
                                                                <i class="ni location_pin mr-2"></i>{{ $user->nisn }}
                                                                </div>
                                                                <div class="h6 mt-4">
                                                                <i class="ni business_briefcase-24 mr-2"></i>{{ Carbon::parse($user->awal_pkl)->format('d M Y') }} - {{ Carbon::parse($user->akhir_pkl)->format('d M Y') }}
                                                                </div>
                                                                <div>
                                                                <i class="ni education_hat mr-2"></i>{{ (isset($user->sekolah->name)) ? $user->sekolah->name : "" }}
                                                                </div>
                                                            </div>
                                                            </div>
                                                        </div>
                                                    {{-- </div>
                                                </div> --}}
                                                </div>
                                            </div>
                                            {{-- End modal profil --}}
                                            <td>
                                                <a href="#profilModal" style="text-decoration: none;" data-target="#profilModal-{{ $user->id }}" data-toggle="modal">
                                                    <div class="d-flex px-2 py-1">
                                                        <div>
                                                            <img src="/img/{{ $user->foto_siswa }}"
                                                                class="avatar avatar-sm me-3" alt="user2">
                                                        </div>
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <h6 class="mb-0 text-sm">{{ $user->name }}</h6>
                                                            <p class="text-xs text-secondary mb-0">{{ $user->email }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0">{{ $user->nisn }}</p>
                                            </td>
                                            <td class="">
                                                <p class="text-xs font-weight-bold mb-0 text-uppercase">{{ (isset($user->sekolah->name)) ? $user->sekolah->name : "" }}</p>
                                            </td>
                                            <td>
                                                <span class="text-secondary text-xs font-weight-bold text-uppercase">{{ $user->role }}</span>
                                            </td>
                                            <td>
                                                <span class="text-secondary text-xs font-weight-bold">{{ Carbon::parse($user->awal_pkl)->format('d M Y') }} - {{ Carbon::parse($user->akhir_pkl)->format('d M Y') }}</span>
                                            </td>
                                            <td style="width: 8px;">
                                                <a href="#" class="text-secondary font-weight-bold text-xs"
                                                    data-toggle="modal" data-target="#editSiswa{{ $user->id }}"
                                                    style="margin-right: 4px">
                                                    <i class="fa-solid fa-pencil"
                                                        style="color: #0d6efd; font-size: 16px;"></i>
                                                </a>
                                            </td>
                                            <td>
                                                <form action="{{ route('admin.siswa.delete', ['user' => $user->id]) }}" method="post" id="myForm-{{ $i }}"
                                                    onsubmit="konfirmHapus(event, {{ $i }})">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" style="background: none; border: none;">
                                                        <i class="fa-solid fa-trash"
                                                            style="font-size: 16px; color: #dc3545;"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="6"><center>Tidak ada data</center></td>
                                        </tr>
                                    @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="fixed-plugin">
                <div class="card shadow-lg">
                    <div class="card-header pb-0 pt-3 ">
                        <div class="float-start">
                            <h5 class="mt-3 mb-0">Hummarules</h5>

                        </div>
                        <div class="float-end mt-4">
                            <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
                                <i class="fa fa-close"></i>
                            </button>
                        </div>
                        <!-- End Toggle Button -->
                    </div>
                    <hr class="horizontal dark my-1">
                    <div class="card-body pt-sm-3 pt-0 overflow-auto">
                        <!-- Sidenav Type -->
                        <div class="mt-3">
                            <h6 class="mb-0">Sidebar</h6>
                            <p class="text-sm">Pilih tema sidebar.</p>
                        </div>
                        <div class="d-flex">
                            <button class="btn bg-gradient-primary w-100 px-3 mb-2 active me-2" data-class="bg-white"
                                onclick="sidebarType(this)">White</button>
                            <button class="btn bg-gradient-primary w-100 px-3 mb-2" data-class="bg-default"
                                onclick="sidebarType(this)">Dark</button>
                        </div>
                        <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
                        <!-- Navbar Fixed -->
                        <div class="d-flex my-3">
                            <h6 class="mb-0">Navbar Fixed</h6>
                            <div class="form-check form-switch ps-0 ms-auto my-auto">
                                <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed"
                                    onclick="navbarFixed(this)">
                            </div>
                        </div>
                        <hr class="horizontal dark my-sm-4">
                        <div class="mt-2 mb-5 d-flex">
                            <h6 class="mb-0">Terang / Gelap</h6>
                            <div class="form-check form-switch ps-0 ms-auto my-auto">
                                <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version"
                                    onclick="darkMode(this)">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('template-admin.footer')
            @include('template-admin.script')
    </body>
</html>
