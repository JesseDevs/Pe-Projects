
class Routine {
    constructor(list) {

        this.data = {
            id: list.id || new Date().getTime(),
            content: list.content,
            value: 0,
            dateCreated: list.dateCreated || new Date()
        }
    }

};

export default Routine;