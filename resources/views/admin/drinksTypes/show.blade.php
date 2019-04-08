@extends('layouts.admin')
@section('content')
<div class="content">

    <div class="row">
        <div class="col-lg-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.show') }} {{ trans('global.drinksType.title') }}
                </div>
                <div class="panel-body">

                    <table class="table table-bordered table-striped">
                        <tbody>
                            <tr>
                                <th>
                                    {{ trans('global.drinksType.fields.name') }}
                                </th>
                                <td>
                                    {{ $drinksType->name }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('global.drinksType.fields.price') }}
                                </th>
                                <td>
                                    ${{ $drinksType->price }}
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