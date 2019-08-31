<?php
    require('db.php');
    require('get_data.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/61dcb110b4.js"></script>
    <title>Document</title>
    <style>
        *{
    padding: 0;
    margin: 0;
    font-family: Arial, Helvetica, sans-serif;
}
.page-wrap{
    background-color: rgb(70, 159, 188);
    width: 100%;
    min-height: 100vh;
}
.conduct-content{
    width: 90%;
    height: 200px;
    padding: 30px;
    margin: auto;
    text-align: center;
    line-height: 45px;
}
.conduct-content h1{
    font-size: 60px;
    font-weight: bold;
    text-transform: uppercase;
    color: white;
}
#guide-1{
    font-size: 20px;
    font-weight: 600;
    color: rgb(248, 200, 60);
}
#guide-2{
    font-size: 20px;
    font-weight: 600;
    color: rgb(123, 219, 124);
}
#guide-3{
    font-size: 20px;
    font-weight: 600;
    color: rgb(39, 93, 102);
}
.content{
    width: 90%;
    height: auto;
    margin: auto;
}
.content .add-content{
    width: 90%;
    height: 50px;
    margin: auto;
}
.add-content input{
    width: 80%;
    height: 30px;
    border-radius: 10px;
    padding: 5px;
    font-size: 20px;
    float: left;
}
.add-content a i{
    width: 40px;
    height: 50px;
    font-size: 50px;
    margin: -2px 5px;
    color: rgb(39, 93, 110);
}
.list-content{
    width: 90%;
    height: auto;
    /* margin: 20px auto; */
    padding: 20px 0;
}
.content-item{
    width: 80%;
    margin: auto;
    border: 2px solid rgb(68, 67, 67);
    border-radius: 5px;
    padding: 5px;
    display: table;
    background-color: rgb(106, 183, 202);
    position: relative;
    margin-bottom: 20px;
}
.content-item:last-child {
  margin-bottom: 0;
}
.text-input{
    width: 50%;
    float: left;
    display: flex;
    text-align: center;
    justify-content: center; 
    display: table-row;

}
.text-input p{
    font-size: 18px;
    color: white;
    font-weight: bold;
    font-family:Arial, Helvetica, sans-serif;
    word-spacing:1px;
    line-height: 25px;
    text-align: center;
    display: flex;
    text-align: center;
    justify-content: center; 
}
.close{
    width: 5%;
    float: left;
    height: 18px;
    margin-top: -10px;
    position: absolute;
    top: 50%;
    right: 0;
    display: table-row;
}
.close .bt-cls{
    width: 100%;
    height: 100%;
    position: relative;
}
.close .bt-cls i{
    right: 50%;
    color: rgb(39, 93, 110);
    font-size: 20px;
}
#bt-add {
    width: 50px;
    height: 40px;
    font-size: 30px;
}
.close #bt-remove {
    width: 30px;
    height: 30px;
    font-size: 16px;
    position: relative;
    top: -5px;
}
    </style>
</head>
<body>
    <div class="page-wrap">
        <div class="conduct-content">
            <h1>work to-dos</h1>
            <p id="guide-1">Enter text into the input field to add items to your list (max. 28 characters).</p>
            <p id="guide-2">Click the item to mark it as complete.</p>
            <p id="guide-3">Click the "X" to remove the item from your list.</p>
        </div>
        <div>
            <?php
                if (isset($error)) {
                    echo "<b>$error</b>";
                }
            ?>
        </div>
        <div class="content">
            <div class="add-content">
                <form method="post" action="handle_form.php">
                    <input type="text" name="txtTask" id="txt-value" placeholder="New Item...">
                    <button name="btnInsert" type="submit" id="bt-add"><i class="fas fa-pen-square"></i></button>
                </form>
            </div>
            
        </div>
        <?php
            foreach ($task as $item) {
                ?>
                    <div class="list-content">
                <div class="content-item">
                    <form action="handle_form.php" method="POST">
                        <input class="text-input" name="txtTaskUpdate" value="<?php echo $item['name'] ?>">
                        <div>
                        <div class="bt-cls">
                                <input type="hidden" name="taskId" value="<?php echo $item['id'] ?>"/>
                                <button type="submit" name="btnUpdate" id="bt-remove">Update</button>
                        </div>
                    </div>
                    </form>
                    <div class="close">
                        <div class="bt-cls">
                            <form action="handle_form.php" method="POST">
                                <input type="hidden" name="taskId" value="<?php echo $item['id'] ?>"/>
                                <button type="submit" name="btnDelete" id="bt-remove"><i class="fas fa-times"></i></button>
                            </form>
                        </div>
                    </div>
                    
                    
                </div>
            </div>
                <?php
            }
        ?>
        
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="./index.js"></script>
</body>
</html>