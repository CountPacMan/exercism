var Hamming = {};

Hamming.compute = function( input1, input2 ) {
  if ( input1.length != input2.length ) {
    throw 'DNA strands must be of equal length.';
  }
  var count = 0;

  for ( var i = 0; i < input1.length; i++ ) {
    if ( input1[i] != input2[i] ) {
      count++;
    }
  }

  return count;
}

module.exports = Hamming;
