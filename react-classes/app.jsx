import React from 'react';
import ReactDOM from 'react-dom';
import LogoBlock from './index-logo-block';
import AttentionBlock from './index-attention-block';
import IndexFooter from './index-footer';

class App extends React.Component {
	constructor (props) {
		super(props);
		this.state = {
			showModal : false
		}
	}
	render () {
		return (
				<div>
					<div className="row">
						<LogoBlock />
					</div>
					<div className="row">
						<AttentionBlock />
					</div>
					<hr />
					<IndexFooter />
				</div>
			)
	}
}

ReactDOM.render(
	<App />,
	document.getElementById('app')
)

