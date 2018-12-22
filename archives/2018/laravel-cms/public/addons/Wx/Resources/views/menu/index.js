define(['vue'], function (vue) {
    return function (data) {
        new vue({
            el: '#app',
            data: {
                menus: data,
                active: {},
            },
            methods: {
                setActiveMenu(item) {
                    this.active = item;
                },
                add() {
                    if (this.menus.length < 3) {
                        let menu = {type: 'view', name: '后盾人', url: 'houdunren.com', sub_button: []};
                        this.menus.push(menu)
                        this.setActiveMenu(menu);
                    }
                },
                //删除顶级菜单
                delMenu(pos) {
                    this.menus.splice(pos, 1);
                },
                addSubMenu(item) {
                    if (item.sub_button.length < 5) {
                        let menu = {type: 'view', name: '后盾人', url: 'houdunren.com'};
                        item.sub_button.push(menu)
                        this.setActiveMenu(menu);
                    }
                },
                delSubMenu(item, pos) {
                    item.sub_button.splice(pos, 1);
                }
            }
        })
    }
});