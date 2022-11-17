

// if workouts List is [] start id at 0
// if not continue from last position
// HOW??


class Workout {
    constructor(record) {

        this.data = {
            id: record.id || new Date().getTime(),
            content: record.content,
            type: record.type,
            complete: false,
            value: 0,
            dateCreated: record.dateCreated || new Date()
        }
    }

    toggleComplete() {
        this.data.complete = !this.data.complete;
        this.data.value = 1;
    }

    get isComplete() {
        return (this.data.complete) ? "complete" : "";
    }

    render() {
        const { id, content, type } = this.data
        return `
        <li>
            <item-card data-id='${id}' class="${this.isComplete} ${type}">
                    <h4 class='attention-voice'> ${content.toLowerCase()}</h4>

                <button data-action="remove" class="remove-btn">
                <span class="inner">
                    <span class="label">Remove</span>
                </span>
                </button>
    
                <action-block>
                    <button class='action-link complete-btn' data-action="complete">Complete</button>
                    <button class='action-link edit-btn' data-action="edit">Edit</button>
                </action-block>
    
            </item-card>
        </li>
    `
    }
};

export default Workout;