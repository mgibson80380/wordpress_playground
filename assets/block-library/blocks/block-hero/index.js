import { registerBlockType } from '@wordpress/blocks';
import save from './save';
import edit from './edit';

registerBlockType('mg-blocks/hero', {
    title: 'Hero', // The title of block in editor.
    icon: 'align-full-width', // The icon of block in editor.
    category: 'mg-blocks', // The category of block in editor.
    // Custom Attributes
    attributes: {
        title: {
            type: 'string',
            source: 'html',
            selector: 'h1',
        },
        description: {
            type: 'string',
            source: 'html',
            selector: 'p',
        },
        imageMobileURL: {
            type: 'string',
        },
        imageDesktopURL: {
            type: 'string',
        },
    },
    edit,
    save,
});