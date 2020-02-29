<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="src\fontawasome\css\all.css" rel="stylesheet"> <!--load all styles -->
    <script defer src="src\fontawasome\js\all.js"></script> 
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>MOCKUP</title>
  </head>

  <style>
      input.form-control { width: 800px!important; }
  </style>
  <body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  
    <div class="container">
            <div class="navbar-nav nav-fill w-80">
            <a class="navbar-brand" href="https://www.arkademy.com/">
                 <img src="https://www.arkademy.com/img/logo%20arkademy.1c82cf5c.svg" width="100" height="50" class="d-inline align-top" alt="">
             </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
            </button>
            <form class="form-inline">
                <div class="input-group">                    
                <input class="form-control mr-4 " type="search" placeholder="Search" aria-label="Search">
                
                <button type="button" class="btn btn-warning my-sm-0" data-toggle="modal" data-target="#modalAdd">ADD</button>
                </div>
            </form>
            </div>
    </div>
  </nav>
  <div class="d-flex p-5">
      <div class="container-fluid">
            <table class="table table-bordered">
        <thead class="table-warning">
            <tr>
            <th scope="col">NO</th>
            <th scope="col">Cashier</th>
            <th scope="col">Product</th>
            <th scope="col">Category</th>
            <th scope="col">Price</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <th scope="row">1</th>
            <td>Pevita Pearce</td>
            <td>Latte</td>
            <td>Drink</td>
            <td>Rp. 10000</td>
            <td>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalSaya"><i class="fa fa-edit"> </i> </button>||
            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modalHapus"><i class="far fa-trash-alt"></i></button>
            </td>
            </tr>
            <tr>
            <th scope="row">2</th>
            <td>Raisa Andriana</td>
            <td>Cake</td>
            <td>Food</td>
            <td>Rp. 15000</td>
            <td>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalSaya"><i class="fa fa-edit"> </i> </button>||
            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modalHapus"><i class="far fa-trash-alt"></i></button>
            </td>
            </tr>
            <tr>
            <th scope="row">3</th>
            <td>Raisa Andriana</td>
            <td>Fried Cake</td>
            <td>Food</td>
            <td>Rp. 30000</td>
            <td>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalSaya"><i class="fa fa-edit"> </i> </button>||
            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modalHapus"><i class="far fa-trash-alt"></i></button>
            </td>
            </tr>
            <tr>
            <th scope="row">4</th>
            <td>Pevita Pearce</td>
            <td>Gudeg</td>
            <td>Food</td>
            <td>Rp. 35000</td>
            <td>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalSaya"><i class="fa fa-edit"> </i> </button>||
            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modalHapus"><i class="far fa-trash-alt"></i></button>
            </td>
            </tr>
            <tr>
            <th scope="row">5</th>
            <td>Joko Purwadhi</td>
            <td>Ice Tea</td>
            <td>Drink</td>
            <td>Rp. 55000</td>
            <td>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalSaya"><i class="fa fa-edit"> </i> </button>||
            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modalHapus"><i class="far fa-trash-alt"></i></button>
            </td>
            </tr>
            <tr>
            <th scope="row">6</th>
            <td>Muhamad Fauzi Hibatullah</td>
            <td>Liong Coffe</td>
            <td>Drink</td>
            <td>Rp. 10000</td>
            <td>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalSaya"><i class="fa fa-edit"> </i> </button>||
            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modalHapus"><i class="far fa-trash-alt"></i></button>
            </td>
            </tr>
        </tbody>
        </table>

      </div>
  </div>
               
            
            <!--  Modal Edit -->
            <div class="modal fade" id="modalSaya" tabindex="-1" role="dialog" aria-labelledby="modalSayaLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalSayaLabel">Edit</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                     <form>
                    <div class="form-group row">
                    <select class="custom-select" id="inputGroupSelect01">
                        <option selected>Raisa Andriana</option>
                        <option value="1">Pevita Pearce</option>
                        <option value="2">Joko Purwadhi	</option>
                        <option value="3">Muhamad Fauzi Hibatullah</option>
                    </select>
                    </div>
                    <div class="form-group row">
                    <select class="custom-select" id="inputGroupSelect01">
                        <option selected>Drink</option>
                        <option value="1">Food</option>
                        <option value="2">Snack</option>
                        <option value="3">Cemilan</option>
                    </select>
                    </div>
                    <div class="form-group row">
                    <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="Ice Tea">
                   
                    </div>
                    <div class="form-group row">
                    <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="Rp. 10000">
                   
                    </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Edit</button>
                </div>
                </div>
            </div>
            </div>

             <!--  Modal ADd -->
             <div class="modal fade" id="modalAdd" tabindex="-1" role="dialog" aria-labelledby="modalAddLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalAddLabel">ADD</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                     <form>
                    <div class="form-group row">
                    <select class="custom-select" id="inputGroupSelect01">
                        <option selected>Raisa Andriana</option>
                        <option value="1">Pevita Pearce</option>
                        <option value="2">Joko Purwadhi	</option>
                        <option value="3">Muhamad Fauzi Hibatullah</option>
                    </select>
                    </div>
                    <div class="form-group row">
                    <select class="custom-select" id="inputGroupSelect01">
                        <option selected>Drink</option>
                        <option value="1">Food</option>
                        <option value="2">Snack</option>
                        <option value="3">Cemilan</option>
                    </select>
                    </div>
                    <div class="form-group row">
                    <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="Ice Tea">
                   
                    </div>
                    <div class="form-group row">
                    <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="Rp. 10000">
                   
                    </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Add</button>
                </div>
                </div>
            </div>
            </div>
              
            <!--  Modal Hapus -->
            <div class="modal fade" id="modalHapus" tabindex="-1" role="dialog" aria-labelledby="modalHapusLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalHapusLabel"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
               <center>Data Raisa Andriani ID #1</center> 
                    <br/>
                   <center> <img src="https://pngimage.net/wp-content/uploads/2018/05/done-png-8.png" alt="" width="150" height="150" > </center>
                    <br/>
                    <center> Berhasil dihapus</center>
                </div>
                <div class="modal-footer">
                </div>
                </div>
            </div>
            </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>