
@extends('layouts.app')


@section('content')

<form method='POST' action=''>
{{ csrf_field() }}
<div class="container">
    <div class="mb-3 mt-3">
        <label for="title" class="form-label">Title</label>
        <input type="title" class="form-control" id="title" required>
    </div>
    <div class="mb-3">
        <label for="content" class="form-label">Content</label>
        <input type="content" class="form-control" id="content" required>
    </div>
    <div class="mb-3 mt-3">
        <label for="Firstname" class="form-label">First name</label>
        <input type="Firstname" class="form-control" id="Firstname" required>
    </div>
    <div class="mb-3 mt-3">
        <label for="Lastname" class="form-label">Last name</label>
        <input type="Lastname" class="form-control" id="Lastname" required>
    </div>
    <div class="mb-3 mt-3">
        <label for="Pseudo" class="form-label">Pseudo</label>
        <input type="Pseudo" class="form-control" id="Pseudo" required>
    </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

…
⋮
⋯
⋱⋰
˚°
∴
∵

@endsection

