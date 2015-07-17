module.exports = function() {
  var list = {};
  return {
    roster: function() {
      return list;
    },
    add: function(name, grade) {
      list[grade] ? list[grade].push(name) : list[grade] = [name];
    },
    grade: function(grade) {
      return list[grade] ? list[grade].sort() : [];
    }
  };
};
