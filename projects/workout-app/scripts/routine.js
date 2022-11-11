var uniqueId = (() => {
    var counter = 0

    return function () {
        return counter++
    }
})()

class Routine {
    constructor(list) {


    }

};

export default Routine;