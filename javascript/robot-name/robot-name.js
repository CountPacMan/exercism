var ALPHA = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';

module.exports = function() {
  this.robotName = getName();

  function getName() {
    var output = '';
    // generate 2 letters
    for (var i = 1; i <= 2; i++) {
      output += ALPHA[Math.floor(Math.random() * ALPHA.length)];
    }
    // generate 3 digits
    for (var i = 1; i <= 3; i++) {
      output += Math.floor(Math.random() * 10);
    }
    return output;
  };

  return {
    name: this.robotName,
    reset: function() {
      this.name = getName();
    }
  };
};
