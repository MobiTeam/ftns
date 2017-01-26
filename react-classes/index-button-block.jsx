import React from 'react';
import RegisterButton from './index-register-btn';
import AuthButton from './index-auth-btn';

class IndexButtonBlock extends React.Component {
	render () {
		return (
				<div className="btn-box">
					<RegisterButton />
					<AuthButton />
				</div>
		)
	}
}

export default IndexButtonBlock;