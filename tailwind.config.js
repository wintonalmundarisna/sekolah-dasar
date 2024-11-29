/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        extend: {
            container: {
                center: true,
                padding: "1rem",
            },
            fontFamily: {
                outfit: ["Outfit", "sans-serif"],
                titanone: ["TitanOne", "sans-serif"],
            },
            colors: {
                colorprimarywhite: "#FFFFFF",
                colorprimaryorange: "#E74C25",
                colorprimaryblack: "#0A303A",
                colorprimarytosca: "#167287",
                colorsecondorangemuda: "#FFDBD2",
                colorsecondtoscamuda: "#DFF8FF",
                colorsecondyellowtua: "#F68F29",
                colorsecondyellowmuda: "#FFEDDB",
                colorsecondgreen: "#5E9F5A",
                colorsecondgreenmuda: "#E6F9E5",
                colorsecondpurple: "#5872E0",
                colorsecondpurplemuda: "#F3DBFF",
                colorfooter: "#F3F0E9",
            },
        },
    },
    plugins: [require("daisyui"), require("flowbite/plugin")],
};

