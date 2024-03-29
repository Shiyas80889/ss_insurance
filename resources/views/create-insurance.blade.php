<!--
=========================================================
* Material Dashboard 2 - v3.1.0
=========================================================

* Product Page: https://www.creative-tim.com/product/material-dashboard
* Copyright 2023 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/min/dropzone.min.css" rel="stylesheet">
  <style>
      .hidden {
          display: none;
      }
  </style>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="{{ URL::asset('assets/img/apple-icon.png') }}">
  <link rel="icon" type="image/png" href="{{ URL::asset('assets/img/favicon.png') }}">
  <title>
    SS Insurance
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="{{ URL::asset('assets/css/nucleo-icons.css') }}" rel="stylesheet" />
  <link href="{{ URL::asset('assets/css/nucleo-svg.css') }}" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="{{ URL::asset('assets/css/material-dashboard.css?v=3.1.0') }}" rel="stylesheet" />
  <!-- Nepcha Analytics (nepcha.com) -->
  <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
  <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
</head>

<body class="g-sidenav-show  bg-gray-200">
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="" target="_blank">
        <img src="{{ URL::asset('assets/img/logo-ct.png') }}" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold text-white">SS Insurance</span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white " href="{{ route('dashboard') }}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white active bg-gradient-primary" href="{{ route('insurance') }}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">Insurance</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="../pages/billing.html">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">receipt_long</i>
            </div>
            <span class="nav-link-text ms-1">Comapny</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="../pages/virtual-reality.html">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">view_in_ar</i>
            </div>
            <span class="nav-link-text ms-1">Segment</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="../pages/rtl.html">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">format_textdirection_r_to_l</i>
            </div>
            <span class="nav-link-text ms-1">Coverage</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="../pages/notifications.html">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">notifications</i>
            </div>
            <span class="nav-link-text ms-1">Notifications</span>
          </a>
        </li>
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Account pages</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="../pages/profile.html">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">person</i>
            </div>
            <span class="nav-link-text ms-1">Profile</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="../pages/sign-in.html">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">login</i>
            </div>
            <span class="nav-link-text ms-1">Sign In</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="../pages/sign-up.html">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">assignment</i>
            </div>
            <span class="nav-link-text ms-1">Sign Up</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="{{ route('logout') }}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">person</i>
            </div>
            <span class="nav-link-text ms-1">Log out</span>
          </a>
        </li>
      </ul>
    </div>
    <div class="sidenav-footer position-absolute w-100 bottom-0 ">
      {{-- <div class="mx-3">
        <a class="btn btn-outline-primary mt-4 w-100" href="https://www.creative-tim.com/learning-lab/bootstrap/overview/material-dashboard?ref=sidebarfree" type="button">Documentation</a>
        <a class="btn bg-gradient-primary w-100" href="https://www.creative-tim.com/product/material-dashboard-pro?ref=sidebarfree" type="button">Upgrade to pro</a>
      </div> --}}
    </div>
  </aside>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Insurance</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Insurance</h6>
        </nav>
        
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            {{-- <button id="uploadButton">Excel Upload</button> --}}
            {{-- <div class="container hidden" id="uploadForm">
                <form action="{{ route('upload.file') }}" method="post" enctype="multipart/form-data" class="dropzone" id="my-dropzone">
                    @csrf
                    <div class="fallback">
                        <input name="file" type="file" multiple />
                    </div>
                </form>
            </div> --}}

            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div style="display:flex;" class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <div style="width:88%" >
                  @if ($insurance != null)
                  <h6 class="text-white text-capitalize ps-3">Update Insurance Data</h6>
    @else
    <h6 class="text-white text-capitalize ps-3">Create Insurance Data</h6>
    @endif
                  
                </div>
                <div style="border: 1px solid;border-radius: 10px;" class="text-white text-capitalize ps-3">
                  <button id="uploadButton" class="btn  btn-sm mb-0 me-3">Excel Upload</button>
                  {{-- <a id="uploadButton" class="btn  btn-sm mb-0 me-3" target="_blank" href="{{ route('create-insurance') }}">Excel Upload</a> --}}
                </div>

                {{-- <div style="border: 1px solid;border-radius: 10px;" class="text-white text-capitalize ps-3"><a class="btn  btn-sm mb-0 me-3" target="_blank" href="{{ route('create-insurance') }}">Add New</a></div> --}}
              </div>
            </div>

            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <div style="margin:15px;" >
                  <div class="container hidden" id="uploadForm">
                    <form action="{{ route('upload.file') }}" method="post" enctype="multipart/form-data" class="dropzone" id="my-dropzone">
                        @csrf
                        <div class="fallback">
                            <input name="file" type="file" multiple />
                        </div>
                    </form>
                </div>

              <form  action="{{ route('submit-insurance') }}" method="POST" >
                @csrf
                <div class="row">
                    
                   <div class="col-md-6">
                    <div @if ($insurance != null) class="input-group input-group-outline my-3 focused is-focused" @else class="input-group input-group-outline my-3" @endif>
                        
                        {{-- <div class="col-md-3">
                        <label for="exampleFormControlSelect1" class="ms-0">Date</label>
                        </div> --}}
                        <div class="col-md-12">
                        <input  @if ($insurance != null) value="{{$insurance['date']}}" @endif  name="date" type="date" class="form-control">
                        @error('date')
                        <p class="text-red-500">{{ $message }}</p>
                        @enderror
                        <div class="clearfix"></div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div @if ($insurance != null) class="input-group input-group-outline my-3 focused is-focused" @else class="input-group input-group-outline my-3" @endif>
                       <label class="form-label">Customer Name</label>
                       <input  @if ($insurance != null) value="{{$insurance['customer_name']}}" @endif name="customer_name" type="text" class="form-control">
                       @error('customer_name')
                                                   <p class="text-red-500">{{ $message }}</p>
                                                   @enderror
                                                   <div class="clearfix"></div>
                     </div>
                     </div>
                 </div>
                {{-- <div class="row">
                  
                </div> --}}
                <div class="row">
                    <div class="col-md-12">
                        <div @if ($insurance != null) class="input-group input-group-outline my-3 focused is-focused" @else class="input-group input-group-outline my-3" @endif>
                          <label class="form-label">Reg No</label>
                          <input  @if ($insurance != null) value="{{$insurance['reg_no']}}" @endif  name="reg_no" type="text" class="form-control">
                          @error('reg_no')
                          <p class="text-red-500">{{ $message }}</p>
                          @enderror
                          <div class="clearfix"></div>
                        </div>
                      </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                      <div @if ($insurance != null) class="input-group input-group-outline my-3 focused is-focused" @else class="input-group input-group-outline my-3" @endif>
                    <select  name="company_id" class="form-control" id="exampleFormControlSelect1">
                      <option value="" >Select a company</option>
                      @foreach ($company as $item => $val)
                      <option  value="{{$val->id}}" @if($insurance != null && $val->id == $insurance['company_id']) selected @endif>{{$val->name}}</option>
                      @endforeach
                      {{-- <option value="" >Select a company</option>
                      <option value="Honda" >Honda</option>
                      <option value="Tata" >Tata</option>
                      <option value="Skoda" >Skoda</option>
                      <option value="Vokswagen" >Vokswagen</option>
                      <option value="MG" >MG</option> --}}
                    </select>
                    @error('company_id')
                    <p class="text-red-500">{{ $message }}</p>
                    @enderror
                    <div class="clearfix"></div>
                  </div>
                    </div>
                  </div>
                
  <div class="row">
    <div class="col-md-12">
      <div @if ($insurance != null) class="input-group input-group-outline my-3 focused is-focused" @else class="input-group input-group-outline my-3" @endif>
        <label class="form-label">Make</label>
        <input  @if ($insurance != null) value="{{$insurance['make']}}" @endif  name="make" type="text" class="form-control">
        @error('make')
        <p class="text-red-500">{{ $message }}</p>
        @enderror
        <div class="clearfix"></div>
      </div>
    </div>
    
  </div>
  

  <div class="row">
    <div class="col-md-6">
      <div @if ($insurance != null) class="input-group input-group-outline my-3 focused is-focused" @else class="input-group input-group-outline my-3" @endif>
        <label class="form-label">Model</label>
        <input  @if ($insurance != null) value="{{$insurance['model']}}" @endif  name="model" type="text" class="form-control">
        @error('model')
        <p class="text-red-500">{{ $message }}</p>
        @enderror
        <div class="clearfix"></div>
      </div>
    </div>
    {{-- <div class="col-md-6">
      <div @if ($insurance != null) class="input-group input-group-outline my-3 focused is-focused" @else class="input-group input-group-outline my-3" @endif>
        <label class="form-label">Fuel</label>
        <input  @if ($insurance != null) value="{{$insurance['fuel']}}" @endif  name="fuel" type="text" class="form-control">
        @error('fuel')
        <p class="text-red-500">{{ $message }}</p>
        @enderror
        <div class="clearfix"></div>
      </div>
    </div> --}}
    <div class="col-md-6">
        <div @if ($insurance != null) class="input-group input-group-outline my-3 focused is-focused" @else class="input-group input-group-outline my-3" @endif>
      <select  name="fuel" class="form-control" id="exampleFormControlSelect1">
        @if ($insurance != null && $insurance['fuel']) 
        <option value="{{$insurance['fuel'] }}" selected >{{$insurance['fuel']}}</option>
        <option value="Petrol" @if ($insurance['fuel'] == 'Petrol') hidden @endif>Petrol</option>
        <option value="Diesel" @if ($insurance['fuel'] == 'Diesel') hidden @endif>Diesel</option>
        <option value="Electric" @if ($insurance['fuel'] == 'Electric') hidden @endif>Electric</option>
        <option value="Lpg" @if ($insurance['fuel'] == 'Lpg') hidden @endif>Lpg</option>
            @else
        <option value="" >Select a Fuel</option>
        {{-- @foreach ($company as $item => $val)
        <option  value="{{$val->id}}" @if($insurance != null && $val->id == $insurance['company_id']) selected @endif>{{$val->name}}</option>
        @endforeach --}}
        {{-- <option  value="{{$val->id}}" @if($insurance != null && $val->id == $insurance['company_id']) selected @endif>{{$val->name}}</option> --}}
        <option value="Petrol" >Petrol</option>
        <option value="Diesel" >Diesel</option>
        <option value="Electric" >Electric</option>
        <option value="Lpg" >Lpg</option>
        @endif
          </select>
      @error('company_id')
      <p class="text-red-500">{{ $message }}</p>
      @enderror
      <div class="clearfix"></div>
    </div>
      </div>
  </div>

  <div class="row">
    <div class="col-md-6">
      <div @if ($insurance != null) class="input-group input-group-outline my-3 focused is-focused" @else class="input-group input-group-outline my-3" @endif>
        <label class="form-label">Seating</label>
        <input  @if ($insurance != null) value="{{$insurance['seating']}}" @endif  name="seating" type="text" class="form-control">
        @error('seating')
        <p class="text-red-500">{{ $message }}</p>
        @enderror
        <div class="clearfix"></div>
      </div>
    </div>
    <div class="col-md-6">
      <div @if ($insurance != null) class="input-group input-group-outline my-3 focused is-focused" @else class="input-group input-group-outline my-3" @endif>
        <label class="form-label">GVW/CC</label>
        <input  @if ($insurance != null) value="{{$insurance['gvm_or_cc']}}" @endif  name="gvm_or_cc" type="text" class="form-control">
        @error('gvm_or_cc')
        <p class="text-red-500">{{ $message }}</p>
        @enderror
        <div class="clearfix"></div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-6">
      <div @if ($insurance != null) class="input-group input-group-outline my-3 focused is-focused" @else class="input-group input-group-outline my-3" @endif>
        <label class="form-label">Manufacturing Year</label>
        <input  @if ($insurance != null) value="{{$insurance['manufacturing_year']}}" @endif  name="manufacturing_year" type="text" class="form-control">
        @error('manufacturing_year')
        <p class="text-red-500">{{ $message }}</p>
        @enderror
        <div class="clearfix"></div>
      </div>
    </div>
    <div class="col-md-6">
        <div @if ($insurance != null) class="input-group input-group-outline my-3 focused is-focused" @else class="input-group input-group-outline my-3" @endif>
        <select name="segment_id" class="form-control" id="exampleFormControlSelect1">
          <option value="" >Select a Segment</option>
          @foreach ($segment as $item => $val)
          <option  value="{{$val->id}}" @if($insurance != null && $val->id == $insurance['segment_id']) selected @endif>{{$val->name}}</option>
          @endforeach
          {{-- <option value="1" >Hatch back</option>
          <option value="2" >SUV</option>
          <option value="3" >Sedan</option>
          <option value="4" >Adventure</option> --}}
        </select>
        @error('segment_id')
        <p class="text-red-500">{{ $message }}</p>
        @enderror
        <div class="clearfix"></div>
      </div>
        </div>
    
  </div>
  <div class="row">
   <div class="col-md-6">
    <div @if ($insurance != null) class="input-group input-group-outline my-3 focused is-focused" @else class="input-group input-group-outline my-3" @endif>
    <select name="coverage_id" class="form-control" id="exampleFormControlSelect1">
      <option value="" >Select a Coverage</option>
      @foreach ($coverage as $item => $val)
      <option  value="{{$val->id}}" @if($insurance != null && $val->id == $insurance['coverage_id']) selected @endif>{{$val->name}}</option>
      @endforeach
      {{-- <option value="Full covergae" >Full covergae</option>
      <option value="Third Party" >Third Party</option>
      <option value="Bumber to bumber" >Bumber to bumber</option> --}}
    </select>
    @error('coverage_id')
    <p class="text-red-500">{{ $message }}</p>
    @enderror
    <div class="clearfix"></div>
  </div>
  </div>
  <div class="col-md-6">
    <div @if ($insurance != null) class="input-group input-group-outline my-3 focused is-focused" @else class="input-group input-group-outline my-3" @endif>
      <label class="form-label">OD</label>
      <input  @if ($insurance != null) value="{{$insurance['od']}}" @endif  name="od" type="text" class="form-control">
      @error('od')
      <p class="text-red-500">{{ $message }}</p>
      @enderror
      <div class="clearfix"></div>
    </div>
  </div>
  </div>

  <div class="row">
    <div class="col-md-6">
        <div @if ($insurance != null) class="input-group input-group-outline my-3 focused is-focused" @else class="input-group input-group-outline my-3" @endif>
          <label class="form-label">TP</label>
          <input  @if ($insurance != null) value="{{$insurance['tp']}}" @endif  name="tp" type="text" class="form-control">
          @error('tp')
          <p class="text-red-500">{{ $message }}</p>
          @enderror
          <div class="clearfix"></div>
        </div>
      </div>
    <div class="col-md-6">
      <div @if ($insurance != null) class="input-group input-group-outline my-3 focused is-focused" @else class="input-group input-group-outline my-3" @endif>
        <label class="form-label">Net Premium</label>
        <input  @if ($insurance != null) value="{{$insurance['net_premium']}}" @endif  name="net_premium" type="text" class="form-control">
        @error('net_premium')
        <p class="text-red-500">{{ $message }}</p>
        @enderror
        <div class="clearfix"></div>
      </div>
    </div>
    
  </div>

  <div class="row">
    <div class="col-md-6">
      <div @if ($insurance != null) class="input-group input-group-outline my-3 focused is-focused" @else class="input-group input-group-outline my-3" @endif>
        <label class="form-label">GST</label>
        <input  @if ($insurance != null) value="{{$insurance['gst']}}" @endif  name="gst" type="text" class="form-control">
        @error('gst')
        <p class="text-red-500">{{ $message }}</p>
        @enderror
        <div class="clearfix"></div>
      </div>
    </div>
    <div class="col-md-6">
      <div @if ($insurance != null) class="input-group input-group-outline my-3 focused is-focused" @else class="input-group input-group-outline my-3" @endif>
        <label class="form-label">Final Premium</label>
        <input  @if ($insurance != null) value="{{$insurance['final_premium']}}" @endif  name="final_premium" type="text" class="form-control">
        @error('final_premium')
        <p class="text-red-500">{{ $message }}</p>
        @enderror
        <div class="clearfix"></div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-6">
      <div @if ($insurance != null) class="input-group input-group-outline my-3 focused is-focused" @else class="input-group input-group-outline my-3" @endif>
        <label class="form-label">Payment Status</label>
        <input  @if ($insurance != null) value="{{$insurance['payment_status']}}" @endif  name="payment_status" type="text" class="form-control">
        @error('payment_status')
        <p class="text-red-500">{{ $message }}</p>
        @enderror
        <div class="clearfix"></div>
      </div>
    </div>
    <div class="col-md-6">
      <div @if ($insurance != null) class="input-group input-group-outline my-3 focused is-focused" @else class="input-group input-group-outline my-3" @endif>
        <label class="form-label">Collected Prm</label>
        <input  @if ($insurance != null) value="{{$insurance['collected_prm']}}" @endif  name="collected_prm" type="text" class="form-control">
        @error('collected_prm')
        <p class="text-red-500">{{ $message }}</p>
        @enderror
        <div class="clearfix"></div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-6">
      <div @if ($insurance != null) class="input-group input-group-outline my-3 focused is-focused" @else class="input-group input-group-outline my-3" @endif>
     <label class="form-label">Policy Number</label>
     <input  @if ($insurance != null) value="{{$insurance['policy_number']}}" @endif  name="policy_number" type="text" class="form-control">
     @error('policy_number')
     <p class="text-red-500">{{ $message }}</p>
     @enderror
     <div class="clearfix"></div>
   </div>
   </div>
   <div class="col-md-6">
    <div @if ($insurance != null) class="input-group input-group-outline my-3 focused is-focused" @else class="input-group input-group-outline my-3" @endif>
        
        <div class="col-md-3">
        <label for="exampleFormControlSelect1" class="ms-0">Risk Start Date</label>
        </div>
        <div class="col-md-9">
        <input  @if ($insurance != null) value="{{$insurance['risk_start_date']}}" @endif  name="risk_start_date" type="date" class="form-control">
        @error('risk_start_date')
        <p class="text-red-500">{{ $message }}</p>
        @enderror
        <div class="clearfix"></div>
        </div>
      </div>
    </div>
 </div>

 <div class="row">
  <div class="col-md-12">
    <div @if ($insurance != null) class="input-group input-group-outline my-3 focused is-focused" @else class="input-group input-group-outline my-3" @endif>
  <select name="ref_name_id" class="form-control" id="exampleFormControlSelect1">
    <option value="" >Referance Name</option>
    @foreach ($referance as $item => $val)
    <option  value="{{$val->id}}" @if($insurance != null && $val->id == $insurance['ref_name_id']) selected @endif>{{$val->name}}</option>
    @endforeach
    {{-- <option value="1" >Freddy</option>
    <option value="2" >Cristy</option>
    <option value="3" >Gladice</option> --}}
  </select>
  @error('ref_name_id')
  <p class="text-red-500">{{ $message }}</p>
  @enderror
  <div class="clearfix"></div>
