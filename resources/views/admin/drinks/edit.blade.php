@extends('layouts.admin')
@section('content')
<div class="content">

    <div class="row">
        <div class="col-lg-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.edit') }} {{ trans('global.drink.title_singular') }}
                </div>
                <div class="panel-body">

                    <form action="{{ route("admin.drinks.update", [$drink->id]) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group {{ $errors->has('barista_id') ? 'has-error' : '' }}">
                            <label for="barista">{{ trans('global.drink.fields.barista') }}</label>
                            <select name="barista_id" id="barista" class="form-control select2">
                                @foreach($baristas as $id => $barista)
                                    <option value="{{ $id }}" {{ (isset($drink) && $drink->barista ? $drink->barista->id : old('barista_id')) == $id ? 'selected' : '' }}>
                                        {{ $barista }}
                                    </option>
                                @endforeach
                            </select>
                            @if($errors->has('barista_id'))
                                <p class="help-block">
                                    {{ $errors->first('barista_id') }}
                                </p>
                            @endif
                        </div>
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
                        <div class="form-group {{ $errors->has('price') ? 'has-error' : '' }}">
                            <label for="price">{{ trans('global.drink.fields.price') }}</label>
                            <input type="number" id="price" name="price" class="form-control" value="{{ old('price', isset($drink) ? $drink->price : '') }}" step="0.01">
                            @if($errors->has('price'))
                                <p class="help-block">
                                    {{ $errors->first('price') }}
                                </p>
                            @endif
                            <p class="helper-block">
                                {{ trans('global.drink.fields.price_helper') }}
                            </p>
                        </div>
                        <div class="form-group {{ $errors->has('completed_at') ? 'has-error' : '' }}">
                            <label for="completed_at">{{ trans('global.drink.fields.completed_at') }}</label>
                            <input type="text" id="completed_at" name="completed_at" class="form-control datetime" value="{{ old('completed_at', isset($drink) ? $drink->completed_at : '') }}">
                            @if($errors->has('completed_at'))
                                <p class="help-block">
                                    {{ $errors->first('completed_at') }}
                                </p>
                            @endif
                            <p class="helper-block">
                                {{ trans('global.drink.fields.completed_at_helper') }}
                            </p>
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