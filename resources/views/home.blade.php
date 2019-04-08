@extends('layouts.admin')
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-lg-12">
                <div>
                    <div class="{{ $chart1->options['column_class'] }}">
                        <h3>{!! $chart1->options['chart_title'] !!}</h3>
                        {!! $chart1->renderHtml() !!}
                    </div>
                    <div class="{{ $chart2->options['column_class'] }}">
                        <h3>{!! $chart2->options['chart_title'] !!}</h3>
                        {!! $chart2->renderHtml() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    @parent
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    {!! $chart1->renderJs() !!}
    {!! $chart2->renderJs() !!}
@endsection