<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BST</title>
</head>
<body>
    
</body>
<script>
function BinarySearchTree(){
    var Node = function(key){
        this.key = key;
        this.left = null;
        this.right = null;
    }
    var root = null;
    
    var insertNode = function(node,newNode){
        if(newNode.key < node.key){
            if(node.left === null){
                node.left = newNode;
            }else{
                insertNode(node.left, newNode);
            }
        }else{
            if(node.right === null){
                node.right = newNode;
            }else{
                insertNode(node.right, newNode);
            }
        }
    }

    this.insert = function(key){
        var newNode = new Node(key);
        if(root === null){
            root = newNode;
        }else{
            insertNode(root,newNode);
        }
    }

    //遍歷
    //ㄧ·中序遍歷:升幂(最小到最大)訪問所有節點
    this.inOrderTraverse = function(callback){
        inOrderTraverseNode(root,callback);
    }
    var inOrderTraverseNode = function(node,callback){
        if(node !== null){
            inOrderTraverseNode(node.left,callback);
            callback(node.key);
            inOrderTraverseNode(node.right,callback);
        }
    }
    //二·先序遍歷:由上到下，左至右訪問所有節點，應用是列印一個結構化文件
    this.preOrderTraverse = function(callback){
        preOrderTraverseNode(root,callback);
    }
    var preOrderTraverseNode = function(node, callback){
        if(node !== null){
            callback(node.key);
            preOrderTraverseNode(node.left, callback);
            preOrderTraverseNode(node.right, callback);
        }
    }
    //三·後序遍歷:由後代節點開始遍歷，應用是計算一個目錄和他的子目錄所佔空間的大小　
    this.postOrderTraverse = function(callback){
        ppostOrderTraverseNode(root,callback);
    }
    var postOrderTraverseNode = function(node, callback){
        if(node !== null){
            postOrderTraverseNode(node.left, callback);
            postOrderTraverseNode(node.right, callback);
            callback(node.key);
        }
    }
    //搜尋值
    //min
    this.min = function(){
        return minNode(root);
    }
    var minNode = function(node){
        if(node){
            while(node && node.left !== null){
                node = node.left;
            }
            return node.key;
        }
        return null;
    }
    //max
    this.max = function(){
        return maxNode(root);
    }
    var maxNode = function(node){
        if(node){
            while(node && node.left !== null){
                node = node.right;
            }
            return node.key;
        }
        return null;
    }
    //搜尋特定的值
    this.search = function(key){
        return searchNode(root, key);
    }
    var searchNode = function(node, key){
        if(node === null){
            return false;
        }
        if(key < node.key){
            return searchNode(node.left, key);
        }else if(key > node.key){
            return searchNode(node.right, key);
        }else{
            return true;
        }
    }
    //remove
    var removeNode = function(node, key){
        if(node === null){
            return null;
        }
        if(key < node.key){
            node.left = removeNode(node.left, key);
            return node;
        }else if(key > node.key){
            node.right = removeNode(node.left, key);
            return node;
        }else{ //鍵等於node.key
            //第一種情況->一個葉節點
            if(node.left === null && node.right === null){
                node = null;
                return node;
            }
            //第二種情況->一個只有一個子節點的節點
            if(node.left === null){
                node = node.right;
                return node;
            }else if(node.right === null){
                node = node.left;
                return node;
            }
            //第三種情況->一個有兩個子節點的節點
            var aux = findMinNode(node.right);
            node.key = aux.key;
            node.right = removeNode(node.right, aux.key);
            return node;
        }
    }

}
var tree = new BinarySearchTree();
tree.insert(11);
tree.insert(7);
tree.insert(15);
tree.insert(5);
tree.insert(3);
tree.insert(9);
tree.insert(8);
tree.insert(10);
tree.insert(13);
tree.insert(12);
tree.insert(14);
tree.insert(20);
tree.insert(18);
tree.insert(25);

function printNode(value){
        console.log(value);
}
tree.inOrderTraverse(printNode);


//測試搜尋
console.log(tree.search(1) ? "key 1 found." : "key 1 not found");
console.log(tree.search(8) ? "key 8 found." : "key 8 not found");
</script>
</html>