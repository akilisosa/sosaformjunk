
<!DOCTYPE HTML>
<head>
</head>
<body>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    if (validate_form()){
        process_form();
    }else{
        show_form();
    }
    } else {
        show_form();
    }
    function process_form(){
        print "Hello, ".$_POST['my_name'];
    }

    function show_form(){
        print<<<_HTML_
        <form method="POST" action="$_SERVER[PHP_SELF]">
        Your name: <input type="text" name="my_name">
        <br/>
        <input type="submit" value="say hello">
        </form>
        _HTML_
        ;
    }

    //check if the form adata 
    function validate_form(){
        //is this at least three characters long?
        if (strlen($_POST['my_name'])< 3){
            return false;}else{
                return true;
}
    }
?>

</body>
