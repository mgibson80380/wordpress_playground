const defaultConfig = require("@wordpress/scripts/config/webpack.config");
const path = require('path');

module.exports = {
	...defaultConfig,
	entry: {
		'block-library': './assets/block-library/block-library.js'
	},
	output: {
		path: path.join(__dirname, './dist/js'),
		filename: '[name].js'
	}
}