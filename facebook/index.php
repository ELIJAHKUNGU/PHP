
<!DOCTYPE html>
<html>
<head>
    <title>Messenger Box</title>
    <script src="bootstrap4/js/jquery.min.js"></script>
    <link rel="stylesheet" href="bootstrap4/css/bootstrap.min.css" />
    <script src="bootstrap4/js/bootstrap.min.js"></script>
</head>
<body>
<br /><br />
<div class="container">
    <br />
    <h1 align="center">Messenger Box</h1>
    <br />

    <nav class="navbar bg-dark">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand text-white" href="#">Panel Notices </a>
            </div>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle text-white" data-toggle="dropdown">
                        <span class="label label-pill label-danger count " style="border-radius:10px; color: yellow; border: double">New</span>
                        <span class="glyphicon glyphicon-envelope bg-danger" style="font-size:18px; border-radius:10px;" ></span>


                        Notifications
                    </a>
                    <ul class="dropdown-menu">


                    </ul>
                </li>
            </ul>
        </div>
    </nav>
    <br><br>

    <form method="post" id="comment_form">
        <div class="form-group">
            <label class="text-bold">Enter Subject</label>
            <input type="text" name="subject" id="subject" class="form-control" required style="border-radius: 20px">
        </div>
        <div class="form-group">
            <label>Enter Comment</label>
            <textarea name="comment" id="comment" class="form-control" rows="5" required style="border-radius: 20px"></textarea>
        </div>
        <div class="form-group">
            <input type="submit" name="post" id="post" class="btn btn-info" value="Send" />
        </div>
    </form>

</div>
</body>
</html>

<script>
    $(document).ready(function(){

        function load_unseen_notification(view = '')
        {
            $.ajax({
                url:"fetch.php",
                method:"POST",
                data:{view:view},
                dataType:"json",
                success:function(data)
                {
                    $('.dropdown-menu').html(data.notification);
                    if(data.unseen_notification > 0)
                    {
                        $('.count').html(data.unseen_notification);
                    }
                }
            });
        }

        load_unseen_notification();

        $('#comment_form').on('submit', function(event){
            event.preventDefault();
            if($('#subject').val() != '' && $('#comment').val() != '')
            {
                var form_data = $(this).serialize();
                $.ajax({
                    url:"insert.php",
                    method:"POST",
                    data:form_data,
                    success:function(data)
                    {
                        $('#comment_form')[0].reset();
                        load_unseen_notification();
                    }
                });
            }
            else
            {
                alert("Both Fields are Required");
            }
        });

        $(document).on('click', '.dropdown-toggle', function(){
            $('.count').html('');
            load_unseen_notification('yes');
        });

        setInterval(function(){
            load_unseen_notification();;
        }, 5000);

    });
</script>