<?php

namespace App\Http\Controllers\Admin;

use LaravelDaily\LaravelCharts\Classes\LaravelChart;

class HomeController
{
    public function index()
    {
        $settings1 = [
            'chart_title'        => 'Drinks per Day',
            'chart_type'         => 'line',
            'report_type'        => 'group_by_date',
            'model'              => 'App\\Drink',
            'group_by_field'     => 'completed_at',
            'group_by_period'    => 'day',
            'aggregate_function' => 'count',
            'filter_field'       => 'created_at',
            'filter_days'        => '30',
            'column_class'       => 'col-md-6',
            'entries_number'     => '5',
        ];

        $chart1 = new LaravelChart($settings1);

        $settings2 = [
            'chart_title'        => 'Revenue per Day',
            'chart_type'         => 'line',
            'report_type'        => 'group_by_date',
            'model'              => 'App\\Drink',
            'group_by_field'     => 'completed_at',
            'group_by_period'    => 'day',
            'aggregate_function' => 'sum',
            'aggregate_field'    => 'price',
            'filter_field'       => 'created_at',
            'filter_days'        => '30',
            'column_class'       => 'col-md-6',
            'entries_number'     => '5',
        ];

        $chart2 = new LaravelChart($settings2);

        return view('home', compact('chart1', 'chart2'));
    }
}
