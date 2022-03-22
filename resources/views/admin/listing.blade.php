@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Danh sách sản phẩm</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Tên sản phẩm</th>
                      <th class="text-left text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Hình ảnh</th>
                      <th class="text-left text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Giá tiền</th>
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($records as $record) { ?>
                    <tr>
                      <td class="align-middle text-left mr-4 text-sm"> 
                        <p class="d-flex px-3 py-1 m-0"><?php echo $record->id ?></p>
                      </td>
                      <td class="align-middle text-left text-sm">
                        <p class="d-flex px-2 py-1 m-0"><?php echo $record->name ?></p>
                      </td>
                      <td class="align-middle text-left mr-4 text-sm"> 
                        <p class="d-flex px-3 py-1 m-0"><?php echo $record->image ?></p>
                      </td>
                      <td class="align-middle text-left text-sm">
                        <p class="d-flex px-2 py-1 m-0"><?php echo $record->price ?></p>
                      </td>
                      <td class="align-middle">
                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                          Edit
                        </a>
                      </td>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
                {{ $records->links('vendor.pagination.custom') }}
              </div>
            </div>
        </div>
    </div>
</div>
@endsection
