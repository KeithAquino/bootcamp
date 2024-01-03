import { Component } from "react";

class Election extends Component {
  constructor(props) {
    super(props);
    this.state = {
      votes_mayor: [0, 0],
      votes_vice: [0, 0],
    };
  }

  getMayorVote = (event) => {
    let vote_mayor = event.target.candidate_mayor.value;
    vote_mayor = Number(vote_mayor);
    let vm = this.state.votes_mayor;
    vm[vote_mayor] += 1;
    this.setState(() => {
      return {
        votes_mayor: vm,
      };
    });
  };

  getViceVote = (event) => {
    let vote_vice = event.target.candidate_vice.value;
    vote_vice = Number(vote_vice);
    let vm = this.state.votes_vice;
    vm[vote_vice] += 1;
    this.setState({ votes_vice: vm });
  };

  submitVotes = (event) => {
    event.preventDefault();
    this.getMayorVote(event);
    this.getViceVote(event);
  };

  render = () => {
    return (
      <>
        <h1>Voting Form</h1>
        <form onSubmit={this.submitVotes}>
          <h2>Mayor</h2>
          <input type="radio" name="candidate_mayor" value="0" />
          <label>Dina Pili</label>
          <br />
          <input type="radio" name="candidate_mayor" value="1" />
          <label>Lucky Chan</label>
          <h2>Vice President</h2>
          <input type="radio" name="candidate_vice" value="0" />
          <label>Pat Tumbakita</label>
          <br />
          <input type="radio" name="candidate_vice" value="1" />
          <label>Ben Eko</label>
          <br />
          <input type="submit" class="btn btn-primary" />
          <br />
        </form>
        <h1>Vote Record</h1>
        <table class="table">
          <tr>
            <th>Name</th>
            <th>Position</th>
            <th>Total Votes</th>
          </tr>
          <tr>
            <td>Dina Pili</td>
            <td>Mayor</td>
            <td>{this.state.votes_mayor[0]}</td>
          </tr>
          <tr>
            <td>Lucky Chan</td>
            <td>Mayor</td>
            <td>{this.state.votes_mayor[1]}</td>
          </tr>
          <tr>
            <td>Pat Tumbakita</td>
            <td>Vice President</td>
            <td>{this.state.votes_vice[0]}</td>
          </tr>
          <tr>
            <td>Ben Eko</td>
            <td>Vice President</td>
            <td>{this.state.votes_vice[1]}</td>
          </tr>
        </table>
      </>
    );
  };
}

export default Election;
