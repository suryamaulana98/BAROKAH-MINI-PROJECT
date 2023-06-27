<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Ketua Magang</title>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    @include('template-siswa.head')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">

            <div class="logo">
                <h1><a href="index.html"><img src="/siswa/assets/img/hummarules-removebg-icikiwr.png" alt=""
                            class="img-fluid"></a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto" href="{{ route('ketua.dashboard') }}">Home</a></li>
                    <li class="dropdown"><a href="#peraturanMagang"><span>Peraturan</span> <i
                                class="bi bi-chevron-down"></i></a>
                        <ul>

                            <li><a href="#">Buat peraturan</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#"><span>Izin siswa</span> <i
                                class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#">Detail izin</a></li>
                            <li><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModalizin">Buat
                                    izin</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#jadwalpiket"><span>Jadwal piket</span> <i
                                class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModaljadwal">Tambah
                                    jadwal piket</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#"><span>Laporan</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li class="dropdown"><a href="#"><span>Laporan harian siswa</span> <i
                                        class="bi bi-chevron-right"></i></a>
                                <ul>
                                    <li><a href="#">Detail Laporan</a></li>
                                    <li><a href="#"
                                            data-bs-toggle="modal"data-bs-target="#exampleModalbuatlaporan">Buat
                                            Laporan</a></li>
                                </ul>
                            </li>
                            <li><a href="#"
                                    data-bs-toggle="modal"data-bs-target="#exampleModalketuamagang">Laporan ketua
                                    magang</a></li>
                            <li><a href="#" data-bs-toggle="modal"
                                    data-bs-target="#exampleModalpembimbing">Laporan ke pembimbing</a></li>
                            <li><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModaljurnal">Laporan
                                    jurnal</a></li>
                        </ul>
                    </li>
                    <li><a class="nav-link" href="{{ route('ketua.dashboard') }}#kontak">Kontak</a></li>
                    <li class="dropdown"><img src="/siswa/assets/img/testimonials/testimonials-5.jpg" width="40"
                            height="40" alt="" style="border-radius: 100px; margin-left: 24px;">
                        <ul>
                            <li><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">Profil</a></li>
                            <li><a href="{{ route('logout') }}">Logout</a></li>
                        </ul>
                    </li>
                    <!-- <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
              <li><a class="getstarted scrollto" href="#about">Get Started</a></li> -->
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <style>
        .sakit {
            font-size: 12px;
            color: white;
            margin-top: 10px;
            background-color: #FF3500;
            padding: 1% 3%;
            /* Sesuaikan padding dengan ukuran yang diinginkan */
            display: inline-block;
            /* Mengubah display menjadi inline-block */
            border-radius: 30px;
            background: #FF3500;
        }

        .acara {
            font-size: 12px;
            color: white;
            margin-top: 10px;
            background-color: #516BE0;
            padding: 1% 3%;
            /* Sesuaikan padding dengan ukuran yang diinginkan */
            display: inline-block;
            /* Mengubah display menjadi inline-block */
            border-radius: 30px;
            background: #516BE0;
        }

        .darurat {
            font-size: 12px;
            color: white;
            margin-top: 10px;
            background-color: #28B62E;
            padding: 1% 3%;
            /* Sesuaikan padding dengan ukuran yang diinginkan */
            display: inline-block;
            /* Mengubah display menjadi inline-block */
            border-radius: 30px;
            background: #28B62E;
        }

        #nama {
            font-size: 20px;
        }

        /* Media queries untuk tampilan responsif */
        @media screen and (max-width: 576px) {

            .sakit,
            .acara,
            .darurat {
                font-size: 10px;
                /* Ukuran font lebih kecil pada perangkat dengan lebar layar maksimal 576px atau lebih kecil */
                padding: 1% 3%;
                /* Padding lebih kecil pada perangkat dengan lebar layar maksimal 576px atau lebih kecil */
            }

            #nama {
                font-size: 16px;
            }
        }
    </style>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="d-flex flex-column align-items-start">
                        <div class="d-flex">
                            <img src="/siswa/assets/img/testimonials/testimonials-5.jpg" width="35%" alt=""
                                style="border-radius: 10%;" class="me-3">
                            <div>
                                <h5 class="fw-bold me-5 text-wrap text-break" id="nama">Reno
                                    Gunawan Assegaf</h5>

                                <div class="d-flex flex-wrap">
                                    <p class="mb-0 me-3" style="font-size: 12px">
                                        SMKN 1 LUMAJANG</p>
                                    <p class="mb-0" style="font-size: 12px">
                                        18489179065</p>
                                </div>
                                <div class="mt-3"
                                    style="width: 105%; height: 95px; background-color: #F1F5FB; border-radius: 3%;">
                                    <p class="ms-1" style="font-size: 12px; opacity: 0.5; color: #444444;">
                                        Detail Izin</p>
                                    <div class="d-flex" style="margin-top: -20px">
                                        <p class="sakit ms-2 me-3 lh-2 fw-bold">
                                            Sakit</p>
                                        <p class="acara me-3 fw-bold">Acara
                                            Keluarga</p>
                                        <p class="darurat fw-bold">Hal Darurat</p>
                                    </div>
                                    <div class="d-flex" style="margin-top: -4%">
                                        <h6 style="margin-left: 8%">12</h6>
                                        <h6 style="margin-left: 25%">30</h6>
                                        <h6 style="margin-left: 32%">15</h6>
                                    </div>
                                </div>
                            </div>
                            <i class="fas fa-xmark" data-bs-dismiss="modal" aria-label="Close"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal untuk laporan izin siswa -->
    <div class="modal fade" id="exampleModalizin" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    {{-- okeee --}}
                    <h3>Izin Siswa</h3>
                    <hr>
                    <div class="mb-3 justify-content-between">
                        <label for="" class="form-label">Nama Siswa</label>
                        <input class="form-control" type="text" id="" value="{{ Auth::user()->name }}"
                            readonly>
                    </div>

                    <div class="mb-3 justify-content-between">
                        <label for="" class="form-label">Asal Sekolah</label>
                        <input class="form-control" type="" id="">
                    </div>
                    <div class="mb-3 justify-content-between">
                        <label for="" class="form-label">Tanggal izin</label>
                        <input class="form-control" type="date" id="tanggalIzinSiswa" readonly>
                        <script>
                            // Mendapatkan elemen input tanggal
                            var inputDateIzinSiswa = document.getElementById('tanggalIzinSiswa');

                            // Mendapatkan tanggal sekarang
                            var currentDate = new Date();

                            // Mengubah nilai atribut "value" pada elemen input tanggal menjadi tanggal sekarang
                            var year = currentDate.getFullYear();
                            var month = ('0' + (currentDate.getMonth() + 1)).slice(-2);
                            var day = ('0' + currentDate.getDate()).slice(-2);
                            var formattedDate = year + '-' + month + '-' + day;
                            inputDateIzinSiswa.value = formattedDate;
                        </script>
                    </div>
                    <div class="mb-3 justify-content-between">
                        <label for="" class="form-label">Alasan Izin</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected disabled>---- Pilih Alasan ----</option>
                            <option value="1">Sakit</option>
                            <option value="2">Acara Keluarga</option>
                            <option value="3">Darurat</option>
                        </select>
                    </div>
                    <div class="mb-3 justify-content-between">
                        <label for="" class="form-label">Masukan Pesan</label>
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                        </div>
                    </div>
                    <div class="mb-3 justify-content-between">
                        <label for="formFile" class="form-label">Masukkan Surat Keterangan</label>
                        <input class="form-control" type="file" id="formFile">
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm me-2" style="width: 100px">Submit</button>
                    <button type="button" class="btn btn-danger btn-sm" style="width: 100px">Batal</button>
                </div>
            </div>
        </div>
    </div>
    {{-- end modal --}}

    <!-- Modal -->
    <div class="modal fade" id="exampleModaljadwal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true" id="modalTambahJadwal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">

                    <h3>Tambah jadwal piket</h3>
                    <hr>
                    <div class="mb-3 justify-content-between">
                        <label for="formFile" class="form-label">Tambah jadwal piket pagi</label>
                        <input class="form-control" type="file" id="formFile">
                    </div>

                    <div class="mb-3">
                        <label for="formFileMultiple" class="form-label">Tambah jadwal piket sore</label>
                        <input class="form-control" type="file" id="formFileMultiple" multiple>
                    </div>

                    <div class="mb-3">
                        <label for="summerNoteInput" class="form-label">Deskripsi detail piket</label>
                        <textarea class="form-control" id="summerNoteInput"></textarea>
                    </div>
                    <!-- include libraries(jQuery, bootstrap) -->
                    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
                    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
                        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
                    </script>

                    <link rel="stylesheet"
                        href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
                        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
                        crossorigin="anonymous">
                    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
                        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
                    </script>

                    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css"
                        rel="stylesheet">
                    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>

                    <script>
                        $(document).ready(function() {
                            $('#summerNoteInput').summernote({
                                height: 200, // Set the height of the SummerNote input
                                toolbar: [
                                    // [groupName, [list of button]]
                                    ['style', ['bold', 'italic', 'underline', 'clear']],
                                    ['fontsize', ['fontsize']],
                                    ['color', ['color']],
                                    ['para', ['ul', 'ol', 'paragraph']],
                                    ['height', ['height']]
                                ]
                            });
                        });
                    </script>
                    <button type="submit" class="btn btn-primary btn-sm me-2" style="width: 100px">Submit</button>
                    <button type="button" class="btn btn-danger btn-sm" style="width: 100px">Batal</button>
                </div>
            </div>
        </div>
    </div>
    {{-- end modal --}}

    <!-- Modal -->
    <div class="modal fade" id="exampleModalbuatlaporan" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">

                    <h3>Laporan harian siswa</h3>
                    <hr>
                    <div class="mb-3 justify-content-between">
                        <label for="silahkanpilih" class="form-label">Silahkan pilih</label>
                        <select class="form-select" id="silahkanpilih" aria-label="Default select example">
                            <option selected disabled>---- Pilih Salah Satu ----</option>
                            <option value="1">Individu</option>
                            <option value="2">Kelompok</option>
                        </select>
                    </div>
                    <div class="mb-3 justify-content-between">
                        <label for="namaSiswa" class="form-label">Nama Siswa/Tim Project</label>
                        <input class="form-control" type="text" id="namaSiswa">
                    </div>
                    <div class="mb-3 justify-content-between">
                        <label for="tanggal" class="form-label">Tanggal</label>
                        <input class="form-control" type="date" id="tanggalLaporanHarianSiswa" readonly>
                        <script>
                            // Mendapatkan elemen input tanggal
                            var inputDateLaporanHarianSiswa = document.getElementById('tanggalLaporanHarianSiswa');

                            // Mendapatkan tanggal sekarang
                            var currentDate = new Date();

                            // Mengubah nilai atribut "value" pada elemen input tanggal menjadi tanggal sekarang
                            var year = currentDate.getFullYear();
                            var month = ('0' + (currentDate.getMonth() + 1)).slice(-2);
                            var day = ('0' + currentDate.getDate()).slice(-2);
                            var formattedDate = year + '-' + month + '-' + day;
                            inputDateLaporanHarianSiswa.value = formattedDate;
                        </script>
                    </div>
                    <div class="mb-3 justify-content-between">
                        <label for="linkdokumen" class="form-label">Link dokumen</label>
                        <input class="form-control" type="text" id="linkdokumen" placeholder="http://....">
                    </div>

                    <button type="submit" class="btn btn-primary btn-sm me-2" style="width: 100px">Submit</button>
                    <button type="button" class="btn btn-danger btn-sm" style="width: 100px">Batal</button>
                </div>
            </div>
        </div>
    </div>
    {{-- end modal --}}
    <!-- Modal -->
    <div class="modal fade" id="exampleModalketuamagang" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">

                    <h3>Laporan ketua magang</h3>
                    <hr>
                    <div class="mb-3 justify-content-between">
                        <label for="" class="form-label">Nama Ketua Magang</label>
                        <input class="form-control" type="text" id="" value="{{ Auth::user()->name }}"
                            readonly>
                    </div>
                    <div class="mb-3 justify-content-between">
                        <label for="" class="form-label">Tanggal pengerjaan </label>
                        <input class="form-control" type="date" id="tanggalLaporanKetuaMagang" readonly>
                        <script>
                            // Mendapatkan elemen input tanggal
                            var tanggalLaporanKetuaMagang = document.getElementById('tanggalLaporanKetuaMagang');

                            // Mendapatkan tanggal sekarang
                            var currentDate = new Date();

                            // Mengubah nilai atribut "value" pada elemen input tanggal menjadi tanggal sekarang
                            var year = currentDate.getFullYear();
                            var month = ('0' + (currentDate.getMonth() + 1)).slice(-2);
                            var day = ('0' + currentDate.getDate()).slice(-2);
                            var formattedDate = year + '-' + month + '-' + day;
                            tanggalLaporanKetuaMagang.value = formattedDate;
                        </script>
                    </div>
                    <div class="mb-3 justify-content-between">
                        <label for="" class="form-label">Masukkan link pekerjaan</label>
                        <input class="form-control" type="" id="" placeholder="http://....">
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm me-2" style="width: 100px">Submit</button>
                    <button type="button" class="btn btn-danger btn-sm" style="width: 100px">Batal</button>
                </div>
            </div>
        </div>
    </div>
    {{-- end modal --}}
    <!-- Modal -->
    <div class="modal fade" id="exampleModalpembimbing" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">

                    <h3>Laporan ke pembimbing</h3>
                    <hr>
                    <div class="mb-3 justify-content-between">
                        <label for="" class="form-label">Nama Siswa Magang</label>
                        <input class="form-control" type="text" id="" value="{{ Auth::user()->name }}"
                            readonly>
                    </div>

                    <div class="mb-3 justify-content-between">
                        <label for="" class="form-label">Email Siswa Magang</label>
                        <input class="form-control" type="email" id="" value="{{ Auth::user()->email }}"
                            readonly>
                    </div>
                    <div class="mb-3 justify-content-between">
                        <label for="" class="form-label">Tanggal Report</label>
                        <input type="date" class="form-control" id="tanggalLaporanPembimbing"
                            name="tanggal_dikirim" readonly>
                        <script>
                            // Mendapatkan elemen input tanggal
                            var tanggalLaporanKetuaMagang = document.getElementById('tanggalLaporanPembimbing');

                            // Mendapatkan tanggal sekarang
                            var currentDate = new Date();

                            // Mengubah nilai atribut "value" pada elemen input tanggal menjadi tanggal sekarang
                            var year = currentDate.getFullYear();
                            var month = ('0' + (currentDate.getMonth() + 1)).slice(-2);
                            var day = ('0' + currentDate.getDate()).slice(-2);
                            var formattedDate = year + '-' + month + '-' + day;
                            tanggalLaporanPembimbing.value = formattedDate;
                        </script>
                    </div>
                    <div class="mb-3 justify-content-between">
                        <label for="" class="form-label">Isi Pesan</label>
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm me-2" style="width: 100px">Submit</button>
                    <button type="button" class="btn btn-danger btn-sm" style="width: 100px">Batal</button>
                </div>
            </div>
        </div>
    </div>
    {{-- end modal --}}
    <!-- Modal -->
    <div class="modal fade" id="exampleModaljurnal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">

                    <h3>jurnal siswa</h3>
                    <hr>
                    <div class="mb-3 justify-content-between">
                        <label for="namaSiswa" class="form-label">Nama Siswa</label>
                        <input class="form-control" type="text" id="namaSiswa" value="{{ Auth::user()->name }}"
                            readonly>
                    </div>
                    <div class="mb-3 justify-content-between">
                        <label for="tanggal" class="form-label">Tanggal</label>
                        <input class="form-control" type="date" id="tanggalJurnalSiswa" readonly>
                        <script>
                            // Mendapatkan elemen input tanggal
                            var tanggalJurnalSiswa = document.getElementById('tanggalJurnalSiswa');

                            // Mendapatkan tanggal sekarang
                            var currentDate = new Date();

                            // Mengubah nilai atribut "value" pada elemen input tanggal menjadi tanggal sekarang
                            var year = currentDate.getFullYear();
                            var month = ('0' + (currentDate.getMonth() + 1)).slice(-2);
                            var day = ('0' + currentDate.getDate()).slice(-2);
                            var formattedDate = year + '-' + month + '-' + day;
                            tanggalJurnalSiswa.value = formattedDate;
                        </script>
                    </div>
                    <div class="mb-3 justify-content-between">
                        <!-- Include SummerNote JS and CSS -->
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
                        <link rel="stylesheet"
                            href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.css">
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.js"></script>

                        <label for="kegiatan" class="form-label">Kegiatan</label>
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Leave a comment here" id="kegiatan" style="height: 100px"></textarea>
                        </div>
                        <script>
                            $(document).ready(function() {
                                $('#kegiatan').summernote({
                                    height: 130, // Set the height of the SummerNote input
                                    toolbar: [
                                        // [groupName, [list of button]]
                                        ['style', ['bold', 'italic', 'underline', 'clear']],
                                        ['fontsize', ['fontsize']],
                                        ['color', ['color']],
                                        ['para', ['ul', 'ol', 'paragraph']],
                                        ['height', ['height']]
                                    ]
                                });
                            });
                        </script>
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm me-2" style="width: 100px">Submit</button>
                    <button type="button" class="btn btn-danger btn-sm" style="width: 100px">Batal</button>
                </div>
            </div>
        </div>
    </div>
    {{-- end modal --}}
    <!-- ======= Hero Section ======= -->

    <section id="oke" class="d-flex"
        style="background: linear-gradient(to bottom, #3498DB 50%, #FFFFFF 50%); width: 100%; margin-top: 70px;">

        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"
                        style="font-weight: bold;font-style: normal; font-weight: 800;
                line-height: 29px; color: #57595C; margin-bottom: 24px;">
                        Buat Peraturan Magang</h5>
                    <form action="{{ route('ketua.peratuan.tambahPeraturan') }}" id="myForm" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="judulPeraturan" style="margin-bottom: 12px;">Judul Peraturan</label>
                            <input type="text" name="judul_peraturan" id="judul_peraturan" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="deskripsi" style="margin-top: 24px; margin-bottom: 12px;">Deskripsi
                                Peraturan</label>
                            <textarea class="form-control" id="deskripsi_peraturan" name="deskripsi_peraturan"></textarea>
                        </div>
                        <button class="btn btn-primary" style="margin-top: 24px;" type="submit">Submit</button>
                        <a href="{{ route('ketua.dashboard') }}" class="btn btn-danger"
                            style="margin-top: 24px;">Batal</a>
                        <hr>
                    </form>
                </div>

                <!-- Masukkan library jQuery -->
                <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

                <script>
                    $(document).ready(function() {
                        $('#myForm').on('submit', function(event) {
                            event.preventDefault();

                            // Ambil data dari formulir
                            var formData = $(this).serialize();

                            // Kirim permintaan Ajax
                            $.ajax({
                                url: "{{ route('ketua.peratuan.tambahPeraturan') }}",
                                type: "POST",
                                data: formData,
                                success: function(response) {
                                    // Tampilkan pesan sukses
                                    alert(response.success);

                                    // Bersihkan formulir
                                    $('#myForm')[0].reset();

                                    // Perbarui tampilan data secara otomatis
                                    $('#myTableBody').load(location.href + ' #myTableBody>*', '');

                                },
                                error: function(xhr, status, error) {
                                    // Tampilkan pesan error jika terjadi kesalahan
                                    alert("Terjadi kesalahan: " + error);
                                }
                            });
                        });
                    });
                </script>


                <table class="table align-items-center mb-0" id="myTable">
                    <thead>
                        <tr>
                            <th class="text-uppercase text-secondary">#</th>
                            <th class="text-uppercase text-secondary font-weight-bolder ps-2">Judul pengumuman</th>
                            <th class="text-uppercase text-secondary font-weight-bolder ps-2">Deskripsi pengumuman</th>
                            <th class="text-uppercase text-secondary font-weight-bolder ps-2" colspan="2">Aksi</th>
                        </tr>
                    </thead>
                    <tbody id="myTableBody">
                        @foreach ($peraturan as $index => $item)
                            <tr>
                                <td>
                                    <p style="font-size: 14px;">{{ $index + 1 }}</p>
                                </td>
                                <td class="">
                                    <p style="font-size: 14px;">{{ $item->judul_peraturan }}</p>
                                </td>
                                <td>
                                    <p style="font-size: 14px;">
                                        {!! strlen($item->deskripsi_peraturan) < 20
                                            ? $item->deskripsi_peraturan
                                            : Str::limit($item->deskripsi_peraturan, 20) . '...' !!}
                                    </p>
                                </td>
                                <td>
                                    <button style="border: none; background: none;"><i
                                            class="fa-solid fa-pen-to-square text-primary"></i></button>
                                </td>
                                <td>
                                    <form action="/delete-peratuan/{{ $item->id }}" method="POST"
                                        class="delete-form" id="delete-form-{{ $item->id }}">
                                        @csrf
                                        @method('delete')
                                        <button style="border: none; background: none; margin-left: -80px;"
                                            type="submit" onclick="confirmDelete(event, {{ $item->id }})"><i
                                                class="fa-solid fa-trash text-danger"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </section>


    @include('template-siswa.script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- Include jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Include Summernote JS and CSS -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.js"></script>

    <!-- Initialize Summernote -->
    <script>
        $(document).ready(function() {
            $('#deskripsi_peraturan').summernote({
                height: 200, // Set the height of the Summernote input
                toolbar: [
                    // [groupName, [list of button]]
                    ['style', ['bold', 'italic', 'underline', 'clear']],
                    ['fontsize', ['fontsize']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['height', ['height']]
                ]
            });
        });
    </script>
    <script>
        function confirmDelete(event, id) {
            event.preventDefault(); // Menghentikan submit form

            Swal.fire({
                title: 'Yakin ingin menghapus data ini?',
                text: 'Data yang dihapus tidak dapat dikembalikan!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, hapus!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Kode untuk melakukan penghapusan data di sini
                    document.getElementById(`delete-form-${id}`)
                        .submit(); // Melanjutkan submit form setelah konfirmasi
                }
            });
        }
    </script>
</body>

</html>
