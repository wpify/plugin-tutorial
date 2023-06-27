const defaultConfig = require('@wordpress/scripts/config/webpack.config');

module.exports = {
  ...defaultConfig,
  entry: {
    'plugin-tutorial': [
      './assets/scripts/plugin-tutorial.js',
      './assets/styles/plugin-tutorial.scss',
    ],
  },
};
