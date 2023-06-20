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
                <a class="nav-link" href="{{ route('pembimbing.dashboard') }}">
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
                    <a class="nav-link active" href="{{ route('pembimbing.izinsiswa') }}">
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
                        <li class="breadcrumb-item text-sm text-white active" aria-current="page">Laporan izin siswa
                        </li>
                    </ol>
                    <h6 class="font-weight-bolder text-white mb-0">Laporan izin siswa</h6>
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
        <script>
            function konfirmTerima(event, id) {
                event.preventDefault();

                Swal.fire({
                    title: 'TERIMA ?',
                    text: 'Anda yakin ingin menerima izin?',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ya, Terima!',
                    cancelButtonText: 'Batal'
                }).then((result) => {
                    if (result.isConfirmed) {
                        // Kode untuk melakukan penghapusan data di sini
                        document.getElementById("terima-" + id).submit(); // Melanjutkan submit form setelah konfirmasi
                    }
                });
            }

            function konfirmTolak(event, id) {
                event.preventDefault();

                Swal.fire({
                    title: 'TOLAK ?',
                    text: 'Anda yakin ingin menolak izin?',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ya, Tolak!',
                    cancelButtonText: 'Batal'
                }).then((result) => {
                    if (result.isConfirmed) {
                        // Kode untuk melakukan penghapusan data di sini
                        document.getElementById("tolak-" + id).submit(); // Melanjutkan submit form setelah konfirmasi
                    }
                });
            }
        </script>
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            <p style="font-size: 24px; font-weight: bold;">Laporan izin siswa<input type="search"
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

                        <!-- Modal -->
                        <div class="modal fade" id="detail" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Detail keterangan</h5>
                                        <i class="fas fa-xmark" data-bs-dismiss="modal" aria-label="Close"></i>
                                    </div>
                                    <div class="modal-body">
                                        <style>
                                            .aaa {
                                                font-style: normal;
                                                font-weight: 600;
                                                font-size: 14px;
                                                line-height: 16px;
                                                color: #535455;
                                                margin-top: 12px;
                                                margin-bottom: 12px;
                                            }

                                            tr {
                                                height: 30px;
                                            }
                                        </style>
                                        <table>
                                            <tr>
                                                <td class="aaa" style="width: 28%;">Nama</td>
                                                <td class="aaa"><span style="margin-right: 12px;">:</span> Femas
                                                    akbar faturrohim</td>
                                            </tr>
                                            <tr>
                                                <td class="aaa">Asal sekolah</td>
                                                <td class="aaa"><span style="margin-right: 12px;">:</span> SMKN 1
                                                    LUMAJANG</td>
                                            </tr>
                                            <tr>
                                                <td class="aaa">Tanggal izin</td>
                                                <td class="aaa"><span style="margin-right: 12px;">:</span> 11 Mei
                                                    2023</td>
                                            </tr>
                                            <tr>
                                                <td class="aaa">Alasan</td>
                                                <td class="aaa badge badge-sm bg-danger" style="color: white;">SAKIT
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="aaa">Pesan</td>
                                                <td class="aaa"><span
                                                        style="margin-right: 12px;">:</span>Assalamualaikum saya mohon
                                                    izin
                                                    untuk tidak masuk magang dikarenakan sakit</td>
                                            </tr>
                                            <tr>
                                                <td class="aaa">Lihat surat</td>
                                                <td
                                                    style="font-size: 14px;font-style: normal;font-weight: 600; color:rgb(146, 190, 255)">
                                                    <a href="#"><span style="margin-right: 12px;">:</span>
                                                        p.pdf</a>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- end modal --}}

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
                                            <th class="text-uppercase text-secondary font-weight-bolder ps-2"
                                                style="font-style: normal; font-weight: 700; font-size: 14px; line-height: 17px;"
                                                colspan="2">AKSI</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div>
                                                        <img src="/admin/assets/img/team-3.jpg"
                                                            class="avatar avatar-sm me-3" alt="user2">
                                                    </div>
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm">Alexa Liras</h6>
                                                        <p class="text-xs text-secondary mb-0">alexa@creative-tim.com
                                                        </p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="">
                                                <p class="text-xs font-weight-bold mb-0">SMKN 1 LUMAJANG</p>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0">02 Apr 2023</p>
                                            </td>
                                            <td class="">
                                                <span class="badge badge-sm bg-danger"
                                                    style="width: 88px;">Sakit</span>
                                            </td>
                                            <td class="">
                                                <a href="#detail" data-bs-toggle="modal">
                                                    <span class="badge badge-sm bg-gradient-primary"><i
                                                            class="fa-solid fa-eye"></i> detail</span>
                                                </a>
                                            </td>
                                            <td>
                                                <span class="badge badge-sm bg-gradient-danger"
                                                    style="width: 100px;">ditolak</span>
                                            </td>
                                            <td>
                                                <form action="" id="terima-id" id="tolak-id" method="post"
                                                    onsubmit="konfirmTerima(event, '1')" style="width: 8px;"
                                                    onsubmit="konfirmTolak(event, '1')">
                                                    @csrf
                                                    <button type="submit" style="border:none;background:none;"><i
                                                            class="fa-sharp fa-solid fa-circle-check text-success"></i></button>
                                                </form>
                                            </td>
                                            <td>
                                                <form action="" id="tolak-id" method="post"
                                                    onsubmit="konfirmTolak(event, '1')">
                                                    @csrf
                                                    <button type="submit"
                                                        style="border:none;background:none; margin-left: -58px"><i
                                                            class="fa-solid fa-circle-xmark text-danger"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div>
                                                        <img src="/admin/assets/img/team-3.jpg"
                                                            class="avatar avatar-sm me-3" alt="user2">
                                                    </div>
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm">Alexa Liras</h6>
                                                        <p class="text-xs text-secondary mb-0">alexa@creative-tim.com
                                                        </p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="">
                                                <p class="text-xs font-weight-bold mb-0">SMKN 1 LUMAJANG</p>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0">02 Apr 2023</p>
                                            </td>
                                            <td class="">
                                                <span class="badge badge-sm bg-warning"
                                                    style="width: 88px;">Darurat</span>
                                            </td>
                                            <td class="">
                                                <span class="badge badge-sm bg-gradient-primary"><i
                                                        class="fa-solid fa-eye"></i> detail</span>
                                            </td>
                                            <td>
                                                <span class="badge badge-sm bg-gradient-success"
                                                    style="width: 100px;">disetujui</span>
                                            </td>
                                            <td>
                                                <p class="text-l text-secondary font-weight-bold mb-0">SELESAI</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div>
                                                        <img src="/admin/assets/img/team-3.jpg"
                                                            class="avatar avatar-sm me-3" alt="user2">
                                                    </div>
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm">Alexa Liras</h6>
                                                        <p class="text-xs text-secondary mb-0">alexa@creative-tim.com
                                                        </p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="">
                                                <p class="text-xs font-weight-bold mb-0">SMKN 1 LUMAJANG</p>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0">02 Apr 2023</p>
                                            </td>
                                            <td class="">
                                                <span class="badge badge-sm bg-primary"
                                                    style="width: 88px;">keluarga</span>
                                            </td>
                                            <td class="">
                                                <span class="badge badge-sm bg-gradient-primary"><i
                                                        class="fa-solid fa-eye"></i> detail</span>
                                            </td>
                                            <td>
                                                <span class="badge badge-sm bg-gradient-warning"
                                                    style="width: 100px;">menunggu</span>
                                            </td>
                                            <td>
                                                <a href="javascript:;" class="text-secondary font-weight-bold"
                                                    data-toggle="tooltip" data-original-title="Edit user"
                                                    style="margin-right: 10px">
                                                    <i class="fa-sharp fa-solid fa-circle-check text-success"></i>
                                                </a>
                                                <a href="javascript:;" class="text-secondary font-weight-bold"
                                                    data-toggle="tooltip" data-original-title="Edit user">
                                                    <i class="fa-solid fa-circle-xmark text-danger"></i>
                                                </a>
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
