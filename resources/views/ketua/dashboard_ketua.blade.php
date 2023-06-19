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
                            <li class="dropdown"><a href="#"><span>Laporan harian siswa</span> <i class="bi bi-chevron-right"></i></a>
                                <ul>
                                  <li><a href="#">Detail Laporan</a></li>
                                  <li><a href="#" data-bs-toggle="modal"data-bs-target="#exampleModalbuatlaporan">Buat Laporan</a></li>
                                </ul>
                              </li>
                            <li><a href="#" data-bs-toggle="modal"data-bs-target="#exampleModalketuamagang">Laporan ketua magang</a></li>
                            <li><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModalpembimbing">Laporan ke pembimbing</a></li>
                            <li><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModaljurnal">Laporan jurnal</a></li>
                        </ul>
                    </li>
                    <li><a class="nav-link" href="#kontak">Kontak</a></li>
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
            font-size: 14px;
            color: white;
            margin-top: 10px;
            background-color: #FF3500;
            padding: 5px 12px;
            /* Sesuaikan padding dengan ukuran yang diinginkan */
            display: inline-block;
            /* Mengubah display menjadi inline-block */
            border-radius: 30px;
            background: #FF3500;
        }

        .acara {
            font-size: 14px;
            color: white;
            margin-top: 10px;
            background-color: #516BE0;
            padding: 5px 12px;
            /* Sesuaikan padding dengan ukuran yang diinginkan */
            display: inline-block;
            /* Mengubah display menjadi inline-block */
            border-radius: 30px;
            background: #516BE0;
        }

        .darurat {
            font-size: 14px;
            color: white;
            margin-top: 10px;
            background-color: #28B62E;
            padding: 5px 12px;
            /* Sesuaikan padding dengan ukuran yang diinginkan */
            display: inline-block;
            /* Mengubah display menjadi inline-block */
            border-radius: 30px;
            background: #28B62E;
        }
    </style>
    <!-- Modal untuk profil siswa-->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" style="width: 108%">
                <div class="modal-body">
                    <div class="d-flex align-items-start">
                        <img src="/siswa/assets/img/testimonials/testimonials-5.jpg" width="165px" alt=""
                            style="border-radius: 10%;">
                        <div class="ms-4">
                            <div class="d-flex">
                                <h5 class="fw-bold" style="margin-left: -12px">Surya Maulana Akhmad
                                </h5>
                                <i class="fa-solid fa-xmark btn btn-danger p-1" data-bs-dismiss="modal"
                                    aria-label="Close" style="background-color: #FF0000; margin-left: 80px "></i>
                            </div>
                            <div class="d-flex flex-column">
                                <div class="d-flex" style="margin-left: -12px">
                                    <p class="me-3 lh-2" style="font-size: 14px">SMKN 1 LUMAJANG</p>
                                    <p class="me-3 lh-2" style="font-size: 14px">18489179065</p>
                                </div>
                                <div class=""
                                    style="width: 105%; height: 95px; background-color: #F1F5FB; border-radius: 5%; margin-left: -12px">
                                    <p style="font-size: 12px; opacity: 0.5; color: #444444;" class="mt-1 ms-1">Detail
                                        Izin
                                    </p>
                                    <div class="d-flex" style="margin-top: -20px">
                                        <p class="sakit ms-2 me-3 lh-2">Sakit</p>
                                        <p class="acara me-3">Acara Keluarga</p>
                                        <p class="darurat">Hal Darurat</p>
                                    </div>
                                </div>
                            </div>
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
                    <button type="button" class="btn btn-danger btn-sm" style="width: 100px">Batal</button>
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
            <div class="container">
                <marquee id="myMarquee" behavior="scroll" direction="left" class="pengumuman">
                    <ul class="horizontal-list" style="margin-top: 18px;">
                        <li><a href="" style="color: #222222;"style="margin-right: 8px;">02 / 11 /
                                2022 <strong>Pengumuman Idul Fitri</strong></a></li>
                        <li><a href="" style="color: #222222;"style="margin-right: 8px;">02 / 11 /
                                2022 <strong>Pengumuman Idul Fitri</strong></a></li>
                        <li><a href="" style="color: #222222;"style="margin-right: 8px;">02 / 11 /
                                2022 <strong>Pengumuman Fitri</strong></a></li>
                    </ul>
                </marquee>

            </div>
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

                <div class="connector"></div> <!-- Garis penghubung dengan simbol bulat -->
                <div class="section-title" data-aos="fade-up" style="margin-bottom: -50px;">
                    <h2>Peraturan</h2>
                </div>

                <main id="main" style="width: 100%;">

                    <section id="resume" class="resume">
                        <div class="" data-aos="fade-up">
                            <div class="row" style="margin-bottom: 50px;">
                                <h2></h2>

                                <div class="col-lg-12">
                                    <h3 class="resume-title"></h3>
                                    <div class="resume-item">
                                        <div class="accordion" id="accordionExample">
                                            <div class="accordion-item mb-2">
                                                <h2 class="accordion-header" id="heading1">
                                                    <button style="margin: 0;padding: 5px;" class="accordion-button"
                                                        type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapse1" aria-expanded="true"
                                                        aria-controls="collapse1">
                                                        <h6 style="font-weight: bold;">PERATURAN BAJU</h6>
                                                    </button>
                                                </h2>
                                                <div id="collapse1" class="accordion-collapse collapse"
                                                    aria-labelledby="heading1" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <div class="program-des">
                                                            <p>Pakaian adalah barang yang digunakan untuk menutupi tubuh
                                                                dan
                                                                melindungi dari elemen
                                                                lingkungan. Pakaian dapat terdiri dari berbagai jenis
                                                                dan
                                                                gaya, termasuk pakaian
                                                                sehari-hari, pakaian formal, pakaian olahraga, pakaian
                                                                tidur, dan banyak lagi. Pakaian
                                                                adalah barang yang digunakan untuk menutupi tubuh dan
                                                                melindungi dari elemen lingkungan.
                                                                Pakaian dapat terdiri dari berbagai jenis dan gaya,
                                                                termasuk
                                                                pakaian sehari-hari, pakaian
                                                                formal, pakaian olahraga, pakaian tidur, dan banyak
                                                                lagi.Pakaian adalah barang yang
                                                                digunakan untuk menutupi tubuh dan melindungi dari
                                                                elemen
                                                                lingkungan. Pakaian dapat
                                                                terdiri dari berbagai jenis dan gaya, termasuk pakaian
                                                                sehari-hari, pakaian formal,
                                                                pakaian olahraga, pakaian tidur, dan banyak lagi.
                                                                Pakaian
                                                                adalah barang yang digunakan
                                                                untuk menutupi tubuh dan melindungi dari elemen
                                                                lingkungan.
                                                                Pakaian dapat terdiri dari
                                                                berbagai jenis dan gaya, termasuk pakaian sehari-hari,
                                                                pakaian formal, pakaian olahraga,
                                                                pakaian tidur, dan banyak lagi.</p>

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
                                                        <h6 style="font-weight: bold;">B. PRA PPDB</h4>
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
                                                        <h6 style="font-weight: bold;">D. TAHAP II : JALUR PRESTASI
                                                            NILAI
                                                            AKADEMIK SMA</h4>
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
                                                        <h6 style="font-weight: bold;">E. TAHAP III : JALUR ZONASI SMK
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

        <!-- ======= Features Section ======= -->
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Jadwal Piket</title>
            <!-- Tambahkan library CSS Lightbox -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css">
        </head>
        <body>
            <section id="jadwalpiket" class="features">
                <div class="container">

                    <div class="section-title" data-aos="fade-up">
                        <h2>Jadwal piket</h2>
                    </div>

                    <div class="row" data-aos="fade-up" data-aos-delay="300">
                        <div class="col-lg-3 col-md-4">
                            <div class="icon-box">
                                <a href="/siswa/assets/img/portfolio/jadwal1.jpeg" data-lightbox="jadwal" data-title="Deskripsi Gambar 1">
                                    <img src="/siswa/assets/img/portfolio/jadwal1.jpeg" alt="Image Description" style="width: 350px; height: 350px;">
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="row" data-aos="fade-up" data-aos-delay="300">
                        <div class="col-lg-3 col-md-4">
                            <div class="icon-box">
                                <a href="/siswa/assets/img/portfolio/jadwal2.jpeg" data-lightbox="jadwal" data-title="Deskripsi Gambar 2">
                                    <img src="/siswa/assets/img/portfolio/jadwal2.jpeg" alt="Image Description" style="width: 350px; height: 350px;">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Tambahkan library JavaScript Lightbox -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>
    <script>
        lightbox.option({
            'resizeDuration': 200,
            'wrapAround': true
        });

    </script>
</body>
</html>

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
                                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
                        <div class="info">
                            <div>
                                <i class="ri-map-pin-line"></i>
                                <p>Perum Permata Regency 1 blok 10 no 28 Ngijo Karangploso Malang</p>
                            </div>

                            <div>
                                <i class="ri-mail-send-line"></i>
                                <p>hummasoft.tech@gmail.com</p>
                            </div>

                            <div>
                                <i class="ri-phone-line"></i>
                                <p>+1 5589 55488 55s</p>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-5 col-md-12" data-aos="fade-up" data-aos-delay="300">
                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" id="name"
                                    placeholder="Your Name" value="Femas akbar faturrohim" readonly>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="Your Email" value="femasakbar79@gmail.com" readonly>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="subject" id="subject"
                                    placeholder="Subject" required>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center"><button type="submit">Kirim pesan</button></div>
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
