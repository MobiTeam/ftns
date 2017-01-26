import React from 'react';
import IndexButtonBlock from './index-button-block';

class AttentionBlock extends React.Component {
	render () {
		return (
				<div className="col col-xs-12 atention-box">
					<div className="info-text">
						<h4>Всего 3 шага отделяют Вас от заветной цели!</h4>
						Хватит искать себе оправдания! Просто:
						<ul id="list-items">
							<li>Зарегистрируйтесь</li>
							<li>Запишитесь на занятия</li>
							<li>Начните тренироваться</li>
						</ul>
					</div>
					<IndexButtonBlock />
				</div>
			)
	}
}

export default AttentionBlock; 