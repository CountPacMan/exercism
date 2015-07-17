module.exports = function() {
  var list = {};
  return {
    roster: function() {
      for (var key in list) {
        list[key] = list[key].sort();
      }
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
