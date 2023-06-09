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
    @if (session('berhasil'))
        <script>
            Swal.fire(
            'Berhasil!',
            'Berhasil disimpan',
            'success'
            )
        </script>
    @endif
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
                <a class="nav-link" href="{{ route('admin.riwayatizin') }}">
                  <div
                    class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center"
                  >
                    <img src="/admin/assets/img/icons/sidebar/riwayat.png" alt="" />
                  </div>
                  <span class="nav-link-text ms-1">Riwayat izin siswa</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('admin.feedback')}}">
                  <div
                    class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center"
                  >
                    <img src="/admin/assets/img/icons/sidebar/icons8-feedback-48 1.png" alt="" />
                  </div>
                  <span class="nav-link-text ms-1">Feedback</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('admin.pegumuman')}}">
                  <div
                    class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center"
                  >
                    <img src="/admin/assets/img/icons/sidebar/🦆 icon _announcement_.png" alt="" />
                  </div>
                  <span class="nav-link-text ms-1">Pengumuman</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="{{ route('admin.kontak') }}">
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
              <li class="breadcrumb-item text-sm text-white active" aria-current="page"><a href="{{ route('admin.kontak') }}" class="text-white">Halaman kontak</a></li>
            </ol>
            <h6 class="font-weight-bolder text-white mb-0">Halaman kontak</h6>
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
                <a href="javascript:;" class="nav-link text-white p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
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
                <p style="font-size: 24px; font-weight: bold;">Kontak</p>
              </div>
              <div class="container">
                <form method="POST" action="{{ route('admin.kontak.store') }}">
                    @csrf
                    <div class="row">
                      <div class="col-md-6">
                        <div class="mb-3">
                          <label for="firstName" class="form-label">Alamat email</label>
                            <input type="text" class="form-control" id="firstName" name="email" value="{{ (isset($kontak->email)) ? $kontak->email : "" }}" required>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="mb-3">
                          <label for="lastName" class="form-label">Nomor telepon</label>
                            <input type="number" class="form-control" id="lastName" name="nomor_telepon" value="{{ (isset($kontak->nomor_telepon)) ? $kontak->nomor_telepon : "" }}" required>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="mb-3">
                          <label for="message" class="form-label">Alamat kantor</label>
                          <textarea class="form-control" id="message" name="alamat_kantor" rows="4" required>{{ (isset($kontak->alamat_kantor)) ? $kontak->alamat_kantor : "" }}</textarea>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                          <div class="mb-3">
                            <label for="firstName" class="form-label">Twitter</label>
                            <input type="text" class="form-control" id="firstName" name="twitter" value="{{ (isset($kontak->twitter)) ? $kontak->twitter : "" }}">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="mb-3">
                            <label for="lastName" class="form-label">Facebook</label>
                            <input type="text" class="form-control" id="lastName" name="facebook" value="{{ (isset($kontak->facebook)) ? $kontak->facebook : "" }}">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="mb-3">
                            <label for="firstName" class="form-label">Instagram</label>
                            <input type="text" class="form-control" id="firstName" name="instagram" value="{{ (isset($kontak->instagram)) ? $kontak->instagram : "" }}">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="mb-3">
                            <label for="lastName" class="form-label">LinkedIn</label>
                            <input type="text" class="form-control" id="lastName" name="linkedin" value="{{ (isset($kontak->linkedin)) ? $kontak->linkedin    : "" }}">
                          </div>
                        </div>
                      </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
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
