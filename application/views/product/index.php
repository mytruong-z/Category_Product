<!DOCTYPE html>
<html>
<head>
    <title>Product</title>
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
    <nav class="navbar navbar-inverse">
        <div class="navbar-header">
            <a class="navbar-brand" href="<?=base_url()?>Home/index">Home</a>
        </div>

    </nav>


    <div>
        <h2 style="text-align: center">Product</h2>
    </div>
    <div id="add">
        <a class="bold" href = "<?=base_url()?>product/add"><button class="add btn-success">Add Product</button></a>
    </div>

    <table class="table" border="0">
        <tr class="danger">
            <td id="hide" class="bold">Id</td>
            <td class="bold">Category_id</td>
            <td class="bold">Name</td>
            <td class="bold">Price</td>
            <td class="bold">Image</td>
            <td class="bold">Action</td>


        </tr>
        <?php foreach ($product as $value) {?>
            <tr>
                <td id="hide"><?php echo $value["id"];?></td>
                <td><?php echo $value["category_id"];?></td>
                <td><?php echo $value["name"];?></td>
                <td><?php echo $value["price"];?></td>
                <td><img src="<?=base_url()?>images/products/<?php echo $value['image'];?>" class="img-thumbnail" alt="Cinque Terre" width="100px" height="100px" ></td>
                <td>
                    <a href="<?php echo base_url() . "product/show_product_id/" . $value["id"]; ?>"><button class="btn-primary" >Edit</button></a>
                    <a href="<?=base_url()?>product/delete_product/<?php echo $value["id"];?>""><button class="btn-danger">Delete</button></a>
                </td>
            </tr>
        <?php } ?>
    </table>
    <!-- Modal -->
    <div id="detail">
        <!-- Fetching All Details of Selected Student From Database And Showing In a Form -->
        <?php foreach ($single_product as $prod) {?>
            <form method="post" action="<?php echo base_url() . "product/update_product_id"?>" enctype="multipart/form-data">
                <div><label id="hide">Id :</label>
                    <input type="text" id="hide" name="id" value="<?php echo $prod->id; ?>">
                </div>
                <div>
                    <label>Category_id :</label>
                    <input type="text" name="category_id" value="<?php echo $prod->category_id; ?>">
                </div>
                <div>
                    <label>Name :</label>
                    <input type="text" name="name" value="<?php echo $prod->name; ?>">
                </div>
                <div>
                    <label>Price :</label>
                    <input type="text" name="price" value="<?php echo $prod->price; ?>">
                </div>

                <div>
                    <label>Image :</label>
                    <input type="file" name="image" value="<?php echo $prod->image; ?>">
                    <input  id="hide" type="text" name="name_image" value="<?php echo $prod->image; ?>">
                    <p><img src="<?=base_url()?>images/products/<?php echo $prod->image;?>" class="img-thumbnail" alt="Cinque Terre" width="100px" height="100px" >
                    </p>
                </div>
                <input class="editbtn" type="submit" id="submit" name="dsubmit" value="Update">
            </form>
        <?php } ?>
    </div>
</div>
</body>
</html>