</div>
  </div>
</div>

<div class="row">
  <div class="col-md-6">
    <div @if ($insurance != null) class="input-group input-group-outline my-3 focused is-focused" @else class="input-group input-group-outline my-3" @endif>
   <label class="form-label">Mobile Number</label>
   <input  @if ($insurance != null) value="{{$insurance['mobile_number']}}" @endif  name="mobile_number" type="phone" class="form-control">
   @error('mobile_number')
   <p class="text-red-500">{{ $message }}</p>
   @enderror
   <div class="clearfix"></div>
 </div>
 </div>
 <div class="col-md-6">
  <div @if ($insurance != null) class="input-group input-group-outline my-3 focused is-focused" @else class="input-group input-group-outline my-3" @endif>
    <select name="issued_by_id" class="form-control" id="exampleFormControlSelect1">
      <option value="" >Issued By</option>
      @foreach ($issuer as $item => $val)
      <option  value="{{$val->id}}" @if($insurance != null && $val->id == $insurance['issued_by_id']) selected @endif>{{$val->name}}</option>
      @endforeach
      {{-- <option value="1" >Freddy</option>
      <option value="2" >Cristy</option>
      <option value="3" >Gladice</option> --}}
    </select>
    @error('issued_by_id')
    <p class="text-red-500">{{ $message }}</p>
    @enderror
    <div class="clearfix"></div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-6">
    <div @if ($insurance != null) class="input-group input-group-outline my-3 focused is-focused" @else class="input-group input-group-outline my-3" @endif>
   <label class="form-label">Issued Code</label>
   <input  @if ($insurance != null) value="{{$insurance['issued_code']}}" @endif  name="issued_code" type="text" class="form-control">
   @error('issued_code')
   <p class="text-red-500">{{ $message }}</p>
   @enderror
   <div class="clearfix"></div>
 </div>
 </div>
 <div class="col-md-6">
    <div @if ($insurance != null) class="input-group input-group-outline my-3 focused is-focused" @else class="input-group input-group-outline my-3" @endif>
   <label class="form-label">Email address</label>
   <input  @if ($insurance != null) value="{{$insurance['email']}}" @endif  name="email" type="text" class="form-control">
   @error('email')
   <p class="text-red-500">{{ $message }}</p>
   @enderror
   <div class="clearfix"></div>
 </div>
 </div>

