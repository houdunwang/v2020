<div class="left-sidebar-scroll">
    <div class="left-sidebar-content">
        <ul class="sidebar-elements">
            @if($groups  = \HDModule::getMenuByModule())
                @foreach($groups as $group)
                        @if(\HDModule::hadPermission($group['permission'],'admin'))
                            <li class="parent open">
                                <a href="#"><i class="{{$group['icon']}}"></i>&nbsp;<span>{{$group['title']}}</span></a>
                                <ul class="sub-menu">
                                    @foreach($group['menus'] as $menu)
                                        @if(\HDModule::hadPermission($menu['permission'],'admin'))
                                            <li>
                                                <a href="{{$menu['url']}}" pjax>{{$menu['title']}}</a>
                                            </li>
                                        @endif
                                    @endforeach
                                </ul>
                            </li>
                        @endif
                @endforeach
            @endif
        </ul>
    </div>
</div>