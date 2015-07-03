//
// This is only a SKELETON file for the "Bob" exercise. It's been provided as a
// convenience to get you started writing code faster.
//

var Bob = function() {};

Bob.prototype.hey = function(input) {
//
// YOUR CODE GOES HERE
//
  var last = input[input.length - 1];

  if ( input === input.toUpperCase() && ( last === '!' || ( last === '?' && isNaN(input[0]) ))) {
    return 'Whoa, chill out!';
  } else if ( last === '?' ) {
    return 'Sure.';
  } else if ( input.trim().length === 0 ) {
    return 'Fine. Be that way!';
  } else {
    return 'Whatever.';
  }
};

module.exports = Bob;