</div>
<div class="row">
    <div class="col-md-6">
        <div @if ($insurance != null) class="input-group input-group-outline my-3 focused is-focused" @else class="input-group input-group-outline my-3" @endif>
          <select name="payment_mode_id" class="form-control" id="exampleFormControlSelect1">
            <option value="" >Select a Payment Mode</option>
            @foreach ($paymentmode as $item => $val)
            <option  value="{{$val->id}}" @if($insurance != null && $val->id == $insurance['payment_mode_id']) selected @endif>{{$val->name}}</option>
            @endforeach
            {{-- <option value="1" >Cash</option>
            <option value="2" >Card</option> --}}
          </select>
          @error('payment_mode_id')
          <p class="text-red-500">{{ $message }}</p>
          @enderror
          <div class="clearfix"></div>
          </div>
        </div>
        <div class="col-md-6">
            <div @if ($insurance != null) class="input-group input-group-outline my-3 focused is-focused" @else class="input-group input-group-outline my-3" @endif>
           <label class="form-label">Agent Commission</label>
           <input  @if ($insurance != null) value="{{$insurance['agent_commission']}}" @endif  name="agent_commission" type="text" class="form-control">
           @error('agent_commission')
           <p class="text-red-500">{{ $message }}</p>
           @enderror
           <div class="clearfix"></div>
         </div>
         </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div @if ($insurance != null) class="input-group input-group-outline my-3 focused is-focused" @else class="input-group input-group-outline my-3" @endif>
       <label class="form-label">Payment Given To Account</label>
       <input  @if ($insurance != null) value="{{$insurance['payment_given_to_account']}}" @endif  name="payment_given_to_account" type="text" class="form-control">
       @error('payment_given_to_account')
       <p class="text-red-500">{{ $message }}</p>
       @enderror
       <div class="clearfix"></div>
     </div>
     </div>
        <div class="col-md-6">
            <div @if ($insurance != null) class="input-group input-group-outline my-3 focused is-focused" @else class="input-group input-group-outline my-3" @endif>
           <label class="form-label">Company Payout</label>
           <input  @if ($insurance != null) value="{{$insurance['company_payout']}}" @endif  name="company_payout" type="text" class="form-control">
           @error('company_payout')
           <p class="text-red-500">{{ $message }}</p>
           @enderror
           <div class="clearfix"></div>
         </div>
         </div>
