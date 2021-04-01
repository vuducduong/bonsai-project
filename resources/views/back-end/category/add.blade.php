    @extends('back-end.master')
    @section('content')
    <div class="panel-body">

                                        <form method="post">
                                        @csrf
                                            <div class="form-group"><label class="example">Name</label>
                                              <input type="text" name="name" class="form-control" placeholder="543">
                                            </div>
                                            <div class="form-group"><label class="example">Decription</label>
                                               <input type="area" name="description" class="form-control" placeholder="...">
                                            </div>
                                            <div class="form-group"><label class="example">Status</label>

                                                    <select class="form-control" name="status" >
                                                        <option value="1">Hiển thị</option>
                                                        <option value="0">Không hiển thị</option>
                                                    </select>
                                            </div>
                                            <div class="form-group"><label class="example">Hiển thị ở thanh taskbar dọc</label>

                                                    <select class="form-control" name="parent_id" >
                                                        <option value="1">Hiển thị</option>
                                                        <option value="0">Không hiển thị</option>
                                                    </select>
                                            </div>
                                            <button type="submit" class="btn btn-success">Submit</button>

                                        </form>
                                    </div>
                                    @endsection
