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
@php
    use Carbon\Carbon;
@endphp
@php
    $a = 1;
@endphp
@foreach ($izins as $izin)
    @php
        $a++;
    @endphp
  <div class="modal fade" id="detail{{ $a }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Detail keterangan</h5>
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
              <td class="aaa" style="width: 28%;">Nama</td>
              <td class="aaa"><span style="margin-right: 12px;">:</span> {{ $izin->user->name }}</td>
            </tr>
            <tr>
              <td class="aaa">Asal sekolah</td>
              <td class="aaa"><span style="margin-right: 12px;">:</span> {{ $izin->user->sekolah->name }}</td>
            </tr>
            <tr>
              <td class="aaa">Tanggal izin</td>
              <td class="aaa"><span style="margin-right: 12px;">:</span> {{ $izin->tanggal_izin }}</td>
            </tr>
            <tr>
              <td class="aaa">Alasan</td>
              <td class="aaa badge badge-sm bg-danger" style="color: white;">{{ $izin->alasan }}</td>
            </tr>
            <tr>
              <td class="aaa">Pesan</td>
              <td class="aaa"><span style="margin-right: 12px;">:</span><span style="text-align: justify;">{{ $izin->pesan }}</span></td>
            </tr>
            <tr>
              <td class="aaa">Lihat surat</td>
              <td style="font-size: 14px;font-style: normal;font-weight: 600; color:rgb(146, 190, 255)"><a href="#"><span style="margin-right: 12px;">:</span> {{ $izin->surat }}</a></td>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </div>
