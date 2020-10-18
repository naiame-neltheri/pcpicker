import styled from 'styled-components';
import {
	space,
	color,
	typography,
} from 'styled-system';

const WordWrapper = styled('div')(
	{
		'&:after' : {
			transform: "scaleX(0)",
			transformOrigin: "100% 50%",
			transition: "transform 3s eas-in-out",
		},
		'&:hover' : {
			borderBottom: "1px solid black",
			borderRadius: "1.5px",
		},
	}
	,
	typography,
	color,
	space,
)

// const WordWrapper = styled.div`
// 	&:hover {
// 		background-color: black;
// 	}
// 	${typography}
// 	${color}
// 	${space}
// `

export default WordWrapper;