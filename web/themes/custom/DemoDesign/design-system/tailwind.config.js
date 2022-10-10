const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
  content: [],
  theme: {
    extend: {
      colors: {
        brand: '#23529F',
        secondary: '#E22B4B',
        white: '#FFFFFF',
        background: '#f3f3f0',
        card: '#E4EAEB'
      }
    },
    fontFamily: {
      sans: ['geomanist', ...defaultTheme.fontFamily.sans]
    }
  },
  plugins: []
}
