/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        fontFamily: {
            sans: ["Poppins"],
        },
        extend: {},
    },
    plugins: [
        require("flowbite/plugin")({
            charts: true,
        }),
    ],
};
