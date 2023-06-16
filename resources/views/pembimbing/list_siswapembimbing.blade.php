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

<body class="g-sidenav-show   bg-gray-100">
    <div class="min-height-300 bg-primary position-absolute w-100"></div>
    <aside
        class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 "
        id="sidenav-main">
        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
                aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/argon-dashboard/pages/dashboard.html "
                target="_blank">
                <img src="/admin/assets/img/hummarules-removebg-icikiwr.png" class="navbar-brand-img h-100"
                    alt="main_logo">
            </a>
        </div>
        <hr class="horizontal dark mt-0">
        <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
            <ul class="navbar-nav">
                <a class="nav-link active" href="{{ route('pembimbing.dashboard') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i><img src="/admin/assets/img/icons/sidebar/business-report 1.png" alt="" /></i>
                    </div>
                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('pembimbing.listsiswa') }}">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <img src="/admin/assets/img/icons/sidebar/add-group 1.png" alt="" />
                        </div>
                        <span class="nav-link-text ms-1">List siswa</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('pembimbing.izinsiswa') }}">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <img src="/admin/assets/img/icons/sidebar/email 1.png" alt="" />
                        </div>
                        <span class="nav-link-text ms-1">Laporan izin siswa</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('pembimbing.laporanketua') }}">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <img src="/admin/assets/img/icons/sidebar/ketua.png" alt="" />
                        </div>
                        <span class="nav-link-text ms-1">Laporan ketua magang</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('pembimbing.laporanhariansiswa') }}">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <img src="/admin/assets/img/icons/sidebar/calendar 1.png" alt="" />
                        </div>
                        <span class="nav-link-text ms-1">Laporan harian siswa</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('pembimbing.laporanjurnalsiswa') }}">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <img src="/admin/assets/img/icons/sidebar/book 1.png" alt="" />
                        </div>
                        <span class="nav-link-text ms-1">Laporan jurnal siswa</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('pembimbing.riwayatsiswa') }}">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <img src="/admin/assets/img/icons/sidebar/vector.png" alt="" />
                        </div>
                        <span class="nav-link-text ms-1">Riwayat izin siswa</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('pembimbing.feedback') }}">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <img src="/admin/assets/img/icons/sidebar/icons8-feedback-48 1.png" alt="" />
                        </div>
                        <span class="nav-link-text ms-1">Feedback</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('pembimbing.report') }}">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <img src="/admin/assets/img/icons/sidebar/report.png" alt="" />
                        </div>
                        <span class="nav-link-text ms-1">Data Report</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('pembimbing.pengumpulanjurnal') }}">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <img src="/admin/assets/img/icons/sidebar/jurnal.png" alt="" />
                        </div>
                        <span class="nav-link-text ms-1">Pengumpulan Jurnal</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('pembimbing.laporanabsensiswa') }}">
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
                        <li class="breadcrumb-item text-sm text-white active" aria-current="page">List siswa</li>
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
                            <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4"
                                aria-labelledby="dropdownMenuButton">
                                <li class="mb-2">
                                    <a class="dropdown-item border-radius-md" href="javascript:;">
                                        <div class="d-flex py-1">
                                            <div class="my-auto">
                                                <img src="/admin/assets/img/team-2.jpg"
                                                    class="avatar avatar-sm  me-3 ">
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="text-sm font-weight-normal mb-1">
                                                    <span class="font-weight-bold">New message</span> from Laur
                                                </h6>
                                                <p class="text-xs text-secondary mb-0">
                                                    <i class="fa fa-clock me-1"></i>
                                                    13 minutes ago
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a class="dropdown-item border-radius-md" href="javascript:;">
                                        <div class="d-flex py-1">
                                            <div class="my-auto">
                                                <img src="../assets/img/small-logos/logo-spotify.svg"
                                                    class="avatar avatar-sm bg-gradient-dark  me-3 ">
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="text-sm font-weight-normal mb-1">
                                                    <span class="font-weight-bold">New album</span> by Travis Scott
                                                </h6>
                                                <p class="text-xs text-secondary mb-0">
                                                    <i class="fa fa-clock me-1"></i>
                                                    1 day
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item border-radius-md" href="javascript:;">
                                        <div class="d-flex py-1">
                                            <div class="avatar avatar-sm bg-gradient-secondary  me-3  my-auto">
                                                <svg width="12px" height="12px" viewBox="0 0 43 36"
                                                    version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <title>credit-card</title>
                                                    <g stroke="none" stroke-width="1" fill="none"
                                                        fill-rule="evenodd">
                                                        <g transform="translate(-2169.000000, -745.000000)"
                                                            fill="#FFFFFF" fill-rule="nonzero">
                                                            <g transform="translate(1716.000000, 291.000000)">
                                                                <g transform="translate(453.000000, 454.000000)">
                                                                    <path class="color-background"
                                                                        d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z"
                                                                        opacity="0.593633743"></path>
                                                                    <path class="color-background"
                                                                        d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z">
                                                                    </path>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="text-sm font-weight-normal mb-1">
                                                    Payment successfully completed
                                                </h6>
                                                <p class="text-xs text-secondary mb-0">
                                                    <i class="fa fa-clock me-1"></i>
                                                    2 days
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item px-2 pe-2 d-flex align-items-center">
                            <a class="nav-link text-white p-0" href="{{ route('logout') }}"><i
                                    class="fa-solid fa-right-from-bracket" style="color: #ffffff;"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            <p style="font-size: 24px; font-weight: bold;">List siswa<input type="search"
                                    placeholder="Cari disini..." aria-label="Search"
                                    style="float: right; border: 1px solid #b8b8b8; border-radius: 10px; font-size: 14px; max-width: 240px; height: 46px;box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2); padding:16px;">
                            </p>

                            <button type="button" class="btn dropdown-toggle"
                                style="box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                Pilih sekolah
                            </button>
                            <div class="dropdown-menu" style="box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);">
                                <a class="dropdown-item" href="#">SMKN 1 LUMAJANG</a>
                                <a class="dropdown-item" href="#">SMKN 1 KEPANJEN</a>
                                <a class="dropdown-item" href="#">SMKN 1 JEMBER</a>
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
                                                MAKA PKL</th>

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
                                        <div class="modal fade" id="exampleModal" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <div class="d-flex flex-column align-items-start">
                                                            <div class="d-flex">
                                                                <img src="/siswa/assets/img/testimonials/testimonials-5.jpg"
                                                                    width="35%" alt=""
                                                                    style="border-radius: 10%;" class="me-3">
                                                                <div>
                                                                    <h5 class="fw-bold me-5 text-wrap text-break"
                                                                        id="nama">Reno
                                                                        Gunawan Assegaf</h5>

                                                                    <div class="d-flex flex-wrap">
                                                                        <p class="mb-0 me-3" style="font-size: 12px">
                                                                            SMKN 1 LUMAJANG</p>
                                                                        <p class="mb-0" style="font-size: 12px">
                                                                            18489179065</p>
                                                                    </div>
                                                                    <div class="mt-3"
                                                                        style="width: 105%; height: 95px; background-color: #F1F5FB; border-radius: 3%;">
                                                                        <p class="ms-1"
                                                                            style="font-size: 12px; opacity: 0.5; color: #444444;">
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
                                                                <i class="fas fa-xmark" data-bs-dismiss="modal"
                                                                    aria-label="Close"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div>
                                                    <img src="/admin/assets/img/team-3.jpg"
                                                        class="avatar avatar-sm me-3" alt="user2">
                                                </div>
                                                <a data-bs-toggle="modal" href="#exampleModal">
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm">Alexa Liras</h6>
                                                        <p class="text-xs text-secondary mb-0">
                                                            alexa@creative-tim.com
                                                        </p>
                                                    </div>
                                                </a>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">18489179065</p>
                                        </td>
                                        <td class="">
                                            <p class="text-xs font-weight-bold mb-0">SMKN 1 LUMAJANG</p>
                                        </td>
                                        <td>
                                            <span class="text-secondary text-xs font-weight-bold">SISWA</span>
                                        </td>
                                        <td>
                                            <span class="text-secondary text-xs font-weight-bold">10 Mei 2023 - 02
                                                Apr 2023</span>
                                        </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('template-admin.footer')
            @include('template-admin.script')
</body>

</html>

{{-- Modal --}}
<div class="modal modal-transparent fade" id="tambahSiswa" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
{{-- End Modal --}}
