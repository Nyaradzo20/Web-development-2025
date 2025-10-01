function init(x) {
  x = "Mozilla"; // name is a local variable created by init
  function displayName(y) {
    // displayName() is the inner function, that forms a closure
    y= "Firefox"
    console.log(x+" " + y) // use variable declared in the parent function
  }
  displayName();
}
init();
 