@extends('layouts.admin')
@section('content-header','Dashboard')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="box">
                <div class="row no-gutters py-2">

                    <div class="col-sm-6 col-lg-3">
                        <div class="box-body br-1 border-light">
                            <div class="flexbox mb-1">
						  <span>
							<i class="ion-person font-size-26"></i><br>
							New Users
						  </span>
                                <span class="text-primary font-size-40">34</span>
                            </div>
                            <div class="progress progress-xxs mt-10 mb-0">
                                <div class="progress-bar" role="progressbar" style="width: 35%; height: 4px;"
                                     aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 hidden-down">
                        <div class="box-body br-1 border-light">
                            <div class="flexbox mb-1">
						  <span>
							<i class="ion-document font-size-26"></i><br>
							Today Invoices
						  </span>
                                <span class="text-info font-size-40">18</span>
                            </div>
                            <div class="progress progress-xxs mt-10 mb-0">
                                <div class="progress-bar bg-info" role="progressbar" style="width: 55%; height: 4px;"
                                     aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 d-none d-lg-block">
                        <div class="box-body br-1 border-light">
                            <div class="flexbox mb-1">
						  <span>
							<i class="ion-information font-size-26"></i><br>
							Open Issues
						  </span>
                                <span class="text-warning font-size-40">46</span>
                            </div>
                            <div class="progress progress-xxs mt-10 mb-0">
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 65%; height: 4px;"
                                     aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 d-none d-lg-block">
                        <div class="box-body">
                            <div class="flexbox mb-1">
						  <span>
							<i class="ion-folder font-size-26"></i><br>
							New Projects
						  </span>
                                <span class="text-danger font-size-40">12</span>
                            </div>
                            <div class="progress progress-xxs mt-10 mb-0">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 40%; height: 4px;"
                                     aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('css')
    <style>
        .card-body a {
            color: #fff;
        }
    </style>
@endsection
@section('scripts')
    @parent

@endsection
