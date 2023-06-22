<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Siswa Magang</title>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    @include('template-siswa.head')
    <style>
        /* css */
        .preloader {
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            position: fixed;
            background-color: white;
            z-index: 9999;
        }

        .loading {
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            position: absolute;
        }

        .pengumuman ul li a {
            text-decoration: none;
        }

        .connector {
            position: absolute;
            width: 20px;
            /* Sesuaikan dengan lebar yang diinginkan */
            height: 20px;
            /* Sesuaikan dengan tinggi yang diinginkan */
            margin-right: 10px;
            /* Jarak antara simbol bulat dan teks */
            margin-left: -30px;
            margin-top: 100px;
        }

        .connector::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 16px;
            /* Ukuran diameter bulatan */
            height: 16px;
            /* Ukuran diameter bulatan */
            border: 2px solid #0563bb;
            /* Warna dan ketebalan border */
            border-radius: 50%;
            /* Membuat simbol bulat */
        }

        .connector::after {
            content: '';
            position: absolute;
            top: calc(50% + 8px);
            /* Jarak garis vertikal dari bulatan */
            left: 50%;
            transform: translateX(-50%);
            width: 2px;
            /* Lebar garis vertikal */
            height: 100%;
            /* Tinggi garis vertikal */
            background-color: #0563bb;
            /* Warna garis vertikal */
        }
    </style>

</head>

