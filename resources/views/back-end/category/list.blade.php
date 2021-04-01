 @extends('back-end.master')
 @section('content')
 <div class="wrapper wrapper-content animated fadeInRight ecommerce">


<div class="ibox-content m-b-sm border-bottom">
    <div class="row">
        <div class="col-sm-4">
            <div class="form-group">
                <label class="col-form-label" for="product_name">Product Name</label>
                <input type="text" id="product_name" name="product_name" value="" placeholder="Product Name" class="form-control">
            </div>
        </div>
        <div class="col-sm-2">
            <div class="form-group">
                <label class="col-form-label" for="price">Price</label>
                <input type="text" id="price" name="price" value="" placeholder="Price" class="form-control">
            </div>
        </div>
        <div class="col-sm-2">
            <div class="form-group">
                <label class="col-form-label" for="quantity">Quantity</label>
                <input type="text" id="quantity" name="quantity" value="" placeholder="Quantity" class="form-control">
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label class="col-form-label" for="status">Status</label>
                <select name="status" id="status" class="form-control">
                    <option value="1" selected>Enabled</option>
                    <option value="0">Disabled</option>
                </select>
            </div>
        </div>
    </div>

</div>

<div class="row">
    <div class="col-lg-12">
        <div class="ibox">
            <div class="ibox-content">

                <table class="footable table table-stripped toggle-arrow-tiny" data-page-size="15">
                    <thead>
                    <tr>
                        <th data-toggle="true">Tên danh mục</th>
                        <th data-hide="all">Miêu tả</th>
                        <th data-hide="phone">Hiển thị thanh taskbar ngang</th>
                        <th data-hide="phone">Hiển thị thanh taskbar dọc</th>
                        <th class="text-right" data-sort-ignore="true">Action</th>

                    </tr>
                    </thead>
                    @foreach($categoryParents as $key=>$categoryParent)
                    <tbody>
                    <tr>
                        <td>
                        {{$categoryParent->name}}                        </td>
                        <td>
                            {{$categoryParent->description}}
                        </td>
                        <td>
                        @if($categoryParent->status == 1)
                        <a href="{{route('category-parent.display',$categoryParent->id)}}"><span class="fa fa-eye"></span></a>
                        @else
                        <a href="{{route('category-parent.hide',$categoryParent->id)}}"><span class="fa fa-eye-slash"></span></a>
                        @endif
                        </td>

                        <td>
                        @if($categoryParent->parent_id == 1)
                        <a href="{{route('category-parent.displayVertical',$categoryParent->id)}}"><span class="fa fa-eye"></span></a>
                        @else
                        <a href="{{route('category-parent.hideVertical',$categoryParent->id)}}"><span class="fa fa-eye-slash"></span></a>
                        @endif
                        </td>
                        <td class="text-right">
                            <div class="btn-group">
                                <button class="btn-white btn btn-xs">View</button>
                                <button class="btn-white btn btn-xs">Edit</button>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                    @endforeach
                    <tfoot>
                    <tr>
                        <td colspan="6">
                            <ul class="pagination float-right"></ul>
                        </td>
                    </tr>
                    </tfoot>
                </table>

            </div>
        </div>
    </div>
</div>


</div>
 @endsection
