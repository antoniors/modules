<div class="col-sm-{{$campos['col']}}">
    <div class="form-group">

    <label for="{{$for}}" class="col-sm-{{$col}} control-label">{{$label}}</label>
    @if ( isset($campos['input-group']) )
        <div class="input-group">
        @if ( isset($campos['input-group']['left']) )
            <span class="input-group-addon"><i class="{{$campos['input-group']['left']}}"></i></span>
        @endif
    @endif

            @if(isset($campos['type']) && $campos['type'] == 'select')
                <select class="form-control" ng-model="$LOWER_NAME$.{{$campos['id']}}" id="{{$campos['id']}}" title="{{$campos['title']}}">

                </select>
            @elseif(isset($campos['type']) && $campos['type'] == 'textarea')
                <textarea ng-model="$LOWER_NAME$.{{$campos['id']}}"  id="{{$campos['id']}}" class="form-control"></textarea>
            @else
                <input type="{{$campos['type'] or 'text'}}" class="form-control" ng-model="$LOWER_NAME$.{{$campos['id']}}" id="{{$campos['id']}}"
                       title="{{$campos['title'] or $label}}">
            @endif

    @if ( isset($campos['input-group']) )
            @if ( isset($campos['input-group']['right']) )
                <span class="input-group-addon"><i class="{{$campos['input-group']['right']}}"></i></span>
            @endif
        </div>
    @endif
    </div>
</div>
