@extends('layouts.backend')

@section('title')
    Kegiatan | {{ config('app.name') }}
@endsection

@section('title-page')
    Kegiatan
@endsection

@section('content-header')
<div class="row">
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
      <div class="card">
        <div class="card-body p-3">
          <div class="row">
            <div class="col-8">
              <div class="numbers">
                <p class="text-sm mb-0 text-uppercase font-weight-bold">Today's Money</p>
                <h5 class="font-weight-bolder">
                  $53,000
                </h5>
                <p class="mb-0">
                  <span class="text-success text-sm font-weight-bolder">+55%</span>
                  since yesterday
                </p>
              </div>
            </div>
            <div class="col-4 text-end">
              <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
      <div class="card">
        <div class="card-body p-3">
          <div class="row">
            <div class="col-8">
              <div class="numbers">
                <p class="text-sm mb-0 text-uppercase font-weight-bold">Today's Money</p>
                <h5 class="font-weight-bolder">
                  $53,000
                </h5>
                <p class="mb-0">
                  <span class="text-success text-sm font-weight-bolder">+55%</span>
                  since yesterday
                </p>
              </div>
            </div>
            <div class="col-4 text-end">
              <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection
@section('content')
<div class="card ">
    <div class="card-header pb-0 p-3">
      <div class="d-flex justify-content-between">
        <h6 class="mb-2">Sales by Country</h6>
      </div>
    </div>
    <div class="table-responsive">
      <table class="table align-items-center ">
        <tbody>
          <tr>
            <td class="w-30">
              <div class="d-flex px-2 py-1 align-items-center">
                <div>
                  <img src="{{ asset('tamplate') }}/assets/img/icons/flags/US.png" alt="Country flag">
                </div>
                <div class="ms-4">
                  <p class="text-xs font-weight-bold mb-0">Country:</p>
                  <h6 class="text-sm mb-0">United States</h6>
                </div>
              </div>
            </td>
            <td>
              <div class="text-center">
                <p class="text-xs font-weight-bold mb-0">Sales:</p>
                <h6 class="text-sm mb-0">2500</h6>
              </div>
            </td>
            <td>
              <div class="text-center">
                <p class="text-xs font-weight-bold mb-0">Value:</p>
                <h6 class="text-sm mb-0">$230,900</h6>
              </div>
            </td>
            <td class="align-middle text-sm">
              <div class="col text-center">
                <p class="text-xs font-weight-bold mb-0">Bounce:</p>
                <h6 class="text-sm mb-0">29.9%</h6>
              </div>
            </td>
          </tr>
          <tr>
            <td class="w-30">
              <div class="d-flex px-2 py-1 align-items-center">
                <div>
                  <img src="{{ asset('tamplate') }}/assets/img/icons/flags/DE.png" alt="Country flag">
                </div>
                <div class="ms-4">
                  <p class="text-xs font-weight-bold mb-0">Country:</p>
                  <h6 class="text-sm mb-0">Germany</h6>
                </div>
              </div>
            </td>
            <td>
              <div class="text-center">
                <p class="text-xs font-weight-bold mb-0">Sales:</p>
                <h6 class="text-sm mb-0">3.900</h6>
              </div>
            </td>
            <td>
              <div class="text-center">
                <p class="text-xs font-weight-bold mb-0">Value:</p>
                <h6 class="text-sm mb-0">$440,000</h6>
              </div>
            </td>
            <td class="align-middle text-sm">
              <div class="col text-center">
                <p class="text-xs font-weight-bold mb-0">Bounce:</p>
                <h6 class="text-sm mb-0">40.22%</h6>
              </div>
            </td>
          </tr>
          <tr>
            <td class="w-30">
              <div class="d-flex px-2 py-1 align-items-center">
                <div>
                  <img src="{{ asset('tamplate') }}/assets/img/icons/flags/GB.png" alt="Country flag">
                </div>
                <div class="ms-4">
                  <p class="text-xs font-weight-bold mb-0">Country:</p>
                  <h6 class="text-sm mb-0">Great Britain</h6>
                </div>
              </div>
            </td>
            <td>
              <div class="text-center">
                <p class="text-xs font-weight-bold mb-0">Sales:</p>
                <h6 class="text-sm mb-0">1.400</h6>
              </div>
            </td>
            <td>
              <div class="text-center">
                <p class="text-xs font-weight-bold mb-0">Value:</p>
                <h6 class="text-sm mb-0">$190,700</h6>
              </div>
            </td>
            <td class="align-middle text-sm">
              <div class="col text-center">
                <p class="text-xs font-weight-bold mb-0">Bounce:</p>
                <h6 class="text-sm mb-0">23.44%</h6>
              </div>
            </td>
          </tr>
          <tr>
            <td class="w-30">
              <div class="d-flex px-2 py-1 align-items-center">
                <div>
                  <img src="{{ asset('tamplate') }}/assets/img/icons/flags/BR.png" alt="Country flag">
                </div>
                <div class="ms-4">
                  <p class="text-xs font-weight-bold mb-0">Country:</p>
                  <h6 class="text-sm mb-0">Brasil</h6>
                </div>
              </div>
            </td>
            <td>
              <div class="text-center">
                <p class="text-xs font-weight-bold mb-0">Sales:</p>
                <h6 class="text-sm mb-0">562</h6>
              </div>
            </td>
            <td>
              <div class="text-center">
                <p class="text-xs font-weight-bold mb-0">Value:</p>
                <h6 class="text-sm mb-0">$143,960</h6>
              </div>
            </td>
            <td class="align-middle text-sm">
              <div class="col text-center">
                <p class="text-xs font-weight-bold mb-0">Bounce:</p>
                <h6 class="text-sm mb-0">32.14%</h6>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
@endsection
