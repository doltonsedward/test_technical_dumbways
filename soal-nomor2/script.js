// solved
function arrMulti(arr) {
    let output = [];
    arr.forEach(function(part, i, theArr) {
        theArr[i] = [i+1, i+1, i+1];
        output = theArr;
    })
    
    console.log(output);
}

arrMulti([
    [1,2,3],
    [1,2,3],
    [1,2,3],
    ]);