<div class="container mt-3 p-3">
    <div class="d-flex justify-content-end p-3">
    <button class="btn btn-info" onclick="window.history.back();">&#8592; Back</button>
</div>
<!--  -->
<?php require_once('partial/header.php'); ?>
    <div class="container p-4">
        <form action="create_model.php" method="post"  enctype="multipart/form-data">
            <input type="hidden" name="size" value="1000000">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Title" name="title">
            </div>
            <div class="form-group">
                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
             </div>
            <div class="form-group">
               <textarea name="description" placeholder="Description" rows="4" cols="153"></textarea>
            </div>
            <div class="form-group">
               <select name="category">
                  <option value="1">history book</option>
                  <option value="3">program book</option>
                  <option value="4">funny book</option>
               </select>
            </div>
            <div class="form-group">
                <input type="number" class="form-control" placeholder="Price" name="price">
            </div>
            <div class="form-group">
                <input type="number" class="form-control" placeholder="User_ID" name="user">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block" name="create">Create</button>
            </div>
        </form>
    </div>
<?php require_once('partial/footer.php'); ?>