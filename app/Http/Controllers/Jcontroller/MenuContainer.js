import styled from 'styled-components';
import {
	space,
	color,
	flexbox,
} from 'styled-system';

const MenuContainer = styled('div')(
	{
		width: "100%",
		margin: 0,
		padding: 0,
		display: "flex",
		flexDirection: "row",
		justifyContent: "center",
		alignItems: "center",
	},
	space,
	color,
	flexbox,
)

export default MenuContainer;