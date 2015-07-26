module.exports = function(input) {
  // year is evenly divisible by 4
  var dBy4 = (input % 4 == 0);
  // year is evenly divisible by 100
  var dBy100 = (input % 100 == 0);
  // year is evenly divisible by 400
  var dBy400 = (input % 400 == 0);

  // leap year if input is evenly divisible by 4 but not by 100 unless also
  // evenly divisible by 400
  return dBy100 ? dBy400 : dBy4;
};
