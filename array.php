<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
</head>
<style>
/* #result .pass{
color:green;
}
#result .fail{
color:red;
} */

</style>
<!-- <body onload="init()">
<ul id="results">3</ul> -->
<body>

   
</body>
</html>
<script>
//Fibonacci 
// var fi = [];
// fi[1] =  1;
// fi[2] =  1;
// for(var i = 3 ; i<20 ; i++){
//     fi[i] = fi[i-1]+fi[i-2];
// }
// for(var j = 2 ; j <fi.length; j++){
//     console.log(fi[j]);
// }

var n = [0,1,2,3,4,5,6,7,8,9];
//添加最後元素
//你可以:
// n[n.length] = 1;
//或是
// n.push(2,3);

//但是如果只是想把"-1"插入第一位
//你可以這樣
// for(var j = n.length;j>=0;j--){
//     n[j] = n[j-1];
// } 
// n[0] = -1;
//或這樣
// n.unshift(-1);

//刪除最後面的元素
// n.pop();

//刪除第一個元素 (會有undefined的問題)
// for(var j = 0 ; j<n.length ; j++){
//     n[j] = n[j+1];
// }
//或這樣
// n.shift();

//某任一位置添加或刪除元素
n.splice(5,3);
n.splice(5,0,5,6,7);



for(var i =0 ; i<n.length ; i++){
console.log(n[i]);
}





// var result;
// function init(){
//     results = window.document.getElementById("results");
//     window.setInterval(count,1000);
// }
// function count(){
//     results.innerHTML = results.innerHTML-1;
    
// }


//閉包練習
// for(var i = 0; i<5 ; i++){
//     (function(e){
//         setTimeout(function(){
//         console.log(e);
//         }, 1000)
//     })(i)
// }


// function assert(value,desc){
//     var li = document.createElement("li");
//     li.className = value ?  "pass" : "fail";
//     li.appendChild(document.createTextNode(desc));
//     document.getElementById("results").appendChild(li);
// }

// window.onload = function(){
//     assert(1===1,"this is true;")
// }
// jQuery(document).ready(function(){
//     alert("tt2");
// })
</script>