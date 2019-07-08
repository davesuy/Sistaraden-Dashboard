@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('strings.backend.dashboard.title'))
@section('page-header', 'Statistics')
@section('sub-header', 'Soon we will give you all the statistics for you and your business!')

@section('content')
    <div class="row">
        <div class="col-sm">
            <blockquote class="blockquote">
                <h1>"Stats, that's great! I want it."</h1>
                <!-- <p>The proper use of the blockquote is using a <code>&lt;p&gt;</code>-element.</p> -->
                <footer class="blockquote-footer">Famous developer at Sista Raden</footer>
            </blockquote>
        </div>
    </div>
@endsection
