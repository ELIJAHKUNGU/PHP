<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery.min.js"></script>

    <script src="/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="js/popper.min.js">
    <script src="js/modal.js"></script>
    <link rel="stylesheet" href="js/bootstrap.js">
    <title>ICE CREAM</title>
</head>
<body>
<nav class="navbar navbar-dark bg-dark" style="height: 80px">
    <span class="navbar-brand mb-0 h1">ICECREAM </span>
</nav>
<br>
<div class="row">
    <div class="col-sm-3">
        <div class="container">
            <div class="list-group-item list-group-item-action active">Item
            </div>

        <div class="panel-body bg-dark" style="color: white">
            <form action="" id="frm-project">
                <div id="frm-project">
                    <div class="form-group">
                    <div>
                        <img src="images/pexels-photo-372882.jpeg" class="photo" id="chocolate" alt="" height="150" width="200px" data-toggle="modal" data-target="#myModal">
                        <b>Chocolate</b>

                    </div>
                        <span>-----------------------------------------------------</span>
                    <div>
                        <img src="images/pexels-photo-372882.jpeg" class="photo" id="strawberry" alt="" height="150" width="200px" data-toggle="modal" data-target="#myModal">
                        <b>strawberry</b>

                    </div>
                        <span>-----------------------------------------------------</span>
                        <div>
                            <img src="images/pexels-photo-372882.jpeg" class="photo" id="mango" alt="" height="150" width="200px" data-toggle="modal" data-target="#myModal">
                            <b>Mango</b>

                        </div>
                        <span>-----------------------------------------------------</span>
                        <div>
                            <img src="images/pexels-photo-372882.jpeg" class="photo" id="vanilla" alt="" height="150" width="200px" data-toggle="modal" data-target="#myModal">
                            <b>Vanilla</b>

                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>
    </div>
    <div class="col-sm-6">
        <div class="container ">
            <div class="list-group-item list-group-item-action active">Add product</div>
           <table id="tbl-item" class="table table-dark table-bordered" cellpadding="0" cellspacing="0" width="100%" align="center">
               <thead>
               <tr>
                   <th>Delete</th>
                   <th>Item</th>
                   <th>Price</th>
                   <th>Quantity</th>
                   <th>Total</th>

               </tr>
               <tbody>

               </tbody>
               </thead>
           </table>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="container">
            <div class="list-group-item list-group-item-action bg-info">Bill</div>
        <div>
            <label for="">Total</label>
            <input type="text" style="color:yellow; background: black; font-size: 30px; " id="total" name="total" placeholder="Total" required>
        </div>
            <br>
            <div>
                <input type="button" class="btn btn-warning " value="reset" name="reset" id="reset">
            </div>

        </div>
    </div>
</div>
<div  class ="container">
    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Modal Header</h4>
                    <button type="button" class="close" data-dismiss="modal">×</button>

                </div>
                <div class="modal-body">
                    <div>
                        <label for="">Qty: </label>
                        <input type="number" style="color:yellow;  font-size: 30px; " id="qty" name="total" placeholder="quantity" required>
                    </div>

                </div>
                <div class="modal-footer">

                    <input type="button" class="btn btn-warning " value="Add" name="Add" id="name" onclick="add()">
                </div>
            </div>
        </div>
    </div>
</div>
<script src="js/jquery.min.js"></script>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>
    var total = 0;
    var tot = 0;

    var item = null;
    var price = 0;
    var id = "";
    $("img").on("click" ,function () {
        a = $(this).prop('id')
    });

    function add() {
        if (id == "chocolate"){
            item = "chocolate";
            price = 32;

        }else if (id == "mango"){
            item = "mango";
            price = 40;

        }else  if (a == "strawberry"){
            item = "strawberry";
            price = 35;
        }else if (a == vanilla){
            item = "vanilla";
            price = 30;
        }
        /*var qty = $('#qty').val();*/

        tot = qty * price;
        var table1 =
            "<tr>"+
            "<td><button type='button' name='record' class='btn btn-warning' onclick='deleterow (this)'>Delete</td>"+
            "<td"+item +"</td>"+
            "<td" +price + "</td>"+

            "<td> +qty +</td>"+
            "<td>+tot+</td>"+
            "</td>";
        total += Number(tot);

        $('#total').val(total);
        $("table tbody").append(table1);
        $("myModal").modal('toggle');
        $('#qty').val('1');



    }
    function deleterow(e) {
        total_cost = parseInt($(e).parent().find('td:last').text(),10)
        total -= total_cost;
        $('#total').val(total);
        $(e).parent().parent().remove();
    }
    $('#reset').click(function ()
    {
        location.reload();


    });



</script>

=







</body>

</html>