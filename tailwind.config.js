module.exports = {
  content: [
    './resources/views/**/*.blade.php',
    './resources/css/**/*.css',
    './resources/js/**/*.js',
  ],
  theme: {
    extend: {
      colors: {
        primary: "#E76A35",
        secondary: "#C4E1A4",
        miscellanous: "#ECECD5",
        miscell: "#C4A77B",
        accentTextLight: "#F8F8FF",
        accentTextDark: "#0B0B0B",
      },
      fontFamily: {
        opensans: `"Open Sans", sans-serif`,
        playfair: `"Playfair Display", serif`,
      },
      lineHeight: {
        "custom-30": "30px",
      },
      keyframes: {
        scroll: {
          '0%': { transform: 'translateX(100%)' },
          '100%': { transform: 'translateX(-100%)' },
        },
      },
      animation: {
        scroll: 'scroll 15s linear infinite',
      },
    },
  },
  plugins: [],
};
