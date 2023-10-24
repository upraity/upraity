var createCounter = function(n) {
    let c = n;
    return function() {
        return c++;
    };
};
