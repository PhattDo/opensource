<?php
    require_once __DIR__. "/../../Autoload/autoload.php";

    $id = intval(getInput('id'));
    
    $EditCategory = $db->fetchID("productcategories",$id);
    if(empty($EditCategory)){
        $_SESSION['error'] = "Dữ liệu không tồn tại";

        redirectAdmin("category");
    }

    if($_SERVER["REQUEST_METHOD"]=="POST"){

        $data = [
            "name" => postInput('name'),
            "alias" => to_slug(postInput("name"))
        ];

        $error = [];

        if(postInput('name') == ''){
            $error['name'] = "Mời bạn nhập đầy đủ tên danh mục.";
        }

        if(empty($error)){
            $id_update = $db->update("productcategories",$data,array("id"=>$id));
            if($id_update > 0){
                $_SESSION['success'] = "Cập Nhật Thành Công";
                redirectAdmin("category");
            }
            else{
                $_SESSION['error'] = "Dữ Liệu Không Thay Đổi"; 
            }
        }
    }
?>

<?php require_once __DIR__. "/../../Layouts/Header.php"; ?>
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="../../index.php">Trang Chủ</a>
        </li>
        <li class="breadcrumb-item">
            <a href="../../Modules/Category/index.php">Các Danh Mục</a>
        </li>
        <li class="breadcrumb-item active">Sửa Danh Mục</li>
    </ol>
    <!-- Page Content -->
    <h3>Sửa Danh Mục</h3>
    

    <div class="row">
        <div class="col-md-12">
            <form class="form-inline" action="" method="POST">
                <div class="form-group">
                    <label class="col-sm-5 control-label">Tên danh mục</label>
                    <div class="col-sm-7">
                        <input type="text" style="" class="form-control" placeholder="Nhập tên danh mục" name="name" value="<?php echo $EditCategory['Name']?>">


                        <?php if(isset($error['name'])):?>
                            <p class="text-danger"><?php echo $error['name']?></p>
                        <?php endif ?>

                    </div>
                </div>
                
                <div class="form-group">
                    <div class="col-sm-offset-5 col-sm-7">
                      <button type="submit" class="btn btn-success"><strong>Lưu</strong></button>
                    </div>
                </div>
            </form>
        </div>
    </div>

<?php require_once __DIR__. "/../../Layouts/Footer.php"; ?>

