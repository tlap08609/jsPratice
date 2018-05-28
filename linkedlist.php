<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LinkList</title>
</head>
<body>
<!-- 
js的array插入元素的成本很高(因為需要移動其他元素)
鏈結串列就不一樣，完全不用移動其他元素就可以達到插入等等效果，但是需要指位器(像是分節火車依樣，新增一節車廂只要把那個位置的前後車廂打開就可以直接放進去)

 -->
</body>
<script>
    function LinkedList(){
        var Node = function(element){
            this.element = element;
            this.next = null; //指位器(指向下一個串列)
        }
        var length = 0;
        var head = null;
        //尾部添加一個新項目：
        //if 1.串列為空,添加第一個 2.串列不為空，向後添加
        this.append = function(element){
            var node = new Node(element),
            current;
            if(head === null){ //串列中的第一個節點
                head = node;//下一個node元素會自動成為null
                console.log(head);
            }else{
                current = head;
                //串列迴圈，直到找到最後一項
                while(current.next){
                    current = current.next;
                }
                //找到最後一項(current.next=null)，將其next賦為node
                current.next = node;
            }
            length++; //更新長度
        }
        //特定位置添加一個新項目
        this.insert = function(position,element){

        }
        //特定位置移除一個項目
        this.removeAt = function(position){

        }
        this.remove = function(element){

        }
        this.indexOf = function(element){

        }
        this.isEmpty = function(){

        }
        this.size = function(){

        }
        this.toString = function(){

        }
        this.print = function(){

        }
    }

    var list =  new LinkedList();
    list.append(15);
    list.append(20);

</script>
</html>