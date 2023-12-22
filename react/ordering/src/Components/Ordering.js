import React, { Component } from "react";
import "../js/order.js";

class Ordering extends Component {
  render() {
    return (
      <>
        <div class="container-fluid">
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" href="#">
                  Order
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  About
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  Careers
                </a>
              </li>
            </ul>
            <form class="d-flex">
              <input
                class="form-control me-2"
                type="search"
                placeholder="Search"
              />
              <button class="btn btn-outline-success" type="submit">
                Search
              </button>
            </form>
          </div>
        </div>
        <div class="container">
          <h1 class="display-1">Order</h1>
          <div class="row mb-3">
            <div class="col-lg-1">
              <img
                src={require("../img/burger.png")}
                alt="burger"
                className="img-fluid"
              />
              <p>Burger - ₱60.00</p>
            </div>
            <div class="col-lg-1">
              <img
                src={require("../img/steak.png")}
                alt="steak"
                className="img-fluid"
              />
              <p>Steak - ₱80.00</p>
            </div>
            <div class="col-lg-1">
              <img
                src={require("../img/fries.png")}
                alt="fries"
                className="img-fluid"
              />
              <p>Fries - ₱50.00</p>
            </div>
            <div class="col-lg-1">
              <img
                src={require("../img/salad.png")}
                alt="salad"
                className="img-fluid"
              />
              <p>Salad - ₱70.00</p>
            </div>
            <div class="col-lg-1">
              <img
                src={require("../img/sprite.jpg")}
                alt="sprite"
                className="img-fluid"
              />
              <p>Sprite - ₱25.00</p>
            </div>
            <div class="col-lg-1">
              <img
                src={require("../img/icecream.png")}
                alt="ice cream"
                className="img-fluid"
              />
              <p>Ice Cream - ₱25.00</p>
            </div>
            <div class="offset-1 col-lg-4">
              <form id="food-order">
                <div class="form-group">
                  <label>Item: </label>
                  <select name="food" class="form-control" id="food-select">
                    <option selected disabled value="burger">
                      Select one
                    </option>
                    <option value="burger">Burger</option>
                    <option value="steak">Steak</option>
                    <option value="fries">Fries</option>
                    <option value="salad">Salad</option>
                    <option value="sprite">Sprite</option>
                    <option value="icecream">Ice Cream</option>
                  </select>
                  <label>Amount: </label>
                  <input
                    type="number"
                    class="form-control mb-2"
                    id="food-amount"
                    min="1"
                    max="9"
                    placeholder="0"
                  />
                </div>
                <input type="submit" class="btn btn-primary" value="Order!" />
              </form>
            </div>
          </div>
          <div class="col-lg-12">
            <table class="table" id="food-table">
              <tr>
                <th>Item</th>
                <th>Amount</th>
                <th>Price</th>
              </tr>
              <tbody id="food-table-list"></tbody>
              <tr>
                <th>Total</th>
                <td></td>
                <td>
                  ₱<span id="food-table-total">0</span>
                </td>
              </tr>
            </table>
          </div>
          <div class="col-lg-12 mb-5">
            <h5>Sauce</h5>
            <input
              type="checkbox"
              class="form-check-input sauce"
              id="sauce1"
              name="vehicle1"
              value="buffalo"
            />
            <label for="sauce1"> Buffalo </label>
            <input
              type="checkbox"
              class="form-check-input sauce"
              id="sauce2"
              name="sauce2"
              value="gravy"
            />
            <label for="sauce2"> Gravy </label>
            <input
              type="checkbox"
              class="form-check-input sauce"
              id="sauce3"
              name="sauce3"
              value="sweet"
            />
            <label for="sauce3"> Sweet and Spicy </label>
            <input
              type="checkbox"
              class="form-check-input sauce"
              id="sauce4"
              name="sauce4"
              value="bbq"
            />
            <label for="sauce4"> Barbeque </label>
            <input type="checkbox" class="form-check-input" id="get_all" />
            <label for="get_all"> Get All! </label>
          </div>
        </div>
      </>
    );
  }
}

export default Ordering;
