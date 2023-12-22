import React, { Component } from "react";
import "../js/toggler.js";
import "../css/styles-about.css";

class About extends Component {
  render() {
    return (
      <div>
        <h1 className="display-1">About Us</h1>
        <img
          src={require("../img/company.avif")}
          alt="CAD company meeting"
          className="img-fluid"
        />
        <p id="para">
          The CAD Company was established 1988 as a result of Martial Law.
        </p>
        <button className="btn btn-primary" id="hide_para">
          Hide paragraph
        </button>
      </div>
    );
  }
}

export default About;
