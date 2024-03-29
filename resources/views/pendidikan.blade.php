@extends('layout.main')
@section('content')
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-lg-6">
            <div class="card h-100">
                <div class="card-header">
                    <h5 class="card-title">Form Pendidikan</h5>
                </div>
                <div class="card-body">
                    <form>
                        <div class="mb-3">
                            <label for="pendidikan" class="form-label">Tingkat Pendidikan</label>
                            <select class="form-select" id="pendidikan">
                                <option selected disabled>Pilih tingkat pendidikan</option>
                                <option value="1">SD</option>
                                <option value="2">SMP</option>
                                <option value="3">SMA/SMK</option>
                                <option value="4">Diploma</option>
                                <option value="5">Sarjana</option>
                                <option value="6">Magister</option>
                                <option value="7">Doktor</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="nama_sekolah" class="form-label">Nama Sekolah / Universitas</label>
                            <input type="text" class="form-control" id="nama_sekolah" placeholder="Masukkan nama sekolah / universitas">
                        </div>
                        <div class="mb-3">
                            <label for="jurusan" class="form-label">Jurusan</label>
                            <input type="text" class="form-control" id="jurusan" placeholder="Masukkan jurusan">
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="tanggal_mulai" class="form-label">Tanggal Mulai</label>
                                <input type="date" class="form-control" id="tanggal_mulai">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="tanggal_selesai" class="form-label">Tanggal Selesai</label>
                                <input type="date" class="form-control" id="tanggal_selesai">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary float-end">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card h-100">
                <div class="card-header pb-0 p-3">
                    <div class="row">
                        <div class="col-6 d-flex align-items-center">
                            <h6 class="mb-0">Invoices</h6>
                        </div>
                        <div class="col-6 text-end">
                            <button class="btn btn-outline-primary btn-sm mb-0">View All</button>
                        </div>
                    </div>
                </div>
                <hr class="horizontal dark">
                <div class="card-body p-3 pb-0">
                    <ul class="list-group">
                        <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-4 border-radius-lg">
                            <div class="d-flex flex-column">
                            <h6 class="mb-1 text-dark font-weight-bold text-sm">March, 01, 2020</h6>
                            <span class="text-xs">#MS-415646</span>
                            </div>
                            <div class="d-flex align-items-center text-sm">
                            $180
                            <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i class="fas fa-file-pdf text-lg me-1"></i> PDF</button>
                            </div>
                        </li>
                        <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-4 border-radius-lg">
                            <div class="d-flex flex-column">
                            <h6 class="text-dark mb-1 font-weight-bold text-sm">February, 10, 2021</h6>
                            <span class="text-xs">#RV-126749</span>
                            </div>
                            <div class="d-flex align-items-center text-sm">
                            $250
                            <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i class="fas fa-file-pdf text-lg me-1"></i> PDF</button>
                            </div>
                        </li>
                        <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-4 border-radius-lg">
                            <div class="d-flex flex-column">
                            <h6 class="text-dark mb-1 font-weight-bold text-sm">April, 05, 2020</h6>
                            <span class="text-xs">#FB-212562</span>
                            </div>
                            <div class="d-flex align-items-center text-sm">
                            $560
                            <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i class="fas fa-file-pdf text-lg me-1"></i> PDF</button>
                            </div>
                        </li>
                        <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-4 border-radius-lg">
                            <div class="d-flex flex-column">
                            <h6 class="text-dark mb-1 font-weight-bold text-sm">June, 25, 2019</h6>
                            <span class="text-xs">#QW-103578</span>
                            </div>
                            <div class="d-flex align-items-center text-sm">
                            $120
                            <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i class="fas fa-file-pdf text-lg me-1"></i> PDF</button>
                            </div>
                        </li>
                        <li class="list-group-item border-0 d-flex justify-content-between ps-0 border-radius-lg">
                            <div class="d-flex flex-column">
                            <h6 class="text-dark mb-1 font-weight-bold text-sm">March, 01, 2019</h6>
                            <span class="text-xs">#AR-803481</span>
                            </div>
                            <div class="d-flex align-items-center text-sm">
                            $300
                            <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i class="fas fa-file-pdf text-lg me-1"></i> PDF</button>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>           
    </div>

    <div class="row mt-4">
    <div class="col-12">
        <div class="card">
        <div class="card-header pb-0 px-3">
            <h6 class="mb-0">Informasi Pendidikan</h6>
        </div>
        <div class="card-body pt-4 p-3">
            <ul class="list-group">
            <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                <div class="d-flex flex-column">
                <h6 class="mb-3 text-sm">Alina Joanne</h6>
                <span class="mb-2 text-xs">Nama Perusahaan: <span class="text-dark font-weight-bold ms-sm-2">JPMorgan Chase</span></span>
                <span class="mb-2 text-xs">ID Pegawai <span class="text-dark ms-sm-2 font-weight-bold">641628916</span></span>
                <span class="text-xs">Riwayat Pendidikan : <span class="text-dark ms-sm-2 font-weight-bold">Sarjana Penasihat Keuangan dan Akuntansi
VSB - Technical University of Ostrava</span></span>
                </div>
                <div class="ms-auto text-end">
                <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;"><i class="far fa-trash-alt me-2"></i>Delete</a>
                <a class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
                </div>
            </li>
            <li class="list-group-item border-0 d-flex p-4 mb-2 mt-3 bg-gray-100 border-radius-lg">
                <div class="d-flex flex-column">
                <h6 class="mb-3 text-sm">Cornand Marchell</h6>
                <span class="mb-2 text-xs">Nama Perusahaan: <span class="text-dark font-weight-bold ms-sm-2">JPMorgan Chase</span></span>
                <span class="mb-2 text-xs">ID Pegawai <span class="text-dark ms-sm-2 font-weight-bold">618722537</span></span>
                <span class="text-xs">Riwayat Pendidikan : <span class="text-dark ms-sm-2 font-weight-bold">BSc (Hons) dalam Sistem Komputer
Heriot - Watt University Dubai</span></span>
                </div>
                <div class="ms-auto text-end">
                <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;"><i class="far fa-trash-alt me-2"></i>Delete</a>
                <a class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
                </div>
            </li>
            <li class="list-group-item border-0 d-flex p-4 mb-2 mt-3 bg-gray-100 border-radius-lg">
                <div class="d-flex flex-column">
                <h6 class="mb-3 text-sm">Laura Anastasya</h6>
                <span class="mb-2 text-xs">Nama Perusahaan: <span class="text-dark font-weight-bold ms-sm-2">JPMorgan Chase</span></span>
                <span class="mb-2 text-xs">ID Pegawai <span class="text-dark ms-sm-2 font-weight-bold">646718902</span></span>
                <span class="text-xs">Riwayat Pendidikan : <span class="text-dark ms-sm-2 font-weight-bold">Master of Arts in Psychology - Stanford University</span></span>
                </div>
                <div class="ms-auto text-end">
                <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;"><i class="far fa-trash-alt me-2"></i>Delete</a>
                <a class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
                </div>
            </li>
            </ul>
        </div>
        </div>
    </div>
    </div>
</div>
@endsection