import defaultTheme from "tailwindcss/defaultTheme";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: "#011766",
                secondary: "#007edd",
                dark: "#0e0e10",
                danger: "#DB2B39 ",
                success: {
                    light: "#05C78D",
                    DEFAULT: "#04A777",
                },
                warning: {
                    light: "#FFC247",
                    DEFAULT: "#FFB41F",
                },
                gray: {
                    light: "#e2e2e2",
                    DEFAULT: "#a5a5a5",
                },
                white: {
                    DEFAULT: "#fbfbfb",
                },
            },
        },
    },
    plugins: [],
};