<body style="margin-bottom: 100px;">
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
                    <li><a class="nav-link scrollto" href="{{ route('siswa.dashboard') }}">Home</li></a>
                    <li class="dropdown"><a href="{{ route('siswa.dashboard') }}"
                            class="nav-link scrollto"><span>Peraturan</span></a>
                    </li>
                    <li><a href="#" data-bs-toggle="modal" class="nav-link scrollto"
                            data-bs-target="#exampleModalizin"><span>Izin
                                siswa</span></a></li>
                    </li>
                    <li class="dropdown"><a href="{{ route('siswa.dashboard') }}" class="nav-link scrollto"><span>Jadwal
                                piket</span></a>
                    </li>
                    <li class="dropdown"><a href="#" class="nav-link scrollto"><span>Laporan</span> <i
                                class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModalbuatlaporan"
                                    class="nav-link scrollto">Laporan harian siswa</a></li>
                            <li><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModalpembimbing"
                                    class="nav-link scrollto">Laporan ke pembimbing</a></li>
                            <li><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModaljurnal"
                                    class="nav-link scrollto">Laporan
                                    jurnal</a></li>
                        </ul>
                    </li>
                    <li><a class="nav-link" href="{{ route('siswa.dashboard') }}" class="nav-link scrollto">Kontak</a>
                    </li>
                    <li class="dropdown"><img src="/siswa/assets/img/testimonials/testimonials-5.jpg" width="40"
                            height="40" alt="" style="border-radius: 100px; margin-left: 24px;">
                        <ul>
                            <li><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                    class="nav-link scrollto">Profil</a></li>
                            <li><a href="{{ route('logout') }}" class="nav-link scrollto">Logout</a></li>
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
                    <h3>Izin Siswa/Ketua Magang</h3>
                    <hr>
                    <div class="mb-3 justify-content-between">
                        <label for="" class="form-label">Nama Siswa/Ketua Magang</label>
                        <input class="form-control" type="" id="">
                    </div>

                    <div class="mb-3 justify-content-between">
                        <label for="" class="form-label">Asal Sekolah Siswa/Ketua Magang</label>
                        <input class="form-control" type="" id="">
                    </div>
                    <div class="mb-3 justify-content-between">
                        <label for="" class="form-label">Asal Sekolah Siswa/Ketua Magang</label>
                        <input class="form-control" type="date" id="">
                    </div>
                    <div class="mb-3 justify-content-between">
                        <label for="" class="form-label">Alasan Izin</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected disabled>---- Pilih Alasan ----</option>
                            <option value="1">Sakit></option>
                            <option value="2">Acara Keluarga</option>
                            <option value="3">Darurat</option>
                        </select>
                    </div>
                    <div class="mb-3 justify-content-between">
                        <label for="" class="form-label">Masukkan Pesan</label>
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                        </div>
                    </div>
                    <div class="mb-3 justify-content-between">
                        <label for="formFile" class="form-label">Masukkan Surat Keterangan</label>
                        <input class="form-control" type="file" id="formFile">
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm me-2" style="width: 100px">Submit</button>
                    <button type="button" class="btn btn-danger btn-sm" style="width: 100px"
                        data-bs-dismiss="modal" aria-label="Close">Batal</button>
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
                        <input class="form-control" type="date" id="tanggal">
                    </div>
                    <div class="mb-3 justify-content-between">
                        <label for="linkdokumen" class="form-label">Link dokumen</label>
                        <input class="form-control" type="text" id="linkdokumen" placeholder="http://....">
                    </div>

                    <button type="submit" class="btn btn-primary btn-sm me-2" style="width: 100px">Submit</button>
                    <button type="button" class="btn btn-danger btn-sm" data-bs-dismiss="modal" aria-label="Close"
                        style="width: 100px">Batal</button>
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
                        <input class="form-control" type="" id="">
                    </div>
                    <div class="mb-3 justify-content-between">
                        <label for="" class="form-label">Masukkan tanggal pengerjaan </label>
                        <input class="form-control" type="date" id="">
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
                        <input class="form-control" type="" id="">
                    </div>

                    <div class="mb-3 justify-content-between">
                        <label for="" class="form-label">Email Siswa Magang</label>
                        <input class="form-control" type="" id="">
                    </div>
                    <div class="mb-3 justify-content-between">
                        <label for="" class="form-label">Masukkan Tanggal Report</label>
                        <input class="form-control" type="date" id="">
                    </div>
                    <div class="mb-3 justify-content-between">
                        <label for="" class="form-label">Isi Pesan</label>
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm me-2" style="width: 100px">Submit</button>
                    <button type="button" class="btn btn-danger btn-sm" data-bs-dismiss="modal" aria-label="Close"
                        style="width: 100px">Batal</button>
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
                        <input class="form-control" type="text" id="namaSiswa">
                    </div>
                    <div class="mb-3 justify-content-between">
                        <label for="tanggal" class="form-label">Tanggal</label>
                        <input class="form-control" type="date" id="tanggal">
                    </div>
                    <div class="mb-3 justify-content-between">
                        <label for="kegiatan" class="form-label">Kegiatan</label>
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Leave a comment here" id="kegiatan" style="height: 100px"></textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm me-2" style="width: 100px">Submit</button>
                    <button type="button" class="btn btn-danger btn-sm" data-bs-dismiss="modal" aria-label="Close"
                        style="width: 100px">Batal</button>
                </div>
            </div>
        </div>
    </div>
    {{-- end modal --}}
    <!-- ======= Hero Section ======= -->
    <section id="" class="d-flex" style="width: 100%; margin-top: 70px;">

        <div class="container">
            <h5 class="card-title"
                style="font-weight: bold;font-style: normal; font-weight: 700; font-size: 20px; line-height: 40px; text-transform: uppercase; line-height: 29px; color: #57595C; margin-bottom: 24px;">
                {{ $pengumuman->judul_pengumuman }}</h5>
            @php
                use Carbon\Carbon;
            @endphp
            <p style="font-weight: 400; font-size: 14px; line-height: 25px; color: #888; margin-top: 12px;">Tanggal
                Posting : {{ Carbon::parse($pengumuman->tanggal_pengumuman)->format('d M Y') }}</p>
            <p style="font-weight: 400; font-size: 16px; line-height: 25px; text-align: justify;">
                {!! $pengumuman->isi_pengumuman !!}</p>
            <a href="{{ route('siswa.dashboard') }}" style="float: right;" class="btn btn-primary">Kembali</a>
        </div>
    </section>
    <!-- ======= Footer ======= -->
    <footer id="footer" style="position: fixed; width: 100%; bottom: 0; height:100px;">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-lg-6 text-lg-left text-center">
                    <div class="copyright">
                        &copy; Copyright <strong>Hummarules</strong>. All Rights Reserved
                    </div>
                    <div class="credits">
                        <!-- All the links in the footer should remain intact. -->
                        <!-- You can delete the links only if you purchased the pro version. -->
                        <!-- Licensing information: https://bootstrapmade.com/license/ -->
                        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/vesperr-free-bootstrap-template/ -->
                        Designed by <a href="#">Tim Barokah</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="footer-links text-lg-right text-center pt-2 pt-lg-0">
                        <a href="{{ route('ketua.dashboard') }}" class="scrollto">Home</a>
                        <a href="{{ route('ketua.dashboard') }}#peraturanMagang" class="scrollto">Peraturan Magang</a>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModalizin">Izin Siswa</a>
                        <a href="{{ route('ketua.dashboard') }}#jadwalpiket" class="scrollto">Jadwal Piket</a>
                    </nav>
                </div>
            </div>
        </div>
    </footer><!-- End Footer -->

    @include('template-siswa.script')
</body>

</html>
