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
    <div class="modal fade modal-lg" id="modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel" style="color: #2F2F2F;font-weight: 700;font-size: 20px;line-height:40px;">Detail Keterangan</h5>

            </div>
            <div class="modal-body">
              <p style="font-weight: 400;font-size:16px;line-height:25px;text-align:justify;color:#33333;">nama <span style="margin-right: 50px;"></span> <span class="me-2">:</span> Femas akbar faturrohim</p>
              <p style="font-weight: 400;font-size:16px;line-height:25px;text-align:justify;color:#33333;">Asal sekolah <span class="me-2">:</span> SMKN 1 LUMAJANG</p>
              <p style="font-weight: 400;font-size:16px;line-height:25px;text-align:justify;color:#33333;">Tanggal izin <span class="me-2 ms-1">:</span> 11 mei 2023</p>
              <div class="d-flex">
                <p style="font-weight: 400;font-size:16px;line-height:25px;text-align:justify;color:#33333;" class="me-3">Alasan <span style="margin-right: 30px;"></span></p><span class="me-2">:</span>
                <p class="badge badge-sm bg-danger"  class="me-3" style="color">Sakit</p>
              </div>
              <p style="font-weight: 400;font-size:16px;line-height:25px;text-align:justify;color:#33333;">Pesan<span style="margin-right: 50px;"></span><span class="me-2">:</span><br>Assalamualaikum mohon ijin untuk hari ini saya ijin tidak masuk magang dikarenakan sakit, untuk surat keterangan lebih lanjut sudah saya lampirkan, terimakasih</p>
              <p style="font-weight: 400;font-size:16px;line-height:25px;text-align:justify;color:#33333;">Lihat surat<span class="me-2 ms-3">:</span> p.pdf</p>
            </div>
            <div class="modal-footer">
                <button id="closeButton" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
    </div>
    @php
        use Carbon\Carbon;
    @endphp
    <script>
        document.getElementById("closeButton").addEventListener("click", function() {
            var modal = document.getElementById("modal");
            var modalBackdrop = document.querySelector(".modal-backdrop");

            // Tutup modal dan hapus backdrop modal
            modal.style.display = "none";
            modalBackdrop.parentNode.removeChild(modalBackdrop);
        });
    </script>
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
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('guru.listsiswa') }}">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <img src="/admin/assets/img/icons/sidebar/add-group 1.png" alt="" />
                        </div>
                        <span class="nav-link-text ms-1">List siswa</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('guru.laporanhariansiswa') }}">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <img src="/admin/assets/img/icons/sidebar/calendar 1.png" alt="" />
                        </div>
                        <span class="nav-link-text ms-1">Laporan harian siswa</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="{{ route('guru.jurnal') }}">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <img src="/admin/assets/img/icons/sidebar/book 1.png" alt="" />
                        </div>
                        <span class="nav-link-text ms-1">Laporan jurnal siswa</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('guru.riwayatizin') }}">
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
              <li class="breadcrumb-item text-sm text-white active" aria-current="page">Riwayat izin siswa</li>
            </ol>
            <h6 class="font-weight-bolder text-white mb-0">Riwayat izin siswa</h6>
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
              <li class="breadcrumb-item text-sm text-white active" aria-current="page">{{ Auth::user()->sekolah->name }}</li>
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
                <a class="nav-link text-white p-0" href="javascript:logout()"><i
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
                <div class="card-header pb-0" style="display: flex; align-items: center;">
                    <p style="font-size: 24px; font-weight: bold; flex-grow: 1;">Riwayat izin siswa</p>
                    <form action="">
                        <input type="search" placeholder="Cari disini..." aria-label="Search" style="float: right; border: 1px solid #b8b8b8; border-radius: 10px; font-size: 14px; max-width: 240px; height: 46px;box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2); padding:16px;" name="cari" value="{{ request('cari') }}">
                    </form>
                  </div>
              <div class="card-body px-0 pt-0 pb-2">
                <div class="table-responsive p-0">
                  <table class="table align-items-center mb-0">
                    <thead>
                      <tr>
                        <th class="text-uppercase text-secondary" style="font-style: normal; font-weight: 700; font-size: 14px; line-height: 17px;">NAMA</th>
                        <th class="text-uppercase text-secondary font-weight-bolder ps-2" style="font-style: normal; font-weight: 700; font-size: 14px; line-height: 17px;">ASAL SEKOLAH</th>
                        <th class="text-uppercase text-secondary font-weight-bolder ps-2" style="font-style: normal; font-weight: 700; font-size: 14px; line-height: 17px;">TANGGAL IZIN</th>
                        <th class="text-uppercase text-secondary font-weight-bolder ps-2" style="font-style: normal; font-weight: 700; font-size: 14px; line-height: 17px;">ALASAN</th>
                        <th class="text-uppercase text-secondary font-weight-bolder ps-2" style="font-style: normal; font-weight: 700; font-size: 14px; line-height: 17px;">SURAT</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($riwayats as $riwayat)
                      <tr>
                        <td>
                            <div class="px-3">
                                <p class="text-xs font-weight-bold mb-0 text-uppercase">{{ $riwayat->user->name }}</p>
                            </div>
                        </td>
                        <td class="">
                          <p class="text-xs font-weight-bold mb-0">{{ $riwayat->user->sekolah->name }}</p>
                        </td>
                        <td>
                          <p class="text-xs font-weight-bold mb-0">{{ Carbon::parse($riwayat->tanggal_izin)->format('d M Y') }}</p>
                        </td>
                        <td class="">
                            <span class="badge badge-sm {{ ($riwayat->alasan == 'darurat') ? "bg-warning " : ""}} {{ ($riwayat->alasan == 'sakit') ? "bg-danger " : ""}} {{ ($riwayat->alasan == 'keluarga') ? "bg-primary " : ""}}" style="width: 88px;">{{ $riwayat->alasan }}</span>
                        </td>
                        <td class="">
                            <button class="badge badge-sm bg-primary" data-toggle="modal" data-target="#modal" style="border: none;"><i class="fa-solid fa-eye"></i> detail</button>
                        </td>
                      </tr>
                    @endforeach
                    @if (count($riwayats) == 0)
                        <tr>
                            <td colspan="5">
                                <center>Tidak ada data</center>
                            </td>
                        </tr>
                    @endif
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
