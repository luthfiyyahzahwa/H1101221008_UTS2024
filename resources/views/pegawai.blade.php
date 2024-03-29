@extends('layout.main')
@section('content')
<div class="card shadow-lg mx-4 card-profile-bottom">
    <div class="card-body p-3">
    <div class="row gx-4">
        <div class="col-auto">
        <div class="avatar avatar-xl position-relative">
            <img src="../assets/img/team-1.jpg" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
        </div>
        </div>
        <div class="col-auto my-auto">
        <div class="h-100">
            <h5 class="mb-1">
            Luthfiyyah Zahwa Maitari
            </h5>
            <p class="mb-0 font-weight-bold text-sm">
            Software Engineer
            </p>
        </div>
        </div>
        <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
        <div class="nav-wrapper position-relative end-0">
            <ul class="nav nav-pills nav-fill p-1" role="tablist">
            <li class="nav-item">
                <a class="nav-link mb-0 px-0 py-1 active d-flex align-items-center justify-content-center " data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="true">
                <i class="ni ni-app"></i>
                <span class="ms-2">Informasi</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link mb-0 px-0 py-1 d-flex align-items-center justify-content-center " data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="false">
                <i class="ni ni-email-83"></i>
                <span class="ms-2">Pesan</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link mb-0 px-0 py-1 d-flex align-items-center justify-content-center " data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="false">
                <i class="ni ni-settings-gear-65"></i>
                <span class="ms-2">Pengaturan</span>
                </a>
            </li>
            </ul>
        </div>
        </div>
    </div>
    </div>
