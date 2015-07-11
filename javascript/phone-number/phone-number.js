var PhoneNumber = function(input) {
  // clean
  input = clean(input);
  // validate
  input = validate(input);

  this.number = function() {
    return input;
  };

  this.areaCode = function() {
    return input.slice(0, 3);
  }

  this.toString = function() {
    var output = '(' + this.areaCode() + ') ' + input.slice(3, 6) + '-';
    output += input.slice(6);
    return output;
  }
};

function clean(input) {
  input = input.replace(/\D/g, '');
  // remove first 1 if 11 digits
  if (input.length === 11 && input[0] === '1') {
    input = input.slice(1);
  }
  return input;
}

function validate(input) {
  if (input.length > 10 || input.length < 10) {
    input = '0000000000';
  }
  return input;
}

module.exports = PhoneNumber;
