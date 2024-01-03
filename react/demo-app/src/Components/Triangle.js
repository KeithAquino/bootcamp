import { Component } from "react";

class Triangle extends Component {
  constructor(props) {
    super(props);
    this.state = {
      base: 0,
      height: 0,
      area: 0,
    };
  }

  solveArea = (event) => {
    event.preventDefault();
    let b = event.target.base.value;
    let h = event.target.height.value;
    let c = event.target.popup.checked;
    let a = (b * h) / 2;
    this.setState(() => {
      return {
        base: b,
        height: h,
        area: a,
      };
    });
    if (c) {
      alert(a);
    }
  };

  render() {
    return (
      <>
        <h1>Triangle Area Solver</h1>
        <form onSubmit={this.solveArea}>
          <label>Base: </label>
          <input type="number" name="base" class="form-text" />
          <br />
          <label>Height: </label>
          <input type="number" name="height" class="form-text" />
          <br />
          <input type="checkbox" name="popup" />
          Display as popup?
          <br />
          <input type="submit" class="btn btn-primary" />
        </form>
        <div>
          <h2>Results</h2>
          <p>Base: {this.state.base}</p>
          <p>Height: {this.state.height}</p>
          <p>Area: {this.state.area}</p>
        </div>
      </>
    );
  }
}

export default Triangle;
