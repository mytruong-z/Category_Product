<!DOCTYPE html>
<html>
<head>
    <title>Category</title>
        <base href="<?php echo 'BASE_URL';?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="<?php echo base_url("bootstrap/css/bootstrap.css"); ?>" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url("bootstrap/css/bootstrap.min.css"); ?>">
        <script src="<?php echo base_url("bootstrap/js/jquery-3.3.1.min.js"); ?>"></script>
        <script src="<?php echo base_url("bootstrap/js/bootstrap.min.js"); ?>"></script>
</head>
<style>
    .container{
        width: 80%;
    }
    .bold{
        font-weight: bold;
    }
    .table{
        margin-top: 50px;
    }
    .add {

        float:right;
        margin-top:10px;
    }
    #hide{
        display: none;
    }
    .editbtn{
        background-color: #d58512;
        color: white;
    }

</style>


<body>
<div class="container">
    <div>
        <h2 style="text-align: center">Category</h2>
    </div>
    <div id="add">
        <a class="bold" href = "<?=base_url()?>category/add"><button class="add btn-success">Add Category</button></a>
    </div>

    <table class="table" border="0">
        <tr class="danger">
            <td class="bold">Id</td>
            <td class="bold">Name</td>
            <td class="bold">Picture</td>
            <td class="bold">Action</td>


        </tr>
        <?php foreach ($category as $value) {?>
            <tr>
                <td><?php echo $value["id"];?></td>
                <td><?php echo $value["name"];?></td>
                <td><img src="<?=base_url()?>images/categories/<?php echo $value['image'];?>" class="img-thumbnail" alt="Cinque Terre" width="200px" height="200px" ></td>
                <td>
               <a href="<?php echo base_url() . "category/show_category_id/" . $value["id"]; ?>"><button class="btn-primary" data-toggle="modal" data-target="#myModal" >Edit</button></a>
                    <a href="<?=base_url()?>category/delete_category/<?php echo $value["id"];?>""><button class="btn-danger">Delete</button></a>
                </td>
            </tr>

        <?php } ?>
    </table>
    <!-- Modal -->
    <div id="detail">

        <!-- Fetching All Details of Selected Student From Database And Showing In a Form -->
        <?php foreach ($single_category as $cate) {?>

            <form method="post" action="<?php echo base_url() . "category/update_category_id"?>" enctype="multipart/form-data">
               <div><label id="hide">Id :</label>
                    <input type="text" id="hide" name="id" value="<?php echo $cate->id; ?>">
               </div>
                <div>
                <label>Name :</label>
                <input type="text" name="name" value="<?php echo $cate->name; ?>">
                </div>
                <div>
                <label>Image :</label>
                <input type="file" name="image" value="<?php echo $cate->image; ?>">
                    <input  id="hide" type="text" name="name_image" value="<?php echo $cate->image; ?>">
                <p><img src="<?=base_url()?>images/categories/<?php echo $cate->image;?>" class="img-thumbnail" alt="Cinque Terre" width="100px" height="100px" >
                </p>
                </div>
                <input class="editbtn" type="submit" id="submit" name="dsubmit" value="Update">
            </form>
        <?php } ?>
    </div>
</div>
</body>
</html>