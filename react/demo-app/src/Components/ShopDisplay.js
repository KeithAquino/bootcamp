import { Component } from "react";

class ShopDisplay extends Component {
  constructor(props) {
    super(props);
  }

  render() {
    return (
      <table class="table">
        <thead>
          <tr>
            <th>Name</th>
            <th>Price</th>
          </tr>
        </thead>
        <tbody>
          {this.props.items.map((item) => (
            <tr>
              <td>{item.item_name}</td>
              <td>{item.price}</td>
            </tr>
          ))}
        </tbody>
      </table>
    );
  }
}

export default ShopDisplay;
