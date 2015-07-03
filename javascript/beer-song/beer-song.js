var Beer = {};
Beer.verse = function(input) {
  if (input === 0) {
    return "No more bottles of beer on the wall, no more bottles of beer.\nGo to the store and buy some more, 99 bottles of beer on the wall.\n";
  } else if (input === 1) {
    return "1 bottle of beer on the wall, 1 bottle of beer.\nTake it down and pass it around, no more bottles of beer on the wall.\n";
  } else {
    var s = (input > 2) ? "s" : "";
    return input + " bottles of beer on the wall, " + input + " bottles of beer.\nTake one down and pass it around, " + (input - 1) + " bottle" + s + " of beer on the wall.\n";
  }
}

Beer.sing = function(start, stop) {
  stop = !stop ? 0 : stop;

  var output = "";
  for ( var i = start; i >= stop; i-- ) {
    output += this.verse(i);
    if (i != stop) {
      output += "\n";
    }
  }
  return output;
}

module.exports = Beer;
