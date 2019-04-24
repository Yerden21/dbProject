@extends('layouts.app')

@section('content')
<div class="container">
    <a href="/admin/users" class="btn btn-link btn-lg badge-light">Users</a>
    <a href="/admin/categories" class="btn btn-link btn-lg badge-light">Categories</a>
    <a href="/admin/tags" class="btn btn-link btn-lg badge-light">Tags</a>
    <a href="/admin/discussions" class="btn btn-link btn-lg badge-light">Discussions</a>
    <a href="/admin/comments" class="btn btn-link btn-lg badge-light">Comments</a>
</div>
@endsection
