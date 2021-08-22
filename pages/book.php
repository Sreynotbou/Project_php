<!-- button search book  -->
<form action ="" method="post">
    <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Search name program " name="search">
    <div class="input-group-append">
        <button class="btn btn-success" type="submit">Search</button>
    </div>
    </div>
</form>
<!--  -->
<hr>
<?php require_once('partial/header.php'); ?>
    <div class="container p-4">
        <div class="d-flex justify-content-end p-2">
            <a href="create_html.php" class="btn btn-primary">Add +</a>
        </div>
        <?php
            require_once('database/database.php');
            $posts="";
            if($_SERVER['REQUEST_METHOD']=='POST'){
               //  search of book
               $posts=searchBypost($_POST);
            }else {
               //  selectAll From database:
               $posts = selectAllpost();
            }
            foreach ($posts as $post):
        ?>

        <div class="card">
            <div class="card-body">
                <div class="d-flex">
                    <div class="info">
                        <h1 class="display-4"><?=$post['Title'] ?></h1>
                        <p class="p1"><?=$post['Date'] ?></p>
                        <img src="images/<?= $post['Image'] ?>"width=300px><br>
                        <p><?=$post['Description']?> </p>
                        <strong><?=$post['Price'] ?>$</strong> 
                        <h2><?$post['User_Id']?></h2>
                        <h2><?$post['category_Id']?></h2>
                    </div>    
               </div>

                <div class="action d-flex justify-content-end">
                    <a href="update_html.php?id=<?=$post['post_Id'] ?>" class="btn btn-primary btn-sm mr-2"><i class="fa fa-pencil"></i></a>
                    <a href="delete_model.php?id=<?=$post['post_Id'] ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                </div>

            </div>
        </div>
        <?php endforeach; ?>
    </div>
    <?php require_once('partial/footer.php'); ?>
    
    <!-- Footer of book -->
    <footer>
        <p>Seller: Sreynot Bou<br>
        <a href="mailto:hege@example.com">Sreynot.bou@gmail.com</a></p>
    </footer>

<!-- style Css -->
<style>
        body{
            background:white;
        }
        h1{
            color:blue;
            font-family:arial;
        }
        .container{
             margin-top:100px;
        }
        strong{
            color:red;
        }
        footer {
            text-align: center;
            padding: 3px;
            background-color: DarkSalmon;
            color: white;
        }
        button{
            padding:15px;
        }
        .p1{
            color:red;
        }
</style>
