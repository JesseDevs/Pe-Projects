class Workout {
    constructor(record) {

        this.data = {
            id: record.id || new Date(),
            content: record.content,
            type: record.type,
            complete: record.complete || false,

            dateCreated: record.dateCreated || new Date(),
        }
    }

    toggleComplete() {
        this.data.complete = !this.data.complete;
    }

    get isComplete() {
        return (this.data.complete) ? "complete" : "";
    }

    render() {
        const { id, content, isComplete } = this.data
        return `
        <li>
            <item-card data-id='${id}' class="${isComplete}">
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
