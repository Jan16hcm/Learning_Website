<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <title>PHP Exercises</title>
</head>
<body>
    <div class="container">

        <div class="row">
            <div class="col-md-6 my-5 mx-auto border rounded px-3 py-3">
                <h4 class="text-center">Tính toán cơ bản</h4>
                <form>
                    <div class="form-group">
                        <label for="num1">Số hạng 1</label>
                        <input type="text" class="form-control" id="num1" name="num1">
                    </div>
                    <div class="form-group">
                        <label for="num2">Số hạng 2</label>
                        <input type="text" class="form-control" id="num2" name="num2">
                    </div>
                    <div class="form-group">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input checked value="+" name="op" id="add" type="radio" class="custom-control-input">
                            <label for="add" class="custom-control-label">Cộng</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input value="-" name="op" id="subtract" type="radio" class="custom-control-input">
                            <label for="subtract" class="custom-control-label">Trừ</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input value="*" name="op" id="multiply" type="radio" class="custom-control-input">
                            <label for="multiply" class="custom-control-label">Nhân</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input value="/" name="op" id="divide" type="radio" class="custom-control-input">
                            <label for="divide" class="custom-control-label">Chia</label>
                        </div>
                    </div>
                    <button class="btn btn-success">Xem kết quả</button>
                </form>
            </div>
        </div>
        <?php
            if(empty($_GET)) {
                return 0;
            }
            $num1 = intval($_GET["num1"]);
            $num2 = intval($_GET["num2"]);
            $op = $_GET["op"];
            $res = $num1;
            $errorMess = "";
            if(empty($num1) || empty($num2) || empty($op)) {
                $errorMess = "Please enter number";
            } else {
                switch ($op) {
                    case "+":
                        $res = $num1 + $num2;
                        break;
                    case "-":
                        $res = $num1 - $num2;
                        break;
                    case "*":
                        $res = $num1 * $num2;
                        break;
                    case "/":
                        if($num2 == 0) {
                            $errorMe = "Cannot divide by zero";
                        } else {
                            $res = $num1 / $num2;
                        }
                        break;
                    }
                }
            
        ?>
        <div class="row">
            <div class="col-md-6 mx-auto px-3 py-3 text-center">
                <?php 
                    if(empty($errorMess)) {
                        echo "<div class='alert alert-success'>$num1 $op $num2 = $res</div>";
                    } else {
                        echo "<div class='alert alert-danger'>$errorMess</div>";
                    }
                ?>
            </div>
        </div>
    </div>
    
</body>
</html>