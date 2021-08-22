<!-- button search programm-->
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
            <a href="createPro_html.php" class="btn btn-primary">Add +</a>
        </div>
        <?php
             require_once('database/database.php');
             if($_SERVER['REQUEST_METHOD']=='POST'){

                 //  search of program:
                 $program=searchByPro($_POST);
              }else {
                 //  selectALl from Program:
                 $program =selectAllPro();
              }
             foreach ($program as $programming):
        ?>
        
        <div class="card">
            <div class="card-body">
               <div class="d-flex">
                    <div class="info">
                        <h1 class="display-4"><?=$programming['name'] ?></h1>
                        <img src="images/<?=$programming['Image'] ?>"width=300px><br>
                        <p class="p1"><?=$programming['date'] ?></p>
                        <p><?=$programming['Description']?> </p>
                        <strong><?=$programming['Price'] ?>$</strong> 
                    </div>
               </div>
                <div class="action d-flex justify-content-end">
                    <a href="updatePro_html.php?id=<?=$programming['pro_id'] ?>" class="btn btn-primary btn-sm mr-2"><i class="fa fa-pencil"></i></a>
                    <a href="deletePro_model.php?id=<?=$programming['pro_id'] ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
<?php require_once('partial/footer.php'); ?>

<!-- Footer of program -->
<footer>
    <p>Seller:Sreynot Bou <br>
    <a href="mailto:hege@example.com">Sreynot.bou@gmail.com</a></p>
</footer>

<!-- Style Css -->
<style>
            body{
                background:white;
            }
            h1{
                color:blue;
                font-family:arial;
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
