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
    <div class="modal fade" id="detail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Detail Kegiatan</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="background: none; border: none;">
                <i class="fa-sharp fa-solid fa-rectangle-xmark" style="color: red;"></i>
              </button>
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
                    <td class="aaa">Kegiatan</td>
                    <td class="aaa"><span style="margin-right: 12px;">:</span><span style="text-align: justify;">Terus menerus belajar selama di sekolah memang bisa menjadi hal yang sangat membosankan. Namun sebenarnya cukup banyak kegiatan di sekolah yang menyenangkan dan bisa dilakukan untuk mengusir rasa bosan tersebut. Rasa bosan yang melanda memang sebaiknya segera diusir dan diatasi karena dapat membuat kamu menjadi kurang fokus dan sulit untuk berkonsentrasi.

                        Namun bukan berarti juga kamu boleh melakukan sesuatu yang kurang baik di sekolah hanya untuk mengusir rasa bosan. Pilih saja aktivitas bermanfaat selain belajar yang bisa kamu lakukan di sekolah supaya pikiran menjadi segar dan kembali bersemangat. Kamu bisa melakukan kegiatan tersebut dengan mengajak serta teman yang lain atau sendirian saja.</span></td>
                </tr>
                </table>
            </div>
          </div>
        </div>
      </div>
    <div class="min-height-300 bg-primary position-absolute w-100"></div>
    <aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
        <div class="sidenav-header">
          <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
          <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/argon-dashboard/pages/dashboard.html " target="_blank">
            <img src="/admin/assets/img/hummarules-removebg-icikiwr.png" class="navbar-brand-img h-100" alt="main_logo">
          </a>
        </div>
        <hr class="horizontal dark mt-0">
        <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
            <ul class="navbar-nav">
                <a class="nav-link" href="{{ route('guru.dashboard') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i><img src="/admin/assets/img/icons/sidebar/business-report 1.png" alt="" /></i>
                    </div>
                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="{{ route('guru.listsiswa') }}">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <img src="/admin/assets/img/icons/sidebar/add-group 1.png" alt="" />
                        </div>
                        <span class="nav-link-text ms-1">List siswa</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="{{ route('guru.laporanhariansiswa') }}">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <img src="/admin/assets/img/icons/sidebar/calendar 1.png" alt="" />
                        </div>
                        <span class="nav-link-text ms-1">Laporan harian siswa</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('guru.jurnal') }}">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <img src="/admin/assets/img/icons/sidebar/book 1.png" alt="" />
                        </div>
                        <span class="nav-link-text ms-1">Laporan jurnal siswa</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('guru.riwayatizin') }}">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <img src="/admin/assets/img/icons/sidebar/riwayat.png" alt="" />
                        </div>
                        <span class="nav-link-text ms-1">Riwayat izin siswa</span>
                    </a>
                </li>
                    <a class="nav-link" href="{{ route('guru.absen') }}">
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
      <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
        <div class="container-fluid py-1 px-3">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
              <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
              <li class="breadcrumb-item text-sm text-white active" aria-current="page">Laporan jurnal siswa</li>
            </ol>
            <h6 class="font-weight-bolder text-white mb-0">Laporan jurnal  siswa</h6>
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
              <li class="breadcrumb-item text-sm text-white active" aria-current="page">SMKN 1 KRAKSAAN</li>
              <li class="nav-item px-2 d-flex align-items-center">
                <a href="javascript:;" class="nav-link text-white p-0">
                  <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
                </a>
              </li>
              <li class="nav-item dropdown px-2 pe-2 d-flex align-items-center">
                <a href="javascript:;" class="nav-link text-white p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="fa fa-bell cursor-pointer"></i>
                </a>
                <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                  <li class="mb-2">
                    <a class="dropdown-item border-radius-md" href="javascript:;">
                      <div class="d-flex py-1">
                        <div class="my-auto">
                          <img src="/admin/assets/img/team-2.jpg" class="avatar avatar-sm  me-3 ">
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
                          <img src="../assets/img/small-logos/logo-spotify.svg" class="avatar avatar-sm bg-gradient-dark  me-3 ">
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
                          <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <title>credit-card</title>
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                              <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                <g transform="translate(1716.000000, 291.000000)">
                                  <g transform="translate(453.000000, 454.000000)">
                                    <path class="color-background" d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z" opacity="0.593633743"></path>
                                    <path class="color-background" d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z"></path>
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
                 <a class="nav-link text-white p-0" href="{{ route('logout') }}"><i class="fa-solid fa-right-from-bracket" style="color: #ffffff;"></i></a>
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
                <div class="card-header pb-0" style="display: flex; align-items: center;">
                    <p style="font-size: 24px; font-weight: bold; flex-grow: 1;">Laporan jurnal siswa</p>
                    <div style="position: relative;">
                      <i class="fas fa-search" style="position: absolute; top: 50%; left: 10px; transform: translateY(-50%);"></i>
                      <input type="search" placeholder="Cari disini..." aria-label="Search" style="border: 1px solid #b8b8b8; border-radius: 10px; font-size: 14px; max-width: 240px; height: 46px; box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2); padding: 16px; padding-left: 40px;">
                    </div>
                  </div>
              <div class="card-body px-0 pt-0 pb-2">
                <div class="table-responsive p-0">
                  <table class="table align-items-center mb-0">
                    <thead>
                        <tr>
                            <th class="text-uppercase text-secondary" style="font-style: normal; font-weight: 700; font-size: 14px; line-height: 17px;">NAMA</th>
                            <th class="text-uppercase text-secondary font-weight-bolder ps-2" style="font-style: normal; font-weight: 700; font-size: 14px; line-height: 17px;">TANGGAL</th>
                            <th class="text-uppercase text-secondary font-weight-bolder ps-2" style="font-style: normal; font-weight: 700; font-size: 14px; line-height: 17px;">kegiatan</th>
                            <th class="text-uppercase text-secondary font-weight-bolder ps-2" style="font-style: normal; font-weight: 700; font-size: 14px; line-height: 17px;" colspan="2">aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                                <p class="text-xs text-uppercase font-weight-bold mb-0 px-3">Femas akbar faturrohim</p>
                            </td>

                            <td>
                              <p class="text-xs font-weight-bold mb-0">02 Apr 2023</p>
                            </td>
                            <td>
                                <p class="text-xs font-weight-bold mb-0">Mengerjakan crud laravel</p>
                            </td>
                            <td class="">
                                <a href="#" data-toggle="modal" data-target="#detail" style="border: none; background: none;">
                                    <i class="fa-solid fa-eye" style="color: blue;"></i>
                                </a>
                            </td>



                      </tr>
                      <br>
                    </tbody>
                  </table>
                  <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous" onclick="previousPage()">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#" onclick="goToPage(1)">1</a></li>
                        <li class="page-item"><a class="page-link" href="#" onclick="goToPage(2)">2</a></li>
                        <li class="page-item"><a class="page-link" href="#" onclick="goToPage(3)">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next" onclick="nextPage()">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>

                </div>
              </div>
            </div>
          </div>
        </div>
    @include('template-admin.footer')
  @include('template-admin.script')
</body>
</html>
