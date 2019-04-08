@extends('layouts.admin')
@section('content')
<div class="content">

    <div class="row">
        <div class="col-lg-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.create') }} {{ trans('global.drink.title_singular') }}
                </div>
                <div class="panel-body">

                    <form action="{{ route("admin.drinks.store") }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group {{ $errors->has('drink_type_id') ? 'has-error' : '' }}">
                            <label for="drink_type">{{ trans('global.drink.fields.drink_type') }}</label>
                            <select name="drink_type_id" id="drink_type" class="form-control select2">
                                @foreach($drink_types as $id => $drink_type)
                                    <option value="{{ $id }}" {{ (isset($drink) && $drink->drink_type ? $drink->drink_type->id : old('drink_type_id')) == $id ? 'selected' : '' }}>
                                        {{ $drink_type }}
                                    </option>
                                @endforeach
                            </select>
                            @if($errors->has('drink_type_id'))
                                <p class="help-block">
                                    {{ $errors->first('drink_type_id') }}
                                </p>
                            @endif
                        </div>
                        <div>
                            <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
                        </div>
                    </form>

                </div>
            </div>

        </div>
    </div>
</div>
@endsection