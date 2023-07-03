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

<body>
    <style>
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
    </style>
    <div class="preloader">
        <div class="loading">
            <img src="/siswa/assets/img/Ellipsis-2s-200px.gif" alt="" />
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM="
        crossorigin="anonymous"></script>
    <script>
        $(window).on('load', function() {
            $(".preloader").delay(1000).fadeOut('slow');
        });
    </script>
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
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li class="dropdown"><a href="#peraturanMagang" class="nav-link scrollto"><span>Peraturan</span>
                            <i></i></a>
                    </li>
                    <li><a href="#" class="nav-link scrollto" data-bs-toggle="modal"
                            data-bs-target="#exampleModalizin"><span>Izin
                                siswa</span></a></li>
                    </li>
                    <li><a href="#jadwalpiket" class="nav-link scrollto"><span>Jadwal piket</span></a></li>
                    </li>
                    <li class="dropdown"><a href="#" class="nav-link scrollto"><span>Laporan</span> <i
                                class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModalhariansiswa"
                                    class="nav-link scrollto">Laporan harian siswa</a></li>
                            <li><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModalpembimbing"
                                    class="nav-link scrollto">Laporan ke pembimbing</a></li>
                            <li><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModaljurnal"
                                    class="nav-link scrollto">Laporan
                                    jurnal</a></li>
                        </ul>
                    </li>
                    <li><a class="nav-link" href="#kontak" class="nav-link scrollto">Kontak</a></li>
                    <li class="dropdown"><img src="/siswa/assets/img/testimonials/testimonials-5.jpg" width="40"
                            height="40" alt="" style="border-radius: 100px; margin-left: 24px;">
                        <ul>
                            <li><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                    class="nav-link scrollto">Profil</a></li>
                            <li><a href="javascript:logout()" class="nav-link scrollto">Logout</a></li>
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
                                    <div class="d-flex" style="margin-top: -4%; font-family: ">
                                        <h6 style="margin-left: 8%">12</h6>
                                        <h6 style="margin-left: 25%">30</h6>
                                        <h6 style="margin-left: 30%">15</h6>
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

                    <!-- Include SummerNote JS and CSS -->
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
                    <link rel="stylesheet"
                        href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.css">
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.js"></script>

                    <!-- Initialize SummerNote -->
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
                    <script>
                        function tutup() {
                            document.getElementById('modalTambahJadwal').style.display = 'none';
                        }
                    </script>

                    <button type="submit" class="btn btn-primary btn-sm me-2" style="width: 100px">Submit</button>
                    <button type="button" class="btn btn-danger btn-sm" style="width: 100px"
                        onclick="tutup()">Batal</button>
                </div>
            </div>
        </div>
    </div>

    {{-- end modal --}}

    <!-- Modal -->
    <div class="modal fade font-family-fixed" id="exampleModalizin" tabindex="-1"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <h3>Izin Siswa/Ketua Magang</h3>
                    <hr>
                    <div class="mb-3 justify-content-between">
                        <label for="namaSiswaMagang" class="form-label">Nama siswa/ketua magang</label>
                        <input class="form-control" type="text" id="" value="{{ Auth::user()->name }}"
                        readonly>
                    </div>
                    <div class="mb-3 justify-content-between">
                        <label for="asalSekolahSiswaMagang" class="form-label">Asal sekolah siswa/ketua magang</label>
                        <input class="form-control" type="text" id="asalSekolahSiswaMagang">
                    </div>
                    <div class="mb-3 justify-content-between">
                        <label for="tanggalIzin" class="form-label">Tanggal izin</label>
                        <input class="form-control" type="date" id="tanggalizin" readonly>
                    </div>
                    <div class="mb-3 justify-content-between">
                        <label for="alasanIzin" class="form-label">Alasan izin</label>
                        <select class="form-select" aria-label="Default select example" id="alasanIzin">
                            <option selected disabled>---- Pilih Alasan ----</option>
                            <option value="1">Sakit</option>
                            <option value="2">Acara Keluarga</option>
                            <option value="3">Darurat</option>
                        </select>
                    </div>
                    <div class="mb-3 justify-content-between">
                        <label for="pesan" class="form-label">Masukkan pesan</label>
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Leave a comment here" id="pesan" style="height: 100px"></textarea>
                        </div>
                    </div>
                    <div class="mb-3 justify-content-between">
                        <label for="suratKeterangan" class="form-label">Masukkan surat keterangan</label>
                        <input class="form-control" type="file" id="suratKeterangan">
                    </div>
                    <hr>
                    <button type="submit" class="btn btn-primary btn-sm me-2" style="width: 100px">Submit</button>
                    <button type="button" class="btn btn-danger btn-sm" data-bs-dismiss="modal" aria-label="Close"
                        style="width: 100px">Batal</button>
                </div>
            </div>
        </div>
    </div>
    <!-- end modal -->


    <!-- Modal -->
    <div class="modal fade" id="exampleModalhariansiswa" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <form action="{{ route('jurnal.siswa.store') }}" method="post">
                    @csrf
                    <h3>Laporan harian siswa</h3>
                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                    <hr>
                    <div class="mb-3 justify-content-between">
                        <label for="silahkanpilih" class="form-label">Silahkan pilih</label>
                        <select class="form-select" id="silahkanpilih" aria-label="Default select example" name="kategori">
                            <option selected disabled>---- Pilih Salah Satu ----</option>
                            <option value="Individu">Individu</option>
                            <option value="Kelompok">Kelompok</option>
                        </select>
                    </div>
                    <div class="mb-3 justify-content-between">
                        <label for="namaSiswa" class="form-label">Nama Siswa/tim Project</label>
                        <input class="form-control" type="text" id="namaSiswa" name="nama_siswa">
                    </div>
                    <div class="mb-3 justify-content-between">
                        <label for="tanggal" class="form-label">Tanggal</label>
                        <input class="form-control" type="date" id="tanggal" name="tanggal">
                    </div>
                    <div class="mb-3 justify-content-between">
                        <label for="linkdokumen" class="form-label">Link dokumen</label>
                        <input class="form-control" type="text" id="linkdokumen" placeholder="http://...." name="link_dokumen">
                    </div>
                    <hr>
                    <button type="submit" class="btn btn-primary btn-sm me-2" style="width: 100px">Submit</button>
                    <button type="button" class="btn btn-danger btn-sm" data-bs-dismiss="modal" aria-label="Close"
                        style="width: 100px">Batal</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- end modal --}}

    <!-- Modal -->
    {{-- <div class="modal fade" id="exampleModalketuamagang" tabindex="-1" aria-labelledby="exampleModalLabel"
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
                  <label for="" class="form-label">Masukkan tanggal pengerjaan  </label>
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
</div> --}}
    {{-- end modal --}}
    <style>
        body a {
            text-decoration: none;
        }
    </style>
    <!-- Modal -->
    <div class="modal fade" id="exampleModalpembimbing" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <h3>Laporan ke pembimbing</h3>
                    <hr>
                    <div class="mb-3 justify-content-between">
                        <label for="namaSiswaMagang" class="form-label">Nama siswa magang</label>
                        <input class="form-control" type="text" id="namaSiswa" value="{{ Auth::user()->name }}"
                        readonly>
                    </div>
                    <div class="mb-3 justify-content-between">
                        <label for="emailSiswaMagang" class="form-label">Email siswa magang</label>
                        <input class="form-control" type="email" id="" value="{{ Auth::user()->email }}"
                        readonly>
                    </div>
                    <div class="mb-3 justify-content-between">
                        <label for="tanggalReport" class="form-label">Masukkan tanggal report</label>
                        <input type="date" class="form-control" id="tanggalReport"
                        name="tanggal_dikirim" readonly>

                    <div class="mb-3 justify-content-between">
                        <label for="isiPesan" class="form-label">Isi pesan</label>
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Leave a comment here" id="isiPesan" style="height: 100px"></textarea>
                        </div>
                        <hr>
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm me-2" style="width: 100px">Submit</button>
                    <button type="button" class="btn btn-danger btn-sm" data-bs-dismiss="modal" aria-label="Close"
                        style="width: 100px">Batal</button>
                </div>
            </div>
        </div>
    </div>
    <!-- end modal -->

    <!-- Modal -->
    <div class="modal fade" id="exampleModaljurnal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">

                    <h3 class="text-uppercase">jurnal siswa</h3>
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
                    <button type="button" class="btn btn-danger btn-sm" style="width: 100px"
                        data-bs-dismiss="modal" aria-label="Close">Batal</button>
                </div>
            </div>
        </div>
    </div>

    {{-- end modal --}}

    </div>
    </div>
    </div>


    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    <h1 data-aos="fade-up">Selamat Datang di Hummarules</h1>
                    <h2 data-aos="fade-up" data-aos-delay="400">We aree team of talented designers making websites
                        with
                        Bootstrap
                    </h2>
                    <!-- <div data-aos="fade-up" data-aos-delay="800">
                <a href="#about" class="btn-get-started scrollto">Get Started</a>
              </div> -->
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
                    <img src="/siswa/assets/img/hero-img.png" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <main id="main">

        <style>
            .horizontal-list li {
                list-style-type: none;
                display: inline-block;
                margin-right: 100px;
                /* Untuk memberikan jarak antara elemen */
            }

            /* Gaya untuk tampilan jam */
            #clock {
                position: absolute;
                font-family: Arial, sans-serif;
                font-size: 18px;
                text-align: left;
                margin-left: 20px;
                margin-top: 19px;
            }
        </style>
        <!-- ======= Clients Section ======= -->
        <section id="clients" class="clients clients">
            <div id="clock"></div>
            <marquee id="myMarquee" behavior="scroll" direction="left" class="pengumuman">
                <ul class="horizontal-list" style="margin-top: 18px;">
                    @foreach ($pengumumans as $p)
                        <li><a href="{{ route('pengumuman.detailsiswa', ['pengumuman' => $p->id]) }}"
                                style="color: #222222; margin-right: 10px;">{{ $p->tanggal_pengumuman }}
                                <strong>{{ $p->judul_pengumuman }}</strong></a></li>
                    @endforeach
                </ul>
            </marquee>

            <script>
                var myMarquee = document.getElementById('myMarquee');

                myMarquee.addEventListener('mouseover', function() {
                    this.stop();
                });

                myMarquee.addEventListener('mouseout', function() {
                    this.start();
                });
            </script>


            </div>
        </section><!-- End Clients Section -->

        <!-- ======= About Us Section ======= -->
        <section id="about" class="about">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>About Us</h2>
                </div>

                <div class="row content">
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="150">
                        <p>
                            Selamat datang di situs kami yang didedikasikan untuk memudahkan Anda dalam mengakses
                            peraturan
                            magang,
                            laporan para siswa magang dalam keseharianya dan mengurus izin-izin yang dibutuhkan oleh
                            para
                            siswa. Kami
                            berkomitmen untuk menyediakan informasi yang jelas dan lengkap tentang kegiatan magang serta
                            prosedur yang
                            harus diikuti dalam mendapatkan izin yang diperlukan.
                        </p>
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-up" data-aos-delay="300">
                        <p>
                            Dengan pengalaman kami dalam memfasilitasi program magang, kami berharap dapat membantu Anda
                            dalam memahami
                            aturan-aturan yang berlaku dan menyediakan panduan yang berguna untuk a keperluan Anda. Jika
                            Anda memiliki
                            pertanyaan lebih lanjut atau membutuhkan bantuan, jangan ragu untuk menghubungi kami. Terima
                            kasih telah
                            mengunjungi situs kami!.
                        </p>
                    </div>
                </div>

            </div>
        </section><!-- End About Us Section anis-->

        <!-- ======= Services Section ======= -->
        <section id="peraturanMagang" class="services">
            <div class="container">

                <div class="section-title" data-aos="fade-up" style="margin-bottom: -50px;">
                    <h2>Peraturan</h2>
                </div>
                <style>
                    .resume .resume-item::before {
                        content: "";
                        position: absolute;
                        width: 16px;
                        height: 16px;
                        border-radius: 50%;
                        left: -9px;
                        top: 0;
                        background: #fff;
                        border: 2px solid #b4caff;
                        margin-left: 2px;
                        /* Menyesuaikan jarak ke kanan */
                    }

                    .resume .resume-item {
                        padding: 0 0 20px 20px;
                        margin-top: -2px;
                        border-left: 2px solid #0563bb;
                        position: relative;
                        left: 5px;
                        /* Menyesuaikan jarak ke kanan */
                    }
                </style>

                <main id="main" style="width: 100%;">

                    <section id="resume" class="resume">
                        <div class="" data-aos="fade-up">
                            <div class="row" style="margin-bottom: 50px;">
                                <h2></h2>
                                <div class="col-lg-12 justify-content-center">
                                    <h3 class="resume-title"></h3>
                                    <div class="resume-item">
                                        <div class="accordion" id="accordionExample">
                                            <div class="accordion-item mb-2">
                                                <h2 class="accordion-header" id="heading1">
                                                    <button style="margin: 0;padding: 5px; wid"
                                                        class="accordion-button" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapse1"
                                                        aria-expanded="true" aria-controls="collapse1">
                                                        <h6 style="font-weight: bold;" class="text-uppercase">
                                                            PERATURAN BAJU</h6>
                                                    </button>
                                                </h2>
                                                <div id="collapse1" class="accordion-collapse collapse"
                                                    aria-labelledby="heading1" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <div class="program-des">
                                                            <p>Peraturan berpakaian di kantor sangat penting untuk
                                                                menciptakan suasana yang profesional dan representatif.
                                                                Kami memiliki beberapa aturan mengenai berpakaian yang
                                                                diharapkan setiap karyawan patuhi:

                                                                1. Pakaian formal atau semi-formal sangat dianjurkan.
                                                                Setelan jas, blazer, atau dress dengan tampilan yang
                                                                rapi dan sopan akan mencerminkan keseriusan dan
                                                                profesionalisme Anda.

                                                                2. Hindari mengenakan pakaian santai seperti kaos
                                                                oblong, celana pendek, sandal jepit, dan sejenisnya
                                                                kecuali dalam keadaan tertentu yang diizinkan oleh
                                                                manajemen.

                                                                3. Pastikan pakaian yang dikenakan selalu rapi dan
                                                                bersih. Hindari pakaian yang kusut, lusuh, atau tidak
                                                                terawat karena dapat memberikan kesan yang kurang
                                                                profesional.

                                                                Peraturan berpakaian ini bertujuan untuk menciptakan
                                                                lingkungan kerja yang serius, formal, dan memberikan
                                                                kesan yang baik kepada klien, rekan kerja, dan
                                                                pengunjung kantor. Dengan mematuhi peraturan ini, kita
                                                                dapat mencapai citra profesional yang konsisten di
                                                                tempat kerja.
                                                            </p>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="resume-item">
                                        <div class="accordion" id="accordionExample">
                                            <div class="accordion-item mb-2">
                                                <h2 class="accordion-header" id="heading2">
                                                    <button style="margin: 0;padding: 5px;" class="accordion-button"
                                                        type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapse2" aria-expanded="true"
                                                        aria-controls="collapse2">
                                                        <h6 style="font-weight: bold;" class="text-uppercase">
                                                            peraturan piket</h4>
                                                    </button>
                                                </h2>
                                                <div id="collapse2" class="accordion-collapse collapse"
                                                    aria-labelledby="heading2" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <div class="program-des">
                                                            <p>Pada PRA PPDB meliputi:</p>
                                                            <ul>
                                                                <li>Pengambilan PIN <br> calon siswa harus mendaftar
                                                                    untuk
                                                                    mendapatkan PIN. PIN akan
                                                                    digunakan untuk Pendaftaran. PIN hanya ada satu tiap
                                                                    calon siswa</li>
                                                                <div class="bg-warning text-white"
                                                                    style="padding: 5px 0px; text-align: center;">
                                                                    <p>
                                                                        Data yang disiapkan untuk ambil PIN <br>
                                                                        1. Scan KK (terbaca dan jelas) <br>
                                                                        2. Scan SKL (terbaca dan jelas)<br>
                                                                        3. NISN & Tanggal lahir
                                                                    </p>
                                                                </div> <br>
                                                                <li>Latihan Pendaftaran <br> calon siswa yang telah
                                                                    memiliki
                                                                    PIN bisa mengikuti latihan
                                                                    pendaftaran. Tujuannya agar mengetahui menu/alur
                                                                    untuk
                                                                    mendaftar <strong>hanya latihan /
                                                                        belum resmi mendaftar</strong></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="resume-item">
                                        <div class="accordion" id="accordionExample">
                                            <div class="accordion-item mb-2">
                                                <h2 class="accordion-header" id="heading4">
                                                    <button style="margin: 0;padding: 5px;" class="accordion-button"
                                                        type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapse4" aria-expanded="true"
                                                        aria-controls="collapse4">
                                                        <h6 style="font-weight: bold;" class="text-uppercase">
                                                            peraturan di dalam kantor</h4>
                                                    </button>
                                                </h2>
                                                <div id="collapse4" class="accordion-collapse collapse"
                                                    aria-labelledby="heading4"
                                                    data-bs-parent="#accordionFlushExample">
                                                    <div class="accordion-body">
                                                        <div class="program-des">
                                                            <P>Pendaftaran hanya untuk jenjang SMAA</P>
                                                            <p>yang berhak mendaftar: <strong>memiliki PIN dan belum
                                                                    diterima dijalur
                                                                    sebelumnya</strong></p>
                                                            <div class="bg-danger text-white mt-4"
                                                                style="padding: 5px 0px; text-align: center;">
                                                                <p><strong>Pendaftar yang sudah diterima dijalur ini,
                                                                        maka
                                                                        tidak bisa mendaftar pada jalur
                                                                        selanjutnya</strong></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="resume-item">
                                        <div class="accordion" id="accordionExample">
                                            <div class="accordion-item mb-2">
                                                <h2 class="accordion-header" id="heading5">
                                                    <button style="margin: 0;padding: 5px;" class="accordion-button"
                                                        type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapse5" aria-expanded="true"
                                                        aria-controls="collapse5">
                                                        <h6 style="font-weight: bold;" class="text-uppercase">
                                                            peraturan kerapian rambut
                                                            </h4>
                                                    </button>
                                                </h2>
                                                <div id="collapse5" class="accordion-collapse collapse"
                                                    aria-labelledby="heading5"
                                                    data-bs-parent="#accordionFlushExample">
                                                    <div class="accordion-body">
                                                        <div class="program-des">
                                                            <p>Pendaftaran hanya untuk jenjang SMK</p>
                                                            <p>yang berhak mendaftar: <strong>memiliki PIN dan belum
                                                                    diterima dijalur
                                                                    sebelumnya</strong></p>
                                                            <p><strong>Pendaftar memilih 3 Program Keahlian/Jurusan
                                                                    (boleh
                                                                    berbeda Sekolah)</strong></p>
                                                            <p><em>kuota 10% (sekitar 3 anak per kelas)</em></p>
                                                            <div class="bg-danger text-white mt-4"
                                                                style="padding: 5px 0px; text-align: center;">
                                                                <p><strong>Pendaftar yang sudah diterima dijalur ini,
                                                                        maka
                                                                        tidak bisa mendaftar pada jalur
                                                                        selanjutnya</strong></p>
                                                            </div>
                                                            <div class="bg-warning text-white mt-4"
                                                                style="padding: 5px 0px; text-align: center;">
                                                                Pastikan mencetak <strong>Bukti diterima</strong><br>
                                                                <strong>tips:</strong> ikuti grup di Sekolah
                                                            </div>
                                                            <div class="bg-success text-white mt-4"
                                                                style="padding: 5px 0px; text-align: center;">
                                                                Lakukan <strong>Daftar Ulang</strong><br>
                                                                <strong>syarat:</strong> akan disampaikan di grup SMK
                                                                NEGERI
                                                                1 LUMAJANG. <br>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="resume-item">
                                        <div class="accordion" id="accordionExample">
                                            <div class="accordion-item mb-2">
                                                <h2 class="accordion-header" id="heading6">
                                                    <button style="margin: 0;padding: 5px;" class="accordion-button"
                                                        type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapse6" aria-expanded="true"
                                                        aria-controls="collapse6">
                                                        <h6 style="font-weight: bold;">F. TAHAP IV : JALUR ZONASI SMA
                                                            </h4>
                                                    </button>
                                                </h2>
                                                <div id="collapse6" class="accordion-collapse collapse"
                                                    aria-labelledby="heading6"
                                                    data-bs-parent="#accordionFlushExample">
                                                    <div class="accordion-body">
                                                        <div class="program-des">
                                                            <P>Pendaftaran hanya untuk jenjang SMA</P>
                                                            <p>yang berhak mendaftar: <strong>memiliki PIN dan belum
                                                                    diterima dijalur
                                                                    sebelumnya</strong></p>
                                                            <div class="bg-danger text-white mt-4"
                                                                style="padding: 5px 0px; text-align: center;">
                                                                <p><strong>Pendaftar yang sudah diterima dijalur ini,
                                                                        maka
                                                                        tidak bisa mendaftar pada jalur
                                                                        selanjutnya</strong></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="resume-item">
                                        <div class="accordion" id="accordionExample">
                                            <div class="accordion-item mb-2">
                                                <h2 class="accordion-header" id="heading7">
                                                    <button style="margin: 0;padding: 5px;" class="accordion-button"
                                                        type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapse7" aria-expanded="true"
                                                        aria-controls="collapse7">
                                                        <h6 style="font-weight: bold;">G. TAHAP V : JALUR PRESTASI
                                                            NILAI
                                                            AKADEMIK SMK</h4>
                                                    </button>
                                                </h2>
                                                <div id="collapse7" class="accordion-collapse collapse"
                                                    aria-labelledby="heading7"
                                                    data-bs-parent="#accordionFlushExample">
                                                    <div class="accordion-body">
                                                        <div class="program-des">
                                                            <p>Pendaftaran hanya untuk jenjang SMK</p>
                                                            <p>yang berhak mendaftar: <strong>memiliki PIN dan belum
                                                                    diterima dijalur
                                                                    sebelumnya</strong></p>
                                                            <p><strong>Pendaftar memilih 3 Program Keahlian/Jurusan
                                                                    (boleh
                                                                    berbeda Sekolah)</strong></p>
                                                            <p><em>kuota lebih dari 65% (sisa dari tahap
                                                                    sebelumnya)</em>
                                                            </p>
                                                            <p><strong>pastikan memilih jurusan yang sesuai minat dan
                                                                    perhitungkan peluang
                                                                    diterima.</strong></p>

                                                            <div class="bg-danger text-white mt-4"
                                                                style="padding: 5px 0px; text-align: center;">
                                                                <p><strong>Ini jalur terakhir pada PPDB JATIM. untuk
                                                                        yang
                                                                        tidak diterima bisa mencari
                                                                        Sekolah yang belum memenuhi pagu dan langsung ke
                                                                        sekolah tersebut.</strong></p>
                                                            </div>
                                                            <div class="bg-warning text-white mt-4"
                                                                style="padding: 5px 0px; text-align: center;">
                                                                <strong>tips:</strong> ikuti grup di Sekolah
                                                            </div>
                                                            <div class="bg-success text-white mt-4"
                                                                style="padding: 5px 0px; text-align: center;">
                                                                Lakukan <strong>Daftar Ulang</strong><br>
                                                                <strong>syarat:</strong> akan disampaikan di grup SMK
                                                                NEGERI
                                                                1 LUMAJANG. <br>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </section>
                    <!------End Resume-------->
                </main>
            </div>
        </section><!-- End Services Section -->



        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css">
        </head>

        <body>
            <style>
                #jadwal:hover {
                    transform: scale(1.1);
                    transition: .5s;
                }
            </style>
            <section id="jadwalpiket" class="features">
                <div class="container">
                    <div class="section-title" data-aos="fade-up">
                        <h2>Jadwal piket</h2>
                    </div>

                    <div class="row" data-aos="fade-up">
                        <div class="col-lg-9">
                            <h5>Detail Jadwal Piket</h5><br>
                            <p>
                                Selamat datang dalam jadwal piket kami. Untuk menjaga kelancaran tugas dan kedisiplinan,
                                berikut adalah peraturan penting yang harus diikuti oleh semua anggota yang piket:
                            </p>
                            <ol>
                                <li>Waktu Berangkat:</li>
                            </ol>
                            <ul>
                                <li>Waktu maksimal untuk berangkat piket adalah pukul 7:45.</li>
                                <li>Mohon pastikan Anda sudah berada di tempat piket sebelum pukul 7:45.</li>
                                <li>Jika Anda tiba setelah waktu tersebut, akan diberlakukan hukuman sesuai dengan
                                    ketentuan yang berlaku.</li>
                            </ul>
                            <ol start="2">
                                <li>Hukuman untuk Keterlambatan:</li>
                            </ol>
                            <ul>
                                <li>Sanksi dapat berupa pengurangan poin, penundaan cuti, atau tindakan disipliner
                                    lainnya, sesuai dengan kebijakan internal kami.</li>
                                <li>Jika melebihi waktu berangkat maksimal, akan diberlakukan sanksi sesuai dengan
                                    ketentuan yang berlaku.</li>
                                <li>Ketentuan mengenai sanksi akan diberikan kepada anggota piket secara tertulis
                                    sebelum jadwal dimulai.</li>
                            </ul>
                            <ol start="3">
                                <li>Pemberitahuan Keterlambatan:</li>
                            </ol>
                            <ul>
                                <li>Jika Anda menghadapi situasi darurat atau keadaan tak terduga yang menyebabkan
                                    keterlambatan, mohon segera menghubungi koordinator piket atau atasan langsung Anda.
                                </li>
                                <li>Mohon memberikan pemberitahuan secepat mungkin agar dapat diambil tindakan yang
                                    sesuai.</li>
                            </ul>
                            <ol start="4">
                                <li>Kedisiplinan dan Tanggung Jawab:</li>
                            </ol>
                            <ul>
                                <li>Selama bertugas piket, diharapkan untuk menjalankan tugas dengan penuh dedikasi dan
                                    profesionalisme.</li>
                                <li>Anda bertanggung jawab untuk menjaga kebersihan, ketertiban, dan keamanan selama
                                    piket.</li>
                                <li>Patuhi aturan dan petunjuk yang telah ditetapkan dan ikuti instruksi dari atasan
                                    dengan penuh tanggung jawab </li>
                            </ul>
                            <p>
                                Terima kasih atas kerjasama Anda dalam mengikuti peraturan jadwal piket kami. Dengan
                                menjaga disiplin dan tepat waktu, kita dapat menciptakan lingkungan kerja yang efisien
                                dan profesional.
                            </p>
                        </div>

                        <div class="col-lg-3 col-md-4 justify-content-end" data-aos="fade-up" data-aos-delay="500">
                            <div class="icon-box">
                                <a href="/siswa/assets/img/portfolio/jadwal1.jpeg" data-lightbox="jadwal"
                                    data-title="">
                                    <img src="/siswa/assets/img/portfolio/jadwal1.jpeg" id="jadwal" alt=""
                                        class="img-fluid rounded">
                                </a>
                            </div>
                            <div class="icon-box">
                                <a href="/siswa/assets/img/portfolio/jadwal2.jpeg" id="jadwal"
                                    data-lightbox="jadwal" data-title="">
                                    <img src="/siswa/assets/img/portfolio/jadwal2.jpeg" alt=""
                                        class="img-fluid rounded">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>
            <script>
                lightbox.option({
                    'resizeDuration': 200,
                    'wrapAround': true
                });
            </script>
        </body>

