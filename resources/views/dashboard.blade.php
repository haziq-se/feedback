@extends('layouts.app')
@section('title', 'Dashboard')
@section('header')
{{ __('Welcome') }}
@endsection
@section('content')
<div class="container-fluid m-page">
    <div class="row gy-3 mt-4">
        <div class="dash_hdr_flex">
            <div class="das_txt">
                <h2 class="title">{{ __('Dashboard') }}</h2>
            </div>
        </div>
        <!--Boxes Start-->
        <div class="col-lg-12">
            <div class="row gy-4">
                <div class="col-lg-4 col-sm-6 box" data-aos="zoom-in" data-aos-duration="1000">
                    <div class="d-box d-box_dash">
                        <div class="text-start">
                            @if(Auth::user()->role == 'Admin')
                            <i class="fa-solid fa-user"></i>
                            <h2 class="label-20">{{ __('Total User') }}</h2>
                            @else
                            <i class="fa-solid fa-comments"></i>
                            <h2 class="label-20">{{ __('Total Comments') }}</h2>
                            @endif
                        </div>

                        <div class="value_flex">
                            <div class="total">
                                @if(Auth::user()->role == 'Admin')
                                <p class="stats" id="total_vendors">{{ $data['countAllUsers'] }}</p>
                                @else
                                <p class="stats" id="total_vendors">{{ $data['countFeedbackComments'] }}</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 box" data-aos="zoom-in" data-aos-duration="1000">
                    <div class="d-box d-box_dash">
                        <div class="text-start">
                            <i class="fa-solid fa-circle-plus"></i>
                            <h2 class="label-20">{{ __('Total Feedback') }}</h2>
                        </div>
                        <div class="value_flex">
                            <div class="total">
                                <p class="stats" id="total_business">{{ $data['countAllFeedback'] }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 box" data-aos="zoom-in" data-aos-duration="1000">
                    <div class="d-box d-box_dash">
                        <div class="text-start">
                            <i class="fa-solid fa-thumbs-up"></i>
                            <h2 class="label-20">{{ __('Total Votes') }}</h2>
                        </div>
                        <div class="value_flex">
                            <div class="total">
                                <p class="stats" id="total_parents">{{ $data['countAllVotes'] }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Boxes ends-->

        <!-- <div class="col-md-6 mt-4 ">
                <h2 class="title" data-aos="fade-right" data-aos-duration="1000">
                    {{ __('messages.super_admin.dashboard.recently_registered_vendors') }}</h2>
            </div> -->

        <!--Table start here-->
        <!-- <div class="col-12 viewtable dashboard-table pb-5">
                <div class="table-responsive text-nowrap">
                    <table id="listPage" class=" table border-0">
                        <thead>
                            <tr>
                                <th>{{ __('table_headers.sr_no') }}</th>
                                <th>{{ __('table_headers.vendor_id') }}</th>
                                <th>{{ __('table_headers.vendor_name') }}</th>
                                {{-- <th>{{ __('table_headers.business_name') }}</th> --}}
                                <th>{{ __('table_headers.city') }}</th>
                                <th class="text-end">{{ __('table_headers.registration_date') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td class="text-end"></td>
                                </tr>

                        </tbody>
                    </table>
                </div>
            </div> -->
        <!--Table ends here-->

    </div>
</div>
@endsection
@section('scripts')
<script>



</script>

@endsection