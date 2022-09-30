module.exports = {
  content: ["./src/**/*.{html,tsx}"],
  theme: {
    extend: {
      colors: {
        primary: "#FBE7C6",
        secondary: "#B4F8C8",
        tertiary: "#A0E7E5",
        quaternary: "#FFAEBC",
        quinary: "#FFF",
        rich_black: "#0D1821",
      },
      keyframes: {
        wiggle: {
          '0%, 100%': { transform: 'rotate(-2deg)' },
          '50%': { transform: 'rotate(2deg)' },
        }
      },
      animation: {
        wiggle: 'wiggle 1s ease-in-out infinite',
      },
      rotate: {
        '35': '35deg',
        '40' : '40deg',
        '20' : '20deg'
      }
    },
  },
  plugins: [],
}
