@if ($errors->any())
    <script>
        require(['hdjs'], function (hdjs) {
            hdjs.swal({
                text: "@foreach ($errors->all() as $error){{ $error }} @endforeach",
                button: false,
                icon: 'info'
            });
        })
    </script>
@endif

@if (session()->get('success'))
    <script>
        require(['hdjs'], function (hdjs) {
            hdjs.swal({
                text: "{{session()->get('success')}}",
                button: false,
                icon: 'success',
                timer: 2000,
            });
        })
    </script>
@endif

@if (session()->get('error'))
    <script>
        require(['hdjs'], function (hdjs) {
            hdjs.swal({
                text: "{{session()->get('error')}}",
                button: false,
                icon: 'error',
                timer: 2000,
            });
        })
    </script>
@endif


