@extends('layouts.main')


@section('content')
    <div class="jumbotron">
        <h1 class="display-4">welcome</h1>
        <p class="lead">Subtitle</p>
        <hr class="my-4">
        <p>Content</p>
    </div>
    <div class="card-columns">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Title</h5>
                <p class="card-text">Content</p>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Title</h5>
                <p class="card-text">Content</p>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Title</h5>
                <p class="card-text">Content</p>
            </div>
        </div>
    </div>
    <div class="list-group">
        <a href="#" class="list-group-item list-group-item-action flex-column align-items-start mb-1">
            <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">Heading</h5>
                <small>small</small>
            </div>
            <p class="mb-1">Paragraph</p>
            <small>paragraph footer</small>
        </a>
        <a href="#" class="list-group-item list-group-item-action flex-column align-items-start mb-1">
            <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">Heading</h5>
                <small>small</small>
            </div>
            <p class="mb-1">Paragraph</p>
            <small>paragraph footer</small>
        </a>
        <a href="#" class="list-group-item list-group-item-action flex-column align-items-start mb-1">
            <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">Heading</h5>
                <small>small</small>
            </div>
            <p class="mb-1">Paragraph</p>
            <small>paragraph footer</small>
        </a>
    </div>
@endsection
