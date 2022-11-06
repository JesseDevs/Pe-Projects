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

            <item-card data-id='${id}' class="${this.isComplete}">
                <h4 class='attention-voice'> ${content.toLowerCase()}</h4>

                <button data-action="remove" class="remove-btn">
                <span class="inner">
                    <span class="label">Remove</span>
                </span>
                </button>
    
                <action-block>
                    <button data-action="complete">Complete</button>
                </action-block>
    
            </item-card>

    `
    }
};

export {
    Workout
}
