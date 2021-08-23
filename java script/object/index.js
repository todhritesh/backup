class Animal{
    constructor(n){
        this.name = n;
    }
}

class Dog extends Animal {
    constructor(name){
        super(name);
    }
}

class Person extends Dog {
    
}

let tiger = new Dog("tigerrrr");
console.log(tiger.name);