</html>





<!-- ======= Testimonials Section ======= -->
{{-- <section id="testimonials" class="testimonials section-bg">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Testimonials</h2>
                    <p>Magnam dolores commodi suscipit eum quidem consectetur velit</p>
                </div>

                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img"
                                        alt="">
                                    <h3>Saul Goodman</h3>
                                    <h4>Ceo &amp; Founder</h4>
                                    <p>
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        Proin iaculis purus consequat sem cure digni ssim donec porttitora entum
                                        suscipit
                                        rhoncus. Accusantium
                                        quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img"
                                        alt="">
                                    <h3>Sara Wilsson</h3>
                                    <h4>Designer</h4>
                                    <p>
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        Export tempor illum tamen malis malis eram quae irure esse labore quem cillum
                                        quid
                                        cillum eram malis
                                        quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim
                                        culpa.
                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div><!-- End testimonial item --> --}}

{{-- <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img"
                                        alt="">
                                    <h3>Jena Karlis</h3>
                                    <h4>Store Owner</h4>
                                    <p>
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem
                                        veniam duis minim
                                        tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div><!-- End testimonial item --> --}}

{{-- <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img"
                                        alt="">
                                    <h3>Matt Brandon</h3>
                                    <h4>Freelancer</h4>
                                    <p>
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim
                                        fugiat minim velit
                                        minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore
                                        illum veniam.
                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div><!-- End testimonial item --> --}}

