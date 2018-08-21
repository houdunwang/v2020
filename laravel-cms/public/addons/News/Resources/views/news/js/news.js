define(['vue', 'hdjs'], function (vue, hdjs) {
    return function (data) {
        new vue({
            el: "#app",
            mounted(){
              this.active = this.news[0];
            },
            data: {
                news: data,
                active: {}
            },
            methods: {
                add() {
                    if (this.news.length < 5) {
                        this.news.push({title: '后盾人', 'discription': 'houdunren.com', 'picurl': '/plugin/hdjs/image/nopic.jpg', 'url': 'http://www.houdunwang.com'});
                    }
                },
                del(pos) {
                    this.news.splice(pos, 1);
                },
                prev(pos) {
                    let item = this.news[pos];
                    this.news.splice(pos, 1, this.news[pos - 1]);
                    this.news.splice(pos - 1, 1, item);
                },
                next(pos) {
                    let item = this.news[pos];
                    this.news.splice(pos, 1, this.news[pos + 1]);
                    this.news.splice(pos + 1, 1, item);
                },
                edit(item) {
                    this.active = item;
                },
                upImagePc(){
                    let This =this;
                    hdjs.image(function (images) {
                        This.active.picurl = images[0];
                    })
                }
            }
        })
    }
})