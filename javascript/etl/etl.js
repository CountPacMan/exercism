module.exports = function(input) {
  var output = {};
  for (var key in input) {
    console.log('key = ' + key);
    for (var i in input[key]) {
      var value = input[key][i].toLowerCase();
      console.log('value = ' + value);
      output[value] = parseInt(key);
    }
  }
  return output;
};
