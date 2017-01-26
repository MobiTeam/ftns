import React from 'react';

class LogoBlock extends React.Component {
	render () {
		return (
				<div className="col col-xs-12 company-slogan">
					<div className="text-box">
						<span className="company-logo">
			 				<img className="logo-image hidden-xs" src="img/ugra-fit-logo.svg" />
							Ugra-Fit
						</span>
						<div className="company-text">
							Меняйтесь в лучшую сторону вместе с нами!
						</div>
					</div>
				</div>			
			)
	}
}

export default LogoBlock;