{{-- <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img"
                                        alt="">
                                    <h3>John Larson</h3>
                                    <h4>Entrepreneur</h4>
                                    <p>
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor
                                        noster
                                        veniam enim culpa
                                        labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore
                                        nisi
                                        cillum quid.
                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div><!-- End testimonial item --> --}}

{{-- </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section><!-- End Testimonials Section --> --}}

<!-- ======= Portfolio Section ======= -->
{{-- <section id="portfolio" class="portfolio">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Portfolio</h2>
                    <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem</p>
                </div>

                <div class="row" data-aos="fade-up" data-aos-delay="200">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">All</li>
                            <li data-filter=".filter-app">App</li>
                            <li data-filter=".filter-card">Card</li>
                            <li data-filter=".filter-web">Web</li>
                        </ul>
                    </div>
                </div>

                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="400">

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="/siswa/assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>App 1</h4>
                                <p>App</p>
                                <div class="portfolio-links">
                                    <a href="/siswa/assets/img/portfolio/portfolio-1.jpg"
                                        data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i
                                            class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i
                                            class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="/siswa/assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Web 3</h4>
                                <p>Web</p>
                                <div class="portfolio-links">
                                    <a href="/siswa/assets/img/portfolio/portfolio-2.jpg"
                                        data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i
                                            class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i
                                            class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="/siswa/assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>App 2</h4>
                                <p>App</p>
                                <div class="portfolio-links">
                                    <a href="/siswa/assets/img/portfolio/portfolio-3.jpg"
                                        data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i
                                            class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i
                                            class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="/siswa/assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Card 2</h4>
                                <p>Card</p>
                                <div class="portfolio-links">
                                    <a href="/siswa/assets/img/portfolio/portfolio-4.jpg"
                                        data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i
                                            class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i
                                            class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="/siswa/assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Web 2</h4>
                                <p>Web</p>
                                <div class="portfolio-links">
                                    <a href="/siswa/assets/img/portfolio/portfolio-5.jpg"
                                        data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i
                                            class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i
                                            class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="/siswa/assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>App 3</h4>
                                <p>App</p>
                                <div class="portfolio-links">
                                    <a href="/siswa/assets/img/portfolio/portfolio-6.jpg"
                                        data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i
                                            class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i
                                            class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="/siswa/assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Card 1</h4>
                                <p>Card</p>
                                <div class="portfolio-links">
                                    <a href="/siswa/assets/img/portfolio/portfolio-7.jpg"
                                        data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1"><i
                                            class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i
                                            class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="/siswa/assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Card 3</h4>
                                <p>Card</p>
                                <div class="portfolio-links">
                                    <a href="/siswa/assets/img/portfolio/portfolio-8.jpg"
                                        data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i
                                            class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i
                                            class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="/siswa/assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Web 3</h4>
                                <p>Web</p>
                                <div class="portfolio-links">
                                    <a href="/siswa/assets/img/portfolio/portfolio-9.jpg"
                                        data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i
                                            class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i
                                            class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Portfolio Section --> --}}

