@extends('edu.layouts.content')
@section('content')
    <form action="{{route('edu.lesson.update',$lesson)}}" method="post" id="app">
        @csrf @method('PUT')
        @include('edu.layouts._lesson')
    </form>
@endsection
@push('js')
    <script>
        require(['hdjs', 'vue', 'jquery'], function (hdjs, Vue, $) {
            let vm = new Vue({
                el: "#app",
                data: {
                    field:{!! json_encode($field) !!}
                },
                methods: {
                    addVideo() {
                        this.field.videos.push({title: '', path: ''});
                    },
                    delVideo(index) {
                        this.field.videos.splice(index, 1);
                    },
                    upImageThumb() {
                        hdjs.image((images) => {
                            this.field.lesson.thumb = images[0];
                        })
                    }
                }
            })
        })
    </script>
@endpush
