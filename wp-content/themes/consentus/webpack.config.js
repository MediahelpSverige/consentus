module.exports = {
    entry: ['bootstrap-loader','./src/app.js'],
    output: {
        path: './bin',
        filename: 'app.bundle.js'
    },
    module: {
      loaders: [
        {
          test: /\.js$/,
          exclude: /node_modules/,
          loader: 'babel-loader?sourceMap'
        },
        {
          test: /\.scss$/,
          loaders:['style-loader', 'css-loader?sourceMap', 'sass-loader?sourceMap']
        },
        {
          test: /\.css$/,
          loaders:['style-loader', 'css-loader?sourceMap', 'sass-loader?sourceMap']
        },

      {
        test: /\.(jpg|png|woff|woff2|eot|ttf|svg|otf)$/,
        loader: 'url-loader?limit=100000'
      },

      ]
    }
}
