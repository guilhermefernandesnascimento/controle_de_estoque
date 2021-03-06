<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $title; ?></title>
        <link type="text/css" rel="stylesheet" href="template/style/app.css" 
    </head>
</html>


app.css:
*  {
    margin: 0;
    padding: 0;
}
.center{
    width: 980px;
    margin: 100px auto;
}
input[type="text"] {
    width : 100%;
    padding: 10px;
    padding-left: 0;
    padding-right: 0;
    border: 1px solid #CCC;
    background: #FFF;
    transition: linear 0.9;
}

input[type="text"]:focus {
    box-shadow: 0px 0px 14px 0px rgba(50, 50, 50, 0, 75);
}

input[type="submit"] {
    padding: 10px;
    border: 1px solid #CCC;
    background: #CCC;
}

input[type="submit"]:hover {
  background: #333;    
  color: FFF;
}

input[type="submit"]:active{
  background: #333;    
  color: FFF;
}