var words = function(input) {
  var final = {};
  input = input.split(/[\s+]/);
  for ( var i = 0; i < input.length; i++ ) {
    if ( input[i] ) {
      final[ input[i] ] ? final[ input[i] ]++ : final[ input[i] ] = 1;
    }
  }
  return final;
};

module.exports = words;
