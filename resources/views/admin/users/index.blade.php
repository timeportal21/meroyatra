@extends('layouts.admin')

@section('content-header','User List')
@section('content')
    <div class="mT-30">
        @can('user_create')
            <div style="margin-bottom: 10px;" class="row">
                <div class="col-lg-12">
                    <a class="btn btn-success" href="{{ route("admin.users.create") }}">
                        {{ trans('global.add') }} {{ trans('cruds.user.title_singular') }}
                    </a>
                </div>
            </div>
        @endcan
        <div class="table-responsive">
            <table id="example1"
                   class="table table-striped table-bordered dt-responsive"
                   style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                <thead>
                <tr>
                    <th>
                        {{ trans('cruds.user.fields.id') }}
                    </th>
                    <th>
                        {{ trans('cruds.user.fields.name') }}
                    </th>
                    <th>
                        {{ trans('cruds.user.fields.email') }}
                    </th>
                    <th>
                        {{ trans('cruds.user.fields.roles') }}
                    </th>
                    <th>
                        Action
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $key => $user)
                    <tr data-entry-id="{{ $user->id }}">
                        <td>
                            {{ $user->id ?? '' }}
                        </td>
                        <td>
                            {{ $user->name ?? '' }}
                        </td>
                        <td>
                            {{ $user->email ?? '' }}
                        </td>
                        <td>
                            @foreach($user->roles as $key => $item)
                                <span class="badge badge-info">{{ $item->title }}</span>
                            @endforeach
                        </td>
                        <td>
                            @canany(['user_show','admin_access'])
                                <a class="btn btn-xs btn-primary" href="{{ route('admin.users.show', $user->id) }}">
                                    {{ trans('global.view') }}
                                </a>
                            @endcanany

                            @canany(['user_edit','admin_access'])
                                <a class="btn btn-xs btn-info" href="{{ route('admin.users.edit', $user->id) }}">
                                    {{ trans('global.edit') }}
                                </a>
                            @endcanany

                            @canany(['user_delete','admin_access'])
                                <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST"
                                      onsubmit="return confirm('{{ trans('global.areYouSure') }}');"
                                      style="display: inline-block;">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="submit" class="btn btn-xs btn-danger"
                                           value="{{ trans('global.delete') }}">
                                </form>
                            @endcanany
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
@section('scripts')
    @parent
    <script>
        $(function () {
            let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
                    @can('user_delete')
            let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
            let deleteButton = {
                text: deleteButtonTrans,
                url: "{{ route('admin.users.massDestroy') }}",
                className: 'btn-danger',
                action: function (e, dt, node, config) {
                    var ids = $.map(dt.rows({selected: true}).nodes(), function (entry) {
                        return $(entry).data('entry-id')
                    });

                    if (ids.length === 0) {
                        alert('{{ trans('global.datatables.zero_selected') }}')

                        return
                    }

                    if (confirm('{{ trans('global.areYouSure') }}')) {
                        $.ajax({
                            headers: {'x-csrf-token': _token},
                            method: 'POST',
                            url: config.url,
                            data: {ids: ids, _method: 'DELETE'}
                        })
                            .done(function () {
                                location.reload()
                            })
                    }
                }
            }
            dtButtons.push(deleteButton)
            @endcan

            $.extend(true, $.fn.dataTable.defaults, {
                order: [[1, 'desc']],
                pageLength: 100,
            });
            $('.datatable-User:not(.ajaxTable)').DataTable({buttons: dtButtons})
            $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
                $($.fn.dataTable.tables(true)).DataTable()
                    .columns.adjust();
            });
        })

    </script>
@endsection
