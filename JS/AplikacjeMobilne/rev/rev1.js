var Person = {};

Object.defineProperty(Person, 'name', {
    value: "Jakub",
    writable: true,
    configurable: true,
    enumerable: true,
})

// console.log(Person.name); 

// console.log(Object.prototype.isPrototypeOf(Person)); //true

// console.log(Person.propertyIsEnumerable('name'));

console.log(Person.toString());

// Generator function
function* foo(){
    console.log("Before");

    yield

    console.log("After");
}

const gen = foo().next();
	
const map = new Map([
    [ 1, 'test1' ],
    [ 2, 'test2' ],
    [ 3, 'test3' ],
]);

// Map to array
const keys = [ ...map ];
console.table(keys);

var Animal = {};

