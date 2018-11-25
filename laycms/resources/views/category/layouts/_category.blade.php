<div class="card-body pt-0">
    <div class="form-group">
        <label>栏目名称</label>
        <input type="text" name="name" class="form-control" value="{{old('name',$category['name']??'')}}">
    </div>
    <div class="form-group">
        <label>所属栏目</label>
        <select name="parent_id" class="form-control">
            <option value="0">顶级栏目</option>
            @foreach($categories  as $cat)
                <option value="{{$cat['id']}}"
                    {{$cat['_select']}}  {{$cat['_disabled']}}
                >{{$cat['_name']}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label>栏目描述</label>
        <textarea class="form-control" name="description" rows="3">{{old('description',$category['description']??'')}}</textarea>
    </div>
</div>
<div class="card-footer text-muted">
    <button class="btn btn-primary">保存提交</button>
</div>
