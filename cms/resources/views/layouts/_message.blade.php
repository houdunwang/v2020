@foreach(['success','error'] as $t)
    @if(session()->has($t))
        <script>
            require(['hdjs'], function (hdjs) {
                hdjs.swal("{{session()->get($t)}}", "", "{{$t}}");
            })
        </script>
    @endif
@endforeach
