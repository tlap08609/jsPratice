<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dictionary(key，value)</title>
</head>
<body>
    
</body>
<script>
function Dictionary(){
    var items = {};
    this.has = function(key){
        return key in items;
    }
    this.set = function(key,value){
        items[key] = value;
    }
    this.remove = function(key){
        if(this.has(key)){
            delete items[key];
            return true;
        }
        return false;
    }
    this.get = function(key){
        return this.has(key) ? items[key] : undefined;
    }
    //這個方法不能被執行
    this.values = function(){
        var values = {};
        for(var k in items){
            if(this.has(k)){
                values.push(items[k]);
            }
        }
        return values;
    }
    this.clear = function(){
        items = {};
    }
    this.size = function(){
        return Object.keys(items).length;
    }
    this.keys = function(){
        return Object.keys(items);
    }
    this.getItems = function(){
        return items;
    }
}


//test

var dictionary = new Dictionary();
dictionary.set("Gandalf","gandalf@email.com");
dictionary.set("John","johnsnow@email.com");
dictionary.set("Tyrion","tyrionf@email.com");

console.log(dictionary.has("Gandalf"));
console.log(dictionary.size());
console.log(dictionary.keys());
// console.log(dictionary.values());
console.log(dictionary.get("Tyrion"));
console.log(dictionary.remove("John"));
console.log(dictionary.keys());
console.log(dictionary.getItems());

</script>
</html>