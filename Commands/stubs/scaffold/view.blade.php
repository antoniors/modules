@extends('layouts.app')

@section('content')


    <div ng-controller="$STUDLY_NAME$Controller">
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

            <form action="$STUDLY_NAME$/$STUDLY_NAME$/registrar" class="form-horizontal" pre-envio="registrar" modulo="$LOWER_NAME$" action-submit>
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">$STUDLY_NAME$</h3>
                    </div>
                    <div class="panel-body">
                        <div class="col-sm-12">
                            $_VISTA_$
                        </div>
                    </div>
                    <div class="panel-footer">
                        <button type="submit" class="btn btn-primary">
                            <i class="fa fa-floppy-o"></i>
                            Guardar
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@stop
@section('scripts')
    <script src="<%asset('modules/$STUDLY_NAME$/$LOWER_NAME$-min.js')%>"></script>
@stop