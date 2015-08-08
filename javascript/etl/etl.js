module.exports = function(input) {
  var output = {};
  for (var key in input) {
    for (var i in input[key]) {
      var value = input[key][i].toLowerCase();
      output[value] = parseInt(key);
    }
  }
  return output;
};
