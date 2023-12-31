<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comment System</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
</head>
<body>
    <br/>
    <h2 style="text-align: center;font-family:sans-serif;font-weight:300;color:grey">Add a Discussion Form</h2>
    <br/>
    <div class="container" style="justify-content: center; display:block;">
    <form method="POST" id="comment_form">
        <div class="form-group">
            <input type="text" name="comment_name" id="comment_name" class="form-control" style="width: 100%;" placeholder="Enter Topic ">
        </div>
        <div class="form-group">
            <textarea name="comment_content" id="comment_content" class="form-control" style="width: 100%; height: 150px;" placeholder="Enter Message"></textarea>
        </div>
        <div class="form-group">
            <input type="hidden" name="comment_id" id="comment_id" value="0"/>
            <input type="submit" name="submit" id="submit" class="btn btn-info" value="Submit"/>
        </div>
    </form>
</div>
    <div id="comment_message" ></div>
        <br/>
        <div id="display_comment"></div>
    <script>
        $(document).ready(function() {
            $('#comment_form').on('submit', function(event) {
                event.preventDefault();
                var form_data = $(this).serialize();
                $.ajax({
                    url: 'add_comment.php',
                    method: "POST",
                    data: form_data,
                    dataType: "JSON",
                    success: function(data) {
                        if (data.error != '') {
                            $('#comment_form')[0].reset();
                            $('#comment_message').html(data.error);
                        }
                    }
                });
            });
    
    load_comment();
    function load_comment(){
        $.ajax({
            url:"fetch_comment.php",
            method:"POST",
            success:function(data){
                $('#display_comment').html(data);
            }
        })
    }
     $(document).on('click','.reply',function(){
        var comment_id=$(this).attr("id");
        $('#comment_id').val(comment_id);
        $('#comment_name').focus();

     });
});
           
    </script>
</body>
</html>
