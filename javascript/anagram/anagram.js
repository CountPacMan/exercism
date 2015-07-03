var anagram = function(input) {
  this.word = input;
  this.matches = function(words) {
    if (typeof words === 'string') {
      words = [].slice.apply(arguments);
    }

    var sorted_word = this.word.split('').sort().join();
    var same = [];

    for ( var i = 0; i < words.length; i++ ) {
      if ( sorted_word == words[i].split('').sort().join() ) {
        same.push(words[i]);
      }
    }
    return same;
  }
  return this;
}

module.exports = anagram;
