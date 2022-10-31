var webpack = require('webpack'),
	path = require('path');
	fs = require('fs');

var parentDir = path.join(__dirname, '../src-js');

module.exports = {
	mode: 'production',
	target: 'web',
	entry: {
		wizard: ['idempotent-babel-polyfill', path.join(parentDir, 'index.tsx')]
	},
	output: {
		path: path.join( __dirname, '../assets/js/' ),
		filename: '[name].bundle.js'
	},
	resolve: {
	  extensions: ['.js', '.jsx', '.ts', '.tsx'],
	  // Fix webpack's default behavior to not load packages with jsnext:main module
	  // https://github.com/Microsoft/TypeScript/issues/11677
	  mainFields: ['main']
	},
	module: {
		rules: [
			{
			  test: /\.(ts|tsx)$/,
			  use: [
				{
				  loader: 'babel-loader',
				  options: {
					babelrc: false,
					plugins: ['react-hot-loader/babel']
				  }
				},
				'awesome-typescript-loader'
			  ]
			},
			{
				test: /\.scss$/,
				use: [
					"style-loader", // creates style nodes from JS strings
					"css-loader", // translates CSS into CommonJS
					"sass-loader" // compiles Sass to CSS
				]
			}
		]
	}
};
