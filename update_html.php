<?php require_once('partial/header.php'); ?>
    <div class="container p-4">
        <?php 
            require_once('database/database.php');
            $id = $_GET['id'];
            $posts = selectOnepost($id);
            foreach ($posts as $post):
        ?>
        
        <form action="update_model.php" method="post">
            <input type="hidden" value="<?=$post['post_Id'] ?>" name="postId">
            <div class="form-group">
                <input type="text" value="<?=$post['Title'] ?>" class="form-control" placeholder="Title" name="title">
            </div>
            <div class="form-group">
                <textarea value="<?=$post['Description']?>"class="form-control" placeholder="Description" name="description" rows="4" cols="50"></textarea>
            </div>
            <div class="form-group">
                <input type="number" value="<?=$post['Price']?>" class="form-control" placeholder="Price" name="price">
            </div>
            <div class="form-group">
                <input type="date" value="<?=$post['Date']?>" class="form-control"  name="date">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Update</button>
            </div>
        </form>
        <?php endforeach; ?>
    </div>
    <?php require_once('partial/footer.php'); ?>