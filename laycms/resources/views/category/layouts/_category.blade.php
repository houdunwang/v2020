<div class="card-body pt-0">
    <div class="form-group">
        <label>栏目名称</label>
        <input type="text" name="name" class="form-control">
    </div>
    <div class="form-group">
        <label>所属栏目</label>
        <select name="parent_id" class="form-control">
            <option value="0">顶级栏目</option>
        </select>
    </div>
    <div class="form-group">
        <label>栏目描述</label>
        <textarea class="form-control" name="description" rows="3"></textarea>
    </div>
</div>
<div class="card-footer text-muted">
    <button class="btn btn-primary">保存提交</button>
</div>