<!-- ======= Team Section ======= -->
{{-- <section id="team" class="team section-bg">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Team</h2>
                    <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem</p>
                </div>

                <div class="row">

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up" data-aos-delay="100">
                            <div class="member-img">
                                <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Walter White</h4>
                                <span>Chief Executive Officer</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up" data-aos-delay="200">
                            <div class="member-img">
                                <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Sarah Jhonson</h4>
                                <span>Product Manager</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up" data-aos-delay="300">
                            <div class="member-img">
                                <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>William Anderson</h4>
                                <span>CTO</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up" data-aos-delay="400">
                            <div class="member-img">
                                <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Amanda Jepson</h4>
                                <span>Accountant</span>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Team Section --> --}}

<!-- ======= Pricing Section ======= -->
{{-- <section id="pricing" class="pricing">
            <div class="container">

                <div class="section-title">
                    <h2>Pricing</h2>
                    <p>Sit sint consectetur velit nemo qui impedit suscipit alias ea</p>
                </div>

                <div class="row">

                    <div class="col-lg-4 col-md-6">
                        <div class="box" data-aos="zoom-in-right" data-aos-delay="200">
                            <h3>Free</h3>
                            <h4><sup>$</sup>0<span> / month</span></h4>
                            <ul>
                                <li>Aida dere</li>
                                <li>Nec feugiat nisl</li>
                                <li>Nulla at volutpat dola</li>
                                <li class="na">Pharetra massa</li>
                                <li class="na">Massa ultricies mi</li>
                            </ul>
                            <div class="btn-wrap">
                                <a href="#" class="btn-buy">Buy Now</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mt-4 mt-md-0">
                        <div class="box recommended" data-aos="zoom-in" data-aos-delay="100">
                            <h3>Business</h3>
                            <h4><sup>$</sup>19<span> / month</span></h4>
                            <ul>
                                <li>Aida dere</li>
                                <li>Nec feugiat nisl</li>
                                <li>Nulla at volutpat dola</li>
                                <li>Pharetra massa</li>
                                <li class="na">Massa ultricies mi</li>
                            </ul>
                            <div class="btn-wrap">
                                <a href="#" class="btn-buy">Buy Now</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
                        <div class="box" data-aos="zoom-in-left" data-aos-delay="200">
                            <h3>Developer</h3>
                            <h4><sup>$</sup>29<span> / month</span></h4>
                            <ul>
                                <li>Aida dere</li>
                                <li>Nec feugiat nisl</li>
                                <li>Nulla at volutpat dola</li>
                                <li>Pharetra massa</li>
                                <li>Massa ultricies mi</li>
                            </ul>
                            <div class="btn-wrap">
                                <a href="#" class="btn-buy">Buy Now</a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Pricing Section --> --}}