</div>
<div class="container-fluid py-4">
    <div class="row">
    <div class="col-md-8">
        <div class="card">
        <div class="card-header pb-0">
            <div class="d-flex align-items-center">
            <p class="mb-0">Form Data Pegawai</p>
            <button class="btn btn-primary btn-sm ms-auto">Lihat Data</button>
            </div>
        </div>
        <div class="card-body">
            <p class="text-uppercase text-sm">Informasi Pengguna</p>
            <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                <label for="example-text-input" class="form-control-label">Nama</label>
                <input class="form-control" type="text" value="Luthfiyyah Zahwa Maitari">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                <label for="example-text-input" class="form-control-label">ID Pegawai</label>
                <input class="form-control" type="email" value="6246281937">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                <label for="example-text-input" class="form-control-label">Alamat Email</label>
                <input class="form-control" type="text" value="luthfiyyahzahwa@gmail.com">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                <label for="example-text-input" class="form-control-label">No Handphone</label>
                <input class="form-control" type="text" value="089726213129">
                </div>
            </div>
            </div>
            <hr class="horizontal dark">
            <p class="text-uppercase text-sm">Informasi Jabatan</p>
            <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                <label for="example-text-input" class="form-control-label">Jabatan</label>
                <input class="form-control" type="text" value="Software Engineer">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                <label for="example-text-input" class="form-control-label">Level</label>
                <input class="form-control" type="text" value="Manager">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                <label for="example-text-input" class="form-control-label">Divisi</label>
                <input class="form-control" type="text" value="IT">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                <label for="example-text-input" class="form-control-label">Gaji</label>
                <input class="form-control" type="text" value="Rp. 20.000.000,00">
                </div>
            </div>
            </div>
            <hr class="horizontal dark">
            <p class="text-uppercase text-sm">Informasi Pendidikan</p>
            <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                <label for="example-text-input" class="form-control-label">Pendidikan</label>
                <input class="form-control" type="text" value="Master of Computer Science">
                </div>
            </div>
            </div>
            <button class="btn btn-primary bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Simpan</button>
        </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card card-profile">
        <img src="../assets/img/bg-profile.jpg" alt="Image placeholder" class="card-img-top">
        <div class="row justify-content-center">
            <div class="col-4 col-lg-4 order-lg-2">
            <div class="mt-n4 mt-lg-n6 mb-4 mb-lg-0">
                <a href="javascript:;">
                <img src="../assets/img/team-2.jpg" class="rounded-circle img-fluid border border-2 border-white">
                </a>
            </div>
            </div>
        </div>
        <div class="card-header text-center border-0 pt-0 pt-lg-2 pb-4 pb-lg-3">
            <div class="d-flex justify-content-between">
            <a href="javascript:;" class="btn btn-sm btn-info mb-0 d-none d-lg-block">Terhubung</a>
            <a href="javascript:;" class="btn btn-sm btn-info mb-0 d-block d-lg-none"><i class="ni ni-collection"></i></a>
            <a href="javascript:;" class="btn btn-sm btn-dark float-right mb-0 d-none d-lg-block">Pesan</a>
            <a href="javascript:;" class="btn btn-sm btn-dark float-right mb-0 d-block d-lg-none"><i class="ni ni-email-83"></i></a>
            </div>
        </div>
        <div class="card-body pt-0">
            <div class="row">
            <div class="col">
                <div class="d-flex justify-content-center">
                <div class="d-grid text-center">
                    <span class="text-lg font-weight-bolder">295</span>
                    <span class="text-sm opacity-8">Teman</span>
                </div>
                <div class="d-grid text-center mx-4">
                    <span class="text-lg font-weight-bolder">108</span>
                    <span class="text-sm opacity-8">Foto</span>
                </div>
                <div class="d-grid text-center">
                    <span class="text-lg font-weight-bolder">2541</span>
                    <span class="text-sm opacity-8">Komentar</span>
                </div>
                </div>
            </div>
            </div>
            <div class="text-center mt-4">
            <h5>
                Mark Lee<span class="font-weight-light">, 25</span>
            </h5>
            <div class="h6 font-weight-300">
                <i class="ni location_pin mr-2"></i>Toronto, Canada
            </div>
            <div class="h6 mt-4">
                <i class="ni business_briefcase-24 mr-2"></i>Solution Manager - Creative Tim Officer
            </div>
            <div>
                <i class="ni education_hat mr-2"></i>University of Computer Science
            </div>
            </div>
        </div>
        </div>
        <div class="col-md-12">
            <div class="text-center mt-4">
                <a href="#" class="btn btn-primary btn-sm">Lihat Selengkapnya</a>
            </div>
        </div>
    </div>
    </div>

    <div class="row mt-4">
    <div class="col-12">
        <div class="card mb-4">
        <div class="card-header pb-0">
            <h6>Data Pegawai</h6>
        </div>
        <div class="card-body px-0 pt-0 pb-2">
            <div class="table-responsive p-0">
            <table class="table align-items-center mb-0">
                <thead>
                <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Jabatan</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Gaji</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Pendidikan</th>
                    <th class="text-secondary opacity-7"></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>
                    <div class="d-flex px-2 py-1">
                        <div>
                        <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3" alt="user1">
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                        <h6 class="mb-0 text-sm">Alina Joanne</h6>
                        <p class="text-xs text-secondary mb-0">alinjoan@creative-tim.com</p>
                        </div>
                    </div>
                    </td>
                    <td>
                    <p class="text-xs font-weight-bold mb-0">Finance</p>
                    <p class="text-xs text-secondary mb-0">Manager</p>
                    </td>
                    <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold">Rp. 12.000.000</span>
                    </td>
                    <td class="align-middle text-start">
                    <span class="text-secondary text-xs font-weight-bold">Sarjana Penasihat Keuangan dan Akuntansi</span>
                    </td>
                    <td class="align-middle">
                    <a href="javascript:;" class="badge badge-sm bg-gradient-success" data-toggle="tooltip" data-original-title="Lihat Data user">
                        Lihat Data
                    </a>
                    </td>
                </tr>
                <tr>
                    <td>
                    <div class="d-flex px-2 py-1">
                        <div>
                        <img src="../assets/img/team-3.jpg" class="avatar avatar-sm me-3" alt="user2">
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                        <h6 class="mb-0 text-sm">Cornand Marchell</h6>
                        <p class="text-xs text-secondary mb-0">cornmarchell@creative-tim.com</p>
                        </div>
                    </div>
                    </td>
                    <td>
                    <p class="text-xs font-weight-bold mb-0">Programator</p>
                    <p class="text-xs text-secondary mb-0">Developer</p>
                    </td>
                    <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold">Rp. 10.000.000</span>
                    </td>
                    <td class="align-middle text-start">
                    <span class="text-secondary text-xs font-weight-bold">BSc (Hons) dalam Sistem Komputer Heriot</span>
                    </td>
                    <td class="align-middle">
                    <a href="javascript:;" class="badge badge-sm bg-gradient-success" data-toggle="tooltip" data-original-title="Lihat Data user">
                        Lihat Data
                    </a>
                    </td>
                </tr>
                <tr>
                    <td>
                    <div class="d-flex px-2 py-1">
                        <div>
                        <img src="../assets/img/team-4.jpg" class="avatar avatar-sm me-3" alt="user3">
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                        <h6 class="mb-0 text-sm">Laura Anastasya</h6>
                        <p class="text-xs text-secondary mb-0">lauratasya@creative-tim.com</p>
                        </div>
                    </div>
                    </td>
                    <td>
                    <p class="text-xs font-weight-bold mb-0">Human Relationship</p>
                    <p class="text-xs text-secondary mb-0">Manager</p>
                    </td>
                    <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold">Rp. 18.000.000</span>
                    </td>
                    <td class="align-middle text-start">
                    <span class="text-secondary text-xs font-weight-bold">Master of Arts in Psychology</span>
                    </td>
                    <td class="align-middle">
                    <a href="javascript:;" class="badge badge-sm bg-gradient-success" data-toggle="tooltip" data-original-title="Lihat Data user">
                        Lihat Data
                    </a>
                    </td>
                </tr>
                <tr>
                    <td>
                    <div class="d-flex px-2 py-1">
                        <div>
                        <img src="../assets/img/team-3.jpg" class="avatar avatar-sm me-3" alt="user4">
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                        <h6 class="mb-0 text-sm">Bryan Anderson</h6>
                        <p class="text-xs text-secondary mb-0">bryananderson@creative-tim.com</p>
                        </div>
                    </div>
                    </td>
                    <td>
                    <p class="text-xs font-weight-bold mb-0">Programator</p>
                    <p class="text-xs text-secondary mb-0">Developer</p>
                    </td>
                    <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold">Rp. 22.000.000</span>
                    </td>
                    <td class="align-middle text-start">
                        <span class="text-secondary text-xs font-weight-bold">Sarjana Pemrograman Komputer</span>
                    </td>
                    <td class="align-middle">
                    <a href="javascript:;" class="badge badge-sm bg-gradient-success" data-toggle="tooltip" data-original-title="Lihat Data user">
                        Lihat Data
                    </a>
                    </td>
                </tr>
                <tr>
                    <td>
                    <div class="d-flex px-2 py-1">
                        <div>
                        <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3" alt="user5">
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                        <h6 class="mb-0 text-sm">Reynald Walter</h6>
                        <p class="text-xs text-secondary mb-0">reywalter@creative-tim.com</p>
                        </div>
                    </div>
                    </td>
                    <td>
                    <p class="text-xs font-weight-bold mb-0">Data</p>
                    <p class="text-xs text-secondary mb-0">Analyst</p>
                    </td>
                    <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold">Rp. 8.000.000</span>
                    </td>
                    <td class="align-middle text-start">
                    <span class="text-secondary text-xs font-weight-bold">Bachelor of Science</span>
                    </td>
                    <td class="align-middle">
                    <a href="javascript:;" class="badge badge-sm bg-gradient-success" data-toggle="tooltip" data-original-title="Lihat Data user">
                        Lihat Data
                    </a>
                    </td>
                </tr>
                <tr>
                    <td>
                    <div class="d-flex px-2 py-1">
                        <div>
                        <img src="../assets/img/team-4.jpg" class="avatar avatar-sm me-3" alt="user6">
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                        <h6 class="mb-0 text-sm">Emmund Hidelton</h6>
                        <p class="text-xs text-secondary mb-0">emmundhidel@creative-tim.com</p>
                        </div>
                    </div>
                    </td>
                    <td>
                    <p class="text-xs font-weight-bold mb-0">Back-End</p>
                    <p class="text-xs text-secondary mb-0">Developer</p>
                    </td>
                    <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold">Rp. 9.500.000</span>
                    </td>
                    <td class="align-middle text-start">
                    <span class="text-secondary text-xs font-weight-bold">Master of Computer Science</span>
                    </td>
                    <td class="align-middle">
                    <a href="javascript:;" class="badge badge-sm bg-gradient-success" data-toggle="tooltip" data-original-title="Lihat Data user">
                        Lihat Data
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
</div>
@endsection