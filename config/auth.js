import sha256 from 'crypto-js/sha256';
import React, { useState } from 'react';
import { useHistory } from 'react-router-dom';
import Cookie from 'universal-cookie';

const cookie = new Cookie();

const Logout = () => {
	cookie.remove('token');
	const history = useHistory();
	history.push('/');
	window.location.reload();
}

export {
	Logout
};