import { Component } from "react";

class Counter extends Component {
  constructor(props) {
    super(props);
    this.state = {
      entry_count: 0,
      exit_count: 0,
    };
  }

  updateEntry() {
    this.setState(() => {
      return {
        entry_count: this.state.entry_count + 1,
      };
    });
  }

  updateExit() {
    this.setState(() => {
      return {
        entry_count: this.state.entry_count - 1,
        exit_count: this.state.exit_count + 1,
      };
    });
  }

  render() {
    return (
      <>
        <h1>Counter</h1>
        <div>
          <p>
            <strong>Entries: </strong> <span>{this.state.entry_count}</span>
          </p>
          <button class="btn btn-success" onClick={() => this.updateEntry()}>
            Add entry
          </button>
        </div>
        <div class="mt-3">
          <p>
            <strong>Exits: </strong> <span>{this.state.exit_count}</span>
          </p>
          <button class="btn btn-danger" onClick={() => this.updateExit()}>
            Add exit
          </button>
        </div>
      </>
    );
  }
}

export default Counter;
