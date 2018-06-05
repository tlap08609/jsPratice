<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>doublyLinkList</title>
</head>
<body>
<!-- 

雙向鏈結串列：一個連到下一個元素，另外一個連到前一個元素

 -->
</body>
<script>
function DoublyLinkedList(){
    var Node = function(element){
        this.element = element;
        this.next = null;
        this.prev = null;
    }
    var length = 0;
    var head = null;
    var tail = null;
    //特定位置添加一個新項目
    this.insert = function(position,element){
        if(position >=0 && position <=length){
            var node = new Node(element),
            current = head,
            previous,
            index = 0;
            if(position === 0){ //在第一個位置添加
                if(!head){
                    head = node;
                    tail = node;
                }else{
                    node.next = current;
                    current.prev = node;
                    head = node;
                }
            }else if(position === length){
                current = tail;
                current.next = node;
                node.prev = current;
                tail = node;
            }else{
                while(index++ < position){
                    previous = current;
                    current = current.next;
                }
                node.next = current;
                previous.next = node;

                current.prev = node;
                node.prev = previous;
            }
            length++; //更新串列的長度
            return true;
        }else{
            return false;
        }
    }


    this.removeAt = function(position){
            //檢查越界值
            if(position > -1 && position < length){
                var current = head,
                previous,
                index = 0;
                if(position === 0){
                    head = current.next;

                    //如果只有一項，更新tail
                    if(length ===1 ){
                        tail = null;
                    }else{
                        head.prev = null;
                    }
                }else if(position === length-1){
                    current = tail;
                    tail = current.prev;
                    tail.next = null;
                }else{
                    while(index++ < position){
                        previous = current;
                        current = current.next;
                    }
                    //將previous與current的下一項鍊接起來，跳過current，
                    //進而移除他的previous.next = current.next;
                    previous.next = current.next;
                    current.next.prev = previous;
                }
                length--;
                return current.element;
            }else{
                return null;
            }

        }
}

</script>
</html>