@extends('layouts.admin')
@section('content')
<div class="content">

    <div class="row">
        <div class="col-lg-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.show') }} {{ trans('global.drink.title') }}
                </div>
                <div class="panel-body">

                    <table class="table table-bordered table-striped">
                        <tbody>
                            <tr>
                                <th>
                                    {{ trans('global.drink.fields.barista') }}
                                </th>
                                <td>
                                    {{ $drink->barista->name }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('global.drink.fields.drink_type') }}
                                </th>
                                <td>
                                    {{ $drink->drink_type->name }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('global.drink.fields.price') }}
                                </th>
                                <td>
                                    ${{ $drink->price }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('global.drink.fields.completed_at') }}
                                </th>
                                <td>
                                    {{ $drink->completed_at }}
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>

        </div>
    </div>
</div>
@endsection