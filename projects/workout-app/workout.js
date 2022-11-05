class Workout {
    constructor(record) {

        this.data = {
            id: record.id || new Date(),
            content: record.content,
            type: record.type,
            complete: record.complete || false,

            dateCreated: record.dateCreated || new Date(),

            //value: 0; if complete value = 1 then add them up and present a graph.
        }
    }

    toggleComplete() {
        this.data.complete = !this.data.complete;
    }

    get isComplete() {
        return (this.data.complete) ? "complete" : "";
    }

    render() {
        const { id, content } = this.data
        return `
        <li>
            <item-card data-id='${id}' class="${this.isComplete}">
                <h2> ${content}</h2>
    
                <action-block>
                    <button data-action="remove" >Remove</button>
                    <button data-action="complete">Complete</button>
                </action-block>
    
            </item-card>
        </li>
    `
    }
};

export {
    Workout
}
