@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('strings.backend.dashboard.title'))

@section('page-header', 'Welcome Washtec!')

@section('content')
    <div style="padding:63% 0 0 0; position:relative;"><iframe
            src="https://app.databox.com/datawall/8d0699153991b12a546c7e9adbbf874605cc9c463?i"
            style="position:absolute; top:0; left:0; width:100%; height:100%;" frameborder="0"
            webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
    </div>
@endsection