</div>
@if ($insurance != null)
<input type="hidden" value="{{$insurance['id']}}" name="insurance_id" class="form-control" >
@endif
<br/>
    <div class="row">
      <div style="text-align: end;"  class="col-md-7">
    
    @if ($insurance != null)
    <button style="width: 20%;"   type="submit" class="btn btn-outline-primary btn-sm mb-0 me-3" target="_blank" >Update</button>
    @else
    <button style="width: 20%;"   type="submit" class="btn btn-outline-primary btn-sm mb-0 me-3" target="_blank" >Submit</button>
    @endif
      </div>
    </div>


</form> 
</div>
                <!-- <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Author</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Function</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Employed</th>
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="{{ URL::asset('assets/img/team-2.jpg') }}" class="avatar avatar-sm me-3 border-radius-lg" alt="user1">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">John Michael</h6>
                            <p class="text-xs text-secondary mb-0">john@creative-tim.com</p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                        <p class="text-xs text-secondary mb-0">Organization</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-success">Online</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">23/04/18</span>
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
                            <img src="{{ URL::asset('assets/img/team-3.jpg') }}" class="avatar avatar-sm me-3 border-radius-lg" alt="user2">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Alexa Liras</h6>
                            <p class="text-xs text-secondary mb-0">alexa@creative-tim.com</p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Programator</p>
                        <p class="text-xs text-secondary mb-0">Developer</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-secondary">Offline</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">11/01/19</span>
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
                            <img src="{{ URL::asset('assets/img/team-4.jpg') }}" class="avatar avatar-sm me-3 border-radius-lg" alt="user3">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Laurent Perrier</h6>
                            <p class="text-xs text-secondary mb-0">laurent@creative-tim.com</p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Executive</p>
                        <p class="text-xs text-secondary mb-0">Projects</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-success">Online</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">19/09/17</span>
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
                            <img src="{{ URL::asset('assets/img/team-3.jpg') }}" class="avatar avatar-sm me-3 border-radius-lg" alt="user4">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Michael Levi</h6>
                            <p class="text-xs text-secondary mb-0">michael@creative-tim.com</p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Programator</p>
                        <p class="text-xs text-secondary mb-0">Developer</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-success">Online</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">24/12/08</span>
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
                            <img src="{{ URL::asset('assets/img/team-2.jpg') }}" class="avatar avatar-sm me-3 border-radius-lg" alt="user5">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Richard Gran</h6>
                            <p class="text-xs text-secondary mb-0">richard@creative-tim.com</p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                        <p class="text-xs text-secondary mb-0">Executive</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-secondary">Offline</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">04/10/21</span>
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
                            <img src="{{ URL::asset('assets/img/team-4.jpg') }}" class="avatar avatar-sm me-3 border-radius-lg" alt="user6">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Miriam Eric</h6>
                            <p class="text-xs text-secondary mb-0">miriam@creative-tim.com</p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Programator</p>
                        <p class="text-xs text-secondary mb-0">Developer</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-secondary">Offline</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">14/09/20</span>
                      </td>
                      <td class="align-middle">
                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                          Edit
                        </a>
                      </td>
                    </tr>
                  </tbody>
                </table> -->
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
       
        </div>
      </div>
      {{-- <footer class="footer py-4  ">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-start">
                © <script>
                  document.write(new Date().getFullYear())
                </script>,
                made with <i class="fa fa-heart"></i> by
                <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Creative Tim</a>
                for a better web.
              </div>
            </div>
            <div class="col-lg-6">
              <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                <li class="nav-item">
                  <a href="https://www.creative-tim.com" class="nav-link text-muted" target="_blank">Creative Tim</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted" target="_blank">About Us</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/blog" class="nav-link text-muted" target="_blank">Blog</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted" target="_blank">License</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer> --}}
    </div>
  </main>
  {{-- <div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i class="material-icons py-2">settings</i>
    </a>
    <div class="card shadow-lg">
      <div class="card-header pb-0 pt-3">
        <div class="float-start">
          <h5 class="mt-3 mb-0">Material UI Configurator</h5>
          <p>See our dashboard options.</p>
        </div>
        <div class="float-end mt-4">
          <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
            <i class="material-icons">clear</i>
          </button>
        </div>
        <!-- End Toggle Button -->
      </div>
      <hr class="horizontal dark my-1">
      <div class="card-body pt-sm-3 pt-0">
        <!-- Sidebar Backgrounds -->
        <div>
          <h6 class="mb-0">Sidebar Colors</h6>
        </div>
        <a href="javascript:void(0)" class="switch-trigger background-color">
          <div class="badge-colors my-2 text-start">
            <span class="badge filter bg-gradient-primary active" data-color="primary" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
          </div>
        </a>
        <!-- Sidenav Type -->
        <div class="mt-3">
          <h6 class="mb-0">Sidenav Type</h6>
          <p class="text-sm">Choose between 2 different sidenav types.</p>
        </div>
        <div class="d-flex">
          <button class="btn bg-gradient-dark px-3 mb-2 active" data-class="bg-gradient-dark" onclick="sidebarType(this)">Dark</button>
          <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-transparent" onclick="sidebarType(this)">Transparent</button>
          <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-white" onclick="sidebarType(this)">White</button>
        </div>
        <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
        <!-- Navbar Fixed -->
        <div class="mt-3 d-flex">
          <h6 class="mb-0">Navbar Fixed</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
          </div>
        </div>
        <hr class="horizontal dark my-3">
        <div class="mt-2 d-flex">
          <h6 class="mb-0">Light / Dark</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version" onclick="darkMode(this)">
          </div>
        </div>
        <hr class="horizontal dark my-sm-4">
        <a class="btn bg-gradient-info w-100" href="https://www.creative-tim.com/product/material-dashboard-pro">Free Download</a>
        <a class="btn btn-outline-dark w-100" href="https://www.creative-tim.com/learning-lab/bootstrap/overview/material-dashboard">View documentation</a>
        <div class="w-100 text-center">
          <a class="github-button" href="https://github.com/creativetimofficial/material-dashboard" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star creativetimofficial/material-dashboard on GitHub">Star</a>
          <h6 class="mt-3">Thank you for sharing!</h6>
          <a href="https://twitter.com/intent/tweet?text=Check%20Material%20UI%20Dashboard%20made%20by%20%40CreativeTim%20%23webdesign%20%23dashboard%20%23bootstrap5&amp;url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fsoft-ui-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-twitter me-1" aria-hidden="true"></i> Tweet
          </a>
          <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/material-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-facebook-square me-1" aria-hidden="true"></i> Share
          </a>
        </div>
      </div>
    </div>
  </div> --}}
  <!--   Core JS Files   -->
  <script src="{{ URL::asset('assets/js/core/popper.min.js') }}"></script>
  <script src="{{ URL::asset('assets/js/core/bootstrap.min.js') }}"></script>
  <script src="{{ URL::asset('assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
  <script src="{{ URL::asset('assets/js/plugins/smooth-scrollbar.min.js') }}"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{ URL::asset('assets/js/material-dashboard.min.js?v=3.1.0') }}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/min/dropzone.min.js"></script>
  <script>
     document.getElementById('uploadButton').addEventListener('click', function() {
    var uploadForm = document.getElementById('uploadForm');
    if (uploadForm.classList.contains('hidden')) {
        uploadForm.classList.remove('hidden');
    } else {
        uploadForm.classList.add('hidden');
    }
});

      Dropzone.options.myDropzone = {
          paramName: "file", // The name that will be used to transfer the file
          maxFilesize: 2, // MB
          acceptedFiles: ".xls,.xlsx",
          dictDefaultMessage: "Drop files here or click to upload",
      };
  </script>

</body>

</html>