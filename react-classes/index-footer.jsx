import React from 'react';

class IndexFooter extends React.Component {	
	render () {
		const year = new Date().getFullYear();
		return (
				<div className="row footer">
					<div className="col col-xs-12">
						<a className="site-link" href="/">Ugra-Fit</a> - {year} год
					</div>
				</div>
			)
	}
}

export default IndexFooter;

