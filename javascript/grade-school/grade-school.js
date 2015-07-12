var School = function() {
  var list = {};
  this.roster = function() {
    return list;
  };
  this.add = function(name, grade) {
    list[grade] ? list[grade].push(name) : list[grade] = [name];
  };
};

module.exports = School;
