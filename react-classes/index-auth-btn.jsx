import React from 'react';

class AuthButton extends React.Component {
	clickHandler () {
		alert('Кнопка авторизации');
	}
	render () {
		return (
				<button className="btn btn-primary login-btn" onClick={this.clickHandler}>
					<i className="fa fa-sign-in" aria-hidden="true"></i>
					У меня уже есть логин
				</button>
			)
	}
}

export default AuthButton;