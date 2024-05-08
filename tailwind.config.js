/** @type {import('tailwindcss').Config} */
module.exports = {
  // content: ['./dist/*.html'],
  // content: ['./dist/**/*.{html,ts}'],
  content: ["./src/**/*.{php,js}"],
  presets: [require("./tailwind.custom.config.js")],
  theme: {
    extend: {},
  },
  plugins: [],
};
