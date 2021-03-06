<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<head>
    <meta charset="UTF-8">
    <title>Logar no Sistema</title>
</head>
<body>
<div class="d-flex justify-content-center row">
    <div class="col-md-5">
        <?php 
        if(isset($_GET['msg'])){
            echo "<div class='alert alert-danger'>".$_GET['msg']." </div>";
        }
         ?>        
        <div class="card">
            <div class="card-header bg-success text-white">
                <h6>Login</h6>
            </div>    
            <div class="card-body">
                <form method="post" action="logar.php" id="formlogin" name="formlogin" >
                    <div class="form-group">                    
                        <label class="control-label">NOME : </label>
                        <input type="text" class="form-control" name="login" id="login"  /><br />
                    </div>
                    <div class="form-group">
                        <label class="control-label">SENHA :</label>
                        <input type="password" class="form-control" name="senha" id="senha" /><br />
                    </div>
                    <input type="submit" class="btn btn-success" value="LOGAR" />
                </form> 
                <div>   
                    <a href=\"logout.php\">Recuperar Senha</a>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>