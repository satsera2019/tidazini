@extends('admin-panel.layouts.app')
@section('page_title')
    About - Index
@endsection
@section('content')
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="" method="get">
                    <div class="row"></div>
                    <div class="col-12 mt-2">
                        <a href="{{ route('admin-panel.about.create') }}" class="">
                            <button type="button" class="btn btn-success float-right">Create About</button>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
