import React from 'react';
import Container from '@material-ui/core/Container';
import './custom.css';

const LoginForm = () => {
	return(
		<Container className="test-bg-black" maxWidth="sm" justify="center">
			<form>
				<div>
					<div>Username</div>
					<input type="text" placeholder="username" />
				</div>
				<div>
					<div>Username</div>
					<input type="text" placeholder="username" />
				</div>
				<div>
					<div>Username</div>
					<input type="text" placeholder="username" />
				</div>
			</form>
		</Container>
	);
}

export default LoginForm;