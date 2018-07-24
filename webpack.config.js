const path = require(`path`);
const merge = require(`webpack-merge`);
const parts = require(`./webpack.parts`);
const webpack = require(`webpack`);

const ImageminPlugin = require(`imagemin-webpack-plugin`).default;
const imageminJpegRecompress = require(`imagemin-jpeg-recompress`);

const PATHS = {
  src: path.join(__dirname, `src`),
  dist: path.join(__dirname, `dist`)
};

const commonConfig = {
  entry: [
    path.join(PATHS.src, `js/script.js`),
    path.join(PATHS.src, `css/style.css`)
  ],
  output: {
    path: PATHS.dist,
    filename: `js/script.js`
  },
  mode: `development`,
  module: {
    rules: [
      {
        test: /\.(js)$/,
        exclude: /node_modules/,
        use: [
          {
            loader: `babel-loader`
          },
          {
            loader: `eslint-loader`,
            options: {
              fix: true
            }
          }
        ]
      },
      {
        test: /\.(webp|svg|png|jpe?g)$/,
        use: [
          {
            loader: `file-loader`,
            options: {
              context: `./src`,
              name: `[path][name].[ext]`
            }
          },
          {
            loader: `image-webpack-loader`,
            options: {
              bypassOnDebug: true,
              mozjpeg: {
                progressive: true,
                quality: 65
              },
              optipng: {
                enabled: false
              },
              pngquant: {
                quality: `65-90`,
                speed: 4
              },
              gifsicle: {
                interlaced: false
              },
              webp: false,
            }
          }
        ]
      }
    ]
  },
  plugins: [
    new webpack.ProvidePlugin({
      promise: `es6-promise`,
      fetch: `imports-loader?this=>global!exports-loader?global.fetch!whatwg-fetch`
    })
  ]
};

const productionConfig = merge([
  parts.extractCSS(),
  {
    plugins: [
      new ImageminPlugin({
        test: /\.(jpe?g)$/i,
        plugins: [imageminJpegRecompress({})]
      })
    ]
  }
]);

const developmentConfig = merge([
  {
    devServer: {
      overlay: true,
      contentBase: PATHS.src
    }
  },
  parts.loadCSS()
]);

module.exports = () => {
  if (process.env.NODE_ENV === `production`) {
    console.log(`building production`);
    return merge(commonConfig, productionConfig);
  }
  return merge(commonConfig, developmentConfig);
};
