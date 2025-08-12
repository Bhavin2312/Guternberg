/**
 * WordPress dependencies
 */
import { __ } from '@wordpress/i18n';
import { useBlockProps } from '@wordpress/block-editor';
import { useState } from '@wordpress/element';

import './editor.scss';

export default function Edit() {
	// Local state for input value
	const [ text, setText ] = useState('');

	// Input change handler
	const handleChange = (event) => {
		setText(event.target.value);
	};

	return (
		
		<div { ...useBlockProps() }>
			<input
				type="text"
				value={ text }
				onChange={ handleChange }
				placeholder={ __( 'Enter your todo...', 'todo-list' ) }
				style={{
					padding: '8px',
					fontSize: '16px',
					width: '100%',
					border: '1px solid #ccc',
					borderRadius: '4px'
				}}
			/>
		</div>
	);
}