<!-- ======= F.A.Q Section ======= -->
{{-- <section id="faq" class="faq">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Frequently Asked Questions</h2>
                </div>

                <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-5">
                        <i class="ri-question-line"></i>
                        <h4>Non consectetur a erat nam at lectus urna duis?</h4>
                    </div>
                    <div class="col-lg-7">
                        <p>
                            Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non
                            curabitur gravida.
                            Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                        </p>
                    </div>
                </div><!-- End F.A.Q Item-->

                <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                    <div class="col-lg-5">
                        <i class="ri-question-line"></i>
                        <h4>Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque?</h4>
                    </div>
                    <div class="col-lg-7">
                        <p>
                            Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit
                            laoreet id donec
                            ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque
                            elit
                            ullamcorper
                            dignissim.
                        </p>
                    </div>
                </div><!-- End F.A.Q Item-->

                <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                    <div class="col-lg-5">
                        <i class="ri-question-line"></i>
                        <h4>Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi?</h4>
                    </div>
                    <div class="col-lg-7">
                        <p>
                            Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar
                            elementum
                            integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu
                            tincidunt.
                            Lectus urna duis convallis convallis tellus.
                        </p>
                    </div>
                </div><!-- End F.A.Q Item--> --}}

{{-- <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
                    <div class="col-lg-5">
                        <i class="ri-question-line"></i>
                        <h4>Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla?</h4>
                    </div>
                    <div class="col-lg-7">
                        <p>
                            Aperiam itaque sit optio et deleniti eos nihil quidem cumque. Voluptas dolorum accusantium
                            sunt
                            sit enim.
                            Provident consequuntur quam aut reiciendis qui rerum dolorem sit odio. Repellat assumenda
                            soluta
                            sunt
                            pariatur error doloribus fuga.
                        </p>
                    </div>
                </div><!-- End F.A.Q Item-->

                <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="500">
                    <div class="col-lg-5">
                        <i class="ri-question-line"></i>
                        <h4>Tempus quam pellentesque nec nam aliquam sem et tortor consequat?</h4>
                    </div>
                    <div class="col-lg-7">
                        <p>
                            Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est
                            ante
                            in. Nunc vel
                            risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est.
                            Purus
                            gravida quis
                            blandit turpis cursus in
                        </p>
                    </div>
                </div><!-- End F.A.Q Item--> --}}

