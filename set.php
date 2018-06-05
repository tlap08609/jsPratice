<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Set(value，value)</title>
</head>
<body>
    
</body>
<script>
function Set(){
    var items={};
    this.has = function(value){
        //return value in items; //用in的運算子來驗證給定的值是否有items物件的屬性
        return items.hasOwnProperty(value);
    }
    this.add = function(value){
        if(!this.has(value)){
            items[value] = value;
            return true;
        }
        return false;
    }
    this.remove = function(value){
        if(this.has(value)){
            delete items[value];
            return true;
        }
        return false;
    }
    this.clear = function(){
        items = {};
    }
    // this.size = function(){
    //     return Object.keys(items).length;
    // }
    //跟上面等價
    this.sizeLegacy = function(){
        var count = 0;
        for(var prop in items){
            if(items.hasOwnProperty(prop)){
                ++count;
            }
        }
        return count;
    }
    // this.values = function(){
    //     return Object.keys(items);
    // }
    //跟上面等價
    this.valueLegacy = function(){
        var keys = [];
        for(var key in items){
            keys.push(key);
        }
        return keys;
    }
    //union
    this.union = function(otherSet){
        var unionSet = new Set();

        var values = this.valueLegacy();
        for(var i=0;i<values.length;i++){
            unionSet.add(values[i]);
        }

        values = otherSet.valueLegacy();
        for(var i=0; i<values.length;i++){
            unionSet.add(values[i]);
        }
        return unionSet;
    }
    //intersection
    this.intersection = function(otherSet){
        var intersectionSet = new Set();

        var values = this.valueLegacy();
        for(var i=0; i<values.length; i++){
            if(otherSet.has(values[i])){
                intersectionSet.add(values[i]);
            }
        }
        return intersectionSet;
    }
    //difference
    this.difference = function(otherSet){
        var differenceSet = new Set();

        var values = this.valueLegacy();
        for(var i=0; i<values.length; i++){
            if(!otherSet.has(values[i])){
                differenceSet.add(values[i]);
            }
        }
        return differenceSet;
    }
    //subset
    this.subset = function(otherSet){
        if(this.sizeLegacy()>otherSet.sizeLegacy()){
            return false;
        }else{
            var values = this.valueLegacy();
            for(var i=0; i<values.length; i++){
                if(!otherSet.has(values[i])){
                    return false;
                }
            }
            return true;
        }
    }

}

// var set = new Set();
// set.add(1);
// console.log(set.valueLegacy());
// console.log(set.has(1));
// console.log(set.sizeLegacy());
// set.add(2);
// console.log(set.valueLegacy());
// console.log(set.has(2));
// console.log(set.sizeLegacy());
// set.remove(1);
// console.log(set.valueLegacy());
// set.remove(2);
// console.log(set.valueLegacy());

//union test
// var setA = new Set();
// setA.add(1);
// setA.add(2);
// setA.add(3);

// var setB = new Set();
// setB.add(3);
// setB.add(4);
// setB.add(5);
// setB.add(6);

// var unionAB = setA.union(setB);
// console.log(unionAB.valueLegacy());

//intersection test
// var setA = new Set();
// setA.add(1);
// setA.add(2);
// setA.add(3);

// var setB = new Set();
// setB.add(2);
// setB.add(3);
// setB.add(4);

// var intersectionAB = setA.intersection(setB);
// console.log(intersectionAB.valueLegacy());


//difference test
// var setA = new Set();
// setA.add(1);
// setA.add(2);
// setA.add(3);

// var setB = new Set();
// setB.add(2);
// setB.add(3);
// setB.add(4);

// var differenceAB = setA.difference(setB);
// console.log(differenceAB.valueLegacy());

// subset test
var setA = new Set();
setA.add(1);
setA.add(2);

var setB = new Set();
setB.add(1);
setB.add(2);
setB.add(3);

var setC = new Set();
setC.add(2);
setC.add(3);
setC.add(4);

console.log(setA.subset(setB));
console.log(setA.subset(setC));





</script>
</html>