@endforeach
    <div class="min-height-300 bg-primary position-absolute w-100"></div>
    <aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
        <div class="sidenav-header">
          <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
          <a class="navbar-brand m-0" href="#" target="_blank">
            <img src="/admin/assets/img/hummarules-removebg-icikiwr.png" class="navbar-brand-img h-100" alt="main_logo">
          </a>
        </div>
        <hr class="horizontal dark mt-0">
        <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
          <ul class="navbar-nav">
            <a class="nav-link" href="{{ route('admin.dashboard') }}">
                  <div
                    class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center"
                  >
                    <i><img src="/admin/assets/img/icons/sidebar/business-report 1.png" alt="" /></i>
                  </div>
                  <span class="nav-link-text ms-1">Dashboard</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.listsiswa') }}">
                  <div
                    class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center"
                  >
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
                    class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center"
                  >
                    <img src="/admin/assets/img/icons/sidebar/email 1.png" alt="" />
                  </div>
                  <span class="nav-link-text ms-1">Laporan izin siswa</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.laporanketua') }}">
                  <div
                    class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center"
                  >
                  <img src="/admin/assets/img/icons/sidebar/ketua.png" alt="" />
                  </div>
                  <span class="nav-link-text ms-1">Laporan ketua magang</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.laporanhariansiswa') }}">
                  <div
                    class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center"
                  >
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
                <a class="nav-link active" href="{{ route('admin.riwayatizin') }}">
                  <div
                    class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center"
                  >
                    <img src="/admin/assets/img/icons/sidebar/riwayat.png" alt="" />
                  </div>
                  <span class="nav-link-text ms-1">Riwayat izin siswa</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.feedback') }}">
                  <div
                    class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center"
                  >
                    <img src="/admin/assets/img/icons/sidebar/icons8-feedback-48 1.png" alt="" />
                  </div>
                  <span class="nav-link-text ms-1">Feedback</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.pegumuman') }}">
                  <div
                    class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center"
                  >
                    <img src="/admin/assets/img/icons/sidebar/🦆 icon _announcement_.png" alt="" />
                  </div>
                  <span class="nav-link-text ms-1">Pengumuman</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.kontak') }}">
                  <div
                    class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center"
                  >
                    <img src="/admin/assets/img/icons/sidebar/kontak.png" alt="" />
                  </div>
                  <span class="nav-link-text ms-1">Kontak</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.absen') }}">
                  <div
                    class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center"
                  >
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
                 <a class="nav-link text-white p-0" href="javascript:logout()"><i class="fa-solid fa-right-from-bracket" style="color: #ffffff;"></i></a>
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
                <p style="font-size: 24px; font-weight: bold;">Riwayat izin siswa<form action="">
                    <input type="search" placeholder="Cari disini..." aria-label="Search" style="float: right; border: 1px solid #b8b8b8; border-radius: 10px; font-size: 14px; max-width: 240px; height: 46px;box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2); padding:16px; margin-top: -54px;" name="cari" value="{{ request('cari') }}">
                    </form></p>
                <div class="row g-2">
                    <div class="col-auto">
                        <button type="button" class="btn dropdown-toggle" style="box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Pilih sekolah
                        </button>
                        <div class="dropdown-menu" style="box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);">
                            @foreach ($sekolah as $s)
                                <a class="dropdown-item" href="{{ route('admin.riwayat.filtersekolah', ['sekolah_id' => $s->id]) }}">{{ $s->name }}</a>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-auto">
                      <label for="inputPassword2" class="visually-hidden">Tanggal</label>
                      <input type="date" class="form-control" id="inputPassword2" placeholder="Password">
                    </div>
                </div>
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
                        <th class="text-uppercase text-secondary font-weight-bolder ps-2" style="font-style: normal; font-weight: 700; font-size: 14px; line-height: 17px;">DETAIL</th>
                      </tr>
                    </thead>
                    <tbody>
                        @if (count($izins) > 0)
                        @php
                            $i = 1;
                        @endphp
                        @foreach ($izins as $izin)
                        @php
                            $i++;
                        @endphp
                      <tr>
                        {{-- Modal profil --}}
                        <div class="modal fade" id="profilModal{{ $i }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                            {{-- <div class="modal-content">
                                <div class="modal-body"> --}}
                                    <div class="card card-profile">
                                        <img src="/admin/assets/img/bg-profile.jpg" alt="Image placeholder" class="card-img-top">
                                        <div class="row justify-content-center">
                                        <div class="col-4 col-lg-4 order-lg-2">
                                            <div class="mt-n4 mt-lg-n6 mb-4 mb-lg-0">
                                            <a href="javascript:;">
                                                <img src="/img/{{ $izin->user->foto_siswa }}" style="width: 147px; height: 147px;"  class="rounded-circle img-fluid border border-2 border-white">
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
                                                <span class="text-lg font-weight-bolder">22</span>
                                                <span class="text-sm opacity-8">Sakit</span>
                                                </div>
                                                <div class="d-grid text-center mx-4">
                                                <span class="text-lg font-weight-bolder">10</span>
                                                <span class="text-sm opacity-8">Acara keluarga</span>
                                                </div>
                                                <div class="d-grid text-center">
                                                <span class="text-lg font-weight-bolder">89</span>
                                                <span class="text-sm opacity-8">Hal darurat</span>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="text-center mt-4">
                                            <h5>
                                            {{ $izin->user->name }}<span class="font-weight-light">, ({{ $izin->user->role }})</span>
                                            </h5>
                                            <div class="h6 font-weight-300">
                                            <i class="ni location_pin mr-2"></i>{{ $izin->user->nisn }}
                                            </div>
                                            <div class="h6 mt-4">
                                            <i class="ni business_briefcase-24 mr-2"></i>{{ Carbon::parse($izin->user->awal_pkl)->format('d M Y') }} - {{ Carbon::parse($izin->user->akhir_pkl)->format('d M Y') }}
                                            </div>
                                            <div>
                                            <i class="ni education_hat mr-2"></i>{{ $izin->user->sekolah->name }}
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
                            <div class="px-3">
                                <a href="#profilModal{{ $i }}" style="text-decoration: none;" data-target="#profilModal{{ $i }}" data-toggle="modal">
                                    <p class="text-xs font-weight-bold mb-0 text-uppercase">{{ $izin->user->name }}</p>
                                </a>
                            </div>
                        </td>
                        <td class="">
                          <p class="text-xs font-weight-bold mb-0">{{ $izin->user->sekolah->name }}</p>
                        </td>
                        <td>
                          <p class="text-xs font-weight-bold mb-0">{{ Carbon::parse($izin->tanggal_izin)->format('d M Y') }}</p>
                        </td>
                        <td class="">
                            <span class="badge badge-sm {{ ($izin->alasan == 'darurat') ? "bg-warning " : ""}} {{ ($izin->alasan == 'sakit') ? "bg-danger " : ""}} {{ ($izin->alasan == 'keluarga') ? "bg-primary " : ""}}" style="width: 88px;">{{ $izin->alasan }}</span>
                        </td>
                        <td class="">
                            <button class="badge badge-sm bg-primary" data-toggle="modal" data-target="#detail{{ $i }}" style="border: none;"><i class="fa-solid fa-eye"></i> detail</button>
                        </td>
                      </tr>
                      @endforeach
                      @else
                      <tr>
                        <td colspan="6">
                            <center>
                            <p class="text-xs font-weight-bold mb-0 text-uppercase">Tidak ada data</p>
                            </center>
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
