<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>stack = LIFO(書本從下往上疊，取出也是從上面拿)</title>
</head>
<body>
    <!-- 應用：比方說是在程式語言編譯器和記憶體儲存變數，方法呼叫 -->
</body>
<script>
    var item = [];
    function st(){
        this.push = function(element){
            item.push(element);
        }
        this.pop = function(){
            return item.pop();
        }
        //想知道最後添加的元素所以設的peek方法
        this.peek = function(){
            return item[item.length-1];
        }
        //如果堆疊為空，返回true
        this.isEmpty= function(){
            return item.length == 0;
        }
        //想知道陣列元素大小
        this.size= function(){
            return item.length;
        }
        this.clear= function(){
            item = [];
        }
        this.print= function(){
            console.log(item.toString());
        }
    }

    //使用st類別
    // var st = new st();
    // console.log(st.isEmpty());

    //接下來就可以自己玩玩看先進後出囉


    //應用 Decimal to binary
    function divideBy2(num){
        var remStack = new st(),
        rem,
        binaryString = '';

        while(num>0){
            rem = Math.floor(num %2);
            remStack.push(rem);
            num = Math.floor(num / 2);
        }
        while (!remStack.isEmpty()){
            binaryString += remStack.pop().toString();
        }
        return binaryString;
    }

    //console.log(divideBy2(486)); //111100110


    function baseConverter(num,base){
        var remStack = new st(),
        rem,
        baseString = '';
        //如果是10進位轉成16進位，餘數是0~9之間，會加上A~F(對應10~15)
        digits = '0123456789ABCDEF';

        while(num>0){
            rem = Math.floor(num % base);
            remStack.push(rem);
            num = Math.floor(num / base);
        }
        while (!remStack.isEmpty()){
            baseString += digits[remStack.pop()];
        }
        return baseString;
    }
    console.log(baseConverter(100345,2));
    console.log(baseConverter(100345,8));
    console.log(baseConverter(100345,16));

</script>
</html>