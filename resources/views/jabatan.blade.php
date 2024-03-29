@extends('layout.main')
@section('content')
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Form Master Jabatan</h5>
                </div>
                <div class="card-body">
                    <form>
                        <div class="mb-3">
                            <label for="jabatan" class="form-label">Nama Jabatan</label>
                            <input type="text" class="form-control" id="jabatan" placeholder="Masukkan nama jabatan">
                        </div>
                        <div class="mb-3">
                            <label for="level" class="form-label">Level</label>
                            <select class="form-select" id="level">
                                <option selected disabled>Pilih level jabatan</option>
                                <option value="1">Staff</option>
                                <option value="2">Supervisor</option>
                                <option value="3">Manager</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="divisi" class="form-label">Divisi</label>
                            <input type="text" class="form-control" id="divisi" placeholder="Masukkan nama divisi">
                        </div>
                        <div class="mb-3">
                            <label for="gaji" class="form-label">Gaji</label>
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon1">Rp</span>
                                <input type="text" class="form-control" id="gaji" placeholder="Masukkan jumlah gaji">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary float-end">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row mt-4">
    <div class="col-12">
        <div class="card mb-4">
        <div class="card-header pb-0">
            <h6>Tabel Jabatan</h6>
        </div>
        <div class="card-body px-0 pt-0 pb-2">
            <div class="table-responsive p-0">
            <table class="table align-items-center mb-0">
                <thead>
                <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Jabatan</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Level</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Divisi</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Gaji</th>
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
                    <td class="align-middle text-center text-sm">
                    <span class="badge badge-sm bg-gradient-success">Manajer</span>
                    </td>
                    <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold">Finance</span>
                    </td>
                    <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold">Rp. 12.000.000</span>
                    </td>
                    <td class="align-middle">
                    <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                        Edit
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
                    <td class="align-middle text-center text-sm">
                    <span class="badge badge-sm bg-gradient-secondary">Staff</span>
                    </td>
                    <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold">IT</span>
                    </td>
                    <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold">Rp. 10.000.000</span>
                    </td>
                    <td class="align-middle">
                    <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                        Edit
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
                    <td class="align-middle text-center text-sm">
                    <span class="badge badge-sm bg-gradient-success">Manager</span>
                    </td>
                    <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold">HRD</span>
                    </td>
                    <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold">Rp. 18.000.000</span>
                    </td>
                    <td class="align-middle">
                    <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                        Edit
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
                    <td class="align-middle text-center text-sm">
                    <span class="badge badge-sm bg-gradient-success">Manager</span>
                    </td>
                    <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold">IT</span>
                    </td>
                    <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold">Rp. 22.000.000</span>
                    </td>
                    <td class="align-middle">
                    <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                        Edit
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
                    <td class="align-middle text-center text-sm">
                    <span class="badge badge-sm bg-gradient-secondary">Staff</span>
                    </td>
                    <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold">Operasional</span>
                    </td>
                    <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold">Rp. 8.000.000</span>
                    </td>
                    <td class="align-middle">
                    <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                        Edit
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
                    <td class="align-middle text-center text-sm">
                    <span class="badge badge-sm bg-gradient-secondary">Staff</span>
                    </td>
                    <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold">IT</span>
                    </td>
                    <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold">Rp. 9.500.000</span>
                    </td>
                    <td class="align-middle">
                    <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                        Edit
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
    <div class="row">
    <div class="col-12">
        <div class="card mb-4">
        <div class="card-header pb-0">
            <h6>Statistik Jabatan</h6>
        </div>
        <div class="card-body px-0 pt-0 pb-2">
            <div class="table-responsive p-0">
            <table class="table align-items-center justify-content-center mb-0">
                <thead>
                <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Jabatan</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Divisi</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Kompleksitas</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>
                    <div class="d-flex px-2">
                        <div class="my-auto">
                        <h6 class="mb-0 text-sm">Finance</h6>
                        </div>
                    </div>
                    </td>
                    <td>
                    <span class="text-xs font-weight-bold">Finance</span>
                    </td>
                    <td class="align-middle text-center">
                    <div class="d-flex align-items-center justify-content-center">
                        <span class="me-2 text-xs font-weight-bold">60%</span>
                        <div>
                        <div class="progress">
                            <div class="progress-bar bg-gradient-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                        </div>
                        </div>
                    </div>
                    </td>
                    <td class="align-middle">
                    <button class="btn btn-link text-secondary mb-0">
                        <i class="fa fa-ellipsis-v text-xs"></i>
                    </button>
                    </td>
                </tr>
                <tr>
                    <td>
                    <div class="d-flex px-2">
                        <div class="my-auto">
                        <h6 class="mb-0 text-sm">Programmer Developer</h6>
                        </div>
                    </div>
                    </td>
                    <td>
                    <span class="text-xs font-weight-bold">IT</span>
                    </td>
                    <td class="align-middle text-center">
                    <div class="d-flex align-items-center justify-content-center">
                        <span class="me-2 text-xs font-weight-bold">100%</span>
                        <div>
                        <div class="progress">
                            <div class="progress-bar bg-gradient-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                        </div>
                        </div>
                    </div>
                    </td>
                    <td class="align-middle">
                    <button class="btn btn-link text-secondary mb-0" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-ellipsis-v text-xs"></i>
                    </button>
                    </td>
                </tr>
                <tr>
                    <td>
                    <div class="d-flex px-2">
                        <div class="my-auto">
                        <h6 class="mb-0 text-sm">Human Relationship</h6>
                        </div>
                    </div>
                    </td>
                    <td>
                    <span class="text-xs font-weight-bold">HRD</span>
                    </td>
                    <td class="align-middle text-center">
                    <div class="d-flex align-items-center justify-content-center">
                        <span class="me-2 text-xs font-weight-bold">30%</span>
                        <div>
                        <div class="progress">
                            <div class="progress-bar bg-gradient-danger" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="30" style="width: 30%;"></div>
                        </div>
                        </div>
                    </div>
                    </td>
                    <td class="align-middle">
                    <button class="btn btn-link text-secondary mb-0" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-ellipsis-v text-xs"></i>
                    </button>
                    </td>
                </tr>
                <tr>
                    <td>
                    <div class="d-flex px-2">
                        <div class="my-auto">
                        <h6 class="mb-0 text-sm">Data Analyst</h6>
                        </div>
                    </div>
                    </td>
                    <td>
                    <span class="text-xs font-weight-bold">Operasional</span>
                    </td>
                    <td class="align-middle text-center">
                    <div class="d-flex align-items-center justify-content-center">
                        <span class="me-2 text-xs font-weight-bold">0%</span>
                        <div>
                        <div class="progress">
                            <div class="progress-bar bg-gradient-success" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="0" style="width: 0%;"></div>
                        </div>
                        </div>
                    </div>
                    </td>
                    <td class="align-middle">
                    <button class="btn btn-link text-secondary mb-0" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-ellipsis-v text-xs"></i>
                    </button>
                    </td>
                </tr>
                </tbody>
            </table>
            </div>
        </div>
        </div>
    </div>
</div>
@endsection