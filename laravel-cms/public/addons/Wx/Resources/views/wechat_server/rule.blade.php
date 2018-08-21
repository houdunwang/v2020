<div class="card" id="rule">
    <div class="card-header card-header-divider">
        添加回复规则
    </div>
    <div class="card-block">
        <div class="form-group row">
            <label for="inputSmall" class="col-12 col-sm-3 col-form-label text-sm-right">回复规则名称</label>
            <div class="col-12 col-sm-8 col-lg-6">
                <input type="text" class="form-control form-control-sm" v-model="rule.name">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputSmall" class="col-12 col-sm-3 col-form-label text-sm-right">关键词</label>
            <div class="col-12 col-sm-8 col-lg-6">
                <div class="card">
                    <div class="card-body card-body-contrast">
                        <div class="input-group mb-3" v-for="(v,i) in rule.keywords">
                            <input type="text" class="form-control form-control-sm" v-model="v.key">
                            <div class="input-group-append">
                                <button class="btn btn-secondary" type="button" @click="del(i)">删除</button>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-muted">
                        <button class="btn btn-secondary" type="button" @click="add">添加关键词</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <textarea name="_rule" hidden>@{{ rule }}</textarea>
</div>
<script>
    require(['vue'], function (vue) {
        new vue({
            el: "#rule",
            data: {
                rule: {!! $_rule !!}
            },
            methods: {
                add() {
                    this.rule.keywords.push({key: ''})
                },
                del(pos) {
                    this.rule.keywords.splice(pos, 1)
                }
            }
        })
    })
</script>