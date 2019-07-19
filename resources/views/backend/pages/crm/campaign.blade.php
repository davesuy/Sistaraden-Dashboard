@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('strings.backend.dashboard.title'))
@section('page-header', 'Campaigns')

@section('content')
    <div class="container">
        <!-- Row -->
        <div class="row">
            <div class="col-xl-12">
                <section class="hk-sec-wrapper">

                      <campaign></campaign>
                    
                </section>
            </div>
        </div>
        <!-- /Row -->
    </div>
@endsection
