<div id="comment" v-cloak="">
    <div class="card">
        <div class="card-body">
            <button class="btn btn-white"><span class="fe fe-edit mr-1"></span> 发表评论</button>
        </div>
    </div>
    <div class="card col-12" v-for="(comment,key) in comments" :id="'comment-'+comment.id">
        <div class="card-body">
            <div class="row">
                <div class="col-auto">
                    <a class="avatar" href="profile-posts.html">
                        <img :src="comment.user.icon" class="avatar-img rounded-circle">
                    </a>
                </div>
                <div class="col ml--2">
                    <div class="comment-body">
                        <div class="row">
                            <div class="col">
                                <h5 class="comment-title">
                                    @{{ comment.user.name }}
                                </h5>
                            </div>
                            <div class="col-auto">
                                <time class="comment-time">
                                    @{{ comment.updated_at }}
                                </time>
                            </div>
                        </div>
                        <p class="comment-text">
                            @{{ comment.content }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <a href="" class="card-footer text-muted small" @click.prevent="zan(comment)">
            <span class="mr-3"> #@{{ key+1 }}</span> <span class="fe fe-thumbs-up"></span> @{{comment.zan_num}}个赞
        </a>
    </div>
    <form action="" @submit.prevent="send" method="post">
        <div class="card">
            <div class="card-body">
                <div id="commentEditor">
                    <textarea style="display:none;"></textarea>
                </div>
            </div>
            <div class="card-footer text-muted">
                <button class="btn btn-white">发表评论</button>
            </div>
        </div>
    </form>
</div>
<script>
    require(['hdjs', 'jquery', 'vue', 'axios', 'moment'], function (hdjs, $, Vue, axios, moment) {
        vm = new Vue({
            el: '#comment',
            //common/comment
            data: {model: '', comments: [], field: {content: ''}},
            mounted() {
                this.model = "{{str_replace('\\','-',get_class($model))}}";
                axios.get("/common/comment?model=" + this.model + "&id={{$model['id']}}").then((response) => {
                    this.comments = response.data.comments;
                });
                //评论编辑器
                hdjs.editormd("commentEditor", {
                    width: '100%',
                    height: 300,
                    toolbarIcons: function () {
                        return [
                            "bold", "del", "italic", "quote", "|",
                            "list-ul", "list-ol", "hr", "|",
                            "link", "hdimage", "code-block", "|",
                            "watch", "preview", "fullscreen"
                        ]
                    },
                    //editor.md库位置
                    path: "{{asset('org/hdjs')}}/package/editor.md/lib/",
                    onchange: function () {
                        vm.$set(vm.field, 'content', this.getValue())
                    }
                });
            },
            updated(){
                hdjs.scrollTo('body',location.hash,1000, {queue:true});
            },
            methods: {
                zan(comment) {
                    let url = '{{route('common.zan.make')}}?model=Comment&id=' + comment.id;
                    axios.get(url).then((response) => {
                        comment.zan_num = response.data.count;
                    });
                },
                //发送评论
                send() {
                    if (this.check()) {
                        if (this.field.content == '') {
                            hdjs.swal({text: '评论内容不能为空', buttons: false, timer: 3000, icon: 'info'})
                            return false;
                        }
                        url = '/common/comment' + "?model=" + this.model + "&id={{$model['id']}}";
                        axios.post(url, this.field).then((response) => {
                            this.comments.push(response.data.comment);
                            //提交高清除原内容
                            this.field.content='';
                            commentEditor.setSelection({line:0, ch:0}, {line:9999, ch:9999});
                            commentEditor.replaceSelection('');
                        });
                    }
                },
                check() {
                    let old = parseInt(localStorage.getItem('comment_send_time'));
                    if (old && old + 1 > moment().unix()) {
                        hdjs.swal({text: '请' + (old + 1 - moment().unix()) + '秒后发送', buttons: false, timer: 3000, icon: 'info'})
                        return false;
                    }
                    localStorage.setItem('comment_send_time', moment().unix());
                    return true;
                }
            }
        })
    })
</script>


