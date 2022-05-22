@extends('layouts.admin')
@section('content-header','Show Permission')

@section('content')
    <div class="mT-30">
        <div class="mb-2">
            <table class="table table-bordered table-striped">
                <tbody>
                <tr>
                    <th>
                        {{ trans('cruds.permission.fields.id') }}
                    </th>
                    <td>
                        {{ $permission->id }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('cruds.permission.fields.title') }}
                    </th>
                    <td>
                        {{ $permission->title }}
                    </td>
                </tr>
                </tbody>
            </table>
            <a style="margin-top:20px;" class="btn btn-primary" href="{{ url()->previous() }}">
                {{ trans('global.back_to_list') }}
            </a>
        </div>
    </div>
@endsection
