module.exports = {
  mode: 'jit',
  purge: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    fontFamily: {
      'brand': ['Aref Ruqaa', 'serif'],
      "brand-lowercase": ['Comfortaa', 'cursive'],
     },
    extend: {},
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
