/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./assets/**/*.js", "./templates/**/*.html.twig"],
  theme: {
    test: {
      "ok": "#ff0000"
    },
    extend: {
      colors: {
        "regal-grey": "#F5F7F7",
        "other-grey": "#e3e7e7",
        "regal-orange": "#FF5E00",
        "regal-orange-darker": "#da5000",
        "regal-orange-lighter": "#ff7a2e",
      },
      backgroundImage: {
        'banner-homepage': "url('/public/images/homepage-banner.png')",
      }
    },
  },
  plugins: [],
};
