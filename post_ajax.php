<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script>

        function fetchData()
        {
            obj = new XMLHttpRequest();

            obj.onload = function()
            {
                document.getElementById("d1").innerHTML = this.responseText;
            };

            obj.open("POST","fetchRecord.php",true);
            obj.setRequestHeader("Content-type","application/x-www-form-urlencoded");

            s=encodeURIComponent("2");
            p=encodeURIComponent("9825557617");
            c=encodeURIComponent("AB & cmp");
            
            obj.send("srno="+s+"&phno="+p+"&cmp="+c);


        }


    </script>    


</head>
<body>
    


    <form name="frm1" enctype="" >
        <div id="d1"></div>
        <input type="button" name="btn" value="Call Ajax" onclick="fetchData()" />


</form>




</body>
</html>