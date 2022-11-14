var uniqueId = (() => {
    var counter = 0

    return function () {
        return counter++
    }
})()

class Routine {
    constructor(list) {

        this.data = {
            id: list.id || uniqueId(),
            content: [list],
            value: 0,
            dateCreated: list.dateCreated || new Date()
        }
    }

};

export default Routine;