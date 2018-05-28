<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Queue - FIFO(先來先服務)</title>
</head>
<body>
    <!-- 應用：列印佇列(第一個送到印表機的會被列印) -->
</body>
<script>
function Queue(){
    var item = [];

    this.enqueue = function(element){
        item.push(element);
    }
    this.dequeue = function(){
        return item.shift();
    }
    //想知道最前面項目
    this.front = function(){
        return item[0];
    }
    this.isEmpty = function(){
        return item.length == 0;
    }
    this.clear = function(){
        item = [];
    }
    this.size = function(){
        return item.length ;
    }
    this.print = function(){
        console.log(item.toString()) ;
    }
}

// var qu = new Queue();
// console.log(qu.isEmpty()); //test
// qu.enqueue("John");
// qu.enqueue("Sir");
// qu.enqueue("Mary");
// qu.print();
// qu.dequeue();
// qu.dequeue();
// qu.print();

//修改版本，1.優先佇列(有優先權的FIFO) 2.環狀佇列(燙手山芋遊戲)

//一·優先佇列:像是醫院需要優先處理需要幫助的病人

function PriorityQueue(){
    var items = [];

    function QueueElement(element,priority){
        this.element = element;
        this.priority = priority;
    }
    this.enqueue = function(element,priority){
        var queueElement = new QueueElement(element,priority);
        //如果佇列為空，直接將元素入列
        if(this.isEmpty()){
            items.push(queueElement);
        }else{
            //當找到比要添加元素優先級更大的項目，就把元素插在之前
            var added = false;
            for(var i=0 ;i < items.length; i++){
                if(queueElement.priority < items[i].priority){
                    items.splice(i,0,queueElement);
                    added = true;
                    break;
                }
            }
            //如果要添加的元素優先級大於任何元素，直接放在末尾就好
            if(!added){
                items.push(queueElement);
            }
        }
    }
    this.dequeue = function(){
        return items.shift();
    }
    //想知道最前面項目
    this.front = function(){
        return items[0];
    }
    this.isEmpty = function(){
        return items.length == 0;
    }
    this.clear = function(){
        items = [];
    }
    this.size = function(){
        return items.length ;
    }
    this.print = function(){
        for(var i = 0 ; i<items.length;i++){
            console.log(items[i].element +" -> "+ items[i].priority);
        }
        //es6 
        // for(let i=0 ; i< items.length ; i++){
        //     console.log(`${items[i].element} - ${items[i].priority}`);
        // }
    }
}


var pQ = new PriorityQueue();
pQ.enqueue("john",2);
pQ.enqueue("jack",1); //因為優先級高於john,會被排在前面
pQ.enqueue("camila",1); //優先級高於john,但因為jack已經先排了，所以他會被安插在之後
pQ.print();


//二·環狀佇列:

function hotPotato(nameList,num){
    var queue = new Queue();
    for (var i = 0 ; i< nameList.length; i++){
        queue.enqueue(nameList[i]);
    }
    var eliminated = '';
    while (queue.size()>1){
        for(var i =0 ; i <num; i++){
            //模擬傳遞(照num的次數開頭移除到末尾)
            queue.enqueue(queue.dequeue());
        }
        eliminated = queue.dequeue();
        console.log(eliminated + '在燙手山芋遊戲中被淘汰');
    }
    //最後winner
    return queue.dequeue();
}
// var names = ['john','jack','camila','Ingrid','carl'];
// var winner = hotPotato(names,7);
// console.log("勝利者"+winner);



</script>
</html>