var toRna = function(input) {
  var rna = {C: 'G', G: 'C', A: 'U', T: 'A'};
  var output = '';
  input = input.split('');

  input.forEach(function(dna) {
    output += rna[dna];
  });

  return output;
}

module.exports = toRna;
