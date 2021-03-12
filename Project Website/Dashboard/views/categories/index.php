<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-sm-6">
                        <h1>Danh sách thể loại sản phẩm</h1>
                    </div>
                    <div class="col-sm-6">
                        <a href="?controller=categories&action=create"><button type="button" class="btn btn-outline-primary btn-lg"> + Thêm loại sản phẩm mới</button></a>
                    </div>
                </div>

            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Thể loại</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php

                            function makeCategoryRow($category, $key)
                            {

                                return
                                    '<tr class="">
 <th  scope="row">' . ++$key . '</th>
 <td >' . $category->category_name . '</td>

 <td >

   <a href="?controller=categories&action=edit&id=' . $category->category_id . '"><button type="button" class="btn btn-outline-warning">Sửa</button></a>
   </td>
   <td>
   <form class="d-inline" onsubmit="return confirm(" Do you want to remove ' . $category->category_name . ' .")" action="?controller=product&action=delete&id=' . $category->category_id . '" method="POST">
   <a href="?controller=categories&action=delete&id=' . $category->category_id . '"><button type="button" class="btn btn-outline-danger">Xóa</button></a>
   </form>
 </td>

</tr>';
                            }

                            foreach ($categories as $key =>  $category) {
                                echo  makeCategoryRow($category, $key);
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>
</div>