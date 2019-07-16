@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('strings.backend.dashboard.title'))
@section('page-header', 'Account')

@section('content')
    <div class="container mt-xl-50 mt-sm-30 mt-15">
        <!-- Row -->
        <div class="row">
            <div class="col-xl-12">
                <section class="hk-sec-wrapper">

                    <account></account>
                    
                </section>
            </div>
        </div>
        <!-- /Row -->
    </div>
@endsection
