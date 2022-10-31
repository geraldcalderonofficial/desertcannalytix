var webpack = require('webpack');
	path = require('path');

const parentDir = path.join(__dirname, '../src-js');

module.exports = {
	mode: 'development',
	entry: ['idempotent-babel-polyfill', path.join(parentDir, 'index.tsx')],
	output: {
		path: parentDir + '/dist',
		filename: 'bundle.js'
	},
	devServer: {
		contentBase: parentDir,
		historyApiFallback: true,
		headers: {
			'Access-Control-Allow-Origin': '*'
		}
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
                    babelrc: true,
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