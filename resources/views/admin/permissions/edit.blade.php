@extends('layouts.admin')
@section('content-header','Edit Permission')

@section('content')
    <div class="mT-30">
        <form action="{{ route("admin.permissions.update", [$permission->id]) }}" method="POST"
              enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
                <label for="title">{{ trans('cruds.permission.fields.title') }}*</label>
                <input type="text" id="title" name="title" class="form-control"
                       value="{{ old('title', isset($permission) ? $permission->title : '') }}" required>
                @if($errors->has('title'))
                    <em class="invalid-feedback">
                        {{ $errors->first('title') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.permission.fields.title_helper') }}
                </p>
            </div>
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>
    </div>
@endsection
