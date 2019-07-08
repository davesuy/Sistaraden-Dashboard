@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('strings.backend.dashboard.title'))
@section('page-header', 'Support')

@section('content')
    <div class="col-md-8">
        <h5 class="hk-sec-title">Create a ticket</h5>
        <p class="mb-25">Are you having a hard time to find something? Have a bug occured? Do you have a suggestion for our service? This is the right place for you. Chose your topic in the selection list and send us a ticket and we will investigate or answer your question.</p>
    </div>
    <div class="row">
        <div class="col-sm">
            <div class="row">
                <div class="col-md-8">
                    <div class="form-group">
                        <label for="ticket-topic">Topic</label>
                        <input id="ticket-topic" type="text" class="form-control" placeholder="Explain your error" required >
                        <small id="topic-help" class="form-text text-muted">Try to be concise in choice of topic</small>
                    </div>

                    <select class="form-control custom-select  mt-5" required>
                        <option selected disabled>Chose ticket specification</option>
                        <option value="1">Bug</option>
                        <option value="2">I can't find a certain setting</option>
                        <option value="3">I need help</option>
                        <option value="4">Problem with</option>
                        <option value="5">Suggestion</option>
                    </select>
                    <div class="form-group">
                        <label for="ticket-textarea" class="mt-20">Descripe the issue</label>
                        <textarea id="ticket-textarea" class=" form-control" rows="5" placeholder="Write here" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="ticket-user-email">E-mail</label>
                        <input required id="ticket-user-email" type="email" class="form-control" placeholder="Type your e-mail here">
                    </div>
                    <div class="col-md-4"></div>
                    <div class="button-list">
                        <button type="button" class="btn btn-primary">Send ticket</button>
                        <button type="button" class="btn btn-secondary">Send ticket</button>
                        <button type="button" class="btn btn-info">Send ticket</button>
                        <button type="button" class="btn btn-success">Send ticket</button>
                        <button type="button" class="btn btn-danger">Send ticket</button>
                        <button type="button" class="btn btn-warning">Send ticket</button>
                        <button type="button" class="btn btn-light">Send ticket</button>
                        <button type="button" class="btn btn-dark">Send ticket</button>
                        <button type="button" class="btn btn-link">Send ticket</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
