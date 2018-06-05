<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>hashTable(比dictionary更快的搜尋索引->key,hashtable)</title>
</head>
<body>
    
</body>
<script>
function HashTable(){
    var table = [];
    //這種函數很容易引發衝突
    var loseloseHashCode = function(key){
        var hash = 0;
        for(var i=0;i<key.length;i++){
            hash += key.charCodeAt(i);
        }
        return hash % 37;
    }
    //良好的雜湊函數:插入，檢索元素的時間(效能)
    var djb2HashCode = function(key){
        var hash = 5381;
        for(var i=0;i<key.length;i++){
            hash = hash * 33 + key.charCodeAt(i);
        }
        return hash % 1013;
    }

    this.put = function(key,value){
        var position = loseloseHashCode(key);
        console.log(position + ' - ' +key);
        table[position] = value;
    }
    this.remove = function(key){
        table[loseloseHashCode(key)] = undefined;
    }
    this.get = function(key){
        return table[loseloseHashCode(key)];
    }
    this.print = function(){
        for(var i=0;i<table.length;++i){
            if(table[i] !== undefined){
                console.log(i + ":" + table[i]);
            }
        }
    }
    //分離鏈結
    var ValuePair = function(key,value){
        this.key = key;
        this.value = value;

        this.toString = function(){
            return '[' + this.key + ' - ' + this.value+ ']';
        }
        this.put = function(key,value){
            var position = loseloseHashCode(key);
            if(table[position] == undefined){
                table[position] == new LinkedList();
            }
            table[position].append(new ValuePair(key, value));
        }

        this.get = function(key){
            var position = loseloseHashCode(key);
            if(table[position] !== undefined){
                //遍歷鏈結串列來尋找鍵/值
                var current = table[position].getHead();
                while(current.next){
                    if(current.element.key === key){
                        return current.element.value;
                    }
                    current = current.next;
                }
                if(current.element.key === key){
                return current.element.value;
                }
            }
            return undefined;
        }
        this.remove = function(key){
            var position = loseloseHashCode(key);
            if(table[position] !== undefined){
                var current = table[position].getHead();
                while(current.next){
                    if(current.element.key === key){
                        table[position].remove(current.element);
                        if(table[position].isEmpty()){
                            table[position] = undefined;
                        }
                        return true;
                    }
                    current = current.next;
                }
                //檢查是否為第一個或最後一個元素
                if(current.element.key === key){
                    table[position].remove(current.element);
                    if(table[position].isEmpty()){
                        table[position] = undefined;
                    }
                    return true;
                }
            }
            return false;
        }

    }
    //第二種:線性探查
    //若在某位置重複，就在那個index+1置入新的value
}


//test

// var hash = new HashTable();
// hash.put("Gandalf","gandalf@email.com");
// hash.put("John","johnsnow@email.com");
// hash.put("Tyrion","tyrionf@email.com");

// console.log(hash.get("Gandalf"));
// console.log(hash.get("tim"));

// hash.remove("Gandalf");
// console.log(hash.get("Gandalf"));

// hashtable 衝突的問題:如果hash加起來ㄧ樣會怎樣??

var hash = new HashTable();
hash.put("Gandalf","gandalf@email.com");
hash.put("John","johnsnow@email.com");
hash.put("Tyrion","tyrionf@email.com");
hash.put("Aaron","aaron@email.com");
hash.put("Donnie","donnie@email.com"); //hash13
hash.put("Ana","ana@email.com"); //hash13, 這個會覆蓋掉前者
hash.put("Jonathan","jonathan@email.com");
hash.put("Jamie","jamie@email.com");
hash.put("Sue","sue@email.com");
hash.put("Mindy","mindy@email.com");
hash.put("Paul","paul@email.com");
hash.put("Nathan","nathan@email.com");

hash.print();

// 解決方案:
// 分離鏈結: 為每一個位置建立一個鏈結串列，這是最簡單但也需要額外的儲存空間
// 線性探查
// 雙雜湊法

</script>
</html>