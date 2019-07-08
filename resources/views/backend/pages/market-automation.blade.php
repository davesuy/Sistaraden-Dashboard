@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('strings.backend.dashboard.title'))
@section('page-header', 'Market Automation and Engagement')
@section('sub-header', 'Our goal is to engage the user here.')

@section('content')
    <div class="row">
        <div class="col-sm">
            <blockquote class="blockquote">
                <h1>"Attract – Engage – Delight"</h1>
                <!-- <p>The proper use of the blockquote is using a <code>&lt;p&gt;</code>-element.</p> -->
                <footer class="blockquote-footer">Famous developer at Sista Raden</footer>
            </blockquote>
        </div>
    </div>
@endsection
