// Jakub Kupczyk 4C gr. 1/2


// Task 1 - Area of any polygon
class Vertice{
    constructor(x, y) {
        this.x = x;
        this.y = y;
    }

    getX(){
        return this.x;
    }

    getY(){
        return this.y;
    }
}

class Polygon {
    constructor(vertices){
        this.vertices = vertices;
    }

    polyArea() {
        let num = 0;

        for(let i = 0; i < this.vertices.length - 1; i++){
            num += ((this.vertices[i].getX()) * (this.vertices[i+1].getY())) - ((this.vertices[i].getY()) * (this.vertices[i+1].getX()));
        }

        return Math.abs(num/2);
    }
}

let verticesArr = [
    new Vertice(4, 10),
    new Vertice(9, 7),
    new Vertice(11, 2),
    new Vertice(2, 2),
    new Vertice(4, 10)
];

let poly1 = new Polygon(verticesArr);

console.log(poly1.polyArea()); // Output: 45.5



// Task 2 - BST Tree
class Node{
    constructor(data) {
        this.left = null;
        this.right = null;
        this.data = data;
    }
}








// Task 3 - Person...