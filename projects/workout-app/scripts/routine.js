
class Routine {
    constructor(list) {

        this.data = {
            id: list.id || new Date().getTime(),
            arr: list,
            value: 0,
            dateCreated: list.dateCreated || new Date()
        }
    }



};

export default Routine;