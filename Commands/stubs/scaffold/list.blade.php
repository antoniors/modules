<table class="table table-striped table-borderless table-vcenter">
    <thead>
    <tr>
        @foreach($aDatos as $filas)
            <th><%$filas['label']%></th>
        @endforeach
        <th style="width: 80px;" class="text-center"><i class="fa fa-flash"></i></th>
    </tr>
    </thead>
    <tbody>
    <tr ng-repeat="$LOWER_NAME$ in $LOWER_NAME$Lista track by $index">
        @foreach($aDatos as $filas)
            <th><strong>{{$LOWER_NAME$.<%$filas['for']%>}}</strong></th>
        @endforeach
        <td class="text-center">
            <a href="javascript:void(0)" data-toggle="tooltip" title="" class="btn btn-effect-ripple btn-xs btn-success" data-original-title="Editar $STUDLY_NAME$"><i class="fa fa-pencil"></i></a>
            <a href="javascript:void(0)" data-toggle="tooltip" title="" class="btn btn-effect-ripple btn-xs btn-danger" data-original-title="Cancelar $STUDLY_NAME$"><i class="fa fa-times"></i></a>
        </td>
    </tr>
    </tbody>
</table>