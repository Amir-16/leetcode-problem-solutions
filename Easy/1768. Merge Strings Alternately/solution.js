function mergeAlternately(word1, word2) {
    // To store the final string
    let result = "";
    // For every index in the strings
    for (let i = 0; i < word1.length || i < word2.length; i++) {

        // First choose the ith character of the
        // first string if it exists
        if (i < word1.length)
        {
            result += word1.charAt(i);

        }
        if (i < word2.length)
        {
            result += word2.charAt(i);
        }
        
    }

    return result;
}


let word1 = "abc";
let word2 = "pqr";
console.log(mergeAlternately(word1, word2));
