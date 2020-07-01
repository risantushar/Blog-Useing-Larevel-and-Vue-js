<template>
    <div class="container">
    <section>
    <!--box start -->
        <div class="card col-md-12">
            <div class="card-header">
              <h3 class="card-title">Category List</h3>

              <div class="card-tools">
              <button class="btn btn-success">Add New <i class="fa fa-plus"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID NO</th>
                  <th>Category Name</th>
                  <th>Published Date</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 4.0
                  </td>
                  <td>Win 95+</td>
                  <td class="text-center">
                  <button class="btn btn-warning" >Edit <i class="fa fa-edit"></i></button>
                  <button class="btn btn-danger">Delete <i class="fa fa-trash"></i></button>
                  </td>
                </tr>
                     </tbody>
             
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          </section>
    </div>
</template>