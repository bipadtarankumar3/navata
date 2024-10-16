@extends('admin.layouts.main')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">

        <div class="row gy-4">

            <div class="col-xl-3 col-sm-6 mt-5">
                <div class="card">
                  <div class="row">
                    <div class="col-6">
                      <div class="card-body">
                        <div class="card-info">
                          <h6 class="mb-4 pb-1 text-nowrap">Client</h6>
                          <div class="d-flex align-items-end mb-3">
                            <h4 class="mb-0 me-2">13k</h4>
                            {{-- <small class="text-success">+15.6%</small> --}}
                          </div>
                          {{-- <div class="badge bg-label-primary rounded-pill">Year of 2024</div> --}}
                        </div>
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="h-100 position-relative">
                        <img src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/img/illustrations/illustration-1.png" alt="Ratings" class="position-absolute card-img-position scaleX-n1-rtl bottom-0 w-auto end-0 me-3 me-xl-0 me-xxl-3 pe-1" width="95">
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-xl-3 col-sm-6 mt-5">
                <div class="card">
                  <div class="row">
                    <div class="col-6">
                      <div class="card-body">
                        <div class="card-info">
                          <h6 class="mb-4 pb-1 text-nowrap">Company</h6>
                          <div class="d-flex align-items-end mb-3">
                            <h4 class="mb-0 me-2">200</h4>
                            {{-- <small class="text-danger">-20%</small> --}}
                          </div>
                          {{-- <div class="badge bg-label-secondary rounded-pill">Last Week</div> --}}
                        </div>
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="h-100 position-relative">
                        <img src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/img/illustrations/illustration-2.png" alt="Ratings" class="position-absolute card-img-position scaleX-n1-rtl bottom-0 w-auto end-0 me-3 me-xl-0 me-xxl-3 pe-1" width="81">
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-xl-6 align-self-end">
                <div class="card">
                  <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="card-title m-0 me-2">Users</h5>
                    <div class="dropdown">
                      <button class="btn p-0" type="button" id="transactionID" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="mdi mdi-dots-vertical mdi-24px"></i>
                      </button>
                      <div class="dropdown-menu dropdown-menu-end" aria-labelledby="transactionID">
                        <a class="dropdown-item waves-effect" href="javascript:void(0);">Refresh</a>
                        <a class="dropdown-item waves-effect" href="javascript:void(0);">Share</a>
                        <a class="dropdown-item waves-effect" href="javascript:void(0);">Update</a>
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="row g-3 mb-xl-2">
                      <div class="col-md-4">
                        <div class="d-flex align-items-center">
                          <div class="avatar">
                            <div class="avatar-initial bg-primary rounded shadow">
                              <i class="mdi mdi-trending-up mdi-24px"></i>
                            </div>
                          </div>
                          <div class="ms-3">
                            <div class="small mb-1">New Registration</div>
                            <h5 class="mb-0">24</h5>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="d-flex align-items-center">
                          <div class="avatar">
                            <div class="avatar-initial bg-success rounded shadow">
                              <i class="mdi mdi-account-outline mdi-24px"></i>
                            </div>
                          </div>
                          <div class="ms-3">
                            <div class="small mb-1">Approved Users</div>
                            <h5 class="mb-0">1200</h5>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="d-flex align-items-center">
                          <div class="avatar">
                            <div class="avatar-initial bg-warning rounded shadow">
                              <i class="mdi mdi-cellphone-link mdi-24px"></i>
                            </div>
                          </div>
                          <div class="ms-3">
                            <div class="small mb-1">Today Attendance</div>
                            <h5 class="mb-0">58</h5>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>


        </div>

       

          <div class="row mt-4">
            <div class="col-md-12">
                
            <!-- Data Tables -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <div class="card-title mb-0">
                          <h5 class="m-0 me-2">Recent Attendance</h5>
                        </div>
                        
                    </div>

                    <div class="card-datatable table-responsive">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="table-light">
                                    <tr>
                                        <th class="text-truncate">#</th>
                                        <th class="text-truncate">Name</th>
                                        <th class="text-truncate">Email</th>
                                        <th class="text-truncate">Check In </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            1
                                        </td>
                                        <td class="text-truncate">Jhon</td>
                                        <td class="text-truncate">jhon@gmail.com</td>
                                        <td><span class="badge bg-label-warning rounded-pill">26/03/2024 10:10 AM</span></td>
                                    </tr>
                                    <tr>
                                        <td>
                                           2
                                        </td>
                                        <td class="text-truncate">Jhon2</td>
                                        <td class="text-truncate">jhon2@gmail.com</td>
                                        <td><span class="badge bg-label-warning rounded-pill">26/03/2024  10:50 AM</span></td>
                                    </tr>
                                    
                                    
     
                                </tbody>
                            </table>
                        </div>
                    </div>

                    
                </div>
            </div>
            <!--/ Data Tables -->
            </div>
          </div>

    </div>
@endsection
