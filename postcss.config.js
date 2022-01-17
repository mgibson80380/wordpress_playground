module.exports = {
    plugins: [
        {
            postcssPlugin: 'grouped',
            Once(root, { result }) {
              return postcss([
                require('postcss-import'),
                require('postcss-mixins'),
                require('postcss-simple-vars'),
              ]).process(root, result.opts)
            },
          },
          require('tailwindcss'),
          require('postcss-nested'),
          require('autoprefixer'),
    ]
}