@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">
                <a href="{{ route('teachers.index') }}" class="mr-4"
                    ><i class="icon ion-md-arrow-back"></i
                ></a>
                @lang('crud.teachers.show_title')
            </h4>

            <div class="mt-4">
                <div class="mb-4">
                    <h5>@lang('crud.teachers.inputs.name')</h5>
                    <span>{{ $teacher->name ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.teachers.inputs.subjectname')</h5>
                    <span>{{ $teacher->subjectname ?? '-' }}</span>
                </div>
            </div>

            <div class="mt-4">
                <a href="{{ route('teachers.index') }}" class="btn btn-light">
                    <i class="icon ion-md-return-left"></i>
                    @lang('crud.common.back')
                </a>

                @can('create', App\Models\Teacher::class)
                <a href="{{ route('teachers.create') }}" class="btn btn-light">
                    <i class="icon ion-md-add"></i> @lang('crud.common.create')
                </a>
                @endcan
            </div>
        </div>
    </div>
</div>
@endsection
