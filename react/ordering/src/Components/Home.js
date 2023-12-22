import React, { Component } from "react";
import "../css/home.css";

class Home extends Component {
  render() {
    return (
      <div className="text-center" id="home_padding">
        <p className="display-4">
          <strong>Welcome to Oso Resort</strong>
        </p>
        <a href="/order">
          <button className="btn btn-primary">Order now!</button>
        </a>
      </div>
    );
  }
}

export default Home;
