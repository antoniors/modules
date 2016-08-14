@extends('layouts.master')

@section('content')


    <div ng-controller="$STUDLY_NAME$Controller" ng-init="obtenerLista()">
        <div class="content-header">
            <div class="row">
                <div class="col-sm-6">
                    <div class="header-section">
                        <h1>$STUDLY_NAME$</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="">

            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">$STUDLY_NAME$</h3>
                </div>
                <div class="panel-body">
                    $_VISTA_$
                </div>
                <div class="panel-footer">

                </div>
            </div>

        </div>
    </div>
@stop
@section('scripts')
    <script src="<%asset('modules/$STUDLY_NAME$/$LOWER_NAME$-min.js')%>"></script>
@stop