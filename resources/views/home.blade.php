@extends('layouts.master')

@section('content')
<div class="card">
    <div class="card-header">
        <h2>Welkom Terug {{Auth::user()->name}} <small>Je bent nu ingelogd</small></h2>
        <div class="card-body">
            <div class="chart-edge">
                <!-- <div id="curved-line-chart" class="flot-chart "></div> -->
                <p></p>
            </div>
        </div>
    </div>
</div>
@endsection
