@extends('admin.main')

@section('head')
    <script src="/laravel/blazikenshop/public/ckeditor/ckeditor.js"></script>
@endsection

@section('content')
    <form action="" method="post">
        <div class="card-body">
            <div class="form-group">
                <label for="menu">Ten danh muc</label>
                <input type="text" name="name" value="{{ $menu->name }}" class="form-control"
                    placeholder="Nhập tên danh mục">
            </div>

            <div class="form-group">
                <label>Danh muc</label>
                <select class="form-control" name="parent_id" id="">
                    <option value="0" {{ $menu->parent_id == 0 ? 'selected' : '' }}>Danh muc cha</option>

                    @foreach ($menus as $menuParent)
                        <option value="{{ $menuParent->id }}" {{ $menu->parent_id == $menuParent->id ? 'selected' : '' }}>
                            {{ $menuParent->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label>Mo ta</label>
                <textarea name="description" class="form-control">{{ $menu->description }}</textarea>
            </div>

            <div class="form-group">
                <label>Mo ta chi tiet</label>
                <textarea name="content" id="content" class="form-control">{{ $menu->content }}</textarea>
            </div>

            <div class="form-group">
                <label>Kich hoat</label>
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" value="1" type="radio" id="active" name="active"
                        {{ $menu->active == 1 ? 'checked=""' : '' }}>
                    <label for="active" class="custom-control-label">Co</label>
                </div>

                <div class="custom-control custom-radio">
                    <input class="custom-control-input" value="0" type="radio" id="no_active" name="active"
                        {{ $menu->active == 0 ? 'checked=""' : '' }}>
                    <label for="no_active" class="custom-control-label">Khong</label>
                </div>

            </div>

        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Cập nhật danh muc</button>
        </div>

        @csrf

    </form>
@endsection

@section('footer')
    {{-- <script>
        CKEDITOR.replace('content');
    </script> --}}
@endsection
