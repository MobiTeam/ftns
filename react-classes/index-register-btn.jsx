import React from 'react';

class RegisterButton extends React.Component {
	clickHandler () {
		alert('Кнопка регистрации');
	}
	render () {
		return (
				<button className="btn btn-success register-btn" onClick={this.clickHandler}> 
					<i className="fa fa-user-plus" aria-hidden="true"></i>
					Зарегистрироваться
				</button>
		)
	}
}

export default RegisterButton;