<div class="row">
    @foreach($cols as $campos)
        @include('stubs.scaffold.col', $campos)
    @endforeach
</div>