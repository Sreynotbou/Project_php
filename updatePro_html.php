<?php require_once('partial/header.php'); ?>
    <div class="container p-4">
        <?php 
            require_once('database/database.php');
            $id = $_GET['id'];
            $program = selectOnePro($id);
            foreach ($program as $row):
        ?>

        <form action="updatePro_model.php" method="post">
            <input type="hidden" value="<?=$row['pro_id'] ?>" name="proID">
            <div class="form-group">
                <input type="text" value="<?=$row['name'] ?>" class="form-control" placeholder="Name" name="name">
            </div>
            <div class="form-group">
                <textarea value="<?=$row['Description']?>"class="form-control" placeholder="Description" name="description" rows="4" cols="50"></textarea>
            </div>
            <div class="form-group">
                <input type="number" value="<?=$row['Price']?>" class="form-control" placeholder="Price" name="price">
            </div>
            <div class="form-group">
                <input type="date" value="<?=$row['date']?>" class="form-control"  name="date">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Update</button>
            </div>
        </form>
        <?php endforeach; ?>
    </div>
<?php require_once('partial/footer.php'); ?>