<form action="{{$url}}" method="post">
    @csrf
    @isset($method)
        @method($method)
    @endisset
    <div id="{{$id}}" tabindex="-1" role="dialog" class="modal fade colored-header colored-header-primary show"
         style="padding-right: 17px;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header modal-header-colored">
                    <h3 class="modal-title">
                        {{$title}}
                    </h3>
                    <button type="button" data-dismiss="modal" aria-hidden="true" class="close md-close"><span
                                class="mdi mdi-close">       </span></button>
                </div>
                <div class="modal-body">
                    {{$slot}}
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary md-close">保存</button>
                </div>
            </div>
        </div>
    </div>
</form>