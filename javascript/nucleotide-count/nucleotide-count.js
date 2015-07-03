var dna = function() {
  var strand = arguments[0] || '';

  if (/[^ATCG]/.test(strand)) {
    throw "Exception: DNA strand invalid";
  }

  return {
    count: function(countinput) {
      var total = 0;
      for ( var i = 0; i < strand.length; i++ ) {
        if (countinput === strand[i]) {
          total++;
        }
      }
      return total;
    },
    histogram: function() {
      var total = {A: 0, T: 0, C: 0, G: 0};
      for ( var i = 0; i < strand.length; i++ ) {
        total[ strand[i] ]++;
      }
      return total;
    }
  }
}


module.exports = dna;
