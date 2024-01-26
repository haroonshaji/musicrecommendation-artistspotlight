// Load dataset
var data = [
    [1, 1, 1],
    [1, 0, 1],
    [1, 0, 0],
  ];
  
  // Define function to recommend songs
  function recommendSongs(userIndex) {
    // Calculate similarities between users
    function getSimilarities(userIndex, data) {
      var similarities = [];
      for (var i = 0; i < data.length; i++) {
        if (i != userIndex) {
          var similarity = 0;
          for (var j = 0; j < data[i].length; j++) {
            similarity += Math.pow(data[userIndex][j] - data[i][j], 2);
          }
          similarities.push({ index: i, similarity: Math.sqrt(similarity) });
        }
      }
      return similarities;
    }
  
    // Base case
    if (userIndex < 0 || userIndex >= data.length) {
      console.log('Invalid user index.');
      return;
    }
  
    // Get similarities and sort by similarity factor
    var similarities = getSimilarities(userIndex, data);
    similarities.sort(function(a, b) {
      return a.similarity - b.similarity;
    });
  
    // Print recommended songs
    console.log('Recommended songs for user ' + userIndex + ':');
    for (var i = 0; i < similarities.length && i < 3; i++) {
      console.log('Song ' + similarities[i].index);
    }
  }
  
  // Test the function
  recommendSongs(0);
  