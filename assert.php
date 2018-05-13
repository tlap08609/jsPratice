<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
#result .pass{
color:green;
}
#result .fail{
color:red;
}

</style>
<body>

<ul id="results"></ul> 
</body>
<script>

function assert(value,desc){
    var li = document.createElement("li");
    li.className = value ?  "pass" : "fail";
    li.appendChild(document.createTextNode(desc));
    document.getElementById("results").appendChild(li);
}

window.onload = function(){
    assert(1===1,"this is true;")
}


</script>
</html>