{{-- </div>
        </section><!-- End F.A.Q Section --> --}}

<!-- ======= Contact Section ======= -->
<section id="kontak" class="contact">
    <div class="container">

        <div class="section-title" data-aos="fade-up">
            <h2>Kontak</h2>
        </div>

        <div class="row">

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="contact-about">
                    <h3>Hummarules</h3>
                    <p>Disini adalah halaman kontak dari website hummarules. Disini terdapat alamat kantor,
                        alamat
                        email, nomor
                        telepon, twitter, facebook, instagram, linkedin</p>
                    <div class="social-links">
                        <a href="https://twitter.com/hummasoft" class="twitter"><i class="bi bi-twitter"></i></a>
                        <a href="https://www.facebook.com/hummasoft/?locale=id_ID" class="facebook"><i
                                class="bi bi-facebook"></i></a>
                        <a href="https://www.instagram.com/hummasoft/?hl=id/" class="instagram"><i
                                class="bi bi-instagram"></i></a>
                        <a href="https://id.linkedin.com/in/hummasoft-technology-2476a8241" class="linkedin"><i
                                class="bi bi-linkedin"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
                <div class="info">
                    <div>
                        <i class="ri-map-pin-line"></i>
                        <p>{{ isset($kontak->alamat_kantor) ? $kontak->alamat_kantor : 'Jl.' }}</p>
                    </div>

                    <div>
                        <i class="ri-mail-send-line"></i>
                        <p>{{ isset($kontak->email) ? $kontak->email : '@' }}</p>
                    </div>
                    <div>
                        <i class="ri-phone-line"></i>
                        <p>{{ isset($kontak->nomor_telepon) ? $kontak->nomor_telepon : '0' }}</p>
                    </div>

                </div>
            </div>

            <div class="col-lg-5 col-md-12" data-aos="fade-up" data-aos-delay="300">
                <form class="php-email-form" method="POST">
                    @csrf
                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}" id="user_idFeedback">
                    <div class="form-group">
                        <input type="text" class="form-control" id="nameFeedback" placeholder="Your Name"
                            value="{{ Auth::user()->name }}" readonly>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="emailFeedback" placeholder="Your Email"
                            value="{{ Auth::user()->email }}" readonly>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="pesan" rows="5" placeholder="Message" id="pesanFeedback" required></textarea>
                    </div>
                    <center>
                        <button type="button" onclick="kirim()">Kirim pesan</button>
                    </center>
                    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
                    <script>
                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        });

                        function kirim() {
                            console.log($('#user_idFeedback').val())
                            console.log($('#pesanFeedback').val())
                            $.ajax({
                                type: 'POST',
                                url: '/feedback/kirim',
                                data: {
                                    user_id: $('#user_idFeedback').val(),
                                    pesan: $('#pesanFeedback').val(),
                                },
                                success: function(response) {
                                    // console.log(response)
                                    if (response === 'success') {
                                        Swal.fire(
                                            'Berhasil!',
                                            'Berhasil mengirim!',
                                            'success'
                                        )
                                        $('#pesanFeedback').val('');
                                    } else {
                                        Swal.fire({
                                            icon: 'error',
                                            title: 'Oops...',
                                            text: 'Gagal mengirim!',
                                        })
                                        $('#pesanFeedback').val('');

                                    }
                                }
                            })
                        }
                    </script>
                </form>
            </div>

        </div>

    </div>
</section><!-- End Contact Section -->

</main><!-- End #main -->
@include('template-siswa.footer')
@include('template-siswa.script')
</body>

</html>
