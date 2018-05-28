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

//var n = [0,1,2,3,4,5,6,7,8,9];
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
//n.splice(5,3);
//n.splice(5,0,5,6,7); //注意第二個參數是想刪除的元素個數，如果為0代表要增加


// for(var i =0 ; i<n.length ; i++){
// console.log(n[i]);
// }


//二維陣列
// var m = [];
// m[0] = [];
// m[0][0]= 72;
// m[0][1]= 80;
// m[0][2]= 73;
// m[0][3]= 81;
// m[0][4]= 74;
// m[0][5]= 82;
// m[0][6]= 2;
// m[0][7]= 22;
// m[1] = [];
// m[1][0]= 72;
// m[1][1]= 82;
// m[1][2]= 3;
// m[1][3]= 21;
// m[1][4]= 94;
// m[1][5]= 8;
// m[1][6]= 82;
// m[1][7]= 62;
//console.log(m);
// how to loop
// for(var a = 0 ; a<m[0].length ; a++){
//     for(var b = 0 ; b<m[1].length ; b++){
//     console.log(m[a][b]);
//     }
// }



//Iterative
// var m=[1,2,3,4,5,6,7,8,9];
//every:跑完全部元素，直到返回false
//some:跑完全部元素，直到返回true
// var isEven = function (x){
//     console.log(x);
//     //注意看這個傳回值跟some|every的關係
//     return (x%2 == 0) ? true : false ;
// }

// console.log(m.every(isEven));
// console.log(m.some(isEven));

//for迴圈替代方案:forEach
// m.forEach(function(x){
//     console.log((x%2 ==0));
// })

//返回新陣列:
//map:Iterative陣列的所有結果
//filter:只有true的元素

//  var myMap = m.map(isEven);
//  console.log(myMap);
//  var myFilter = m.filter(isEven);
//  console.log(myFilter);

//reduce: 求和
// var plusAll = m.reduce(function(previous, current, index){
//     return previous + current;
// })
// console.log(plusAll);

//搜尋和排序
// var p=[1,2,3,4,5,6,7,8,9,10,11,12,13];

// console.log(p.reverse());
//console.log(p.sort()); //sort的問題點:把數字當字串做比較

//因為是數字排序，sort可以這樣寫:
//sort根據返回值的狀況給陣列做排列
// var sortResult = p.sort(function(a,b){
//     //console.log(a-b);
//     return a-b;
// });


// console.log(sortResult);

//把以上作為清晰地表達可以這樣:
// function compare(a,b){
//     if(a<b){
//         return -1;
//     }
//     if(a>b){
//         return 1;
//     }
//     return 0;
// }
// console.log(p.sort(compare));


//物件排序
// var friends = [
//     {name: 'John', age:30},
//     {name: 'Ana', age:20},
//     {name: 'Chris', age:25},
// ];
// function comparePerson(a,b){
//     if(a.age < b.age){
//         return -1;
//     }
//     if(a.age > b.age){
//         return 1;
//     }
//     return 0;
// }
// console.log(friends.sort(comparePerson));

//字串排序
var names = ["Ana","ana","john","John","bb"];
// console.log(names.sort()); //怪怪的？因為sort是根據AscII比較的

var charResult = names.sort(function(a,b){
    if (a.toLowerCase() < b.toLowerCase()){
        return -1;
    }
    if (a.toLowerCase() > b.toLowerCase()){
        return 1;
    }
    return 0;
})
console.log(charResult);
//補充：有抑音符號字元可以用localCompare

//搜尋 indexOf
//輸出陣列為字串: toString, join
// var q=[1,2,3,4,5,6,7,8,9,10,11,12,13];
// console.log(q.indexOf(0)); //沒有0則傳回-1
// console.log(q.indexOf(5)); //有5則傳回第四個位置

// console.log(q.toString());
// var qString = q.join("-");
// console.log(qString);















</script>