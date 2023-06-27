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
                    <li class="dropdown"><a href="#peraturanMagang" class="nav-link scrollto"><span>Peraturan</span> <i
                                class="bi bi-chevron-down"></i></a>
                        <ul>

                            <li><a href="{{ route('ketua.peraturan.index') }}" class="nav-link scrollto">Buat
                                    peraturan</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#" class="nav-link scrollto"><span>Izin siswa</span> <i
                                class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#" class="nav-link scrollto" data-bs-toggle="modal"
                                    data-bs-target="#exampleModalDetail">Detail
                                    izin</a></li>
                            <li><a href="#" class="nav-link scrollto" data-bs-toggle="modal"
                                    data-bs-target="#exampleModalizin" class="nav-link scrollto">Buat
                                    izin</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#jadwalpiket" class="nav-link scrollto"><span>Jadwal
                                piket</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#" class="nav-link scrollto" data-bs-toggle="modal"
                                    data-bs-target="#exampleModaljadwal">Tambah
                                    jadwal piket</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#" class="nav-link scrollto"><span>Laporan</span> <i
                                class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li class="dropdown"><a href="#" class="nav-link scrollto"><span>Laporan harian
                                        siswa</span> <i class="bi bi-chevron-right"></i></a>
                                <ul>
                                    <li><a href="{{ route('ketua.laporanHarian') }}" class="nav-link scrollto">Detail
                                            Laporan</a></li>
                                    <li><a href="#"
                                            data-bs-toggle="modal"data-bs-target="#exampleModalbuatlaporan">Buat
                                            Laporan</a></li>
                                </ul>
                            </li>
                            <li><a href="#" class="nav-link scrollto"
                                    data-bs-toggle="modal"data-bs-target="#exampleModalketuamagang">Laporan ketua
                                    magang</a></li>
                            <li><a href="#" class="nav-link scrollto" data-bs-toggle="modal"
                                    data-bs-target="#exampleModalpembimbing">Laporan ke pembimbing</a></li>
                            <li><a href="#" class="nav-link scrollto" data-bs-toggle="modal"
                                    data-bs-target="#exampleModaljurnal">Laporan
                                    jurnal</a></li>
                            <li><a href="{{ route('ketua.pengumpulan') }}" class="nav-link scrollto">Pengumpulan
                                    Jurnal</a></li>
                        </ul>
                    </li>
                    <li><a class="nav-link" href="#kontak">Kontak</a></li>
                    <li class="dropdown"><img src="/siswa/assets/img/testimonials/testimonials-5.jpg" width="40"
                            height="40" alt="" style="border-radius: 100px; margin-left: 24px;">
                        <ul>
                            <li><a href="#" class="nav-link scrollto" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">Profil</a></li>
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
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="d-flex flex-column align-items-start">
                        <div class="d-flex">
                            <img src="/siswa/assets/img/testimonials/testimonials-5.jpg" width="35%"
                                alt="" style="border-radius: 10%;" class="me-3">
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
                                        <h6 style="margin-left: 35%">15</h6>
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
                    <form action="{{ route('izin.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <h3>Izin Siswa</h3>
                        <hr>
                        <div class="mb-3 justify-content-between">
                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                            <label for="" class="form-label">Nama Siswa</label>
                            <input class="form-control" type="text" id=""
                                value="{{ Auth::user()->name }}" readonly>
                        </div>
                        <div class="mb-3 justify-content-between">
                            <label for="" class="form-label">Tanggal izin</label>
                            <input class="form-control" type="date" id="tanggalIzinSiswa" readonly
                                name="tanggal_izin">
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
                            <select class="form-select" aria-label="Default select example" name="alasan">
                                <option selected disabled>---- Pilih Alasan ----</option>
                                <option value="sakit">Sakit</option>
                                <option value="keluarga">Acara Keluarga</option>
                                <option value="darurat">Darurat</option>
                            </select>
                        </div>
                        <div class="mb-3 justify-content-between">
                            <label for="" class="form-label">Masukan Pesan</label>
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"
                                    name="pesan"></textarea>
                            </div>
                        </div>
                        <div class="mb-3 justify-content-between">
                            <label for="formFile" class="form-label">Masukkan Surat Keterangan</label>
                            <input class="form-control" type="file" id="formFile" name="surat">
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm me-2"
                            style="width: 100px">Submit</button>
                        <button type="button" class="btn btn-danger btn-sm" style="width: 100px"
                            data-bs-dismiss="modal" aria-label="Close">Batal</button>
                    </form>
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
                    <h3>Tambah Jadwal Piket</h3>
                    @csrf
                    <hr>
                    <div class="mb-3 justify-content-between">
                        <label for="formFile" class="form-label">Tambah jadwal piket pagi</label>
                        <input class="form-control" type="file" id="jadwal_pagi" name="jadwal_pagi"
                            id="formFile">
                    </div>

                    <div class="mb-3">
                        <label for="formFileMultiple" class="form-label">Tambah jadwal piket sore</label>
                        <input class="form-control" type="file" id="jadwal_sore" name="jadwal_sore"
                            id="formFileMultiple" multiple>
                    </div>

                    <div class="mb-3">
                        <label for="summerNoteInput" class="form-label">Deskripsi detail piket</label>
                        <textarea class="form-control" id="deskripsi_piket" name="deskripsi_piket"></textarea>
                    </div>

                    <button type="button" id="button" class="btn btn-primary btn-sm me-2"
                        style="width: 100px">Submit</button>
                    <button type="button" class="btn btn-danger btn-sm" style="width: 100px"
                        data-bs-dismiss="modal" aria-label="Close">Batal</button>

                    <script>
                        $(document).ready(function() {
                            $('#button').on('click', function() {
                                var jadwalPagiInput = document.getElementById('jadwal_pagi');
                                var jadwalSoreInput = document.getElementById('jadwal_sore');
                                var deskripsiPiket = $('#deskripsi_piket').val();

                                var jadwalPagi = jadwalPagiInput.files[0];
                                var jadwalSore = jadwalSoreInput.files[0];

                                var formData = new FormData();
                                formData.append('jadwal_pagi', jadwalPagi);
                                formData.append('jadwal_sore', jadwalSore);
                                formData.append('deskripsi_piket', deskripsiPiket);

                                console.log(jadwalPagi);
                                console.log(jadwalSore);
                                console.log(deskripsiPiket);

                                $.ajaxSetup({
                                    headers: {
                                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                    }
                                });

                                $.ajax({
                                    type: 'POST',
                                    url: "{{ route('ketua.tambahJadwalPiket') }}",
                                    data: formData,
                                    processData: false,
                                    contentType: false,
                                    success: function(response) {
                                        console.log(response);
                                        if (response === 'success') {
                                            Swal.fire(
                                                'Berhasil!',
                                                'Berhasil mengirim!',
                                                'success'
                                            ).then(function() {
                                                $('#myForm')[0].reset();
                                            });
                                        } else {
                                            Swal.fire({
                                                icon: 'error',
                                                title: 'Oops...',
                                                text: 'Gagal mengirim!',
                                            });
                                        }
                                    },
                                    error: function(xhr, status, error) {
                                        console.log(xhr.responseText);
                                        Swal.fire({
                                            icon: 'error',
                                            title: 'Oops...',
                                            text: 'Terjadi kesalahan saat mengirim data!',
                                        });
                                    }
                                });
                            });
                        });
                    </script>

                </div>
            </div>
        </div>
    </div>
    {{-- end modal --}}

    <!-- Modal -->

    <div class="modal fade" id="exampleModalDetail" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true" id="modalTambahJadwal">
        @include('template-siswa.css')
        <div class="modal-dialog  modal-xl">
            <div class="modal-content">
                <div class="modal-body">
                    <h3 class="fw-bold mb-5 text-secondary">Laporan Izin Siswa</h3>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary"
                                            style="font-style: normal; font-weight: 700; font-size: 14px; line-height: 17px;">
                                            #</th>
                                        <th class="text-uppercase text-secondary"
                                            style="font-style: normal; font-weight: 700; font-size: 14px; line-height: 17px;">
                                            NAMA</th>
                                        <th class="text-uppercase text-secondary font-weight-bolder ps-2"
                                            style="font-style: normal; font-weight: 700; font-size: 14px; line-height: 17px;">
                                            ASAL SEKOLAH</th>
                                        <th class="text-uppercase text-secondary font-weight-bolder ps-2"
                                            style="font-style: normal; font-weight: 700; font-size: 14px; line-height: 17px;">
                                            TANGGAL IZIN</th>
                                        <th class="text-uppercase text-secondary font-weight-bolder ps-2"
                                            style="font-style: normal; font-weight: 700; font-size: 14px; line-height: 17px;">
                                            ALASAN</th>
                                        <th class="text-uppercase text-secondary font-weight-bolder ps-2"
                                            style="font-style: normal; font-weight: 700; font-size: 14px; line-height: 17px;">
                                            DETAIL</th>
                                        <th class="text-uppercase text-secondary font-weight-bolder ps-2"
                                            style="font-style: normal; font-weight: 700; font-size: 14px; line-height: 17px;">
                                            STATUS</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="px-3">
                                            <p style="font-size: 12px;">1</p>
                                        </td>
                                        <td>
                                            <a href="#profilModal"
                                                style="text-decoration: none; color: #57595C; font-weight: 700; line-height: 15px;"
                                                data-target="#profilModal" data-toggle="modal">
                                                <p class="text-uppercase text-secondary font-weight-bold mb-0"
                                                    style="font-size: 12px;">Femas
                                                    akbar
                                                    faturrohim</p>
                                            </a>
                                        </td>
                                        <td class="">
                                            <p class="text-uppercase text-secondary font-weight-bold mb-0"
                                                style="font-size: 12px;">SMKN 1
                                                LUMAJANG</p>
                                        </td>
                                        <td>
                                            <p class="text-uppercase text-secondary font-weight-bold mb-0"
                                                style="font-size: 12px;">02 Apr 2023
                                            </p>
                                        </td>
                                        <td class="">
                                            <span class="badge badge-sm bg-danger"
                                                style="width: 83px; padding: 8px;">Sakit</span>
                                        </td>
                                        <td class="">
                                            <button class="badge badge-sm bg-primary" data-toggle="modal"
                                                data-target="#detail1"
                                                style="width: 85px; padding: 8px; border: none;"><i
                                                    class="fa-solid fa-eye"></i> detail</button>
                                        </td>
                                        <td>
                                            <span class="badge badge-sm bg-danger"
                                                style="width: 85px; padding: 8px;">ditolak</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="px-3">
                                            <p style="font-size: 12px;">2</p>
                                        </td>
                                        <td>
                                            <p class="text-uppercase text-secondary font-weight-bold mb-0"
                                                style="font-size: 12px;">Femas akbar
                                                faturrohim</p>
                                        </td>
                                        <td class="">
                                            <p class="text-uppercase text-secondary font-weight-bold mb-0"
                                                style="font-size: 12px;">SMKN 1
                                                LUMAJANG</p>
                                        </td>
                                        <td>
                                            <p class="text-uppercase text-secondary font-weight-bold mb-0"
                                                style="font-size: 12px;">02 Apr 2023
                                            </p>
                                        </td>
                                        <td class="">
                                            <span class="badge badge-sm bg-primary"
                                                style="width: 85px; padding: 8px;">keluarga</span>
                                        </td>
                                        <td class="">
                                            <button class="badge badge-sm bg-primary" data-toggle="modal"
                                                data-target="#detail2"
                                                style="width: 85px; padding: 8px; border: none;"><i
                                                    class="fa-solid fa-eye"></i> detail</button>
                                        </td>
                                        <td>
                                            <span class="badge badge-sm bg-warning"
                                                style="width: 85px; padding: 8px;">menunggu</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="px-3">
                                            <p style="font-size: 12px;">3</p>
                                        </td>
                                        <td>
                                            <p class="text-uppercase text-secondary font-weight-bold mb-0"
                                                style="font-size: 12px;">Femas akbar
                                                faturrohim</p>
                                        </td>
                                        <td class="">
                                            <p class="text-uppercase text-secondary font-weight-bold mb-0"
                                                style="font-size: 12px;">SMKN 1
                                                LUMAJANG</p>
                                        </td>
                                        <td>
                                            <p class="text-uppercase text-secondary font-weight-bold mb-0"
                                                style="font-size: 12px;">02 Apr 2023
                                            </p>
                                        </td>
                                        <td class="">
                                            <span class="badge badge-sm bg-warning"
                                                style="width: 85px; padding: 8px;">Darurat</span>
                                        </td>
                                        <td class="">
                                            <span class="badge badge-sm bg-primary"
                                                style="width: 85px; padding: 8px; border: none;"><i
                                                    class="fa-solid fa-eye"></i>
                                                detail</span>
                                        </td>
                                        <td>
                                            <span class="badge badge-sm bg-success"
                                                style="width: 85px; padding: 8px;">disetujui</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
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
                    <button type="button" class="btn btn-danger btn-sm" data-bs-dismiss="modal" aria-label="Close"
                        style="width: 100px">Batal</button>
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
                    <button type="button" class="btn btn-danger btn-sm" data-bs-dismiss="modal" aria-label="Close"
                        style="width: 100px">Batal</button>
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
                        @foreach ($pengumumans as $p)
                            <li><a href="{{ route('pengumuman.detail', ['pengumuman' => $p->id]) }}"
                                    style="color: #222222;"style="margin-right: 8px;">{{ $p->tanggal_pengumuman }}
                                    <strong>{{ $p->judul_pengumuman }}</strong></a></li>
                        @endforeach
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
                                    @php $i = 0; @endphp
                                    @foreach ($peraturan as $item)
                                        @php $i++ @endphp
                                        <div class="resume-item">
                                            <div class="accordion" id="accordionExample">
                                                <div class="accordion-item mb-2">
                                                    <h2 class="accordion-header" id="heading{{ $i }}">
                                                        <button style="margin: 0;padding: 5px; wid"
                                                            class="accordion-button" type="button"
                                                            data-bs-toggle="collapse"
                                                            data-bs-target="#collapse{{ $i }}"
                                                            aria-expanded="true"
                                                            aria-controls="collapse{{ $i }}">
                                                            <h6 style="font-weight: bold;" class="text-uppercase">
                                                                {{ $item->judul_peraturan }}</h6>
                                                        </button>
                                                    </h2>
                                                    <div id="collapse{{ $i }}"
                                                        class="accordion-collapse collapse"
                                                        aria-labelledby="heading{{ $i }}"
                                                        data-bs-parent="#accordionExample">
                                                        <div class="accordion-body">
                                                            <div class="program-des">
                                                                <p>{!! $item->deskripsi_peraturan !!}
                                                                </p>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
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
                            <p class="me-3">
                                {!! $jadwal_piket->deskripsi_piket !!}
                            </p>
                        </div>
                        <div class="col-lg-3 col-md-3 justify-content-end" data-aos="fade-up" data-aos-delay="500">
                            <div class="icon-box">
                                <a href="/jadwalPiket/{{ $jadwal_piket->jadwal_pagi }}" id="jadwal"
                                    data-lightbox="jadwal" data-title="">
                                    <img src="/jadwalPiket/{{ $jadwal_piket->jadwal_pagi }}" width="180px">
                                </a>
                            </div>
                            <div class="icon-box">
                                <a href="/jadwalPiket/{{ $jadwal_piket->jadwal_pagi }}" id="jadwal"
                                    data-lightbox="jadwal" data-title="">
                                    <img src="/jadwalPiket/{{ $jadwal_piket->jadwal_pagi }}" width="180px"
                                        alt="" class="img-fluid rounded">
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
<!-- Include SummerNote JS and CSS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.js"></script>

<!-- Initialize SummerNote -->
<script>
    $(document).ready(function() {
        $('#deskripsi_piket').summernote({
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
@include('template-siswa.footer')
@include('template-siswa.script')
</body>

</html>
