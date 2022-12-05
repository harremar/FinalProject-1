//things that are store in the cart
let inCart = [];

//adding item into cart
function addToCart(id) {
    inCart.push(id); //push into array
    console.log(inCart) //see array with objects
    console.log(inCart.length) //seeing the length of the array
    alert("You have added " + id + "  to your cart");
}


//checking out
function checkout() {
    alert("You have checked out");
}
