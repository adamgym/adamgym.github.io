<?php

	

	import rafSchedule from 'raf-schd';

	$connect = mysql_connect("localhost","root","db_login")

	class Alphabet extends React.Component {

 	 constructor(props) {
    super(props);
    this.state = {
      justClicked: null,
      letters: Array.from({length: 26}, (_, i) => String.fromCharCode(A + i))
    };
 	 }
  handleClick(letter) {
    this.setState({ justClicked: letter });
 	}
  render() {
    return (
      <div>
        Just clicked: {this.state.justClicked}
        <ul>
          {this.state.letters.map(letter =>
            <li key={letter} onClick={() => this.handleClick(letter)}>
              {letter}
            </li>
          )}
        </ul>
      </div>
	    )
	 }
    }


?>