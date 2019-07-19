@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('strings.backend.dashboard.title'))
@section('page-header', 'Leads')

@section('content')
    <div class="container">
        <!-- Row -->
        <div class="row">
            <div class="col-xl-12">
                <section class="hk-sec-wrapper">

                      <lead></lead>
                    
                </section>
            </div>
        </div>
        <!-- /Row -->
    </div>
@endsection
