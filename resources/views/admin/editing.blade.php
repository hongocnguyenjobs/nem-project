@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col">
        <form action="{{route('editing.store',['model'=>'Product'])}}" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="nameProduct">Name</label>
                <input name="nameProduct" type="text" class="form-control" id="nameProduct" placeholder="Tên sản phẩm">
            </div>
            <div class="form-group">
                <label for="imageProduct">Thêm ảnh</label>
                <input name="imageProduct" type="file" class="form-control-file" id="imageProduct">
            </div>
            <div class="form-group">
                <label for="priceProduct">Giá</label>
                <input name="priceProduct" type="text" class="form-control" id="priceProduct" placeholder="Giá sản phẩm">
            </div>
            <div class="form-group">
                <label for="contentProduct">Mô tả sản phẩm</label>
                <textarea name="contentProduct" id="product-content" class="form-control ckeditor-box" id="contentProduct" rows="3"></textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn bg-gradient-dark">Them san pham</button>
            </div>
            @csrf
        </form>
    </div>
</div>
@endsection